<?php 
    session_start();
    $pageName= "Products";
    $products =[
        'product1'=>[
            'img' =>'images/asset 47.jpeg',
            'h5' => '400LE',
            'p' => 'Some quick example text to build on the card title and make up the bulk of the cards content.'
        ],
        'product2'=>[
            'img' =>'images/asset 47.jpeg',
            'h5' => '500LE',
            'p' => 'Some quick example text to build on the card title and make up the bulk of the cards content.'
        ],
        'product3'=>[
            'img' =>'images/asset 47.jpeg',
            'h5' => '1500LE',
            'p' => 'Some quick example text to build on the card title and make up the bulk of the cards content.'
        ],
        'product4'=>[
            'img' =>'images/asset 47.jpeg',
            'h5' => '2500LE',
            'p' => 'Some quick example text to build on the card title and make up the bulk of the cards content.'
        ],
        'product5'=>[
            'img' =>'images/asset 47.jpeg',
            'h5' => '500LE',
            'p' => 'Some quick example text to build on the card title and make up the bulk of the cards content.'
        ],
        'product6'=>[
            'img' =>'images/asset 47.jpeg',
            'h5' => '500LE',
            'p' => 'Some quick example text to build on the card title and make up the bulk of the cards content.'
        ],
    ]
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Products</title>
    <?php require_once'includes/styleSheetsLinks.php'; ?>
</head>

<body>
<?php require_once'includes/navbar.php'; ?>
  <header class="head">
    <div class="layer"></div>
    <h2>Welcome To Our Store</h2>
  </header> 
  <section class="OurProcuts ">
      <h1 class="my-5 text-center ">Our Products</h1>
      <div class="Products  container">
      <div class="row my-3 justify-content-between">
          <?php 
          foreach($products as $product){
              
          ?>
          
         <div  class="col-md-4 mb-5" >
            <div class="pro">
            <?php echo "<img src='".$product['img']."' class='card-img-top img-fluid' alt='...'>";?>
            <div class="card-body">
            <?php echo"<h5 class='card-title' >".$product['h5']."</h5>";?>
            <?php echo"<p class='card-text'>".$product['p']." </p>";?>
             </div>
            </div>
        </div>
        <?php
         
        }
        ?>
      </div>
  </section>
  <?php require_once'includes/script_links.php'; ?>
</body>

</html>