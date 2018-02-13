<?php $titlePage = 'Админ'; include ROOT . '/views/admin/layout/header.php'; ?>



            <div class="container text-capitalize">
                <div class="row">
                    <div class="col-lg-12">
                      <ol class="breadcrumb">
                        <li><a href="/<?php echo $lang; ?>/admin"><?php echo ADMIN_PANEL;?></a></li>
                        <li class=" active"><?php echo ADMIN_PRODUCTS;?></li>
                      </ol>
                      <a href="/<?php echo $lang .'/admin/product/create';?>" class="btn btn-success">
                        <i class="fa fa-plus"></i> <?php echo PRODUCT_ADD.' '.ADMIN_PRODUCT; ?>
                      </a>
                        <div class="table-responsive">
                          <table class="table table-condensed table-hover">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <!-- <th><?php echo IMAGE; ?></th> -->
                                      <th><?php echo TITLE; ?></th>
                                      <th><?php echo PRICE; ?></th>
                                      <th><?php echo DELIVERY_PRICE; ?></th>
                                      <th><?php echo CATEGORY; ?></th>
                                      <th><?php echo DELIVERY; ?></th>
                                      <th><?php echo PRODUCT_NEW; ?></th>
                                      <th><?php echo PRODUCT_RECOMMENDED; ?></th>
                                      <th><?php echo PRODUCT_EDIT; ?></th>
                                      <th><?php echo PRODUCT_DELETE; ?></th>
                                  </tr>
                              </thead>
                              <tbody>
                              <?php foreach($productList as $product): ?>
                                  <tr>
                                      <td><?php echo $product['id']; ?></td>
                                      <!-- <td> -->
                                      <!-- <img class="img-responsive" src="<?php echo Product::getImage($product['id']); ?>"></td> -->
                                      <td><?php echo $product['title']; ?></td>
                                      <td><?php echo $product['price']; ?></td>
                                      <td><?php echo $product['delivery_price']; ?></td>
                                      <td><?php echo $product['category']; ?></td>
                                      <td><?php if($product['delivery']){echo '<i class="text-success fa fa-check"></i>'; }else{echo '<i class="text-danger fa fa-close"></i>'; } ?></td>
                                      <td><?php if($product['new']){echo '<i class="text-success fa fa-check"></i>'; }else{echo '<i class="text-danger fa fa-close"></i>'; } ?></td>
                                      <td><?php if($product['recommended']){echo '<i class="text-success fa fa-check"></i>'; }else{echo '<i class="text-danger fa fa-close"></i>'; } ?></td>
                                      <td><a href="/<?php echo $lang .'/admin/product/update/'. $product['id'];?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a></td>
                                      <td><a href="/<?php echo $lang .'/admin/product/delete/'. $product['id'];?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
                                  </tr>
                                <?php endforeach; ?>
                              </tbody>
                          </table>
                        </div>
                    </div>
                </div>
            </div>
       
      
<?php  include ROOT . '/views/admin/layout/footer.php'; ?>



