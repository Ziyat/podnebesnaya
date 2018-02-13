<?php $titlePage = 'Админ'; include ROOT . '/views/admin/layout/header.php'; ?>



            <div class="container text-capitalize">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <h1><?php echo HI .' '. $user['name'];?></h1>
                        <div class="list-group">
                          <a href="/<?php echo $lang; ?>/admin/product" class="list-group-item">
                            <h4 class="list-group-item-heading"><?php echo ADMIN_PRODUCTS; ?></h4>
                            <p class="list-group-item-text"></p>
                          </a>
                          <a href="/<?php echo $lang; ?>/admin/category" class="list-group-item">
                          <h4 class="list-group-item-heading"><?php echo ADMIN_CATS; ?></h4>
                          <p class="list-group-item-text"></p>
                          </a>
                          <a href="/<?php echo $lang; ?>/admin/cuisine" class="list-group-item">
                          <h4 class="list-group-item-heading"><?php echo ADMIN_THE_CUISINES; ?></h4>
                           <p class="list-group-item-text"></p>
                          </a>
                          <a href="/<?php echo $lang; ?>/admin/order" class="list-group-item"> <h4 class="list-group-item-heading"><?php echo ADMIN_ORDERS.' <span class="badge">'.Order::getNewOrderCount().'</span>'; ?></h4><p class="list-group-item-text"></p></a>
                          <a href="/<?php echo $lang; ?>/admin/review" class="list-group-item"> <h4 class="list-group-item-heading"><?php echo ADMIN_REVIEWS; ?></h4><p class="list-group-item-text"></p></a>
                        </div>                 
                    </div>
                </div>
            </div>
       
      
<?php  include ROOT . '/views/admin/layout/footer.php'; ?>



