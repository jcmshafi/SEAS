<?php

	include "connection.php";

	session_start();
  $error = NULL;
	   if(isset ($_POST["login"]) ) {


		  $id = mysqli_real_escape_string($conn,$_POST['id']);
		  $password = mysqli_real_escape_string($conn,$_POST['password']);
		  $_SESSION['id'] = $id;

		

			$sql2 = "SELECT  * FROM admin WHERE id = '$id' and password = '$password'";
			$result2 = mysqli_query($conn,$sql2);
			$num_row = mysqli_num_rows($result2);

			

         
			if($num_row > 0) {
					$data = mysqli_fetch_array($result2);
					$_SESSION["id"] = $data["id"];
					header('Location: admin_dash.php');
			}
		
      if($num_row1==0){


      $error ='ID OR PASS NOT FOUND';

      }

		}

?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SEAS Login</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login.css">
  <style>
    .logo {
      text-align: left;
    }

    .brand-wrapper .logo {
      height: 50px;
      margin-left: 0px;
      text-align: left;
    }

    .he {
      font-family: Impact, 'Arial Narrow Bold', sans-serif;
      font-size: 50px;
      font-style: bold;
    }

    .error {

      font-size: 20px;
      color: #ff414d;
      margin-left: 0px;
      font-style: bold;
      font-family: arial;

    }

    .vert {

      color: #00587a;


    }

    body {
      font-family: "Karla", sans-serif;
      background-color: #3c8dbc;
      ;
      min-height: 100vh;
    }
    .form-full {
    text-align: center;
    padding: 0px 0px 0px 390px;
}
  </style>
</head>

<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">

          <div class="col-md-12 text-center">
            <div class="card-body">
              <div class="brand-wrapper">

                <div class="he">S E A S</div>



              </div>
              <p class="login-card-description">Sign into SEAS</p>
              <div class="form-full">
              <form class="my_form" action="index.php" method="post">
                <div class="form-group">
                  <label for="email" class="sr-only text-center">Email</label>
                  <input type="text" name="id" id="id" class="form-control text-center" placeholder="Enter User ID">
                </div>
                <div class="form-group mb-4">
                  <label for="password" class="sr-only text-center">Password</label>
                  <input type="password" name="password" id="password" class="form-control text-center" class="error"
                    placeholder="Enter Password">
                </div>
                <input name="login" id="login" class="btn btn-block login-btn mb-4 text-center" type="submit" value="Login">
                <div class="error text-center"><?php echo $error;?></div>
              </form>
              </div>
              <a href="#!" class="forgot-password-link">Forgot password?</a>

              <nav class="login-card-footer-nav">

                <a href="#!">  SEAS Database 303 SEC2 GROUP 5</a>

              </nav>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>