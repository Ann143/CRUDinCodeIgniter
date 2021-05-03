<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>CRUD Application-View User</title>
  </head>
  <body>
  <nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">CRUD In CodeIgniter</a>
  <a class="navbar-brand" href="#" >Telez</a>
</nav>
<br><br>
<div class="container " style="padding-top:10px;" >
<div class="row">
  <div class="col-md-12">

    <?php 
    $success = $this->session->userdata('success');
    if($success != "") {
      ?>
      <div class="alert alert-success"><?php echo $success;?></div>
      <?php
    }
    ?>
     <?php 
    $failure = $this->session->userdata('failure');
    if($failure != "") {
      ?>
      <div class="alert alert-failure"><?php echo $failure;?></div>
      <?php
    }
    ?>

  </div>
</div>

<div class="row"><div class="col-6"><h3>List of User's Information</h3></div>
<div class="col-6 text-right">
<a href="<?php echo base_url().'index.php/user/create';?>" class="btn btn-success">Create</a>
</div>
</div>



<hr>
  <div class="row ">
    <div class="col-md-12 ">
      <table class="table table-striped text-center" >
        <tr style="background-color:black;color:white">
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th width="60">Edit</th>
        <th width="100">Delete</th>
        </tr>

        <?php if(!empty($users)) { foreach($users as $user) {?>
        <tr>
      <td><?php echo $user['user_id']?></td>
      <td><?php echo $user['name']?></td>
      <td><?php echo $user['email']?></td>
      <td>
          <a href="<?php echo base_url().'index.php/user/edit/'.$user['user_id']?>" class="btn btn-primary ">Edit</a>
      </td>
      <td>
          <a href="<?php echo base_url().'index.php/user/delete/'.$user['user_id']?>" class="btn btn-danger " >Delete</a>
      </td>
       </tr>
    <?php } } else { ?>
      <tr>
       <td colspan="5">Records not found!</td>
     </tr>
     <?php } ?>

      </table>
    </div>
  </div>
     
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>