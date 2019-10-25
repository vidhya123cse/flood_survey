<!DOCTYPE html>
<html lang="en">
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->



    <title>loginpage</title>
    <style>
        body#LoginForm {
            background-image: url("http://keralagate.com/images/bg_kerala_Kumarakom.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            padding: 10px;
        }


        .panel h2 {
            color: #f7f7f7;
            font-size: 35px;
            margin: 0 0 8px 0;
        }



        .login-form .form-control {
            background: #f7f7f7 none repeat scroll 0 0;
            border: 1px solid #d4d4d4;
            border-radius: 4px;
            font-size: 14px;
            height: 50px;
            line-height: 50px;
        }

        .main-div {
            background-color: rgba(10, 10, 10, 0.4);
            margin: 70px auto 30px;
            max-width: 48%;
            padding: 50px 70px 70px 71px;
        }


        .login-form {
            text-align: center;
        }

        .forgot a {
            color: #ffffff;
            font-size: 16px;
            text-decoration: underline;
        }

        .login-form .btn.btn-primary {
            border-color: #f0ad4e;
            color: #ffffff;
            font-size: 18px;
            width: 60%;
            height: 50px;
        }

        .forgot {
            text-align: left;
            margin-bottom: 30px;
        }
	.error {
	font-family: times roman;
	color: red;}
    </style>
</head>
<body id="LoginForm">
    <div class="container">
     
        <div class="login-form">
            <div class="main-div">
                <div class="panel">
                    <h2>LOGIN</h2>
   
                </div><?php include ("server.php"); ?>	
                <form id="Login" method = "POST">  
                    <div class="form-group">

                        <input type="email" class="form-control" id="inputEmail" placeholder="Email Address" name="email"><span class="error">*  <?php echo $errors[7]; ?></span>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password" name ="password"><span class="error">*  <?php echo $errors[8]; ?></span>
                    </div>
			<div class="form-group">
                        <input type="text" class="form-control" id="id" placeholder="Special ID" name ="ID"><span class="error">*  <?php echo $errors[29]; ?></span>
                    </div>
                    <div class="forgot">
                        <a href="reset.html">Forgot password?</a><span class="error">*  
      </div>
                    <button type="submit" class="btn btn-primary" name="login_user">Login</button>
                </form>
            </div>
            
        </div>
    </div>

</body>
</html>
