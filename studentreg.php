<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
  	background-image:url(ipllogo2.jpg);
	background-repeat: no-repeat, repeat;
	background-size: cover;
}

* {
  box-sizing: border-box;
}


.container {
  padding: 16px;
  background-color: none;
  opacity: 0.9;
  
}
h1,p{
	  text-align:center;
	  color: #80ffff;
  }

input[type=text], input[type=password] {
  width:20%;
  padding: 15px;
  margin: 10px 600px;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
label{
margin: 30px 600px;
color: #e6f2ff;
}

/* Overwrite default styles of hr */


/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 5px 600px;
  border: none;
  cursor: pointer;
  width: 20%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
 
  text-align: center;
}
</style>
</head>
<body>

<form action="studentinsert.php" method="post">
  <div class="container">
    <h1>Register</h1>
    <p >Please fill in this form to create an account.</p>
    
    <label for="Roll no"><b>Roll_no:</b></label>
    <input type="text" placeholder="Enter username" name="roll"  required>

    <label for="pass"><b>Password:</b></label>
    <input type="password" placeholder="Enter Password" name="pass"  required>

     <label for="name"><b>Name:</b></label>
    <input type="text" placeholder="Enter Name" name="n"  required>

         <label for="branch"><b>Branch:</b></label>
    <input type="text" placeholder="Enter branch" name="branch"  required><br>

   

        <label for="year"><b>Passout_Year:</b></label>
    <input type="text" placeholder="Enter passout year" name="py"  required>

        <label for="code"><b>Codechef_username:</b></label>
    <input type="text" placeholder="Enter username" name="cu"  required>
     

         <label for="hacker"><b>Hackerrank_username:</b></label>
    <input type="text" placeholder="Enter username" name="hu"  required>

     <label for="codeforce"><b>Codeforces_username:</b></label>
    <input type="text" placeholder="Enter username" name="cfu"  required>

       <label for="hackerearth"><b>Hackerearth_username:</b></label>
        <input type="text" placeholder="Enter username" name="heu"  required>

       


    
    
    

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="alreadylogin.html">Sign in</a>.</p>
  </div>
</form>

</body>
</html>
