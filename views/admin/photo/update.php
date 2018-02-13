<?php $titlePage = 'Админ'; include ROOT . '/views/admin/layout/header.php'; ?>



            <div class="container text-capitalize">
                <div class="row">
                    <div class="col-lg-12">
                      <ol class="breadcrumb">
                        <li><a href="/<?php echo $lang; ?>/admin"><?php echo ADMIN_PANEL;?></a></li>
                        <li><a href="/<?php echo $lang; ?>/admin/photo"><?php echo PHOTOS;?></a></li>
                        <li class="active"><?php echo PRODUCT_EDIT.' '.PHOTES; ?></li>
                      </ol>
                        <h4><?php echo PRODUCT_EDIT.' '.PHOTES; ?></h4>
                        <row>
                            <div class="col-lg-6">
                                <form action="#" method="post" enctype="multipart/form-data">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="title_ru" >RU</span>
                                        <input type="text" class="form-control" name="title_ru" id="title_ru" 
                                        value="<?php echo $photo['title_ru']; ?>">
                                    </div>
                                    <label></label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="title_cn" >中文</span>
                                        <input type="text" class="form-control" name="title_cn"  id="title_cn" 
                                        value="<?php echo $photo['title_cn']; ?>">
                                    </div>
                                    <label></label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="title_en" >EN</span>
                                        <input type="text" class="form-control" name="title_en"  id="title_en" 
                                        value="<?php echo $photo['title_en']; ?>">
                                    </div>
                                    <label></label>
                                    <div class="form-group">
                                    <label for=""><?php echo CATEGORY; ?></label>
                                        <select class="form-control" name="gallery_id">
                                            <?php foreach($galleries as $gallery): ?>
                                              <option
                                                <?php if($gallery['id'] == $photo['gallery_id'])
                                                { echo 'selected';} ?> value="<?php echo $gallery['id']; ?>">
                                                <?php echo $gallery['title_'.$lang]; ?>
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
                                                    <?php echo Photo::getImage($photo['id']); ?>"
                                                    alt="<?php echo $photo['title_'.$lang]; ?>">
                                                </label>
                                            </div> 
                                        </div>
                                        
                                        <input type="file" id="image" name="image">
                                        <p class="help-block text-lowercase"><?php echo IMAGE_HELP_MESSAGE; ?></p>
                                      </div>
                                    <button class="btn btn-lg btn-success btn-block" type="submit" name="submit"><?php echo SAVE; ?></button>
                                </form>
                            </div>
                        </row>
                        
                        
                    </div>
                </div>
            </div>
       
      
<?php  include ROOT . '/views/admin/layout/footer.php'; ?>



