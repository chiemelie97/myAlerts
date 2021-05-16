<?php

require("./user_class.php");

class RegisteredUser extends User {
 
  // Properties  
    
  //User's ID will be stored in this variable using a Session variable    
  //public $userId = 0;     
  
  //protected $countryCode; 
    
  //constructor
  function __construct($firstName, $lastName, $userEmail, $password, $userNumber, $countryCode) {
    //parent::__construct();
     $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->userEmail = $userEmail;
    $this->userPassword = $userPassword;
    $this->userNumber = $userNumber;
     $this->countryCode = $countryCode;
    
      
  }
    
  //deconstructor    
  function __destruct() {
    
  } 
    
  /*    
  // Set's userId    
  function set_userId($userId) {
    $this->userId = $userId;
  }
    
  // Get's userId  
  function get_userId() {
    return $this->userId;
    
  }        
      
  
  // Set's countryCode    
  function set_countryCode($countryCode) {
    $this->countryCode = $countryCode;
  }
    
  // Get's countryCode    
  function get_countryCode() {
    return $this->countryCode;
  }  

*/
    

    
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