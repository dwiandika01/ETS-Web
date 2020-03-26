<div class="sidebar" data-image="<?php echo base_url(''); ?>/assets/img/sidebar-5.jpg">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text">
                English Test System
            </a>
        </div>
        <ul class="nav">
            <li class="nav-item <?php if ($menu == 'home') echo 'active'; ?>">
                <a class="nav-link" href="<?php echo base_url(''); ?>Home">
                    <i class="nc-icon nc-chart-pie-35"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item <?php if ($menu == 'siswa') echo 'active'; ?>">
                <a class="nav-link" href="<?php echo base_url(''); ?>Siswa">
                    <i class="nc-icon nc-circle-09"></i>
                    <p>Data Siswa</p>
                </a>
            </li>
            <li class="nav-item <?php if ($menu == 'soal') echo 'active'; ?>">
                <a class=" nav-link" href="<?php echo base_url(''); ?>Soal">
                    <i class="nc-icon nc-notes"></i>
                    <p>Data Soal</p>
                </a>
            </li>
            <li class="nav-item <?php if ($menu == 'nilai') echo 'active'; ?>">
                <a class=" nav-link" href="<?php echo base_url(''); ?>Nilai">
                    <i class="nc-icon nc-paper-2"></i>
                    <p>Data Nilai</p>
                </a>
            </li>
            <!--
            <li>
                <a class="nav-link" href="#">
                    <i class="nc-icon nc-paper-2"></i>
                    <p>Data Kelas</p>
                </a>
            </li>
            
            <li>
                <a class="nav-link" href="#">
                    <i class="nc-icon nc-atom"></i>
                    <p>Icons</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="#">
                    <i class="nc-icon nc-pin-3"></i>
                    <p>Maps</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="#">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>Notifications</p>
                </a>
            </li>
            -->
        </ul>
    </div>
</div>