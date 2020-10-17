<?php
    session_start();
    function clearInp(  $inputValue){
       $ValidValue = htmlspecialchars($inputValue);
      $ValidValue= trim($ValidValue);
      return $ValidValue;
    } 
    $email =$_POST['InputEmail'];
    $password=$_POST['InputPassword'];
    $email= clearInp($email);
    $password =clearInp($password);
    $errors =array();
    $unvalidValue =array();
    $passRegx='/^[a-z A-z]{10,}[@#%$][0-9]{1,3}$/';
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email']="Enter valid Email";
        $unvalidValue['email']=$email;
        $_SESSION['inputVal']=$unvalidValue;
        $_SESSION['errors']=$errors;
        header('Location: LogInPage.php');
      } elseif (preg_match($passRegx,$password)==false){
        if ( $password !=NULL ){
          $_SESSION['passError']="Enter At least 10 letters , any special char(@#%$)and any 3 numbers ";
          $_SESSION['unvalidPass']=$password;
          header('Location: LogInPage.php');}
      }else{
        unset($_SESSION['passError']);
        unset($_SESSION['unvalidPass']);
         $_SESSION['Email']=$email;
        $_SESSION['pass']=$password;
        header('Location: products.php');
      }
      /**/
      
     
    
?>