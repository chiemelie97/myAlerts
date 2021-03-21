<?php

require("myCon.php");


class User {
  // Properties
    
  //User's chosen name    
  protected $userName;
    
  //User's possible password    
  protected $password;
    
  //User's ID will be stored in this variable using a Session variable    
  public $userId = 0;    
    
  //constructor
  function __construct($userName, $password) {
    $this->userName = $userName;
    $this->password = $password;
  }    
     
  //deconstructor    
  function __destruct() {
    
  }    
    
  // Set's userName
  function set_userName($userName) {
    $this->userName = $userName;
  }
    
  // Get's userName    
  function get_userName() {
    return $this->userName;
  }
  
  // Set's password    
  function set_password($password) {
    $this->password = $password;
  }
    
  // Get's password  
  function get_password() {
    return $this->password;
  }
    
  // Set's userId    
  function set_userId($userId) {
    $this->userId = $userId;
  }
    
  // Get's userId  
  function get_userId() {
    return $this->userId;
  }    
    
    
    
/* Register User */    
  public function registerUser($firstname, $lastname, $email, $phonenumber){
      
      
      $query = "INSERT INTO `Registered_User` (`UserId`, `FirstName`, `LastName`, `RegistartionDate`, `EmailAddress`, `PhoneNumber`) VALUES (NULL, '$firstname', '$lastname', CURRENT_TIMESTAMP, '$email', '$phonenumber')";
      
      //insert form data into MySQL database
      $result = $conn->query($query);
      
        if($result){
            
            echo "<script>alert('Hi $firstname you have been successfully registered click 
        <a href='index.html'>here</a> the login in with your email and password')</script>";
            
        } else {
            
            header('Location: index.php');
            
            echo "<script>alert('Registration Not Successful')</script>";  
        } 
      
         
  }     
    
  
  /* Retrieves user id of the current user */     
  protected function validateUser(){    
      
      $query = "SELECT * FROM Registered_User WHERE EmailAddress = $this->userName AND Password = $this->password";
      
      $result = sqlsrv_query($conn,$query);
      
      $num = sqlsrv_num_rows($result);
      
      if($num==1){
          
          $this.loginUser();
          } 
      
      else{
          
          return false;
          
          throw new Exception('Invalid Login Credentials');
          }
      
          
          mssql_free_result($result);

          mssql_close($conn);      
          }
    
}
?>