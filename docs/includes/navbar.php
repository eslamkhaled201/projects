
<?php function SetActive($Name){
  global $pageName;
  if($pageName==$Name){
    echo "active";
  }
} ?>
