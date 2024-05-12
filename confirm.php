<!-- Import data.php -->
<?php require_once('data.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="./public/css/styles.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="order-wrapper">
    <h2>Keranjang</h2>
    <?php $totalPayment = 0 ?>
    <!-- Gunakan foreach untuk mengulang $menus -->
    <?php foreach ($menus as $menu): ?>
      <!-- Deklarasikan variable $orderCount -->
      <?php 
        $orderCount = $_POST[$menu->getName()];
        $menu->setOrderCount($orderCount);
        $totalPayment += $menu->getTotalPrice();
      ?>
      <p class="order-amount">
        <!-- Cetak property name milik $menu menggunakan method getName -->
        <?php echo $menu->getName() ?>
        x
        <!-- Cetak variable $orderCount -->
        <?php echo $orderCount ?>
      </p>
      <p class="order-price">$<?php echo $menu->getTotalPrice() ?></p>
    <?php endforeach ?>
    <h3>Total: $<?php echo $totalPayment ?></h3>
  </div>
</body>
</html>