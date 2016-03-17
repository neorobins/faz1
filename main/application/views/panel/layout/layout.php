<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?= $mainVars['title']; ?></title>
    <?= $head ?>
    <?= $js ?>
</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper">
    <header class="main-header">
        <a style="font-family:'WYekan';" class="logo">
            <b><?= $mainVars['section_name_fa']; ?></b>
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
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
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <aside class="main-sidebar">
        <section class="sidebar">
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
    </aside>
    <div class="content-wrapper">
        <?= $pageContent; ?>
    </div>
    <?= $footer; ?>
    <aside class="control-sidebar control-sidebar-dark">
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
    </aside>
    <div class="control-sidebar-bg"></div>
</div>
</body>

</html>
