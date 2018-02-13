<?php $titlePage = 'Админ'; include ROOT . '/views/admin/layout/header.php'; ?>



            <div class="container text-capitalize">
                <div class="row">
                    <div class="col-lg-12">
                      <ol class="breadcrumb">
                        <li><a href="/<?php echo $lang; ?>/admin"><?php echo ADMIN_PANEL;?></a></li>
                        <li class=" active"><?php echo ADMIN_REVIEWS;?></li>
                      </ol>
                      <?php if(isset($reviews) && is_array($reviews)): ?>
                        <div class="table-responsive">
                          <table class="table table-condensed table-hover">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <th><?php echo NAME; ?></th>
                                      <th><?php echo EMAIL; ?></th>
                                      <th><?php echo ORDER_DATE; ?></th>
                                      <th><?php echo ORDER_STATUS; ?></th>
                                  </tr>
                              </thead>
                              <tbody>
                              <?php foreach ($reviews as $review): ?>
                                  <tr>
                                      <td><?php echo $review['id']; ?></td>
                                      <td><?php echo $review['name']; ?></td>
                                      <td class="text-lowercase"><?php echo $review['email']; ?></td>
                                      <td><?php echo Order::replaceFormatDate($review['date']); ?></td>
                                      <td><?php echo Review::getTextStatus($review['status']); ?></td>
                                      <td>
                                      <a href="/<?php echo $lang .'/admin/review/view/'. $review['id'];?>" class="btn-info btn-sm" title="<?php echo ORDER_VIEW; ?>"><i class="fa fa-eye"></i></a>
                                      <a href="/<?php echo $lang .'/admin/review/update/'. $review['id'];?>" class="btn-warning btn-sm" title="<?php echo PRODUCT_EDIT; ?>" ><i class="fa fa-edit"></i></a>
                                      <a href="/<?php echo $lang .'/admin/review/delete/'. $review['id'];?>" class="btn-danger btn-sm" title="<?php echo PRODUCT_DELETE; ?>"><i class="fa fa-trash"></i></a>
                                      </td>
                                  </tr>
                              <?php endforeach; ?>  
                              </tbody>
                          </table>
                        </div>
                      <?php else:  ?>
                      <h1>Отзывов нет</h1>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
       
      
<?php  include ROOT . '/views/admin/layout/footer.php'; ?>



