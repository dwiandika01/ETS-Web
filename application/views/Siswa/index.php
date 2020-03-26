<!DOCTYPE html>

<html lang="en">

<?php $this->load->view("ext/v_header.php") ?>

<body>
    <div class="wrapper">

        <?php $this->load->view("ext/v_sidebar.php") ?>
        <div class="main-panel">
            <?php $this->load->view("ext/v_upbar.php") ?>
            <div class="content">
                <div class="col-md-12 top-20 padding-0">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3>Data Siswa</h3>
                            </div>
                            <div class="form-group" style="margin-top:10px; margin-left:10px;">
                                <button data-toggle="modal" data-target="#modalFormTambahAA" class="btn btn-raised btn-success"><i class="nc-icon nc-simple-add"></i> Tambah data</button>
                            </div>
                            <div class="panel-body">
                                <div class="responsive-table">
                                    <table id="" class="table table-striped table-bordered display" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th width="5%">No</th>
                                                <th>Nama Siswa </th>
                                                <th>Kelas</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Nilai</th>
                                                <th>Foto</th>
                                                <th>action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1;
                                            foreach ($siswa as $siswas) :
                                            ?>
                                                <tr>
                                                    <td><?php echo $i;
                                                        $i++; ?></td>
                                                    <td><?php echo $siswas->nama_siswa; ?></td>
                                                    <td><?php echo $siswas->kelas; ?></td>
                                                    <td><?php if ($siswas->jk == "0") {
                                                            echo "Perempuan";
                                                        } else {
                                                            echo "Laki - Laki";
                                                        } ?></td>
                                                    <td><?php echo $siswas->nilai; ?></td>
                                                    <td><?php echo $siswas->foto; ?></td>
                                                    <td><a data-target="#" data-toggle="modal" class=" btn  ripple-infinite btn-primary" data-placement="top" title="Ubah"><span class="nc-icon nc-settings-gear-64"></span></a>
                                                        <a data-target="#" data-toggle="modal" class=" btn  ripple-infinite btn-danger" data-placement="top" title="Hapus"><span class="nc-icon nc-simple-remove"></span></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php $this->load->view("ext/v_footer.php") ?>
        </div>
    </div>


    <!-- MODAL Tambah -->

    <div class="modal fade" id="modalFormTambahAA" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Tambah Data Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="Nama Siswa">NIS : <input name="NIS" class="form-control" pattern="[0-9]+" type="text" placeholder="" readonly></label>
                        </div>
                        <div class="form-group">
                            <label for="Nama Siswa">Nama Siswa : <input name="nama_siswa" title="Hannya Menggunakan Angka" pattern="[a-zA-Z\s]+" class="form-control" type="text" placeholder="" required></label>
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto : <input name="nama" value="#" title="Hannya Menggunakan Huruf" class="form-control" type="file" placeholder="" required></label>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                            <button type="submit" class="btn btn-primary">Masukan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>




<?php $this->load->view("ext/v_js.php") ?>

</html>