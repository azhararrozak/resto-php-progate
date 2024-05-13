<?php 
  require_once('data.php');
  require_once('menu.php');
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Café Progate</title>
  <link rel="stylesheet" type="text/css" href="./public/css/styles.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="menu-wrapper container">
    <h1 class="logo">Café Progate</h1>
    <h3>Jumlah item: <?php echo Menu::getCount() ?></h3>
    <form method="post" action="confirm.php">
    <div class="menu-items">
      <?php foreach ($menus as $menu): ?>
        <div class="menu-item">
          <!-- Cetak property image milik $menu -->
          <img src="<?php echo $menu->getImage() ?>">
          <h3 class="menu-item-name"><?php echo $menu->getName() ?></h3>
          <!-- Cetak property price milik $menu -->
          <!-- price dapat diubah karena belum private -->
          <?php // $menu->price = 0 ?>
          
          <p class="price">$<?php echo $menu->getTaxIncludedPrice() ?></p>
          <span>Qty: </span>
          <input type="text" value="0" name="<?php echo $menu->getName() ?>">
        </div>
      <?php endforeach ?>
    </div>
    <input type="submit" value="Pesan">
    </form>
  </div>
</body>
</html>
