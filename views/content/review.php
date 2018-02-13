<?php $titlePage = 'Отзывы';  include ROOT . '/views/content/layout/header.php'; ?>
<?php  include ROOT . '/views/content/layout/nav.php'; ?>
<div class="container content">
  <div class="wrepper">
    <div class="row">
    <!--  -->
      <!-- Content -->
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
      <?php foreach($comments as $comment):?>
        <div class="reviews">
          <img class="img-circle" src="/template/content/img/reviews.jpg" alt="...">
          <h3><?php echo $comment['name']; ?></h3>
          <p><?php echo $comment['text']; ?></p>
          <h5><?php echo $comment['date']; ?></h5>
        </div>
      <?php endforeach; ?>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <?php if(isset($_SESSION['user'])):?>
          <?php if($result):?>
            <div>
              <h3><?php echo REVIEW_SUCCEESS; ?></h3>
            </div>
          <?php else: ?>
            <?php if(isset($errors) && is_array($errors)):?>
              <ul>
                <?php foreach ($errors as $error): ?>
                <li>- <?php echo $error; ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
            <h3><?php echo TITLE_REVIEW; ?></h3>
            <form action="#" method="post">
              <div class="form-group">
                <input name="name" type="text" class="form-control" value="<?php if(!isset($name)){ echo $name;}else{echo $user['name'];} ?>" >
              </div>
              <div class="form-group">
                <input name="email" type="email" class="form-control" value="<?php if(!isset($email)){ echo $email;}else{echo $user['email'];} ?>" >
              </div>
              <div class="form-group">
                <textarea name="text" class="form-control" rows="3" placeholder="<?php echo TEXT; ?>"><?php if(isset($text)){ echo $text;}else{echo '';} ?></textarea>
              </div>
              <div class="btn-group" role="group" aria-label="...">
                      <button type="submit" name="submit" class="btn btn-success"><?php echo  SUBMIT; ?></button>
                      <button type="reset" class="btn btn-default"><?php echo  RESET; ?></button>
              </div>
            </form>
          <?php endif; ?>
        <?php else: ?>
          <h3><?php echo ERROR_NOT_AUTH; ?></h3>
          <a class="btn btn-success" href="/<?php echo $lang; ?>/user/login"><?php echo LOGIN; ?></a>
        <?php endif; ?>  
      </div>
    </div>
<?php  include ROOT . '/views/content/layout/footer.php'; ?>
