<?php $titlePage = 'Админ'; include ROOT . '/views/admin/layout/header.php'; ?>



            <div class="container text-capitalize">
                <div class="row">
                    <div class="col-lg-12">
                      <ol class="breadcrumb">
                        <li><a href="/<?php echo $lang; ?>/admin"><?php echo ADMIN_PANEL;?></a></li>
                        <li class=" active"><?php echo PHOTOS;?></li>
                      </ol>
                      <a href="/<?php echo $lang .'/admin/photo/create';?>" class="btn btn-success">
                        <i class="fa fa-plus"></i> <?php echo PRODUCT_ADD.' '.PHOTES; ?>
                      </a>
                      <?php if(isset($photos) && is_array($photos)): ?>
                        <div class="table-responsive">
                          <table class="table table-condensed table-hover">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <th><?php echo IMAGE; ?></th>
                                      <th><?php echo TITLE; ?></th>
                                      <th><?php echo CATEGORY; ?></th>
                                      <th></th>
                                  </tr>
                              </thead>
                              <tbody>
                              <?php foreach($photos as $photo): ?>
                                  <tr>
                                      <td><?php echo $photo['id']; ?></td>
                                      <td><img style="width: 100px;" src="<?php echo Photo::getImage($photo['id']); ?>" alt="img-responsive"></td>
                                      <td><?php echo $photo['title_'.$lang]; ?></td>
                                      <td><?php echo Gallery::getGalleryTitleById($photo['gallery_id']); ?></td>
                                      <td>
                                      <a href="/<?php echo $lang .'/admin/photo/update/'. $photo['id'];?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                      <a href="/<?php echo $lang .'/admin/photo/delete/'. $photo['id'];?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                      </td>
                                  </tr>
                                <?php endforeach; ?>
                              </tbody>
                          </table>
                        </div>
                    <?php else: ?>
                        <h3><?php echo PHOTOS .' '.NO;?></h3>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
       
      
<?php  include ROOT . '/views/admin/layout/footer.php'; ?>




