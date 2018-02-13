<?php $titlePage = 'Админ'; include ROOT . '/views/admin/layout/header.php'; ?>



            <div class="container text-capitalize">
                <div class="row">
                    <div class="col-lg-12">
                      <ol class="breadcrumb">
                        <li><a href="/<?php echo $lang; ?>/admin"><?php echo ADMIN_PANEL;?></a></li>
                        <li><a href="/<?php echo $lang; ?>/admin/cuisine"><?php echo ADMIN_CUISINE;?></a></li>
                        <li class="active"><?php echo PRODUCT_ADD.' '.ADMIN_CUISINES; ?></li>
                      </ol>
                        <h4><?php echo PRODUCT_ADD.' '.ADMIN_CUISINES; ?></h4>
                        <?php if(isset($errors) && is_array($errors)):?>
                        <div class="alert alert-warning" role="alert">
                        <h4><span class="fa fa-warning"></span> <?php echo WARNING;?></h4>
                            <ul>
                              <?php foreach ($errors as $error): ?>
                              <li>- <?php echo $error; ?></li>
                              <?php endforeach; ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                        <row>
                            <div class="col-lg-6">
                                <form method="post" enctype="multipart/form-data">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="title_ru">RU</span>
                                        <input type="text" class="form-control"  name="title_ru"id="title_ru" placeholder="<?php echo TITLE; ?>">
                                    </div>
                                    <label></label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="title_cn">中文</span>
                                        <input type="text" class="form-control" name="title_cn" id="title_cn" placeholder="<?php echo TITLE; ?>">
                                    </div>
                                    <label></label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="title_en">EN</span>
                                        <input type="text" class="form-control" name="title_en" id="title_en" placeholder="<?php echo TITLE; ?>">
                                    </div>
                                    <label></label>
                                    <button class="btn btn-lg btn-success btn-block" type="submit" name="submit"><?php echo SAVE; ?></button>
                                </form>
                            </div>
                        </row>
                        
                        
                    </div>
                </div>
            </div>
       
      
<?php  include ROOT . '/views/admin/layout/footer.php'; ?>



