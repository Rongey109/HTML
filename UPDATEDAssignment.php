<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Mega Travel Assingment</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
</head>
<body>
<div class="container">

<div class="allContent">

<style>
.error {color: #FF0000;}
body { background-color: #D3D3D3; }
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $phoneErr = $childErr = $adultErr =$DdateErr =$RdateErr = $destErr ="";
$name = $email = $phone = $child = $adult = $Ddate = $Rdate = $dest = $check = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
            if (empty($_POST["name"])) {
               $nameErr = "Name is required";
          } else {
               $name = test_input($_POST["name"]);
            }
    
             if (empty($_POST["email"])) {
               $emailErr = "Email is required";
            } else {
                 $email = test_input($_POST["email"]);
               
               // check if e-mail address is well-formed
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format"; 
               }
            }
    
     if (empty($_POST["phone"])) {
               $phoneErr = "Phone number required";
            }else {
               $phone = test_input($_POST["phone"]);
            }
    
    
     if (empty($_POST["child"])) {
               $childErr = "Number of children required";
            }else {
               $child = test_input($_POST["child"]);
            }
    
     if (empty($_POST["adult"])) {
               $adultErr = "Number of adults required";
            }else {
               $adult = test_input($_POST["adult"]);
            }
    
    
     if (empty($_POST["Ddate"])) {
               $DdateErr = "Departure Date required";
            }else {
               $Ddate = test_input($_POST["Ddate"]);
            }
    
    if (empty($_POST["Rdate"])) {
               $RdateErr = "Return Date required";
            }else {
               $Rdate = test_input($_POST["Rdate"]);
            }
    
    
      if (empty($_POST["dest"])) {
               $destErr = "Select a Destination";
            }else {
               $dest = test_input($_POST["dest"]);
            }
}


    function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
      ?>

<center>
 
<body><font color= #DC143C><b>
	Please fill out the required criteria</font></b>
	<p></p>
	<font color= #DC143C><b>
<p><span class = "error">* = Indicates required field. </span></p></font></b>
 <form method = "post" action = "<?php 
         echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 
               <p>
               Name:	 
               <input type = "text" name = "name"> 
               <span class = "error">* <?php echo $nameErr;?></span>
               </p>
               
               <p>
               E-mail:
               <input type = "text" name = "email">
               <span class = "error">* <?php echo $emailErr;?></span>
               </p>
               <p>
               Phone Number:
               <input type = "text" name = "phone">
                  <span class = "error">* <?php echo $phoneErr;?></span>
</p>

<p>
            Number of Children Traveling:
               <input type = "number" name = "child">
                  <span class = "error">* <?php echo $childErr;?></span>
</p>

<p>
             Number of Adults Traveling: 
               <input type = "number" name = "adult">
                  <span class = "error">* <?php echo $adultErr;?></span>
</p>

            Date of Departure:
               <input type = "date" name = "Ddate">
                  <span class = "error">* <?php echo $DdateErr;?></span>
<p>

               Date of Return:
               <input type = "date" name = "Rdate">
                  <span class = "error">* <?php echo $RdateErr;?></span>
                  </p>
</font></b>
	
<body ng-app="">			 
<font color= #DC143C><b>Please Select a Destination</font></b></br>
	<font color= #4169E1>
<input type="radio" name="dest" ng-model="myVar" value="Brisbane">Brisbane, Austrailia</br>
<input type="radio" name="dest" ng-model="myVar" value="Vancouver">Vancouver, Canada</br>
<input type="radio" name="dest" ng-model="myVar" value="NewYork">New York City, United States</br>
<input type="radio" name="dest" ng-model="myVar" value="Berlin">Berlin, Germany</br>
<input type="radio" name="dest" ng-model="myVar" value="Cancun">Cancun, Mexico</br>
<span class="error">* <?php echo $destErr;?></span>
	 </font>
	 
<br />

<div ng-switch="myVar">
    
     <div ng-switch-when="Brisbane">
<p><font color= #DC143C><b>You selected:</font></b></p>
     	<font color= #4169E1><h1>Brisbane, Australia</h1></font>
     <p><font color= #DC143C><b>Select which activities you would like to do</font></b></p>
           <form action="Rongey.php" method="post">

		
        <td width="280px"> <font color= #4169E1>
            <label>
            <input type ="checkbox" name="check_list[]" value = "City-Tours " id ="tours"/> City Tours
            </label> 
           
            <br />
            
            <label>
            <input type ="checkbox" name="check_list[]" value = "Sports " id ="sports"/> Sports
            </label> 
            
            <br />
            
            <label>
            <input type ="checkbox" name="check_list[]" value = "Cycling " id ="cycling"/> Cycling		
        	</label> 
		
			  <br />
            
            <label>
            <input type ="checkbox" name="check_list[]" value = "Museums " id ="museums"/> Museums		
        	</label> 
			
			  <br />
            
            <label>
            <input type ="checkbox" name="check_list[]" value = "Boating " id ="boating"/> Boating		
        	</label> 
        </td>
       </tr>
    </div>
    
    
     <div ng-switch-when="Vancouver">
<p><font color= #DC143C><b>You selected:</font></b></p>
     	<font color= #4169E1><h1>Vancouver, Canada</h1></font>
     <p><font color= #DC143C><b>Select which activities you would like to do</font></b></p>
     <form>
		
        <td width="280px"> 
            <label>
            <input type ="checkbox" name="check_list[]" value = "Museums " id ="museums"/> Museums		
        	</label> 
			
			  <br />
            
            <label>
            <input type ="checkbox" name="check_list[]" value = "Sailing " id ="sailing"/> Sailing
            </label> 
            
            <br />
            
            <label>
            <input type ="checkbox" name="check_list[]" value = "Beach " id ="beach"/> Beaches	
        	</label> 
		
			  <br />
            
            <label>
            <input type ="checkbox" name="check_list[]" value = "Hiking " id ="hiking"/> Hiking		
        	</label> 
			
			  <br />
            
            <label>
            <input type ="checkbox" name="check_list[]" value = "Boating " id ="boating"/> Boating		
        	</label> 
       
        </td>
       </tr>
    </div>
    
    
    
     <div ng-switch-when="NewYork">
<p><font color= #DC143C><b>You selected:</font></b></p>
     	<font color= #4169E1><h1>New York City, United States</h1></font>
     <p><font color= #DC143C><b>Select which activitites you would like to do</font></b></p>
     <form>
		
        <td width="280px">
              <label>
            <input type ="checkbox" name="check_list[]" value = "Museums " id ="museums"/> Museums		
        	</label> 
			
			  <br />
            
            <label>
            <input type ="checkbox" name="check_list[]" value = "Theatre " id ="theatre"/> Theatre
            </label> 
            
            <br />
            
            <label>
            <input type ="checkbox" name="check_list[]" value = "Parks & Recreation " id ="parks"/> Parks and Recreation		
        	</label> 
		
			  <br />
			  
		    <label>
            <input type ="checkbox" name="check_list[]" value = "City-Tours " id ="tours"/> City Tours
            </label> 
       
        </td>
       </tr>      
    </div>
    
    
    
     <div ng-switch-when="Berlin">
<p><font color= #DC143C><b>You selected:</font></b></p>
     	<font color= #4169E1><h1>Berlin, Germany</h1></font>
     <p><font color= #DC143C><b>Select which activities you would like to do</font></b></p>
     <form>
		
        <td width="280px">
            <label>
            <input type ="checkbox" name="check_list[]" value = "City-Tours " id ="tours"/> City Tours
            </label> 
           
            <br />
            
          <label>
            <input type ="checkbox" name="check_list[]" value = "Museums " id ="museums"/> Museums		
        	</label> 
			
			  <br />
            
            <label>
            <input type ="checkbox" name="check_list[]" value = "Cycling " id ="cycling"/> Cycling		
        	</label> 
       
        </td>
       </tr>
    </div>
    
    
    
    
     <div ng-switch-when="Cancun">
<p><font color= #DC143C><b>You selected:</font></b></p>
     	<font color= #4169E1><h1>Cancun, Mexico</h1></font>
     <p><font color= #DC143C><b>Select which activities you would like to do</font></b></p>
     <form>
		
        <td width="280px">
             <label>
            <input type ="checkbox" name="check_list[]" value = "Parks & Recreation " id ="parks"/> Parks and Recreation		
        	</label> 
		
			  <br />
            
            <label>
            <input type ="checkbox" name="check_list[]" value = "Beach " id ="beach"/> Beaches	
        	</label> 
		
			  <br />
            
            <label>
            <input type ="checkbox" name="check_list[]" value = "Boating " id ="boating"/> Boating		
        	</label> 
			
			 <br />
            
            <label>
            <input type ="checkbox" name="check_list[]" value = "Snorkeling " id ="snorkeling"/> Snorkeling	
        	</label> 
       
        </td>
       </tr>
	     	<font color= #4169E1>
	   	   </form>
		   </div>
<br />
           
                  <input type = "submit" name = "submit" value = "Submit"> 
                   <input type = "reset" name ="reset" value = "Reset">


      </form>
</div>
</div>
</div>
</div>
</body>
</html>




 <?php
         echo "<p><font color= #DC143C><b>Hello, a new client has submitted the form on your website! Here is the information they submitted:</font></b></p>";
         echo ("<p><font color= #DC143C><b>Client Name: </font></b>$name</p>");
         echo ("<p><font color= #DC143C><b>Client Phone Number: </font></b>$phone</p>");
         echo ("<p><font color= #DC143C><b>Client Email: </font></b>$email</p>");
         echo ("<p><font color= #DC143C><b>Number of Adults: </font></b>$adult </p>");
         echo ("<p><font color= #DC143C><b>Number of Children: </font></b>$child</p>");
         echo ("<p><font color= #DC143C><b>Destination: </font></b>$dest</p>");
         echo ("<p><font color= #DC143C><b>Travel Dates: </font></b>$Ddate ");
         echo ("to  $Rdate</p>");
         echo ("<font color= #DC143C><b>Interested Activities: </font></b>");
if(!empty($_POST['check_list'])) {
    foreach($_POST['check_list'] as $check ) {
            echo $check;

    }
}

     ?>

