    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <?php foreach ($cuisines as $cuisine):?>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading<?php echo $cuisine['id']; ?>">
              <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $cuisine['id']; ?>" aria-expanded="true" aria-controls="<?php echo $cuisine['id']; ?>">
                  <?php echo $cuisine['title_'.$lang.''];?>
                </a>
              </h4>
            </div>
            <div id="<?php echo $cuisine['id']; ?>" class="panel-collapse collapse <?php if($cuisine['id'] ==  1){echo 'in';}?>" role="tabpanel" aria-labelledby="heading<?php echo $cuisine['id']; ?>">
              <div class="panel-body">
                <div class="list-group">
                   <?php foreach ($categories[$cuisine['id']] as $category):?>
                     <a href="/<?php echo $lang; ?>/menu/category/<?php echo $category['id']; ?>" class="<?php if($id == $category['id']){ echo 'activeSide';} ?> list-group-item"><?php echo $category['title_'.$lang.'']; ?></a>
                   <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
        </div>
      
    </div>