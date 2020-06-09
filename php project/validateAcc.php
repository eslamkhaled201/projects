<?php 

session_start();
function clearInp(  $inputValue){
   $ValidValue = htmlspecialchars($inputValue);
 $ValidValue= trim($ValidValue);
  return $ValidValue;
}
$GLOBALS['errors']=array();
$GLOBALS['unvalideVals']=array();
function unSetErorrs($ChekedValue,$unVdValSession, $ErorrName,$validValSessName,$forwordLink){
  unset($_SESSION[$ErorrName]);
  unset($_SESSION[$unVdValSession]);
  $_SESSION[$validValSessName]=$ChekedValue;
  header("Location: $forwordLink");
}
$userEmail = $_POST['userMail'];
//$oldPass =$_POST['currentPass'];
$userPass =$_POST['newPass'];
$phone =$_POST['userPhone'];
$name=$_POST['userName'];
$face =$_POST['userFace'];
$insta=$_POST['userInsta'];
$twiter=$_POST['userTwitter'];
$userEmail= clearInp($userEmail);
$oldPass =clearInp($oldPass);
$userPass =clearInp($userPass);
$name= clearInp($name);
$phone =clearInp($phone);
$insta= clearInp($insta);
$face =clearInp($face);
$twiter =clearInp($twiter);

$PHoneRegx= '/^(010|012|015|011)[0-9]{8}$/';
$NameRegx = '/^[A-Z a-z]{5,25}$/';
$passRegx='/^[a-z A-z]{10,}[@#%$][0-9]{1,3}$/';


if(preg_match($NameRegx,$name)==false ){
  if ( $name !=NULL ){
    $_SESSION['nameError']="Must contains form 5-25 small or Capital letters only";
    $_SESSION['unvalidName']=$name;
    header('Location: Account.php');
  }
}else{
  unSetErorrs($name,'nameError','unvalidName','Name','Account.php');
}
if(preg_match($passRegx,$userPass)==false){
  if ( $userPass !=NULL ){
    $_SESSION['passError']="Enter At least 10 letters , any special char(@#%$)and any 3 numbers ";
    $_SESSION['unvalidPass']=$userPass;
    header('Location: Account.php');
  }
}else{
  unSetErorrs($userPass,'passError','unvalidPass','pass','Account.php');
}

if(!filter_var($userEmail,FILTER_VALIDATE_EMAIL)){
        $_SESSION['emailError']="Enter valid Email";
        $_SESSION['unValidMail']=$userEmail;
     header('Location: Account.php');
}else{
  unSetErorrs($userEmail,'unValidMail','emailError','Email','Account.php');
}
if(preg_match($PHoneRegx,$phone)==false ){
  if ( $phone !=NULL ){
  $_SESSION['phoneError']="Enter valid Egyptiation mobile number";
  $_SESSION['unvalidPhone']=$phone;
  header('Location: Account.php');
  }
}else{
  unSetErorrs($phone,'phoneError','unvalidPhone','Phone','Account.php');
}
if(!filter_var($face,FILTER_VALIDATE_URL)){
  if ( $face!=NULL ){
    $_SESSION['faceUrlError']="Enter valid Face URL";
    $_SESSION['unValidFace']=$face;
    header('Location: Account.php');
  }
}else{
  unSetErorrs($face,'unValidFace','faceUrlError','faceUrl','Account.php');
}
if(!filter_var($insta,FILTER_VALIDATE_URL)){
  if ( $insta!=NULL ){
    $_SESSION['instaUrlError']="Enter valid Instagram URL";
    $_SESSION['unValidInsta']=$insta;
    header('Location: Account.php');
  }
}else{
  unSetErorrs($insta,'unValidInsta','instaUrlError','instaUrl','Account.php');
}
if(!filter_var($twiter,FILTER_VALIDATE_URL)){
  if ( $twiter!=NULL ){
    $_SESSION['twitterUrlError']="Enter valid twitter URL";
    $_SESSION['unValidtwiter']=$twiter;
    header('Location: Account.php');
  }
}else{
  unSetErorrs($twiter,'unValidtwiter','twitterUrlError','twitterUrl','Account.php');
}


?> 