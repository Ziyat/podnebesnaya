<?php $titlePage = 'Админ'; include ROOT . '/views/admin/layout/header.php'; ?>



            <div class="container text-capitalize">
                <div class="row">
                    <div class="col-lg-12">
                      <ol class="breadcrumb">
                        <li><a href="/<?php echo $lang; ?>/admin"><?php echo ADMIN_PANEL;?></a></li>
                        <li class=" active"><?php echo ADMIN_CUISINE;?></li>
                      </ol>
                      <a href="/<?php echo $lang .'/admin/cuisine/create';?>" class="btn btn-success">
                        <i class="fa fa-plus"></i> <?php echo PRODUCT_ADD.' '.ADMIN_CUISINES; ?>
                      </a>
                        <div class="table-responsive">
                          <table class="table table-condensed table-hover">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <th><?php echo TITLE; ?></th>
                                      <th><?php echo PRODUCT_EDIT; ?></th>
                                      <th><?php echo PRODUCT_DELETE; ?></th>
                                  </tr>
                              </thead>
                              <tbody>
                              <?php foreach($cuisines as $cuisine): ?>
                                  <tr>
                                      <td><?php echo $cuisine['id']; ?></td>
                                      <td><?php echo $cuisine['title_'.$lang]; ?></td>
                                      
                                      <td><a href="/<?php echo $lang .'/admin/cuisine/update/'. $cuisine['id'];?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a></td>
                                      <td><a href="/<?php echo $lang .'/admin/cuisine/delete/'. $cuisine['id'];?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
                                  </tr>
                                <?php endforeach; ?>
                              </tbody>
                          </table>
                        </div>
                    </div>
                </div>
            </div>
       
      
<?php  include ROOT . '/views/admin/layout/footer.php'; ?>



