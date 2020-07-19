 <!-- Mobile Menu start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul class="mobile-menu-nav">
                            <li><a data-toggle="collapse" href="<?php echo site_url('Home') ?>">Home</a>
                            </li>
                            <li><a href="<?php echo site_url('Customers') ?>">Customers</a></li>
                            <li><a data-toggle="collapse" href="<?php echo site_url('Nota') ?>">Nota</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu end -->
<!-- Main Menu area start-->
<div class="main-menu-area mg-tb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                    <li class="<?php if($aktif == 'home'){echo " active";} ?>"><a href="<?php echo site_url('Home') ?>"><i class="notika-icon notika-house"></i> Home</a>
                    </li>
                    <li class="<?php if($aktif == 'customers'){echo " active";} ?>">
                        <a href="<?php echo site_url('Customers/') ?>"><i class="notika-icon notika-support"></i> Customers</a>
                    </li>
                    <li class="<?php if($aktif == 'nota'){echo " active";} ?>">
                        <a href="<?php echo site_url('Nota/') ?>"><i class="notika-icon notika-edit"></i> Nota</a>
                    </li>
                </ul>
                <div class="tab-content custom-menu-content">
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Menu area End