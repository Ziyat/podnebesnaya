<?php $titlePage = "Авторизация";  include ROOT . '/views/content/layout/header.php'; $n = 18; ?>
<?php  include ROOT . '/views/content/layout/nav.php'; ?>
<div class="container">
  <div class="wrepper content">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
      <?php if(isset($errors)):?>
        <ul>
        <?php foreach ($errors as $error): ?>
          <li><?php echo $error; ?></li>
        <?php endforeach; ?>
        </ul>
      <?php endif;  ?>
        <h3><?php echo  TITLE_LOGIN; ?></h3>
          <form  action="#" method="post">
            <div class="form-group">
              <!-- <label for="email"><?php echo  EMAIL; ?></label> -->
              <input name="email" type="email" class="form-control" id="email" placeholder="<?php echo  EMAIL; ?>">
            </div>
            <div class="form-group">
              <!-- <label for="password"><?php echo  PASSWORD; ?></label> -->
              <input name="password" type="password" class="form-control" id="password" placeholder="<?php echo  PASSWORD; ?>">
            </div>
            <div class="btn-group" role="group" aria-label="...">
                <button type="submit" name="submit" class="btn btn-success"><?php echo  SUBMIT; ?></button>
                <button type="reset" class="btn btn-default"><?php echo  RESET; ?></button>
            </div>
            
          </form>
      </div>
    </div>
<?php  include ROOT . '/views/content/layout/footer.php'; ?>
