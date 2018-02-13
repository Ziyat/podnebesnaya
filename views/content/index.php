<?php $titlePage = 'Главная'; include ROOT . '/views/content/layout/header.php'; ?>
<?php  include ROOT . '/views/content/layout/nav.php'; ?>
<div class="container">
  <div class="wrepper">
    <div class="row">
      <!-- Nav & logo -->
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="logo animated flipInX">
          <img class="center-block" src="../template/content/img/logo.png" alt="">
        </div>
      </div>
      <!-- End Nav & logo -->
      <!-- Content -->
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="content animated zoomIn">
          <?php echo $content[3]; ?>
        </div>
      <!-- EndContent -->
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-6 animated bounceInLeft">
        <div class="thumbnail">
          <a href="/<?php echo $_SESSION['lang'];?>/menu"><img src="../template/content/img/nav_menu1.jpg" alt="..."></a>
          <!-- <div class="caption">
            <h3>Меню</h3>
            <p>Ознакомьтесь с нашим меню</p>
          </div> -->
        </div>
      </div>
      <div class="col-sm-6 col-md-6 animated bounceInRight">
        <div class="thumbnail">
          <a href="/<?php echo $_SESSION['lang'];?>/gallery"><img src="../template/content/img/nav_interior1.jpg" alt="..."></a>
          <!-- <div class="caption">
            <h3>Меню</h3>
            <p>Ознакомьтесь с нашим меню</p>
          </div> -->
        </div>
      </div>
    </div>
<?php  include ROOT . '/views/content/layout/footer.php'; ?>



