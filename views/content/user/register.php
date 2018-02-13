<?php $titlePage = "Регистрация";  include ROOT . '/views/content/layout/header.php'; $n = 15; ?>
<?php  include ROOT . '/views/content/layout/nav.php'; ?>
<div class="container">
  <div class="wrepper content">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
      <?php if($result):?>
        <div>
          <h3><?php echo REG_SUCCEESS; ?></h3>
        </div>
      <?php else: ?>
        <?php if(isset($errors) && is_array($errors)):?>
        <ul>
          <?php foreach ($errors as $error): ?>
          <li>- <?php echo $error; ?></li>
          <?php endforeach; ?>
        </ul>
        <?php endif; ?>
        <h3><?php echo CREATE_ACCOUNT; ?></h3>
          <form action="#" method="post">
            <div class="form-group">
              <!-- <label for="name"><?php echo  NAME .'*'; ?></label> -->
              <input name="name" type="text" class="form-control" id="name" placeholder="<?php echo  NAME .'*'; ?>">
            </div>
            <div class="form-group">
              <!-- <label for="email"><?php echo  EMAIL .'*'; ?></label> -->
              <input name="email" type="email" class="form-control" id="email" placeholder="<?php echo  EMAIL .'*'; ?>">
            </div>
            <div class="form-group">
              <!-- <label for="email"><?php echo  PHONE .'*'; ?></label> -->
              <!-- <input type="text" class="input-medium bfh-phone" data-format="+1 (ddd) ddd-dddd"> -->
              <input name="phone" type="text" class="form-control bfh-phone" id="phone" data-format="+998 (dd) ddd-dd-dd">
            </div>
            <div class="form-group">
              <!-- <label for="password"><?php echo  PASSWORD .'*'; ?></label> -->
              <input name="password" type="password" class="form-control" id="password" placeholder="<?php echo PASSWORD .'*'; ?>">
            </div>
            <div class="form-group">
              <!-- <label for="repassword"><?php echo  REPASSWORD .'*'; ?></label> -->
              <input name="repassword" type="password" class="form-control" id="repassword" placeholder="<?php echo REPASSWORD .'*'; ?>">
            </div>
            <div class="btn-group" role="group" aria-label="...">
                <button type="submit" name="submit" class="btn btn-success"><?php echo  SUBMIT; ?></button>
                <button type="reset" class="btn btn-default"><?php echo  RESET; ?></button>
            </div>
            
          </form>
      <?php endif; ?>
      </div>
    </div>
<?php  include ROOT . '/views/content/layout/footer.php'; ?>
