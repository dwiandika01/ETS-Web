<!DOCTYPE html>

<html lang="en">

<?php $this->load->view("ext/v_header.php") ?>

<body>
    <div class="wrapper">

        <?php $this->load->view("ext/v_sidebar.php") ?>
        <div class="main-panel">
            <?php $this->load->view("ext/v_upbar.php") ?>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card ">
                                <div class="card-header ">
                                    <h2 class="card-title">Jumlah Siswa</h2>
                                </div>
                                <div class="card-body ">
                                    <!--<div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div> -->
                                    <hr>
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Laki - Laki
                                        <i class="fa fa-circle text-danger"></i> Perempuan
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card ">
                                <div class="card-header ">
                                    <h2 class="card-title">Jumlah Soal</h2>
                                </div>
                                <div class="card-body ">
                                    <?php // echo $jumlah_siswa; 
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php $this->load->view("ext/v_footer.php") ?>
        </div>

    </div>

</body>
<?php $this->load->view("ext/v_js.php") ?>

</html>