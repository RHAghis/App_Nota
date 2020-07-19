<!doctype html>
<html class="no-js" lang="">

<?php $this->load->view('header'); ?>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="#"><img src="<?php echo base_url() ?>/assets/img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                            <li class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-menu"></i></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
    <!-- =================================MENU================================== -->

    <?php $this->load->view('menu'); ?>

    <!-- ===============================END MENU================================ -->
	<!-- Breadcomb area Start-->
	<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-windows"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Form Customer</h2>
										<p>Aplikasi Nota Pesanan <span class="bread-ntd">Top Jawa Konveksi</span></p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<a href="<?php echo site_url('Customers') ?>"><button class="btn" data-toggle="tooltip" data-placement="left" title="Close"><i class="notika-icon notika-close"></i></button></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->
    <!-- Form Element area Start-->
    <div class="form-element-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                        <div class="basic-tb-hd">
                            <h2>Perhatian!!</h2>
                            <p>*Nama dan Nomer Telepon Wajib Diisi</p>
                        </div>

                        <?php echo form_open('Customers/addCustomers', array('class' => 'form-horizontal', 'role' => 'form' )); ?>
                            
                            <div class="form-group ic-cmp-int col-lg-6">
                                <div class="form-ic-cmp">
                                    <i class="notika-icon notika-star"></i>
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" id="id_cust" name="id_cust" class="form-control" placeholder="ID Customer">
                                </div>
                            </div>

                            <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                    <i class="notika-icon notika-support"></i>
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" id="nama_cust" name="nama_cust" class="form-control" placeholder="Name*" required>
                                </div>
                            </div>

                            <div class="form-group ic-cmp-int col-lg-6">
                                <div class="form-ic-cmp">
                                    <i class="notika-icon notika-ip-locator"></i>
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" id="alamat_cust" name="alamat_cust" class="form-control" placeholder="Address">
                                </div>
                            </div>

                            <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                    <i class="notika-icon notika-phone"></i>
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" id="telp_cust" name="telp_cust" class="form-control" placeholder="Phone Number*" data-mask="(999) 999-9999" required>
                                </div>
                            </div>

                            <div class="form-group ic-cmp-int col-lg-6">
                                <div class="form-ic-cmp">
                                    <i class="notika-icon notika-mail"></i>
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" id="email_cust" name="email_cust" class="form-control" placeholder="Email Address">
                                </div>
                            </div>

                            <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                    <i class="notika-icon notika-tax"></i>
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" id="keterangan" name="keterangan" class="form-control" placeholder="Additional Info">
                                </div>
                            </div>
                            <center>
                            <?php echo form_submit('submit','Simpan', 'class="btn-success btn-lg notika-button-success"');?>
                        <?php echo form_close(); ?>
                            </center>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->
    <!-- Start Footer area-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2018 
. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->
    
    <!--==================================================================================================================-->    

    <?php  $this->load->view('script'); ?>

    <!--==================================================================================================================--> 
</body>

</html>