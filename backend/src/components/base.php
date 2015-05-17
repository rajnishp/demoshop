<!DOCTYPE html>
<html dir="ltr" class="ltr" lang="en">
<head>
<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<!-- Mobile viewport optimized: h5bp.com/viewport -->
<meta name="viewport" content="width=device-width" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> <?= $title ?> </title>
<meta name="description" content="Default Description" />
<meta name="keywords" content="Corner shop, Varien, E-commerce" />
<meta name="robots" content="INDEX,FOLLOW" />

<?php include_once 'static/header/header.php'; ?>

</head>

<body id="offcanvas-container" class="  cms-index-index cms-home offcanvas-container layout-fullwidth fs12  ">

<section id="ves-wrapper">
    <section id="page" class="offcanvas-pusher" role="main">
      <?php include_once 'static/navbar/navbar.php'; ?>
      <?php 
      	//include_once 'static/components/sliderbar.php'
      ?>
    







    <section id="columns" class="offcanvas-siderbars">
<?php if ($type == "order"){}
else {	?>
	<?php include_once 'components/sidebar.php'; ?>

	<?php    if ($type == "product"){
            include_once 'components/product.php';
          } else {
            include_once 'components/productList.php';
          }
  } ?>
										</div>
		

			</div>
        </section>

        
 <?php include_once 'static/footer/footer.php'; ?>

</section>
</body>
</html>
