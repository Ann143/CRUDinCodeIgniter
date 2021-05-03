<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>CRUD Application-Edit User</title>
  </head>
  <body>
  <nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">CRUD In CodeIgniter</a>
  <a class="navbar-brand" href="#" >Telez</a>
</nav>
<br><br>
<div class="container " style="margin-left:500px">

<div class="card" style="width: 18rem;">
<h5 class="text-center">Update User</h5>
  <div class="card-body">
 <form method="post" name="createUser" action="<?php echo base_url().'index.php/user/edit/'.$user['user_id'];?>">
  <div class="row">
        <div class="col-lg">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" value= "<?php echo set_value('name',$user['name']);?>" class="form-control">
                <small class="text-danger"><?php echo form_error('name');?></small>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" value= "<?php echo set_value('email',$user['email']);?>" class="form-control">
                <small class="text-danger"><?php echo form_error('email');?></small>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-info">Update</button>
               <a href="<?php echo base_url().'index.php/user/index';?>" class="btn btn-danger">Cancel</a>
            </div>
        </div>
        </form>
    </div>
  </div>
</div>
   
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>