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
                                        <table class="table">
                                            <tr>
                                                <td><h1>No. Nota </h1></td>
                                                <td> : </td>
                                                <td><h1><?php echo $nota[0]->no_nota; ?></h1></td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal</td>
                                                <td> : </td>
                                                <td><?php echo $nota[0]->tgl; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Customer</td>
                                                <td> : </td>
                                                <td><?php echo $nota[0]->nama_cust; ?></td>
                                            </tr>
                                        </table>                                    
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                <div class="breadcomb-report">         
                                    <a href="<?php echo site_url('Nota/printNota') ?>/<?php echo $nota[0]->no_nota; ?>" target="_blank"><button class="btn notika-btn-orange waves-effect">Print</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcomb area End-->

    <!-- Form Detail Start-->
    <div class="breadcomb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <center><h1>Add</h1></center>
                                <center><h1>Detail</h1></center>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <?php echo form_open('Nota/addDetail', array('class' => 'form-horizontal', 'role' => 'form' )); ?>
                                <div class="form-group ic-cmp-int col-lg-12">
                                    <div class="nk-int-st">
                                        <input type="text" id="no_nota" name="no_nota" class="form-control" value="<?php echo $nota[0]->no_nota; ?>" hidden>
                                    </div>
                                </div>
                                <div class="form-group ic-cmp-int col-lg-12">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-dollar"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" maxlength="50" id="nama_barang" name="nama_barang" class="form-control" placeholder="Nama Barang">
                                    </div>
                                </div>
                                <div class="form-group ic-cmp-int col-lg-12">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-dollar"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="number" id="qty" name="qty" class="form-control" placeholder="Qty" onkeyup="hitung_jumlahuang()">
                                    </div>
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-dollar"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="number" id="harga" name="harga" class="form-control" placeholder="Harga" onkeyup="hitung_jumlahuang()">
                                    </div>
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-dollar"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" id="jumlah" name="jumlah" class="form-control" placeholder="Jumlah" >
                                    </div>
                                </div>
                                <div class="form-group ic-cmp-int col-lg-12">
                                    <center>
                                        <?php echo form_submit('submit','Simpan', 'class="btn-success btn-lg notika-button-success"');?>
                                    <?php echo form_close(); ?>
                                    </center>
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
                                        <th>No</th>
                                        <th>Nama Barang</th>
                                        <th>Qty</th>
                                        <th>Harga</th>
                                        <th>Jumlah</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no=1;
                                        $total = 0;
                                        foreach ($detail_list as $list) {
                                    ?>

                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $list->nama_barang ?></td>
                                        <td><?php echo $list->qty ?></td>
                                        <td>Rp <?php echo number_format($list->harga) ?></td>
                                        <td>Rp <?php echo number_format($list->jumlah) ?></td>
                    <td>
                                            <div class="button-icon-btn button-icon-btn-cl sm-res-mg-t-30">
                                                <a class="tmbl-hapus" href="<?php echo site_url() ?>/Nota/delDetailNota/<?php echo $list->no; ?>/<?php echo $nota[0]->no_nota; ?>"><button class="btn btn-danger danger-icon-notika" ><i class="notika-icon notika-trash"></i></button></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php $total = $total + ($list->qty * $list->harga);
                                     } ?>
                                    <tr>
                                        <td colspan="4" align="center"><b>TOTAL</b></td>
                                        <td>Rp <?php echo number_format($total);?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" align="center"><b>DP</b></td>
                                        <td>Rp <?php echo number_format($nota[0]->titip); ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" align="center"><b>KEKURANGAN</b></td>
                                        <td>Rp <?php echo number_format($total - $nota[0]->titip); ?></td>
                                    </tr>
                                    
                                </tbody>
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
    <script type="text/javascript">

        function hitung_jumlahuang()
        {
            var harga = $("#harga").val();
            var qty = $("#qty").val();

            var jumlah = $("#jumlah").val(harga * qty);
        }
    
</script>

    <!--==================================================================================================================--> 
</body>

</html>

