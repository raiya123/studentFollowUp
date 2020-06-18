@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
       <div class="col-12">
        <div class="card">
            <div class="card-header text-center text-info" ><h4>Add Student In FollowUp</h4></div>
            <div class="card-body">
                <form action="{{route('students.store')}}" method="post">
                      <div class="form-group">
                        <label for="fname">First Name</label>
                        <input type="text" class="form-control" name="firstname" >
                    </div>
                
                      <div class="form-group">
                          <label for="flname">Last Name</label>
                          <input type="text" class="form-control" name="lastname">
                    </div>
                
                    <div class="form-group">
                      <label for="class">Class</label>
                     
                        <input type="text" class="form-control" name="class">
                    </div>
                
                    <div class="form-group">
                      <label for="description">Description</label>
                      <textarea name="description" class="form-control" id="" cols="10" rows="4"></textarea>
                    </div>
                      <label for="picture">Picture</label>
                      <div class="input-group">
                              <input type="text" class="form-control" name="picture" >
                      </div>
                      <br>
                      <div class="form-group">
                        <label for="activeFollowup">ActiveFollowUp</label>
                          <input type="text" class="form-control" name="activeFollowup">
                      </div>
                    <button class="btn btn-success mt-3" type="submit">Add New Student</button>
                </form> 
            </div>
        </div>
       </div>
    </div>
</div>
@endsection