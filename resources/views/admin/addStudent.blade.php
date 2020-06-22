@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       <div class="col-12">
        <div class="card">
          <div class="card-header text-center text-info" ><h4>Add Student In FollowUp</h4></div>
            <div class="card-body">
              <form action="{{route('students.store')}}" enctype="multipart/form-data" method="post">
                    {{csrf_field()}}
                    
                      <div class="form-group">
                        <label for="">First Name</label>
                        <input type="text" class="form-control" name="firstname" >
                    </div>
                      <div class="form-group">
                          <label for="">Last Name</label>
                          <input type="text" class="form-control" name="lastname">
                    </div>
                    
                    
                      <div class="form-group">
                        <label for="">Class</label>
                          <input type="text" class="form-control" name="class">
                      </div>
                  
                      <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="description" class="form-control" id="" cols="10" rows="4"></textarea>
                      </div>
          
                      <label for="">Picture</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="form-control" name="picture" >
                        </div>
                    </div>
                      
                      <div class="form-group">
                        <label for="">Status</label>
                        <select name="activeFollowup" class="form-control">
                          <option value="0">Out of Followup</option>
                          <option value="1">Followup</option>
                        </select>
                      </div>
                    
                      <div class="form-group">
                        <label for="">Tutor</label>
                        <input type="text" class="form-control" name="tutor" placeholder="Tutor.....">
                      </div>
                    <button class="btn btn-success mt-3" type="submit">Add New Student</button>
                    <a href="{{route('admin.dashboard')}}" class="btn btn-danger float-right">Go Back</a>
                  </form>
            </div>
        </div>
       </div>
    </div>
</div>
@endsection