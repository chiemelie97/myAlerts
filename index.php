<?php
   require("./user_class.php");

?>

<!DOCTYPE html>
<html>
<head>
  <title>Login/Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <style>
        
         body{ 
         background-color: rgb(0,225,85);
        }
        
         .container {
         width: 400px;
         height: 600px;
         border: thin solid black;
         background-color: white;
         margin-top: 55px;
         text-align: center;
         box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }
        
          form {
          margin: 20px;
          width: 90%;
          height: 90%;
          font-family: "Roboto", sans-serif;

        }
        
          form input {
          width: 100%;
          margin: 0 0 15px;
          padding: 10px;
          font-size: 12px;
          background: #f2f2f2;  
          border: none;

        }
        
          form .user-form {
          margin-top: -50px;
          margin: 0;
          border: thick solid red; 
          height: 70%; 
          margin-top: 150px;
        }
        
          form button {
          width: 100%;
          padding: 10px;
          font-size: 12px;
          background-color: darkgreen;
          border: none;  
          color: white;
        }


        
          form p {
          width: 85%;
          margin: 20px;
          font-size: 10px;
        }
    
        .user-form {
            border: thick solid red;
            height: 70%;
            margin-top: 150px;
            
        }
    
    </style>
    
</head>
<body>
    
    <div class="container">
        
        <div class="form" >
            
            
            <!--Login form-->
            <div id="login" style="display: ;">
                
            <form class="user-form" method='post'>
                
                <input type="text" name="email" placeholder="email"/>
                <input type="password" name="password" placeholder="password"/>
                <button type="submit" name="lsubmit">Login</button>

                <p class="message">Not registered? <a class="toggle" style="color: forestgreen; ">Create an account</a></p>
                
            </form>
                
            </div>
            
            
            <!--Register form-->
            <div id="register" style="display: none;">
                
            <form class="user-form" method='post'>
                
                <input type="text" name="fname" placeholder="First Name"/>
                <input type="text" name="lname" placeholder="Last Name"/>
                <input type="text" name="email" placeholder="Email Address"/>
                <input type="number" name="phonenumber" placeholder="Phone Number"/>
                <input type="text" name="password" placeholder="Password"/>
                <button type="submit" name="rsubmit">Register</button>
                
                <p class="message">Already registered? <a class="toggle2" style="color: forestgreen; ">Sign In</a></p>
                
            </form>
                
            </div>  
            
            <?php
            
            if(isset($_POST['rsubmit'])) {
                
                $firstname = $conn->real_escape_string($_POST['fname']);
                $lastname = $conn->real_escape_string($_POST['lname']);
                $email = $conn->real_escape_string($_POST['email']);
                $phonenumber = $conn->real_escape_string($_POST['phonenumber']);
                $password = $conn->real_escape_string($_POST['password']);
            
            
            
                $user = new User($firstname, $lastname, $email, $password, $phonenumber);
                
                $user->registerUser();
            
            
            
            
            }
            
            
            
            ?>
            
            
            
        </div>
    
    </div>
    
<script type="text/javascript">
    
    //Toggle between Login & Register
    
    $(".toggle").click(function(){
        
        $("#login").css("display", "none");
        
        $("#register").css("display", "");

        });
    
    $(".toggle2").click(function(){
        
        $("#register").css("display", "none");
        
        $("#login").css("display", "");

        });
    
     
</script>    
    
</body>
</html>
