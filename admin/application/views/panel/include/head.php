<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="stylesheet" href="<?= base_url(); ?>assets/panel_assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= base_url(); ?>assets/panel_assets/dist/css/font-awesome.min.css">
<link rel="stylesheet" href="<?= base_url(); ?>assets/panel_assets/dist/css/ionicons.min.css">
<link rel="stylesheet" href="<?= base_url(); ?>assets/panel_assets/dist/css/AdminLTE.min.css">
<link rel="stylesheet" href="<?= base_url(); ?>assets/panel_assets/dist/css/skins/_all-skins.min.css">
<link rel="stylesheet" href="<?= base_url(); ?>assets/panel_assets/dist/fonts/fonts-fa.css">
<link rel="stylesheet" href="<?= base_url(); ?>assets/panel_assets/dist/css/bootstrap-rtl.min.css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="<?= base_url(); ?>assets/panel_assets/dist/js/html5shiv.min.js"></script>
<script src="<?= base_url(); ?>assets/panel_assets/dist/js/respond.min.js"></script>
<![endif]-->
<?php
foreach ($stylesheet as $item => $value) {
    echo '<link rel="stylesheet" href="' . base_url('assets/panel_assets/' . (is_numeric($item) ? $value : $item)) . '" ' . ' ' . (is_numeric($item) == false ? $value : '') . '>' . PHP_EOL;
}
?>