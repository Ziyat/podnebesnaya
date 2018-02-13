<?php $titlePage = 'Кабинет';  include ROOT . '/views/content/layout/header.php'; $n = 16; ?>
<?php  include ROOT . '/views/content/layout/nav.php'; ?>
<div class="container">
  <div class="wrepper content">
    <div class="row">
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	    	<h2><?php echo USER_ACCOUNT; ?></h2>
	    	<h4><?php echo HI . ', ' . $user['name']; ?></h4>
	    	<div class="btn-group">
	    		<a class="btn btn-danger btn-xs" href="/<?php echo $lang ?>/cabinet/edit/"><?php echo EDIT_ACCOUNT; ?></a>
              <?php if($user['role'] === "admin"): ?>
	    		<a class="btn btn-warning btn-xs" href="/<?php echo $lang ?>/admin"><?php echo "admin panel"; ?></a>
              <?php endif; ?>
	    	</div>
    	</div>
    </div>
<?php  include ROOT . '/views/content/layout/footer.php'; ?>
