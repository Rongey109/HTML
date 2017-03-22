# HTML
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
body { background-color: #D3D3D3; }
</style>
<body>
<center>
<img src="travel.png" alt="Mega Travel" style="position: relative;">
<br>
<font color= #DC143C><b>
	Please fill out the required criteria</font></b>
	<p></p>
	</center>
<div class="body">
<center>
<font color= #4169E1><b>
<form action = "" id = "userInformation" onsubmit= "return false">
Name: <input type = "text" id = "name" maxlength="50" /><br><br>
Phone Number: <input type="text" id = "phone" maxlength="10"/> <br><br>
E-mail: <input type="text" id = "email"/> <br><br>
Number of Adults Traveling: <input type="text" id = "adults" maxlength="10"/><br><br>
Number of Children Traveling: <input type="text" id = "children" maxlength="10"/><br><br>
Date of Departure: <input type="date" id = "departure"/><br><br>
Date of Return: <input type="date" id = "returnDate"/> <br><br>
</font></b>
</form>
</body>  
    
<body ng-app="">
<form>
<font color= #DC143C><b>Choose a city</font></b>
	<font color= #4169E1>
     <p><input type="radio" ng-model="myVar" value="Brisbane">Brisbane, Austrailia</p>
     <p><input type="radio" ng-model="myVar" value="Vancouver">Vancouver, Canada</p>
     <p><input type="radio" ng-model="myVar" value="NewYork">New York City, United States</p>
     <p><input type="radio" ng-model="myVar" value="Berlin">Berlin, Germany</p>
     <p><input type="radio" ng-model="myVar" value="Cancun">Cancun, Mexico</p>
	 </font>
	</form>

<div ng-switch="myVar">
    
     <div ng-switch-when="Brisbane">
     <h1>Brisbane, Australia</h1>
     <p><font color= #DC143C><b>Select which activity you would like to do</font></b></p>
     <form>

		
        <td width="280px">
            <label>
            <input type ="checkbox"  value = "100" id ="tours"/> City Tours
            </label> 
           
            <br />
            
            <label>
            <input type ="checkbox"  value = "200" id ="sports"/> Sports
            </label> 
            
            <br />
            
            <label>
            <input type ="checkbox"  value = "300" id ="cycling"/> Cycling		
        	</label> 
		
			  <br />
            
            <label>
            <input type ="checkbox"  value = "400" id ="museums"/> Museums		
        	</label> 
			
			  <br />
            
            <label>
            <input type ="checkbox"  value = "500" id ="boating"/> Boating		
        	</label> 
       
        </td>
       </tr>
      </form>
    </div>
    
    
     <div ng-switch-when="Vancouver">
     <h1>Vancouver, Canada</h1>
     <p><font color= #DC143C><b>Select which activity you would like to do</font></b></p>
     <form>
		
        <td width="280px">
            <label>
            <input type ="checkbox"  value = "400" id ="museums"/> Museums		
        	</label> 
			
			  <br />
            
            <label>
            <input type ="checkbox"  value = "600" id ="sailing"/> Sailing
            </label> 
            
            <br />
            
            <label>
            <input type ="checkbox"  value = "700" id ="beach"/> Beaches	
        	</label> 
		
			  <br />
            
            <label>
            <input type ="checkbox"  value = "800" id ="hiking"/> Hiking		
        	</label> 
			
			  <br />
            
            <label>
            <input type ="checkbox"  value = "500" id ="boating"/> Boating		
        	</label> 
       
        </td>
       </tr>
      </form>
    </div>
    
    
    
     <div ng-switch-when="NewYork">
     <h1>New York City, United States</h1>
     <p><font color= #DC143C><b>Select which activity you would like to do</font></b></p>
     <form>
		
        <td width="280px">
              <label>
            <input type ="checkbox"  value = "400" id ="museums"/> Museums		
        	</label> 
			
			  <br />
            
            <label>
            <input type ="checkbox"  value = "900" id ="theatre"/> Theatre
            </label> 
            
            <br />
            
            <label>
            <input type ="checkbox"  value = "1000" id ="parks"/> Parks and Recreation		
        	</label> 
		
			  <br />
			  
		    <label>
            <input type ="checkbox"  value = "100" id ="tours"/> City Tours
            </label> 
       
        </td>
       </tr>
      </form>       
    </div>
    
    
    
     <div ng-switch-when="Berlin">
     <h1>Berlin, Germany</h1>
     <p><font color= #DC143C><b>Select which activity you would like to do</font></b></p>
     <form>
		
        <td width="280px">
            <label>
            <input type ="checkbox"  value = "100" id ="tours"/> City Tours
            </label> 
           
            <br />
            
          <label>
            <input type ="checkbox"  value = "400" id ="museums"/> Museums		
        	</label> 
			
			  <br />
            
            <label>
            <input type ="checkbox"  value = "300" id ="cycling"/> Cycling		
        	</label> 
       
        </td>
       </tr>
      </form>
    </div>
    
    
    
    
     <div ng-switch-when="Cancun">
     <h1>Cancun, Mexico</h1>
     <p><font color= #DC143C><b>Select which activity you would like to do</font></b></p>
     <form>
		
        <td width="280px">
             <label>
            <input type ="checkbox"  value = "1000" id ="parks"/> Parks and Recreation		
        	</label> 
		
			  <br />
            
            <label>
            <input type ="checkbox"  value = "700" id ="beach"/> Beaches	
        	</label> 
		
			  <br />
            
            <label>
            <input type ="checkbox"  value = "500" id ="boating"/> Boating		
        	</label> 
			
			 <br />
            
            <label>
            <input type ="checkbox"  value = "1100" id ="snorkeling"/> Snorkeling	
        	</label> 
       
        </td>
       </tr>
	   	   </form>
	   </div>

<br />

<input type = "reset" id = "reset"/>

<input type = "submit" id = "submit" onclick = "userInformation();" value = "Submit"/>

</p>

</form>
<script type = "text/javascript" src="myApp.js">
</script>



</div>
</div>
</div>
</body>
</html>
