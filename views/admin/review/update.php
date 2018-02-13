<?php $titlePage = 'Админ'; include ROOT . '/views/admin/layout/header.php'; ?>



            <div class="container text-capitalize">
                <div class="row">
                    <div class="col-lg-12">
                      <ol class="breadcrumb">
                        <li><a href="/<?php echo $lang; ?>/admin"><?php echo ADMIN_PANEL;?></a></li>
                        <li><a href="/<?php echo $lang; ?>/admin/review"><?php echo REVIEWS;?></a></li>
                        <li class="active"><?php echo PRODUCT_EDIT .' '.REVIEW; ?></li>
                      </ol>
                        <h4><?php echo PRODUCT_EDIT.' '.REVIEW; ?></h4>
                        <row>
                            <div class="col-lg-6">
                                <form action="#" method="post" enctype="multipart/form-data">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="name" ><?php echo NAME; ?></span>
                                        <input type="text" class="form-control" name="name" id="name" value="<?php echo $review['name']?>">
                                    </div>
                                    <label></label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="email" ><?php echo EMAIL; ?></span>
                                        <input name="email" type="text" class="form-control bfh-email" id="email" value="<?php echo $review['email']?>" />
                                    </div>
                                    <label></label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="user_id" ><?php echo ID_USER; ?></span>
                                        <input name="user_id" type="text" class="form-control" id="user_id" value="<?php echo $review['user_id']?>" />
                                    </div>
                                    <label></label>
                                    <div class="form-group">
                                        <label for="text"><?php echo TEXT; ?></label>
                                        <textarea class="form-control" name="text" id="text" rows="3"><?php echo $review['text']?></textarea>      
                                    </div>
                                    <label></label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="date" ><?php echo ORDER_DATE; ?></span>
                                        <input type="text" class="form-control" name="date"  id="date" 
                                        value="<?php echo $review['date']; ?>">
                                    </div>
                                    <label></label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="status" ><?php echo ORDER_STATUS; ?></span>
                                        <select class="form-control" name="status" id="status">
                                            <option value="1" <?php if($order['status']){echo 'selected';} ?>><?php echo REVIEW_TRUE; ?></option>
                                            <option value="0" <?php if(!$order['status']){echo 'selected';} ?>><?php echo REVIEW_FALSE; ?></option>
                                        </select>
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



