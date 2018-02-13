<?php $titlePage = 'Админ'; include ROOT . '/views/admin/layout/header.php'; ?>



            <div class="container text-capitalize">
                <div class="row">
                    <div class="col-lg-12">
                      <ol class="breadcrumb">
                        <li><a href="/<?php echo $lang; ?>/admin"><?php echo ADMIN_PANEL;?></a></li>
                        <li><a href="/<?php echo $lang; ?>/admin/review"><?php echo REVIEWS;?></a></li>
                        <li class=" active"><?php echo ORDER_VIEW .' '.REVIEW;?></li>
                      </ol>
                      <h3><?php echo ORDER_VIEW .' '.REVIEW;?> #<?php echo $review['id'];?></h3>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="table-responsive">
                              <table class="table table-condensed table-hover">
                                  <tbody>
                                      <tr>
                                          <td><?php echo NAME; ?></td>
                                          <td><?php echo $review['name']?></td>
                                      </tr>
                                      <tr>
                                          <td><?php echo EMAIL; ?></td>
                                          <td class="text-lowercase"><?php echo $review['email']?></td>
                                      </tr>
                                      <tr>
                                          <td><?php echo ID_USER; ?></td>
                                          <td><?php echo $review['user_id']?></td>
                                      </tr>
                                      <tr>
                                          <td><?php echo ORDER_STATUS; ?></td>
                                          <td><strong><?php echo Review::getTextStatus($review['status']); ?></strong></td>
                                      </tr>
                                      <tr>
                                          <td><?php echo ORDER_DATE; ?></td>
                                          <td><strong><?php echo Order::replaceFormatDate($review['date']);?></strong></td>
                                      </tr>
                                      <tr>
                                          <td><?php echo TEXT; ?></td>
                                          <td class="text-lowercase"><?php echo $review['text']?></td>
                                      </tr>
                                  </tbody>
                              </table>
                            </div>
                            <a href="/<?php echo $lang; ?>/admin/review"" class="btn btn-default"><span class="fa fa-chevron-left"></span> <?php echo BACK; ?></a>
                          </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
       
      
<?php  include ROOT . '/views/admin/layout/footer.php'; ?>



