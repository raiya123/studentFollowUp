<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add New Student In FollowUp</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center text-info"><h4>Add New Student In FollowUp</h4></div>
                    <div class="card-body">
                        <form action="{{route('students.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">FirstName:</label><br>
                                <input type="text" placeholder="Firstname" name="firstname" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">LastName:</label><br>
                                <input type="text" placeholder="Lastname" name="lastname" class="form-control">
                            </div> 
                            <div class="form-group">
                                <label for="">Class:</label><br>
                                <input type="text" placeholder="Class" name="class" class="form-control">
                            </div> 
                            
                            <div class="form-group">
                                <label for="">Description:</label><br>
                                <textarea name="description" id="" cols="149" rows="5"></textarea>
                            </div> 
                            <div class="form-group">
                                <label for="">Picture:</label><br>
                                <input type="text" placeholder="Dicture" name="picture" class="form-control">
                            </div> 
                            <div class="form-group">
                                <label for="">ActiveFollowUp:</label><br>
                                <input type="text" placeholder="ActiveFollowUp" name="activefollowup" class="form-control">
                            </div> 
                            <br><br>
                             <button type="submit" class="btn btn-success">Add Now</button>
                             <a href="{{route('home')}}" class="btn btn-danger float-right">Go Back</a>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
</body>
</html>