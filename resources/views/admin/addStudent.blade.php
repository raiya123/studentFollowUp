@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       <div class="col-2"></div>
       <div class="col-8">
        <div class="card">
          <div class="card-header text-center text-info" ><h4>Add Student In FollowUp</h4></div>
            <div class="card-body">
              <form action="{{route('students.store')}}" enctype="multipart/form-data" method="post">
                    {{csrf_field()}}
                    
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="">First Name</label>
                        <input type="text" class="form-control" name="firstname" placeholder="Firstname..." >
                    </div>
                
                      <div class="form-group col-md-6">
                          <label for="">Last Name</label>
                          <input type="text" class="form-control" name="lastname" placeholder="Lastname....">
                    </div>
                     </div>
  
                     <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="">Status</label>
                        <select name="activeFollowup" class="form-control">
                          <option value="0">Out of FollowUp</option>
                          <option value="1">Follow Up</option>
                        </select>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="">Tutor</label>
                          <input type="text" class="form-control" name="tutor">
                      </div>
                     </div>
                
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="">Class</label>
                          <select name="class" class="form-control">
                            <option>WEP-A</option>
                            <option>WEP-B</option>
                            <option>SNA</option>
                            <option>Class-A</option>
                            <option>Class-B</option>
                            <option>Class-C</option>
                          </select>
                      </div>
                  
                      <div class="form-group col-md-6">
                        <label for="">Description</label>
                        <textarea name="description" class="form-control"></textarea>
                      </div>
                    </div>
                    <label for="">Picture</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="form-control costom-file-input" name="picture" >
                        </div>
                    </div><br>
                    <button class="btn btn-success mt-3" type="submit">Add New</button>
                    <a href="{{route('admin.dashboard')}}" class="btn btn-danger float-right">Go Back</a>
                  </form>
            </div>
        </div>
       </div>
       <div class="col-2"></div>
    </div>
</div>
@endsection