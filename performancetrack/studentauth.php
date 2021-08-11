<?php      
    include('connection.php');  
    $Roll_no = $_POST['roll'];  
    $Password = $_POST['pass'];  
        $sql = "select * from student where Roll_no = '$Roll_no' and Password ='$Password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);    
        if($count == 1)
		{  
            
            include 'main.php';
            
                        
        }  
        else
        {  
            echo "<h1> Login failed. Invalid ROll no or password.</h1>";  
        }     
?>  