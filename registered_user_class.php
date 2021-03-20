<?php

require('user_class.php');

class RegisteredUser extends User {
 
  // Properties   
  protected $firstName;
  protected $lastName;
  protected $email;
  protected $countryCode; 
  protected $phoneNmuber;
    
  //constructor
  function __construct($userName, $password, $firstName, $lastName, $email, $countryCode, $phoneNumber) {
    parent::__construct();
     $this->firstName = $firstName;
     $this->lastName = $lastName;  
     $this->email = $email;
     $this->countryCode = $countryCode;
     $this->phoneNumber = $phoneNumber;
      
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
    
  // Set's email
  function set_email($email) {
    $this->email = $email;
  }
    
  // Get's email    
  function get_email() {
    return $this->email;
  }
  
  // Set's countryCode    
  function set_countryCode($countryCode) {
    $this->countryCode = $countryCode;
  }
    
  // Get's countryCode    
  function get_countryCode() {
    return $this->countryCode;
  }  
    
  // Set's phoneNumber    
  function set_phoneNumber($phoneNumber) {
    $this->phoneNumber = $phoneNumber;
  }
    
  // Get's phoneNumber    
  function get_phoneNumber() {
    return $this->phoneNumber;
  }  
    

    
/* Login with username and password */    
  protected function loginUser(){
      
      $query = "SELECT * FROM Registered_User WHERE EmailAddress = $this->userName AND Password = $this->password";
      
      $result = sqlsrv_query($conn,$query);
      
      while ($row = mssql_fetch_array($result)) {
          
          $userId = $row['UserId'];
          
          $_SESSION['user_id'] = $row['UserId'];
          $_SESSION['user_full_name'] = $row['FirstName']." ".$row['LastName'];
          $_SESSION['registartion_date'] = $row['RegistartionDate'];
          $_SESSION['email_address'] = $row['EmailAddress'];
          $_SESSION['phone_number'] = $row['PhoneNumber'];
          }  
        
        $this->set_userId($userId);
      
            header('Location: home.php');
      
            mssql_free_result($result);

            mssql_close($conn); 
         
  } 
    
       
    
  
}

?>