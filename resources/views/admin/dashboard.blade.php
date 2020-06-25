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
            <a href="{{route('students.create')}}" class="btn btn-info">Add Student</a><br><br>
            <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Class</th>
                    <th>Picture</th>
                    <th>Action</th>
                </tr>
            </thead>   
            <tbody>
                @foreach ($student as $item)
                @if ($item->activeFollowup == 1)
                    <tr>
                        <td>{{ $item->firstName}}</td>
                        <td>{{ $item->lastName}}</td>
                        <td>{{ $item->class}}</td>
                        <td>
                          <img class="mx-auto d-block" src="{{asset('image/'.$item->picture)}}" style="width: 50px;, height:50px;">
                        </td>
                        <td>
                          <a href="{{route('students.edit',$item->id)}}" class="fas fa-edit" style='font-size:15px'></a>
                          <a href="{{route('students.show',$item->id)}}" class="fa fa-eye" style='font-size:15px'></a>
                          <a href="{{route('outOfFollowup',$item->id)}}"><span class="material-icons text-danger" style='font-size:17px'>person_add_disabled</span></a>  
                        </td>
                    </tr>
                    @endif
                 @endforeach 
            </tbody>
        </table>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <h4 class="text-center text-success">Views All Students Out Of FollowUP</h4> <br>
      <table class="table table-bordered">
        <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Class</th>
                <th>Picture</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($student as $item)
            @if ($item->activeFollowup == 0)
                <tr>
                    <td>{{ $item->firstName}}</td>
                    <td>{{ $item->lastName}}</td>
                    <td>{{ $item->class}}</td>
                    <td>
                      <img class="mx-auto d-block" src="{{asset('image/'.$item->picture)}}" style="width: 50px;, height:50px;">
                    </td>
                    <td>
                      <a href="{{route('inFollowup',$item->id)}}"><span class="material-icons text-danger" style='font-size:17px'>person_add_disabled</span></a>  
                    </td>
                </tr>
                @endif
             @endforeach 
        </tbody>
       
    </table>
    </div>
  </div>
</div>
@endsection