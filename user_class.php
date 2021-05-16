<?php

  require("./myCon.php");


class User {
    
  // Properties
    
  //User's first name    
  protected $firstName;
    
  //User's last name    
  protected $lastName;
    
  //User's possible password    
  protected $password;
    
  //User's email    
  protected $userEmail;
    
  //User's contact number    
  protected $userNumber;
       
    
  //constructor
  function __construct($firstName, $lastName, $userEmail, $password, $userNumber) {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->userEmail = $userEmail;
    $this->userPassword = $userPassword;
    $this->userNumber = $userNumber;
  }    
     
  //deconstructor    
  function __destruct() {
    
  }    
    
  // Set's firstName
  function set_firstName($firstName) {
    $this->firstName = $firstName;
  }
    
  // Get's firstName    
  function get_firstName() {
    return $this->firstName;
  }
    
  // Set's lastName
  function set_lastName($lastName) {
    $this->lastName = $lastName;
  }
    
  // Get's lastName    
  function get_lastName() {
    return $this->lastName;
  }    
  
    
  // Set's userEmail
  function set_userEmail($userEmail) {
    $this->userEmail = $userEmail;
  }
    
  // Get's userEmail    
  function get_userEmail() {
    return $this->userEmail;
  }
    
  // Set's userPassword    
  function set_userPassword($userPassword) {
    $this->userPassword = $userPassword;
  }
    
  // Get's userPassword  
  function get_userPassword() {
    return $this->userPassword;
  }
  
  // Set's userNumber    
  function set_userNumber($userNumber) {
    $this->userNumber = $userNumber;
  }
    
  // Get's userNumber  
  function get_userNumber() {
    return $this->userNumber;
  }    
  
    
    
    
/* Register User */    
  public function registerUser(){
      
$password="Akuoma.96";
$user = "root";
$webserver="127.0.0.1";
$db = "myAlertsApp";
      


$conn = new mysqli($webserver, $user, $password, $db);  


      
      $query = "INSERT INTO `Registered_User` (`UserId`, `FirstName`, `LastName`, `RegistartionDate`, `EmailAddress`, `Password`, `PhoneNumber`) VALUES (NULL, '$this->firstName', '$this->lastName', CURRENT_TIMESTAMP, '$this->userEmail', '$this->userPassword', '$this->userNumber')";
      
      //insert form data into MySQL database
      $result = $conn->query($query);
      
        if($result){
            
            echo "<script>alert('Registration Successful')</script>";  

        } else {
            
            echo "<script>alert('Registration Not Successful')</script>";  
        } 
         
  }     
    
?>