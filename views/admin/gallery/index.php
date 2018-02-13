<?php $titlePage = 'Админ'; include ROOT . '/views/admin/layout/header.php'; ?>



            <div class="container text-capitalize">
                <div class="row">
                    <div class="col-lg-12">
                      <ol class="breadcrumb">
                        <li><a href="/<?php echo $lang; ?>/admin"><?php echo ADMIN_PANEL;?></a></li>
                        <li class=" active"><?php echo GALLERY;?></li>
                      </ol>
                      <a href="/<?php echo $lang .'/admin/gallery/create';?>" class="btn btn-success">
                        <i class="fa fa-plus"></i> <?php echo PRODUCT_ADD.' '.GALLERES; ?>
                      </a>
                      <?php if(isset($galleries) && is_array($galleries)): ?>
                        <div class="table-responsive">
                          <table class="table table-condensed table-hover">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <th><?php echo IMAGE; ?></th>
                                      <th><?php echo TITLE; ?></th>
                                      <th><?php echo ORDER_DATE; ?></th>
                                      <th></th>
                                  </tr>
                              </thead>
                              <tbody>
                              <?php foreach($galleries as $gallery): ?>
                                  <tr>
                                      <td><?php echo $gallery['id']; ?></td>
                                      <td><img style="width: 100px;" src="<?php echo Gallery::getImage($gallery['id']); ?>" alt="img-responsive"></td>
                                      <td><?php echo $gallery['title_'.$lang]; ?></td>
                                      <td><?php echo Order::replaceFormatDate ($gallery['date']); ?></td>
                                      <td>
                                      <a href="/<?php echo $lang .'/admin/gallery/update/'. $gallery['id'];?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                      <a href="/<?php echo $lang .'/admin/gallery/delete/'. $gallery['id'];?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                      </td>
                                  </tr>
                                <?php endforeach; ?>
                              </tbody>
                          </table>
                        </div>
                    <?php else: ?>
                        <h3><?php echo GALLERY .' '.GALLERY_EMPTY;?></h3>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
       
      
<?php  include ROOT . '/views/admin/layout/footer.php'; ?>




