<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 20%;
  padding: 12px 20px;
  margin: 12px 600px;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  align:center;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 10px 600px;
  border: none;
  cursor: pointer;
  width: 20%;
  position:center;
}

button:hover {
  opacity: 0.8;
}
h1{10px 600px
}

label{
margin: 30px 600px
}


.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 10%;
  border-radius: 10%;
}

.container {
  padding: 16px;
}

span.pass {
  float: right;
  padding-top: 16px;
}
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .
}
h2{text-align:center;
text-size:20px;
text-decoration:none;}
</style>
</head>
<body>

<form action="adminauth.php" method="post">
  <div class="imgcontainer">
  <h1>ADMIN LOGIN<h1>
    <img src="1.png" alt="Avatar" class="avatar" ">
  </div>

  <div class="container">
    <label for="ROll no"><b>username:</b></label>
    <input type="text" placeholder="Enter Username" name="user" required>

    <label for="pass"><b>password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>
        
    <button type="submit">Login</button>
    
  </div>

  
</form>

</body>
</html>