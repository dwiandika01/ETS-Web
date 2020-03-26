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

                    </div>
                </div>
            </div>

            <?php $this->load->view("ext/v_footer.php") ?>
        </div>

    </div>

</body>
<?php $this->load->view("ext/v_js.php") ?>

</html>