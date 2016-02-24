<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?= $mainVars['title']; ?></title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/panel_assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->

    <link rel="stylesheet" href="<?= base_url(); ?>assets/panel_assets/plugins/datatables/dataTables.bootstrap.css">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/panel_assets/dist/css/font-awesome.min.css">
    <!-- Ionicons 2.0.0 -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/panel_assets/dist/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/panel_assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/panel_assets/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/panel_assets/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/panel_assets/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/panel_assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <!--    <link rel="stylesheet" href="-->
    <? //= base_url(); ?><!--asset/panel_assets/plugins/datepicker/datepicker3.css">-->
    <!-- Daterange picker -->
    <!--    <link rel="stylesheet" href="-->
    <? //= base_url(); ?><!--asset/panel_assets/plugins/daterangepicker/daterangepicker-bs3.css">-->
    <!-- bootstrap wysihtml5 - text editor -->


    <link rel="stylesheet" href="<?= base_url(); ?>assets/panel_assets/dist/fonts/fonts-fa.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/panel_assets/dist/css/bootstrap-rtl.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a style="font-family:'WYekan';" class="logo">
            <b><?= $mainVars['section_name_fa']; ?></b>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-warning"><?= $mainVars['newMessageNumber']; ?></span>
                        </a>
                    </li>
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?= base_url('files/userpic/' . $mainVars['picture']); ?>"
                                 class="user-image" alt="User Image">
                            <span class="hidden-xs"><?= $mainVars['user_name']; ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="<?= base_url('files/userpic/' . $mainVars['picture']); ?>"
                                     class="img-circle" alt="User Image">

                                <p>
                                    <?= $mainVars['user_name']; ?> - <?= $mainVars['section_name_fa']; ?><br/><br/>
                                    <small><?php $this->load->helper('time');
                                        echo jdate('d / m / y'); ?></small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-right">
                                    <a href="<?= base_url('usermanagment/profile'); ?>"
                                       class="btn btn-default btn-flat">پروفایل</a>
                                </div>
                                <div class="pull-left">
                                    <a href="<?= base_url(); ?>signout" class="btn btn-default btn-flat">خروج</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-right image">
                    <img src="<?= base_url('files/userpic/' . $mainVars['picture']); ?>" class="img-circle"
                         alt="User Image">
                </div>
                <div class="pull-left info">
                    <p><?= $mainVars['user_name']; ?></p>
                    <a href="#"><i class="fa fa-circle text-success"></i> اعتبار حساب : 2500000 ريال</a>
                </div>
            </div>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">منو اصلی</li>
                <li class="treeview">
                    <a href="<?= base_url() . 'panel'; ?>">
                        <i class="fa fa-bars"></i>
                        <span>صفحه اصلی</span>
                        <span class="label label-primary pull-left"><?php echo $mainVars['newMessageNumber']; ?></span>
                    </a>
                </li>
                <?php foreach ($mainVars['sideBarMenu'] as $key => $value) {
                    if ($key == 'panel') {
                        continue;
                    } ?>
                    <li class="treeview">
                        <a href="<?= base_url() . $key; ?>">
                            <i class="fa fa-bars"></i>
                            <span><?= $value['name_fa'] ?></span>
                        </a>
                        <?php if (!isset($value['singleMenu'])) { ?>
                            <ul class="treeview-menu">
                                <?php foreach ($value as $keyi => $item): if ($keyi == 'name_fa' || $item == 1) {
                                    continue;
                                } ?>
                                    <li><a href="<?= base_url() . $key . '/' . $keyi ?>"><i
                                                class="fa fa-minus"></i><?= $item; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php } ?>
                    </li>
                <?php } ?>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- Main content For showing Content of page-->

        <?= $pageContent; ?>

        <!-- /.content -->
    </div>
    <footer class="main-footer">
        <div class="pull-left hidden-xs">
            <b><a href="http://www.bajand.ir/">M.A.Bajand & Hamed Ehtesham</a></b>
        </div>
        <strong>سامانه مدیریت کلینیک</strong> نسخه <i>دمو</i>
    </footer>

    <aside class="control-sidebar control-sidebar-dark">
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>

    </aside>
    <div class="control-sidebar-bg"></div>
</div>

<script src="<?= base_url(); ?>assets/panel_assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script src="<?= base_url(); ?>assets/panel_assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/panel_assets/dist/js/raphael-min.js"></script>
<script src="<?= base_url(); ?>assets/panel_assets/plugins/morris/morris.min.js"></script>
<script src="<?= base_url(); ?>assets/panel_assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="<?= base_url(); ?>assets/panel_assets/plugins/knob/jquery.knob.js"></script>
<script src="<?= base_url(); ?>assets/panel_assets/dist/js/moment.min.js"></script>
<!--<script src="--><? //= base_url(); ?><!--asset/panel_assets/plugins/daterangepicker/daterangepicker.js"></script>-->
<!--<script src="--><? //= base_url(); ?><!--asset/panel_assets/plugins/datepicker/bootstrap-datepicker.js"></script>-->
<!--<script src="--><? //= base_url(); ?><!--asset/panel_assets/plugins/editor/ckeditor.js"></script>-->
<script src="<?= base_url(); ?>assets/panel_assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="<?= base_url(); ?>assets/panel_assets/plugins/fastclick/fastclick.min.js"></script>
<script src="<?= base_url(); ?>assets/panel_assets/dist/js/app.min.js"></script>
<!--<script src="--><? //= base_url(); ?><!--asset/panel_assets/dist/js/pages/dashboard.js"></script>-->
<script src="<?= base_url(); ?>assets/panel_assets/dist/js/demo.js"></script>

<script src="<?= base_url(); ?>assets/panel_assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>assets/panel_assets/plugins/datatables/dataTables.bootstrap.min.js"></script>


</body>

</html>
