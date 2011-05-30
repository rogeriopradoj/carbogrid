<?php
    $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
    $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    $this->output->set_header('Pragma: no-cache');
    $this->output->set_header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
?>
<!DOCTYPE html>

<html>

<head>

    <meta http-equiv="Content-type" content="text/html;charset=utf-8" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <meta name="description" content="CarboGrid is a PHP datagrid written in the CodeIgniter Framework" />
    <meta name="abstract" content="CarboGrid is a PHP datagrid written in the CodeIgniter Framework" />
    <meta name="keywords" content="carbogrid, php, datagrid, codeigniter, jquery, rad, grid, data, rapid application development" />
    <meta name="google-site-verification" content="bV5Ukj9vyHXNcYa0SmDGuhDrhXm4NxGNhiY9GdiM48s" />

    <title>Carbogrid</title>

    <link href="<?php echo base_url(); ?>favicon.ico" rel="shortcut icon" type="image/x-icon" />

    <?php /*<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/themes/base/jquery-ui.css" type="text/css" media="all" /> */ ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/carbo/jquery-ui-1.8.13.custom.css" type="text/css" media="all" />

    <link href="<?php echo base_url(); ?>css/carbo.grid.css" rel="stylesheet" type="text/css" media="all" />
    <!--[if lt IE 7]><link href="<?php echo base_url(); ?>css/carbo.grid.ie6.css" rel="stylesheet" type="text/css" media="all" /><![endif]-->
    <link href="<?php echo base_url(); ?>css/carbo.form.css" rel="stylesheet" type="text/css" media="all" />

    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" />

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url(); ?>js/jquery.bbq.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>js/jquery.form.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>js/carbo.grid.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>js/carbo.form.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(function() {
            $('#change_theme').change(function() {
                $('link[href*=jquery-ui]').attr('href', $(this).val());
            });
        });
    </script>

</head>

<body>

<div id="wrapper">

<?php $this->load->view('header'); ?>

<?php $this->load->view('content'); ?>

<?php $this->load->view('footer'); ?>

</div><!-- /#wrapper -->

</body>

</html>

