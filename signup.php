<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script src="https://use.fontawesome.com/1dec14be15.js"></script>
    <style>
    body { background-image: url('https://www.svgimages.com/svg-image/s5/kerala-state-map.svg'); background-repeat: no-repeat; background-position: center; background-size: cover; padding: 10px; }

           

      

        .inner-section {
           
            width: 550px;
            display: block;
            margin: 0 auto;

        }

        

        
        .input-group, .form-group {
            margin-bottom: 10px;
			font-size:20px;
			
        }

        .input-group-addon {
            background-color: rgba(255, 255, 255, 0.1);
            border: none;
            color:black;
            border-radius: 25px;
			margin-right:40px;
        }

        .form-control, .form-control:focus, .form-control:hover {
           
            color:black;
            border-radius: 50px;
            border:groove;
            font-size: 20px;
        }

        
        .footer {
            margin-top: 40px;
            margin-bottom: 40px;
        }

        input:placeholder {
            color:black;
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-style:italic;
			font-size:20px;
        }

        .btn-lg {
            font-size: 3em;
            border-radius: 0.25rem;
            padding: 15px 48px;
        }

        .btn-round {
            border-width: 1px;
            border-radius: 30px;
            padding: 11px 23px;
        }

        .btn-neutral, .btn-neutral:focus, .btn-neutral:hover {
            background-color: #FFFFFF;
            color: #f96332;
        }
	 .error {
	font-family: times roman;
	color: red;}
.star{color="red";}

@media (max-width: 768px) {
    #sidebar {
        margin-left: -250px;
    }
    #sidebar.active {
        margin-left: 0;
    }
}
a[data-toggle="collapse"] {
    position: relative;
}


#sidebar {
    min-width: 250px;
    max-width: 250px;
    min-height: 100vh;
}
#sidebar {
    min-width: 250px;
    max-width: 250px;
}

#sidebar.active {
    margin-left: -250px;
}
.wrapper {
    display: flex;
    width: 100%;
    align-items: stretch;
	position:fixed;
}
@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";


body {
    font-family: 'Poppins', sans-serif;
    background: #fafafa;
}



a, a:hover, a:focus {
    color:white;
    text-decoration: none;
    transition: all 0.3s;
}

#sidebar {
    /* don't forget to add all the previously mentioned styles here too */
    background:black;
    color:white;
    transition: all 0.3s;
}



#sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid #47748b;
}

#sidebar ul p {
    color:white;
    padding: 10px;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
}
#sidebar ul li a:hover {
    color:red;
    background: #fff;
}


ul ul a {
    font-size:2em !important;
    padding-left: 30px !important;
    
	color:white;
}
.a{
color:"white";
font-size:25px;
font-family:"Comic Sans MS", cursive, sans-serif;}
     </style>
       <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>ADMIN</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
 
</head>

<body>


    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<div id="content">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-info">
                <i class="fas fa-align-left"></i>
	
            </button>

        </div>
    </nav>
</div>
</body>
<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header"><br>
            <h3 style="font-family:""Arial Black", Gadget, sans-serif"">Admin</h3>
        </div>

        <ul class="list-unstyled components">
            <li class"active">
                <a href="#"><span class="a">Home</span></a>
               
            </li>
            <li>
                <a href="signup.php"><span class="a">Add a user </span></a>
            </li><li>
           
                <a href="#"><span class="a">Remove user</span></a>
            </li>
            <li>
                <a href="#"><span class="a">Display users</span></a>
            </li>
			 <li>
                <a href="#"><span class="a">Edit rates</span></a>
            </li>
        </ul>
    </nav>

</div>

<script>
$(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

});
</script>
</html>
<body>

<div class="container">
    <div class="row mar20">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="inner-section">
		<?php include ("server.php"); ?>	
                <form method="POST" action="">
                    <div class="mar20 inside-form">
                        <h1 style="color:blue" font-style="bold">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; SIGN UP<br></h1>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-pencil " style="font-size:25px"></i></span>
                            <input type="text" class="form-control" placeholder="First Name..."name ="firstname"><span class="error">&nbsp&nbsp<span class="star">*</span> <?php echo $errors[0]; ?></span>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-pencil " " style="font-size:25px"></i></span>
                            <input type="text" class="form-control"  placeholder="Last Name..." name ="lastname"><span class="error">&nbsp&nbsp* <?php echo $errors[1]; ?></span>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="	fa fa-drivers-license" " style="font-size:25px"></i></span>
                            <input type="text" class="form-control"  placeholder="reputation..."name ="reputation"><span class="error">&nbsp&nbsp* <?php echo $errors[2]; ?></span>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="		fa fa-phone-square" " style="font-size:25px"></i></span>
                            <input class="form-control" id="inputPhone" name="phone" required="required" type="tel"
                                   value="" placeholder="phone number..."><span class="error">&nbsp&nbsp* <?php echo $errors[3]; ?></span>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope " " style="font-size:25px"></i></span>
                            <input type="email" class="form-control"  placeholder="Email..." name ="email"><span class="error">&nbsp&nbsp* <?php echo $errors[4]; ?></span>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock " " style="font-size:25px"></i></span>
                            <input type="password" class="form-control" placeholder="Password..." name ="password"><span class="error">&nbsp&nbsp* <?php echo $errors[5]; ?></span>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock " " style="font-size:25px"></i></span>
                            <input type="password" class="form-control" placeholder="confirm Password..." name ="conf_password"><span class="error">&nbsp&nbsp* <?php echo $errors[6]; ?></span>
                        </div>
                        <div class="footer text-center">
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <button type="submit" class="btn btn-primary" name="reg_user">&emsp;ADD THE USER&emsp;</button>
                        </div>
                     

                        
                        </div>
                    </div>
</form>
            </div>
    </div>    </div>
</div>
</body>
</html>