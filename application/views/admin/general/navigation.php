<div class="logo">
  <!-- <a href="http://www.creative-tim.com" class="simple-text logo-mini">
    <div class="logo-image-small">
      <img src="../assets/img/logo-small.png">
    </div>
  </a> -->
  <a class="simple-text logo-normal">
    <?php echo $this->session->userdata('data')->nama?>
  </a>
</div>
<div class="sidebar-wrapper">
  <ul class="nav">
    <li <?= ($active == 'dashboard')?'class="active"':''?>>
      <a href="<?php echo base_url().'admin/dashboard'?>">
        <i class="nc-icon nc-bank"></i>
        <p>Dashboard</p>
      </a>
    </li>
    <li <?=($active == 'media')?'class="active"':''?>>
      <a href="<?php echo base_url().'admin/media'?>">
        <i class="nc-icon nc-paper"></i>
        <p>Media</p>
      </a>
    </li>
    <li <?=($active == 'user')?'class="active"':''?>>
      <a href="<?php echo base_url().'admin/user'?>">
        <i class="nc-icon nc-single-02"></i>
        <p>User</p>
      </a>
    </li>
          <!-- 
          <li class="active-pro">
            <a href="./upgrade.html">
              <i class="nc-icon nc-spaceship"></i>
              <p>Upgrade to PRO</p>
            </a>
          </li> -->
        </ul>
      </div>
    </div>