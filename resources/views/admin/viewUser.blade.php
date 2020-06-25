@extends('layouts.app')

@section('content')
<div class="container">
        <h4 class="text-center text-success">Information Of Users</h4> <br>
        <table class="table table-bordered">
          <a href="{{route('users.create')}}" class="btn btn-success">Add User</a>
          <a href="{{route('admin.dashboard')}}" class="btn btn-danger float-right">Go Back</a> <br><br>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Role</th>
                    <th>E-Mail</th>
                    <th>Position</th> 
                    <th>Password</th> 
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $item)
                <tr>
                    <td>{{ $item->id}}</td>
                    <td>{{ $item->firstName}}</td>
                    <td>{{ $item->lastName}}</td>
                    <td>
                        @if ($item->role == 1)
                        admin
                      @endif
                      @if ($item->role == 0)
                        normal
                      @endif
                    </td>
                    <td>{{ $item->email}}</td>
                    <td>
                      @if ($item->position_id == 1)
                      Manager
                    @endif
                    @if ($item->position_id == 2)
                      SNA Traner
                    @endif
                    @if ($item->position_id == 3)
                    WEP Traner
                    @endif
                    @if ($item->position_id == 4)
                    Educator
                    @endif
                  </td>
                    <td>{{ $item->password}}</td>
                    <td>
                      <a href="{{route('users.edit',$item->id)}}" class=" btn fas fa-edit" style='font-size:15px'></a>
                      <form action="{{route('users.destroy',$item->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure to delete?')" class="btn fa fa-trash" style='font-size:15px'></button>
                    </form>
                    </td>
                </tr>
             @endforeach 
            </tbody>
        </table>
    </div>
@endsection