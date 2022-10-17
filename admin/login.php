<?php require_once('../config.php') ?>
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
 <?php require_once('inc/header.php') ?>
<body class="hold-transition login-page  dark-mode">
  <script>
    start_loader()
  </script>
  <style>
    body{
      background: linear-gradient(180deg, #0000004A 0%, #000000 100%), url('./login.jpg');
      background-size:cover;
      background-repeat:no-repeat;
    }
    .header{
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 30px 0;
    }
    .header img{
        width: 25%;
    }
    .card{
      background-color: black;
      border-radius: 15px;
    }
    .card-head{
      background-color: #F6CE05;
      padding: 10px 0;
      text-align: center;
      border-radius: 15px 15px 0 0;
    }

  </style>
    <div class="header">
    <img src="./logo.png" />
  </div>
<div class="login-box">

  <div class="card">
    <div class="card-head">
      <a href="./" class="h1"><b>Login</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Enter Your Admin Details</p>

      <form id="login-frm" action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" autofocus name="username" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
          </div>
    
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>

        </div>
      </form>
    

      
    </div>

  </div>

</div>


<script src="plugins/jquery/jquery.min.js"></script>

<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="dist/js/adminlte.min.js"></script>

<script>
  $(document).ready(function(){
    end_loader();
  })
</script>
</body>
</html>