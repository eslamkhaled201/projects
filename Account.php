<?php 
session_start();
$pageName= "Account";
if(!isset($_SESSION['Email']) && !isset($_SESSION['pass'])){
   header('Location: LogInPage.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Account</title>

  <?php require_once'includes/styleSheetsLinks.php'; ?>

</head>

<body class="body-img">

  <?php require_once'includes/navbar.php'; ?>
  <section class="body-layer">

    <section class=" container Edit-user-acc  mb-5 ">
      <div class="row d-flex ">

        <div  class=" col-md-4 col-sm-12  d-flex align-items-center justify-content-center user-info">
          <div class="containter  ">
            <span class="User-icon fas fa-user-circle"></span>
            <h3 > Account info</h3>
            <div class="row  mt-3  my-1 info-con">
              <i class="far fa-user"><h4><?php if(isset($_SESSION['Name'])){ echo $_SESSION['Name'];}else{echo " User Name";} ?> </h4> </i>
              <i class="fas fa-at"><h4><?php if(isset($_SESSION['Email'])){ echo $_SESSION['Email'];}else{echo " Email";} ?> </h4> </i> 
              <i class="fas fa-mobile-alt"><h4><?php if(isset($_SESSION['Phone'])){ echo $_SESSION['Phone'];}else{echo " Phone";} ?> </h4> </i> 
              <i class="fab fa-facebook-square"><a href="<?php if(isset($_SESSION['faceUrl'])){ echo $_SESSION['faceUrl'];} ?>"><?php if(isset($_SESSION['faceUrl'])){echo " Facebook URL ";}?> </a> </i> 
              <i class="fab fa-twitter"><a href="<?php if(isset($_SESSION['twitterUrl'])){ echo $_SESSION['twitterUrl'];}?>"> <?php if(isset($_SESSION['twitterUrl'])){echo " twitter URL";}?> </a> </i> 
              <i class="fab fa-instagram"><a href="<?php if(isset($_SESSION['instaUrl'])){ echo $_SESSION['instaUrl'];}?>"> <?php  if(isset($_SESSION['instaUrl'])){echo " instagram URL ";}?> </a> </i> 
            </div>
          </div>
        </div>
 
        <div class="col-md-8 col-sm-12 form-container">
          <h3 class="d-inline py-3"> <i class="fas fa-user-edit"></i> Edit Account</h3>
          <form class="edit-Acc" action="http://localhost/project1/validateAcc.php" method="post">
            <div class=" my-3">
              <input type="text" name="userName" placeholder="User Name" id="User Name" 
              <?php if (isset($_SESSION['nameError'])){echo "value='".$_SESSION['unvalidName']."'";}?>>
              <?php if (isset($_SESSION['nameError'])){echo"<div class='alert alert-danger '> <i class='fas fa-exclamation-circle'></i>".$_SESSION['nameError']. "</div>";} ?>
            </div>
            <div class="mb-3">
              <input type="text" name="userMail"  placeholder="Email" id="Email" required
               <?php if (isset($_SESSION['emailError'])){echo "value='".$_SESSION['unValidMail']."'";}?>>
               <?php if (isset($_SESSION['emailError'])){echo"<div class='alert alert-danger '> <i class='fas fa-exclamation-circle'></i>".$_SESSION['emailError']. "</div>";} ?>
            </div>
           <!-- <div class="mb-3">
              <input type="password" name="currentPass" class="" placeholder=" Current Password" id="Current Passwor" required 
              <//?php if (isset($_SESSION['passError'])){echo "value='".$_SESSION['unvalidPass']."'";}?> >
              <//?php if (isset($_SESSION['passError'])){echo"<div class='alert alert-danger '> <i class='fas fa-exclamation-circle'></i>".$_SESSION['passError']. "</div>";} ?>
            </div> -->
            <div class="mb-3">
              <input type="password" name="newPass" class="" placeholder="New Password" id="New Password" required 
              <?php if (isset($_SESSION['passError'])){echo "value='".$_SESSION['unvalidPass']."'";}?> >
              <?php if (isset($_SESSION['passError'])){echo"<div class='alert alert-danger '> <i class='fas fa-exclamation-circle'></i>".$_SESSION['passError']. "</div>";} ?>
            </div>
            <div class="mb-3">
              <input type="number" name="userPhone" placeholder="Phone" id="Phone" 
              <?php if (isset($_SESSION['phoneError'])){echo "value='".$_SESSION['unvalidPhone']."'";}?>>
              <?php if (isset($_SESSION['phoneError'])){echo"<div class='alert alert-danger '> <i class='fas fa-exclamation-circle'></i>".$_SESSION['phoneError']. "</div>";} ?>
            </div>
            <div class="mb-3">
              <input type="text" name="userInsta"  placeholder="Instagram URL" id="Instagram URL" 
              <?php if (isset($_SESSION['instaUrlError'])){echo "value='".$_SESSION['unValidInsta']."'";}?>>
              <?php if (isset($_SESSION['instaUrlError'])){echo"<div class='alert alert-danger '> <i class='fas fa-exclamation-circle'></i>".$_SESSION['instaUrlError']. "</div>";} ?>
            </div>
            <div class="mb-3 ">
              <input type="url" name="userFace"  placeholder="Facebook URL" id="Facebook URL" 
              <?php if (isset($_SESSION['faceUrlError'])){echo "value='".$_SESSION['unValidFace']."'";}?>>
              <?php if (isset($_SESSION['faceUrlError'])){echo"<div class='alert alert-danger '> <i class='fas fa-exclamation-circle'></i>".$_SESSION['faceUrlError']. "</div>";} ?>
            </div>
            <div class="mb-3 pb-3 ">
              <input type="url" name="userTwitter"  placeholder="twiter URL" id="twitter URL" 
              <?php if (isset($_SESSION['twitterUrlError'])){echo "value='".$_SESSION['unValidtwiter']."'";}?>>
              <?php if (isset($_SESSION['twitterUrlError'])){echo"<div class='alert alert-danger '> <i class='fas fa-exclamation-circle'></i>".$_SESSION['twitterUrlError']. "</div>";} ?>
            </div>
            <button type="submit" class="btn btn-dark">Confirm</button>
          </form>
        </div>
      </div>
    </section>

  </section>
  <?php require_once'includes/script_links.php'; ?>

</html>