@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
       <div class="col-12">
        <div class="card">
            <div class="card-header text-center text-info" ><h4>Add New User</h4></div>
            <div class="card-body">
                <form  action="{{route('users.update',$user->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="">firstname</label>
                        <input type="text" class="form-control" name="firstname" placeholder="firstname" value="{{$user->firstName}}">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="">lastname</label>
                        <input type="text" class="form-control" name="lastname" placeholder="lastname" value="{{$user->lastName}}">
                      </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                      <label for="">Role</label>
                      <select name="role" class="form-control">
                        <option value="0" {{($user->role == 0) ? 'selected' : ''}}>normal</option>
                        <option value="1" {{($user->role == 1) ? 'selected' : ''}}>admin</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="">E-Mail</label>
                      <input type="email" name="email" placeholder="Email..." class="form-control" value="{{$user->email}}" >
                    </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="">Position</label>
                        <select name="position" class="form-control">
                        <option value="1" {{($user->position_id == 1) ? 'selected' : ''}}>Manger</option>
                        <option value="2" {{($user->position_id == 2) ? 'selected' : ''}}>SNA Trainer</option>
                        <option value="3" {{($user->position_id == 3) ? 'selected' : ''}}>WEP Trainer</option>
                        <option value="4" {{($user->position_id == 4) ? 'selected' : ''}}>Educator</option>
                        </select>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control" value="{{$user->password}}">
                      </div>
                    </div>
                    <br>
                  <button type="submit" class="btn btn-success">Submit</button>
                  <a href="{{route('users.index')}}" class="btn btn-danger float-right">Go Back</a>
                  </form>
            </div>
        </div>
       </div>
    </div>
</div>
@endsection

