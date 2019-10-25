<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Search Page</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            *{
               color: white;
            }
            .bg{
              background: url('https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/24c6b269320375.5b7cffce175ac.jpg') no-repeat;
              width: 100%;
              height: 635px;
			  background-repeat: no-repeat;
	background-size: cover;
             
            }
            .form-conatiner{
                border: 0px solid white;
                padding: 50px 60px;
                margin-top: 12vh;
                -webkit-box-shadow: 10px 10px 34px 0px rgba(0,0,0,0.75);
                    -moz-box-shadow: 10px 10px 34px 0px rgba(0,0,0,0.75);
                    box-shadow: 10px 10px 34px 0px rgba(0,0,0,0.75);
            }
			error {
	font-family: times roman;
	color: red;}
            
            /*.row-style{
             margin-top: 20px;
             
            }
            .center{
                margin: auto;
                margin-top: 100px;
                width: 50%;
   

                  p
            adding: 10px;
            }
            footer{
                padding: 10px 0; 
    background-color: blueviolet;
    color:#9d9d9d; 
    bottom: 0; 
    width: 100%;  
            }*/
        </style>
    </head>
    <body>
        <div class="container-fluid bg">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12"></div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    
                   <?php include ("server.php"); ?> 
                  <form class="form-conatiner" method="POST" action="search.php">
                        <div class="form-group">
                          <label>Name</label>
                          <input type="text" class="form-control"  placeholder="Name" name="Name"><error>&nbsp&nbsp* <?php echo $errors[30]; ?></error>
                        </div>
                        <div class="form-group">
                          <label >House no</label>
                          <input type="text" class="form-control"  placeholder="House Number" name="houseno"><error>&nbsp&nbsp* <?php echo $errors[32]; ?></error>
                        </div>
                      <div class="form-group">
                          <label >Ward no</label>
                          <input type="text" class="form-control"  placeholder="Ward Number" name="Wardno"><error>&nbsp&nbsp* <?php echo $errors[31]; ?></error>
                        </div>
                      <div class="form-group">
                          <label >Panjayath Name</label>
                          <input type="text" class="form-control"  placeholder="Panjayath Name" name="panchayathname"><error>&nbsp&nbsp* <?php echo $errors[33]; ?></error>
                        </div>
                      <div class="form-group">
                          <label >District</label>
                          <select class="form-control" name="district"> <option>--select district--</option> <option value="KASARAGOD">1.KASARAGOD</option><option value="KANNUR">2.KANNUR</option><option value="WAYANAD">3.WAYANAD</option><option value="KOZHIKODE">4.KOZHIKODE</option><option value="MALAPPURAM">5.MALAPPURAM</option><option value="PALAKKAD">6.PALAKKAD</option><option value="THRISSUR">7.THRISSUR</option><option value="ERNAKULAM">8.ERNAKULAM</option><option value ="IDUKKI">9.IDUKKI</option><option value ="KOTTAYAM">10.KOTTAYAM</option><option value="ALAPPUZHA">11.ALAPPUZHA</option><option value="PATHANAMTHITTA">12.PATHANAMTHITTA</option><option value="KOLLAM">13.KOLLAM</option><option value ="THIRUVANANTHAPURAM">14.THIRUVANANTHAPURAM</option> </select><error>&nbsp&nbsp* <?php echo $errors[34]; ?></error>
                        </div>
                       
                        
                        <button type="submit" class="btn btn-success btn-block" name="search">Search</button>
                    </form>  
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12"></div>
            </div>
        </div>
    </body>
</html>
