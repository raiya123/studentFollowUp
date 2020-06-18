@extends('layouts.app')

@section('content')
<div class="container">
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">FollowUP</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Out Of FollowUp</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
        <h4 class="text-center text-success">Views All Students In FollowUP</h4> <br>
        <table class="table table-bordered">
            <a href="{{route('students.create')}}" class="btn btn-info">Add Student</a> <br><br>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Class</th>
                    <th>Description</th>
                    <th>Picture</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($student as $item)
                    <tr>
                        <td>{{ $item->id}}</td>
                        <td>{{ $item->firstName}}</td>
                        <td>{{ $item->lastName}}</td>
                        <td>{{ $item->class}}</td>
                        <td>{{ $item->description}}</td>
                        <td>{{ $item->picture}}</td>
                        <td>
                            <a href="#">Edit</a>
                            <a href="#">Delete</a>
                        </td>
                    </tr>
                 @endforeach 
            </tbody>
        </table>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
    </div>
  </div>
</div>
@endsection