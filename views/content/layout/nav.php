<nav class="navbar navbar-inverse animated fadeInDown">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="c-hamburger c-hamburger--htx collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span>toggle menu</span>
      </button>
      <a class="navbar-brand" href="/<?php echo $_SESSION['lang']; ?>">
        <?php echo BRAND; ?>
      </a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a <?php if($n == 1){ echo 'class="active"';}  ?> id="restaurant" href="/<?php echo $lang; ?>/restaurant"> <?php echo RESTAURANT; ?></a></li>
        <li><a <?php if($n == 2){ echo 'class="active"';}  ?> id="menu" href="/<?php echo $lang; ?>/menu"><?php echo MENU; ?></a></li>
        <li><a <?php if($n == 3){ echo 'class="active"';}  ?> id="gallery" href="/<?php echo $lang; ?>/gallery"> <?php echo GALLERY; ?></a></li>
        <li><a <?php if($n == 4){ echo 'class="active"';}  ?> id="reviews" href="/<?php echo $lang; ?>/reviews"> <?php echo REVIEWS; ?></a></li>
        <li><a <?php if($n == 5){ echo 'class="active"';}  ?> id="contacts" href="/<?php echo $lang; ?>/contacts"> <?php echo CONTACTS; ?></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <?php if(!User::isGuest()): ?>
        <li>
          <a <?php if($n == 16){ echo 'class="active"';}  ?> href="/<?php echo $_SESSION['lang']; ?>/cabinet">
            <?php echo ACCOUNT; ?>
          </a>
        </li>
        <li>
          <a <?php if($n == 17){ echo 'class="active"';}  ?> href="/<?php echo $_SESSION['lang']; ?>/user/logout">
            <?php echo LOGOUT; ?>
          </a>
        </li>
        <li><a href="/<?php echo $lang; ?>/cart"><?php echo CART; ?></a></li>
      <?php else: ?>
        <li>
          <a <?php if($n == 18){ echo 'class="active"';}  ?> href="/<?php echo $_SESSION['lang']; ?>/user/login">
            <?php echo LOGIN; ?>
          </a>
        </li>
        <li>
          <a <?php if($n == 15){ echo 'class="active"';}  ?> href="/<?php echo $_SESSION['lang']; ?>/user/register">
            <?php echo CREATE_ACCOUNT; ?>
          </a>
        </li>
      <?php endif; ?>
          <li class="lang_button"><a <?php if($_SESSION['lang'] == 'en'){ echo 'class="active"';}?> href="/switch/en">EN</a></li>
          <li class="lang_button"><a <?php if($_SESSION['lang'] == 'cn'){ echo 'class="active"';}?> href="/switch/cn">中文</a></li>
          <li class="lang_button"><a <?php if($_SESSION['lang'] == 'ru'){ echo 'class="active"';}?> href="/switch/ru">РУ</a></li>
      </ul>

  </div>
</nav>


