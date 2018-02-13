<?php $titlePage = 'Админ'; include ROOT . '/views/admin/layout/header.php'; ?>



            <div class="container text-capitalize">
                <div class="row">
                    <div class="col-lg-12">
                      <ol class="breadcrumb">
                        <li><a href="/<?php echo $lang; ?>/admin"><?php echo ADMIN_PANEL;?></a></li>
                        <li><a href="/<?php echo $lang; ?>/admin/product"><?php echo ADMIN_PRODUCTS;?></a></li>
                        <li class="active"><?php echo PRODUCT_EDIT.' '.ADMIN_PRODUCT; ?></li>
                      </ol>
                        <h4><?php echo PRODUCT_EDIT.' '.ADMIN_PRODUCT; ?></h4>
                        <row>
                            <div class="col-lg-6">
                                <form action="#" method="post" enctype="multipart/form-data">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="title_ru" >RU</span>
                                        <input type="text" class="form-control" name="title_ru" id="title_ru" 
                                        value="<?php echo $products['title_ru']; ?>">
                                    </div>
                                    <label></label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="title_cn" >中文</span>
                                        <input type="text" class="form-control" name="title_cn"  id="title_cn" 
                                        value="<?php echo $products['title_cn']; ?>">
                                    </div>
                                    <label></label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="title_en" >EN</span>
                                        <input type="text" class="form-control" name="title_en"  id="title_en" 
                                        value="<?php echo $products['title_en']; ?>">
                                    </div>
                                    <label></label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="desc_ru">RU</span>
                                        <input type="text" class="form-control" name="desc_ru" id="desc_ru" 
                                        value="<?php echo $products['desc_ru']; ?>">
                                    </div>
                                    <label></label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="desc_cn">中文</span>
                                        <input type="text" class="form-control" name="desc_cn" id="desc_cn" 
                                        value="<?php echo $products['desc_cn']; ?>">
                                    </div>
                                    <label></label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="desc_en">EN</span>
                                        <input type="text" class="form-control" name="desc_en" id="desc_en" 
                                        value="<?php echo $products['desc_en']; ?>">
                                    </div>
                                    <label></label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="price">$</span>
                                        <input type="text" class="form-control" name="price" id="price" 
                                        value="<?php echo $products['price']; ?>">
                                    </div>
                                    <label></label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="delivery_price">$</span>
                                        <input type="text" class="form-control" name="delivery_price" id="delivery_price" 
                                        value="<?php echo $products['delivery_price']; ?>">
                                    </div>
                                    <label></label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="weight"><?php echo UNIT_OF_WEIGHT; ?></span>
                                        <input type="text" class="form-control" name="weight" id="weight" 
                                        value="<?php echo $products['weight']; ?>">
                                    </div>
                                    <label></label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="length"><?php echo UNIT_OF_LENGTH; ?></span>
                                        <input type="text" class="form-control" name="length" id="length" 
                                        value="<?php echo $products['length']; ?>">
                                    </div>
                                    <label></label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="volume"><?php echo UNIT_OF_VOLUME; ?></span>
                                        <input type="text" class="form-control" name="volume" id="volume" 
                                        value="<?php echo $products['volume']; ?>">
                                    </div>
                                    <label></label>
                                    <div class="form-group">
                                        <label for=""><?php echo CATEGORY; ?></label>
                                        <select class="form-control" name="category">
                                        <?php foreach($categoriesList as $category): ?>
                                          <option
                                            <?php if($products['category_id'] == $category['id'])
                                            { echo 'selected';} ?> value="<?php echo $category['id']; ?>">
                                            <?php echo $category['title'].' > '.$category['cuisine'].''; ?>
                                          </option>
                                        <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label class="input-image" for="image">
                                                    <img class="img-responsive img-thumbnail"
                                                    src="
                                                    <?php echo Product::getImage($products['id']); ?>"
                                                    alt="<?php echo $products['title_'.$lang]; ?>">
                                                </label>
                                            </div> 
                                        </div>
                                        
                                        <input type="file" id="image" name="image">
                                        <p class="help-block text-lowercase"><?php echo IMAGE_HELP_MESSAGE; ?></p>
                                      </div>
                                    <div class="form-group">
                                        <label for=""><?php echo DELIVERY; ?></label>
                                         <select class="form-control" name="delivery">
                                             <option <?php if($products['delivery']){ echo 'selected';} ?> value="0"><?php echo NO; ?></option>
                                             <option <?php if($products['delivery']){ echo 'selected';} ?> value="1"><?php echo YES; ?></option>
                                         </select>
                                    </div>
                                    <div class="form-group">
                                        <label for=""><?php echo PRODUCT_NEW; ?></label>
                                         <select class="form-control" name="new">
                                             <option <?php if($products['new']){ echo 'selected';} ?> value="0"><?php echo NO; ?></option>
                                             <option <?php if($products['new']){ echo 'selected';} ?> value="1"><?php echo YES; ?></option>
                                         </select>
                                    </div>
                                    <div class="form-group">
                                        <label for=""><?php echo PRODUCT_RECOMMENDED; ?></label>
                                         <select class="form-control" name="recommended">
                                             <option <?php if($products['recommended']){ echo 'selected';} ?> value="0"><?php echo NO; ?></option>
                                             <option <?php if($products['recommended']){ echo 'selected';} ?> value="1"><?php echo YES; ?></option>
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



