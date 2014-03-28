<!-- Homepage Template -->
        <div class="col-md-9"><!-- Main Content Area -->

          <h1><?php echo $meta_title; ?> Gallery</h1>
          <hr>
            <?php echo $content; ?>
            <p>&nbsp;</p>
            <hr>
            <div class="col-md-12">    
      <div class="content">
        <div id="rg-gallery" class="rg-gallery">
          <div class="rg-thumbs">
            <!-- Elastislide Carousel Thumbnail Viewer -->
            <div class="es-carousel-wrapper">
              <div class="es-nav">
                <span class="es-nav-prev">Previous</span>
                <span class="es-nav-next">Next</span>
              </div>
              <div class="es-carousel">
                <ul>
                  <?php foreach($artworks as $art): ?>
                  <li><a href="#"><img src="<?php echo base_url('img/gallery/'.$art->path); ?>" alt="<?php echo $art->title; ?>" data-large="<?php echo base_url('img/gallery/'.$art->path); ?>" data-description="<?php echo strip_tags($art->description); ?>" 
                    width="70px" height="60px"></a></li>
                <?php endforeach; ?>
                </ul>
              </div>
            </div>
            <!-- End Elastislide Carousel Thumbnail Viewer -->
          </div><!-- rg-thumbs -->
        </div><!-- rg-gallery -->
      </div><!-- content -->
    </div>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        </div>
        <div class="col-md-3"><!-- Sidebar Area -->
          <div class="well">
            <ul class="list-group">
              <li class="list-group-item">
                <span class="badge">4</span>
                  <div style="font-size:18px; color: #FBB25A;">Sidebar Updates</div>
              </li>
            </ul>
             <p><?php echo mailto('avj2352@gmail.com', '<span class="glyphicon glyphicon-user"></span> avj2352@gmail.com'); ?></p>
             <hr> 
              <p><?php echo anchor('admin/user/logout', '<span class="glyphicon glyphicon-off"></span> Logout'); ?></p>
          </div><!-- End of the Sidebar -->
        </div>
<!-- Homepage Template -->        