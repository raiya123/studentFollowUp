@extends('layouts.app')

@section('content')
  <div class="container">
    <a href="{{route('admin.dashboard')}}" class="btn btn-warning">Go Back</a> <br><br>
    <h4 class="text-center text-success">View Details Information of Student</h4><br>
    <div class="row">
      <div class="col-1"></div>
      <div class="col-10">
        <div class="text-center"> <img src="{{asset('image/'.$student->picture)}}" width="160px" class="rounded" height="130px" /></div>
  <br>
  <br>
  <br>
        <table class="table table-bordered">
          <tr>
            <th>ID</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Class</th>
            <th>Description</th>
            <th>Tutor</th>
            <th>Status</th>
            <th>User Name</th>
          </tr>
          <tr>
            <td>{{ $student->id}}</td>
            <td>{{ $student->firstName}}</td>
            <td>{{ $student->lastName}}</td>
            <td>{{ $student->class}}</td>
            <td>{{ $student->description}}</td>
            <td>{{ $student->tutor}}</td>
            <td>
              @if ($student->activeFollowup == 0)
                Out Of Followup
              @endif
              @if ($student->activeFollowup == 1)
                Follow up
              @endif
            </td>
             <td>{{ $student->user->firstName}}</td>
          </tr>
        </table>
        <br>
        <br>

        <div class="container">
          <form action="{{route('addComments',$student->id)}}" method="POST">
            @csrf
              <textarea name="comment" class="form-control"></textarea><br>
              <button class="btn btn-success" type="submit">Post</button>
          </form> <br><br>
            <table class="table table-stripped">
              <thead>
                <tr>
                  <th>Comments</th>
                  <th>Comments From User Name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($student->comments as $item)
                      <tr>
                        <td>{{$item->comment}}</td>
                      <td>{{$item->user->firstName}}</td>
                        <td>
                          <button type="button" class="btn fas fa-edit" style='font-size:15px' data-toggle="modal" data-target="#myModal{{$item->id}}"></button>
                          <!-- Modal -->
                          <div class="modal fade" id="myModal{{$item->id}}" role="dialog">
                            <div class="modal-dialog">
                            
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header bg bg-primary">
                                    <h4 class="modal-title" style="margin-left:180px;color:white">Edit Comment</h4>
                                </div>
                                <div class="modal-body">
                                  <form action="{{route('updateComments',$item->id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                      <h5 style="color:red">comments</h5>
                                      <textarea name="comment" class="form-control">{{$item->comment}}</textarea><br>
                                      <button class="btn btn-success" type="submit">Edit</button>
                                      <button type="button" class="btn btn-danger float-right" data-dismiss="modal">Close</button>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                          <a href="{{route('deleteComments',$item->id)}}" class="fa fa-trash" style='font-size:15px'></a>
                        </td>
                      </tr>
                  @endforeach
              </tbody>  
            </table>
      </div>
      <div class="col-1"></div>
    </div>
  </div>
  @endsection 
  




