<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?= $this->lang->line('header'); ?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?= ASSETS_LOCATION; ?>panel_assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= ASSETS_LOCATION; ?>panel_assets/dist/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= ASSETS_LOCATION; ?>panel_assets/dist/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= ASSETS_LOCATION; ?>panel_assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?= ASSETS_LOCATION; ?>panel_assets/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="<?= ASSETS_LOCATION; ?>panel_assets/dist/fonts/fonts-fa.css">
    <link rel="stylesheet" href="<?= ASSETS_LOCATION; ?>panel_assets/dist/css/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="<?= ASSETS_LOCATION; ?>panel_assets/plugins/iCheck/all.css">
    <link rel="stylesheet" href="<?= ASSETS_LOCATION; ?>panel_assets/plugins/jdatepicker/skins/aqua/theme.css">
    <script src="<?= ASSETS_LOCATION; ?>panel_assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="<?= ASSETS_LOCATION; ?>panel_assets/dist/js/jquery-ui.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="<?= ASSETS_LOCATION; ?>panel_assets/dist/js/html5shiv.min.js"></script>
    <script src="<?= ASSETS_LOCATION; ?>panel_assets/dist/js/respond.min.js"></script>
    <![endif]-->
    <script src="<?= ASSETS_LOCATION; ?>panel_assets/plugins/iCheck/icheck.min.js"></script>
    <script src="<?= ASSETS_LOCATION; ?>panel_assets/jsclass/PrimaryRegister/MelliCode.js"></script>
    <script src="<?= ASSETS_LOCATION; ?>panel_assets/plugins/jdatepicker/jalali.js"></script>
    <script src="<?= ASSETS_LOCATION; ?>panel_assets/plugins/jdatepicker/calendar.js"></script>
    <script src="<?= ASSETS_LOCATION; ?>panel_assets/plugins/jdatepicker/calendar-setup.js"></script>
    <script src="<?= ASSETS_LOCATION; ?>panel_assets/plugins/jdatepicker/lang/calendar-fa.js"></script>
    <script src="<?= ASSETS_LOCATION; ?>panel_assets/plugins/input-mask/jquery.inputmask.js"></script>
    <script src="<?= ASSETS_LOCATION; ?>panel_assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="<?= ASSETS_LOCATION; ?>panel_assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <script>
        $(function () {
            $("[data-mask]").inputmask();
            //iCheck for checkbox and radio inputs
            $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                checkboxClass: 'icheckbox_minimal-blue',
                radioClass: 'iradio_minimal-blue'
            });
        });
    </script>

</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper" style="width: 80%;margin: auto;">


    <div class="box box-primary"
         style="direction: <?= $this->lang->line('direction'); ?>;text-align: <?= $this->lang->line('align'); ?>;">
        <h3 class="box-title">ثبت نام</h3>

        <div class="box-body">
            <form>
                <div class="box-header with-border">

                </div>
                <h4 class="box-title">لطفا تمامی فیلد های زیر را با دقت تکمیل نمایید</h4><br/>

                <label><span class="glyphicon glyphicon-chevron-left"></span> اگر دارای کد ملی جمهوری اسلامی ایران
                    نیستید National ID کشور محل سکونت خود را وارد نمایید</label>

                <div class="form-group">
                    <label for="d5" class="col-sm-2 control-label">کد ملی</label>

                    <div class="col-sm-10">
                        <label class="">
                            <input type="radio" class="minimal" name="d5">
                            <input type="text" id="melliCode" class="" onblur="checkM();"
                                   style="text-align: left;direction: ltr;" name="d6" data-inputmask='"mask": "9999999999"' placeholder="کد ملی" data-mask><br/>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="d5" class="col-sm-2 control-label">National ID</label>

                    <div class="col-sm-10">
                        <label class="">
                            <input type="radio" class="minimal" name="d5">
                            <input type="text" name="d7" style="text-align: left;direction: ltr;"
                                   placeholder="National ID">
                        </label>
                    </div>
                </div>
                <br/>
                <br/>
                <br/>

                <div class="form-group">
                    <label for="birthday" class="col-sm-2 control-label">تاريخ تولد</label>

                    <div class="col-sm-3">
                        <input type="text" style="text-align: left;direction: ltr" class="form-control" name="birthday" id="birthday2" placeholder=""
                               data-inputmask='"mask": "9999-99-99"' data-mask><img id="date_btn_1"
                                             src="<?= ASSETS_LOCATION; ?>panel_assets/images/calendar24.png"/>
                    </div>
                    <script type="text/javascript">
                        Calendar.setup({
                            inputField: "birthday2",
                            button: "date_btn_1",
                            ifFormat: "%Y-%m-%d",
                            dateType: 'jalali',
                            weekNumbers: false
                        });
                    </script>
                </div>

                <div class="form-group" style="padding-top: 50px;">
                    <label for="lastName" class="col-sm-2 control-label">شماره موبایل</label>

                    <div class="col-sm-3">
                        <input type="text" style="text-align: left;direction: ltr" class="form-control" data-inputmask='"mask": "0999-999-9999"' data-mask>
                    </div>
                </div>

                <div class="form-group" style="padding-top: 50px;">
                    <label for="lastName" class="col-sm-2 control-label">پست الکترونیکی</label>

                    <div class="col-sm-3">
                        <input type="text" style="text-align: left;direction: ltr;" id="email" onblur="checkE();" class="form-control" name="lastName" placeholder="">
                    </div>
                </div>
                <br/>
                <br/>
                <a href="<?=base_url("RegisterAdult");?>"><button type="button" class="btn btn-primary">ثبت نام</button></a>
            </form>
        </div>
    </div>
</div>
</body>
