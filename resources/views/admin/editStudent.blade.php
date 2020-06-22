@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
       <div class="col-12">
        <div class="card">
            <div class="card-header text-center text-info" ><h4>Edit Student In FollowUp</h4></div>
            <div class="card-body">
                <form action="{{route('students.update',$student->id)}}" enctype="multipart/form-data" method="post">
                  {{csrf_field()}}
                  {{method_field('PUT')}}
                      <div class="form-group">
                        <label for="">First Name</label>
                        <input type="text" class="form-control" name="firstname" value="{{$student->firstName}}" >
                    </div>
                
                      <div class="form-group">
                          <label for="">Last Name</label>
                          <input type="text" class="form-control" name="lastname" value="{{$student->lastName}}">
                    </div>
                
                    <div class="form-group">
                      <label for="">Class</label>
                        <input type="text" class="form-control" name="class" value="{{$student->class}}">
                    </div>
                
                    <div class="form-group">
                      <label for="">Description</label>
                      <textarea name="description" class="form-control" id="" cols="10" rows="4">{{$student->description}}</textarea>
                    </div>
                    <label for="">Picture</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="form-control costom-file-input" name="picture" value="{{$student->picture}}" >
                        </div>
                    </div>
                      <br>
                      <div class="form-group">
                        <label for="">Status</label>
                        <select name="activeFollowup" class="form-control">
                          @foreach($student as $item)
                          <option value="0" {{($student->activeFollowup == 0) ? 'selected' : ''}}>Out of FollowUp</option>
                          <option value="1" {{($student->activeFollowup == 1) ? 'selected' : ''}}>Follow Up</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="">Tutor</label>
                          <input type="text" class="form-control" name="tutor" value="{{$student->tutor}}">
                      </div>
                    <button class="btn btn-success mt-3" type="submit">Edit Student</button>
                    <a href="{{route('admin.dashboard')}}" class="btn btn-danger float-right">Go Back</a>
                </form> 
            </div>
        </div>
       </div>
    </div>
</div>
@endsection