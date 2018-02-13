<?php $titlePage = 'Админ'; include ROOT . '/views/admin/layout/header.php'; ?>



            <div class="container text-capitalize">
                <div class="row">
                    <div class="col-lg-12">
                      <ol class="breadcrumb">
                        <li><a href="/<?php echo $lang; ?>/admin"><?php echo ADMIN_PANEL;?></a></li>
                        <li><a href="/<?php echo $lang; ?>/admin/product"><?php echo ADMIN_PRODUCTS;?></a></li>
                        <li class="active"><?php echo PRODUCT_ADD.' '.ADMIN_PRODUCT; ?></li>
                      </ol>
                        <h4><?php echo PRODUCT_ADD.' '.ADMIN_PRODUCT; ?></h4>
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
                                    <div class="input-group">
                                        <span class="input-group-addon" id="desc_ru">RU</span>
                                        <input type="text" class="form-control" name="desc_ru" id="desc_ru" placeholder="<?php echo DESC; ?>">
                                    </div>
                                    <label></label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="desc_cn">中文</span>
                                        <input type="text" class="form-control" name="desc_cn" id="desc_cn" placeholder="<?php echo DESC; ?>">
                                    </div>
                                    <label></label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="desc_en">EN</span>
                                        <input type="text" class="form-control" name="desc_en" id="desc_en" placeholder="<?php echo DESC; ?>">
                                    </div>
                                    <label></label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="price">$</span>
                                        <input type="text" class="form-control" name="price" id="price" placeholder="<?php echo PRICE; ?>">
                                    </div>
                                    <label></label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="delivery_price">$</span>
                                        <input type="text" class="form-control" name="delivery_price" id="delivery_price" placeholder="<?php echo DELIVERY_PRICE; ?>">
                                    </div>
                                    <label></label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="weight"><?php echo UNIT_OF_WEIGHT; ?></span>
                                        <input type="text" class="form-control" name="weight" id="weight" placeholder="<?php echo WEIGHT; ?>">
                                    </div>
                                    <label></label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="length"><?php echo UNIT_OF_LENGTH; ?></span>
                                        <input type="text" class="form-control" name="length" id="length" placeholder="<?php echo LENGTH; ?>">
                                    </div>
                                    <label></label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="volume"><?php echo UNIT_OF_VOLUME; ?></span>
                                        <input type="text" class="form-control" name="volume" id="volume" placeholder="<?php echo VOLUME; ?>">
                                    </div>
                                    <label></label>
                                    <div class="form-group">
                                        <label for=""><?php echo CATEGORY; ?></label>
                                        <select class="form-control" name="category">
                                        <?php foreach($categoriesList as $category): ?>
                                          <option value="<?php echo $category['id']; ?>">
                                            <?php echo $category['title'].' > '.$category['cuisine'].''; ?>
                                          </option>
                                        <?php endforeach; ?>
                                        </select>
                                    </div>
                                      <div class="form-group">
                                        <label for="image"><?php echo IMAGE;?></label>
                                        <input type="file" id="image" name="image">
                                        <p class="help-block text-lowercase"><?php echo IMAGE_HELP_MESSAGE; ?></p>
                                      </div>
                                    <div class="form-group">
                                        <label for=""><?php echo DELIVERY; ?></label>
                                         <select class="form-control" name="delivery">
                                             <option value="0"><?php echo NO; ?></option>
                                             <option value="1"><?php echo YES; ?></option>
                                         </select>
                                    </div>
                                    <div class="form-group">
                                        <label for=""><?php echo PRODUCT_NEW; ?></label>
                                         <select class="form-control" name="new">
                                             <option value="0"><?php echo NO; ?></option>
                                             <option value="1"><?php echo YES; ?></option>
                                         </select>
                                    </div>
                                    <div class="form-group">
                                        <label for=""><?php echo PRODUCT_RECOMMENDED; ?></label>
                                         <select class="form-control" name="recommended">
                                             <option value="0"><?php echo NO; ?></option>
                                             <option value="1"><?php echo YES; ?></option>
                                         </select>
                                    </div>
                                    <button class="btn btn-lg btn-success btn-block" type="submit" name="submit"><?php echo SAVE; ?></button>
                                </form>
                            </div>
                        </row>
                        
                        
                    </div>
                </div>
            </div>
       
      
<?php  include ROOT . '/views/admin/layout/footer.php'; ?>



