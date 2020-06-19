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
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Class</th>
                    <th>Status</th>
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
                          <td>
                            @if ($item->activeFollowup == 0)
                            Out Of Followup
                            @endif
                            @if ($item->activeFollowup == 1)
                            Follow up
                          @endif
                          </td>
                          <td>
                            <img class="mx-auto d-block" src="{{asset('image/'.$item->picture)}}" style="width: 50px;, height:50px;">
                          </td>
                          <td>
                              <a href="#">view</a>
                          </td>
                      </tr>
                   @endforeach 
            </tbody>
        </table>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <h4 class="text-center text-success">Views All Students Out Of FollowUP</h4> <br>
    </div>
  </div>
</div>
@endsection