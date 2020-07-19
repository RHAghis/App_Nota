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
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-menus"></i></span></a>
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
										<h2>Data Nota</h2>
										<p>Aplikasi Nota Pesanan <span class="bread-ntd">Top Jawa Konveksi</span></p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->
    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No Nota</th>
                                        <th>Tanggal</th>
                                        <th>Customer</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach ($nota_list as $list) {
                                    ?>

                                    <tr>
                                        <td><?php echo $list->no_nota ?></td>
                                        <td><?php echo $list->tgl ?></td>
                                        <td><?php echo $list->nama_cust ?></td>
                                        <td>
                                            <div class="button-icon-btn button-icon-btn-cl sm-res-mg-t-30">
                                                <!-- DETAIL -->
                                                <a href="<?php echo site_url() ?>/Nota/viewDetail/<?php echo $list->no_nota ?>"><button class="btn btn-success success-icon-notika" data-placement="bottom" title="Detail" ><i class="notika-icon notika-menu"></i></button></a>

                                                <!-- EDIT -->
                                                <a href="<?php echo site_url() ?>/Nota/editNota/<?php echo $list->no_nota ?>"><button class="btn btn-primary primary-icon-notika" data-placement="bottom" title="Edit" ><i class="notika-icon notika-edit"></i></button></a>

                                                <!-- HAPUS -->
                                                <a class="tmbl-hapus" href="<?php echo site_url() ?>/Nota/delNota/<?php echo $list->no_nota ?>"><button class="btn btn-danger danger-icon-notika" data-placement="bottom" title="Delete" ><i class="notika-icon notika-trash"></i></button></a>
                                            </div>
                                        </td>
                                    </tr>

                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No Nota</th>
                                        <th>Tanggal</th>
                                        <th>Customer</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
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