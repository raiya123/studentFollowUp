@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
       <div class="col-2"></div>
       <div class="col-8">
        <div class="card">
          <div class="card-header text-center text-info" ><h4>Edit Student In FollowUp</h4></div>
          <div class="card-body">
              <form action="{{route('students.update',$student->id)}}" enctype="multipart/form-data" method="post">
                {{csrf_field()}}
                {{method_field('PUT')}}
                   <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="">First Name</label>
                      <input type="text" class="form-control" name="firstname" value="{{$student->firstName}}" >
                  </div>
              
                    <div class="form-group col-md-6">
                        <label for="">Last Name</label>
                        <input type="text" class="form-control" name="lastname" value="{{$student->lastName}}">
                  </div>
                   </div>

                   <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="">Status</label>
                      <select name="activeFollowup" class="form-control">
                        @foreach($student as $item)
                        <option value="0" {{($student->activeFollowup == 0) ? 'selected' : ''}}>Out of FollowUp</option>
                        <option value="1" {{($student->activeFollowup == 1) ? 'selected' : ''}}>Follow Up</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="">Tutor</label>
                        <input type="text" class="form-control" name="tutor" value="{{$student->tutor}}">
                    </div>
                   </div>
              
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="">Class</label>
                        <select name="class" class="form-control">
                          <option value="WEP-A" {{($student->class == "WEP-A") ? 'selected' : ''}}>WEP-A</option>
                          <option value="WEP-B" {{($student->class == "WEP-B") ? 'selected' : ''}}>WEP-B</option>
                          <option value="SNA" {{($student->class == "SNA") ? 'selected' : ''}}>SNA</option>
                          <option value="Class-A" {{($student->class == "Class-A") ? 'selected' : ''}}>Class-A</option>
                          <option value="Class-B" {{($student->class == "Class-B") ? 'selected' : ''}}>Class-B</option>
                          <option value="Class-C" {{($student->class == "Class-C") ? 'selected' : ''}}>Class-C</option>
                        </select>
                    </div>
                
                    <div class="form-group col-md-6">
                      <label for="">Description</label>
                      <textarea name="description" class="form-control">{{$student->description}}</textarea>
                    </div>
                  </div>
                  <label for="">Picture</label>
                  <div class="input-group">
                      <div class="custom-file">
                          <input type="file" class="form-control costom-file-input" name="picture" value="{{$student->picture}}" >
                      </div>
                  </div><br>
                  
                  <button class="btn btn-success mt-3" type="submit">Edit Student</button>
                  <a href="{{route('admin.dashboard')}}" class="btn btn-danger float-right">Go Back</a>
              </form> 
          </div>
      </div>
       </div>
       <div class="col-2"></div>
    </div>
</div>
@endsection