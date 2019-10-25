<!DOCTYPE html>


<html lang="en">
 
<head>
        <title>Survey Form</title>
       
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                
<style>
            
.row-style{
             
margin-top: 20px;
}
            
.center{
 
margin: auto;

margin-top: 100px;
                
width: 50%;
   

                  
padding: 10px;
}
            
footer{
                
padding: 10px 0; 
    
background-color: blueviolet;
    
color:#9d9d9d; 
    
bottom: 0; 
    
width: 100%;}
 error {
	font-family: times roman;
	color: red;}
       
</style>
    
</head>
    
<body >      
<nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
               
<a href="https://en.wikipedia.org/wiki/Nava_Kerala_Mission" class="navbar-brand">Nava Kerala</a>
            </div>
    
  <div>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-search"></span>Search</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-user"></span>MY Account</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-out"></span>LogOut</a></li>
            
        </ul>
    </div>
    </div>
    </nav>
         <div class="center">
            
            <div class="container">
            <div class="row row-style">
               
                <div class="col-xs-6">
					<?php include ("server.php"); ?>
                    <form action = "survey.php" method ="POST" >
                       
                        
                        <br><br>   <br>                  

                                <div class="form-group">
                                    
                                    <b><error>* </error>Name</b>&ensp; &ensp;<input type="text" class="form-control"  name="Name"><error><?php echo $errors[9]; ?></error>
                                </div> <br>

                        <div class="form-group">
                                    
                            <b><error>* </error>Ward No: &ensp;&ensp;</b><input type="text" name="Wardno">&ensp;<error><?php echo $errors[10]; ?></error>
                          
                        
                                    
                            <b><br><br><error>* </error>House No:&ensp;&nbsp</b><input type="text"  name="houseno"><error><?php echo $errors[11]; ?></error>
                                </div>  
                        <div class="form-group">
                                                     <label for="comment"><error>* </error>Address</label>
                                                         <textarea class="form-control" rows="3" id="comment" name ="address"></textarea><error><?php echo $errors[12]; ?></error>
                                                 </div>
                                  <div class="form-group">
                                    
                                      <b><error>* </error>Panchayath Name</b><input type="text" class="form-control" name="panchayathname"><error><?php echo $errors[13]; ?></error>
                                </div>  
                        <div class="form-group">
                                    
                            <br> <b><error>* </error>District</b><select class="form-control" name="district"> <option>--select district--</option> <option value="KASARAGOD">1.KASARAGOD</option><option value="KANNUR">2.KANNUR</option><option value="WAYANAD">3.WAYANAD</option><option value="KOZHIKODE">4.KOZHIKODE</option><option value="MALAPPURAM">5.MALAPPURAM</option><option value="PALAKKAD">6.PALAKKAD</option><option value="THRISSUR">7.THRISSUR</option><option value="ERNAKULAM">8.ERNAKULAM</option><option value ="IDUKKI">9.IDUKKI</option><option value ="KOTTAYAM">10.KOTTAYAM</option><option value="ALAPPUZHA">11.ALAPPUZHA</option><option value="PATHANAMTHITTA">12.PATHANAMTHITTA</option><option value="KOLLAM">13.KOLLAM</option><option value ="THIRUVANANTHAPURAM">14.THIRUVANANTHAPURAM</option> </select> <error><?php echo $errors[14]; ?></error>                       </div> 
                                 <div class="form-group">
                                    
                                    <b><error>* </error>Officer Name</b>&ensp; &ensp;<input type="text" class="form-control"  name="officername"><error><?php echo $errors[15]; ?></error>
                                </div> <br>
                        
                        <div class="form-group">
                                    
                                    <b><error>* </error>Maximum Water level Reached</b><input type="text" class="form-control" name="maximum_water_level_reached"><error><?php echo $errors[16]; ?></error>
                                </div>  
                                           <div class="form-group">
                                    
                                    <b><error>* </error>Year of home</b><select class="form-control" name="yearofhome"> <option>--select year--</option>
											   <option value ="1900">1900</option> <option value ="1901">1901</option> <option value ="1902">1902</option> <option value ="1903">1903</option> <option value ="1904">1904</option> <option value ="1905">1905</option> <option value ="1906">1906</option> <option value ="1907">1907</option> <option value ="1908">1908</option> <option value ="1910">1910</option> <option value ="1911">1911</option> <option value ="1912">1912</option> <option value ="19013">1913</option> <option value ="1914">1914</option> <option value ="1915">1915</option> <option value ="1916">1916</option> <option value ="1917">1917</option> <option value ="1918">1918</option> <option value ="1919">1919</option> <option value ="1920">1920</option> <option value ="1921">1921</option> <option value ="1922">1922</option> <option value ="1923">1923</option> <option value ="1924">1924</option> <option value ="1925">1925</option> <option value ="1926">1926</option> <option value ="1927">1927</option> <option value ="1928">1928</option> <option value ="1929">1929</option> <option value ="1930">1930</option> <option value ="1931">1931</option> <option value ="1932">1932</option> <option value ="1933">1933</option> <option value ="1934">1934</option> <option value ="1935">1935</option> <option value ="1936">1936</option> <option value ="1937">1937</option> <option value ="1938">1938</option> <option value ="1939">1939</option> <option value ="1940">1940</option> <option value ="1941">1941</option> <option value ="1942">1942</option> <option value ="1943">1943</option> <option value ="1944">1944</option> <option value ="1945">1945</option> <option value ="1946">1946</option> <option value ="1947">1947</option> <option value ="1948">1948</option> <option value ="1949">1949</option> <option value ="1950">1950</option> <option value ="1951">1951</option> <option value ="1952">1952</option> <option value ="1953">1953</option> <option value ="1954">1954</option> <option value ="1955">1955</option> <option value ="1956">1956</option> <option value ="1957">1957</option> <option value ="1958">1958</option> <option value ="1959">1959</option> <option value ="1960">1960</option> <option value ="1961">1961</option> <option value ="1962">1962</option> <option value ="1963">1963</option> <option value ="1964">1964</option> <option value ="1965">1965</option> <option value ="1966">1966</option> <option value ="1967">1967</option> <option value ="1968">1968</option> <option value ="1969">1969</option> <option value ="1970">1970</option> <option value ="1971">1971</option> <option value ="1972">1972</option> <option value ="1973">1973</option> <option value ="1974">1974</option> <option value ="1975">1975</option> <option value ="1976">1976</option> <option value ="1977">1977</option> <option value ="1978">1978</option> <option value ="1979">1979</option> <option value ="1980">1980</option> <option value ="1981">1981</option> <option value ="1982">1982</option> <option value ="1983">1983</option> <option value ="1984">1984</option> <option value ="1985">1985</option> <option value ="1986">1986</option> <option value ="1987">1987</option> <option value ="1988">1988</option> <option value ="1989">1989</option> <option value ="1990">1990</option> <option value ="1991">1991</option> <option value ="1992">1992</option> <option value ="1993">1993</option> <option value ="1994">1994</option> <option value ="1995">1995</option> <option value ="1996">1996</option> <option value ="1997">1997</option> <option value ="1998">1998</option> <option value ="1999">1999</option> <option value ="2000">2000</option> <option value ="2001">2001</option> <option value ="2002">2002</option> <option value ="2003">2003</option> <option  value ="2004">2004</option> <option value ="2005">2005</option> <option value ="2006">2006</option> <option value ="2007">2007</option> <option value ="2008">2008</option> <option value ="2009">2009</option> <option value ="2010">2010</option> <option value ="2011">2011</option> <option value ="2012">2012</option> <option value ="2013">2013</option> <option value ="2014">2014</option> <option value ="2015">2015</option> <option value =""2016>2016</option> <option value ="2017">2017</option> <option value ="2018">2018</option> <option value ="2019">2019</option></select><error><?php echo $errors[17]; ?></error>
                                </div> 
                                <div class="form-group">
                                    
                                    <b><error>* </error>Near by any river/ Canal</b><input type="text" class="form-control" name="nearbyriver"><error><?php echo $errors[18]; ?></error>
                                </div>  
                                <div class="form-group">
                                    
                                    <b><error>* </error>1. Any damage to water supply</b><br><br><input type="radio" name="watersupply" value="yes">Yes &ensp;
								     <input type="radio" name="watersupply" value="no">No <error><?php echo $errors[19]; ?></error>
                                </div>  



                                         <div class="form-group">
                                             <b> <error>* </error>2. Do you have a flood insurance coverage?</b>
                                             <br><br>
                                             <input type="radio" name="doyouhaveafloodinsurancecoverage" value="Yes">Yes &ensp;
                                             <input type="radio" name="doyouhaveafloodinsurancecoverage" value="No">No <error><?php echo $errors[20]; ?></error>
                                  
                                </div>
                                 <div class="form-group">
                                                     <b> <error>* </error>3. Is there any damage to power supply</b>
                                                <br><br>
                                                
                                                <input type="radio" name="powersupply" value="Yes">Yes &ensp;
                                                 <input type="radio" name="powersupply" value="No">No<error><?php echo $errors[21]; ?></error>
                                                 </div>
				 <div class="form-group">
                                                     <b> <error>* </error>4. Is Well water Contaminated </b>
                                                <br><br>
                                                
                                                <input type="radio" name="wellwater" value="Yes">Yes &ensp;
                                                 <input type="radio" name="wellwater" value="No">No<error><?php echo $errors[22]; ?></error>
                                                 </div>
				
				 <div class="form-group">
                                                     <b> <error>* </error>5. Is there any Damage to Sanitary Fittings</b>
                                                <br><br>
                                                
                                                <input type="radio" name="sanitary" value="Yes">Yes &ensp;
                                                 <input type="radio" name="sanitary" value="No">No<error><?php echo $errors[23]; ?></error>
                                                 </div>
                        <div class="form-group">        
                            <b><error>* </error>6. Have you ever suffered any loss due to flood?<br><br></b>
                                           <script type="text/javascript">

                                                function yesnoCheck() {
                                                 if (document.getElementById('yesCheck').checked) {
                                                    document.getElementById('ifYes').style.display = 'block';
                                                      }
                                                    else document.getElementById('ifYes').style.display = 'none';

                                                        }

                                            </script>
                                            <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="yesCheck" value="Yes">Yes  <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="noCheck" value ="No">No <br>
                                            <div id="ifYes" style="display:none"><br><error><?php echo $errors[24]; ?></error>
                                                 <b><error>* </error>7. Which of theses would you want your flood insurance to cover?</b> <br><br>
                                                 <input type='checkbox' id='yes' name="yes1" value="Yes">Any wall collapsed<br>
                                                 <input type='checkbox' id='yes' name="yes2" value="Yes">Roofs are damaged<br>
                                                 <input type='checkbox' id='yes' name="yes3" value="Yes">Any diagonal crack in wall<br>
                                                 <input type='checkbox' id='yes' name="yes4" value="Yes">Others<br>
                                                 <error><?php echo $errors[25]; ?></error>
                                            </div>
                        </div>
        
                                                 <div class="form-group">
                                                     <b> <error>* </error>8. Are you previously field any claims?</b>
                                                <br><br>
                                                
                                                <input type="radio" name="previousclaim" value="Yes">Yes &ensp;
                                                 <input type="radio" name="previousclaim" value="No">No<error><?php echo $errors[26]; ?></error>
                                                 </div>
                                                <div class="form-group">
                                                    <br> <label for="comment"><error>* </error>Details:</label>
                                                         <textarea class="form-control" rows="5" id="comment" placeholder="If Yes,Enter the details here!" name ="details"></textarea><error><?php echo $errors[27]; ?></error>
                                                 </div>
                                   <div class="form-group">
                                                     <b><error>* </error> 
														 Survey Offers(RE)</b>
                                                <br><br>
                                                
                                                <input type="radio" name="residing" value="Yes">Fit for residing &ensp;
                                                 <input type="radio" name="residing" value="No">Not fit for residing &nbsp<error><?php echo $errors[28]; ?></error>
                                                 </div>
                                             
                        <div class="form-group">
                               <button type="submit" class="btn btn-primary" value="Submit" name ="survey">Submit</button>
                        </div>
                         
                
                    </form>                          
                    
                </div>
            </div>
            </div>
         </div>
        
          
    </body>
</html>
