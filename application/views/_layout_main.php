<?php $this->load->view('admin/components/page_head'); ?>

  <body>
    <div id="#myNav" class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <?php echo anchor('admin/dashboard', $meta_title, 'class="navbar-brand"'); ?>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            <li><?php echo anchor('admin/user', 'Users'); ?></li>
            <li><?php echo anchor('admin/pages', 'Pages'); ?></li>
          </ul>
        </div>
      </div>
    </div><!-- Navbar finishes here -->
      
    <div id="homepage" class="container">
      <div class="row"></div>
      <div class="row">
        <div class="col-md-9"><!-- Main Content Area -->

          <h1>Welcome to Dashboard</h1>
          <hr>
            <p>At <span class="gold">INNOVOSKIES</span>, We innovate new ideas with a blend of Creativity and Information, that fall in line with the clients requirement. Innovoskies assures that, it is a <span class="gold">ONE STOP SOLUTION</span> in media..</p>

            <p>&nbsp;</p>

            <h1>About us</h1>
          <hr>
            <p>At InnovoSkies, we strive to deliver the best services to our clients in <span class="gold">Branding, 3D &amp; 2D Animations, Web Designs &amp; Web Applications</span> to help their businesses grow. <br><br>
            Our clients are from various sectors - <span class="gold">Medical, Educational, Religious and Business Entrepenuers</span>. Please visit our Gallery section to know more. Our Dedication &amp; Effort has resulted in our clients' satisfaction with our services.</p>
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
      </div>
      <!-- End of the Homepage area -->
    </div>

<?php $this->load->view('admin/components/page_tail'); ?>