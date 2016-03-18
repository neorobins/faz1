<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>کلینیک آتیه</title>
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
    <script src="<?= ASSETS_LOCATION; ?>panel_assets/jsclass/PrimaryRegister/Validation.js"></script>
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
<div class="wrapper" style="width: 80%;margin: auto;background: none;">


    <div class="box box-primary"
         style="direction: <?= $this->lang->line('direction'); ?>;text-align: <?= $this->lang->line('align'); ?>;">
        <h3 class="box-title">ثبت نام</h3>

        <div class="box-body">
            <?= form_open('Authentication/signUp/doSignUp',array('id'=>'primaryRegister')) ?>
            <div class="box-header with-border">
            </div>
            <h4 class="box-title">لطفا تمامی فیلد های زیر را با دقت تکمیل نمایید</h4><br/>

            <label><span class="glyphicon glyphicon-chevron-left"></span>پر کردن فیلد های ستاره دار اجباری می
                باشد</label>
            <br>
            <br>

            <div class="form-group">
                <label for="national_id" class="col-sm-2 control-label">کد ملی</label>

                <div class="col-sm-3">
                    <input type="text" id="national_id" class="form-control" onblur="checkM();"
                           style="text-align: left;direction: ltr;" name="national_id"
                           data-inputmask='"mask": "9999999999"'
                           placeholder="کد ملی" data-mask><br/>
                </div>
            </div>
            <br/>
            <br/>
            <div class="form-group">
                <label for="password" class="col-sm-2 control-label">رمز عبور</label>
                <div class="col-sm-3">
                    <input type="password" id="password" class="form-control" onblur="checkP();"
                           style="text-align: left;direction: ltr;" name="password"><br/>
                </div>
            </div>
            <br/>
            <br/>
            <div class="form-group">
                <label for="passwordRepeat" class="col-sm-2 control-label">تکرار رمز عبور</label>

                <div class="col-sm-3">
                    <input type="password" id="passwordRepeat" class="form-control" onblur="checkP();"
                           style="text-align: left;direction: ltr;" name="passwordRepeat"><br/>
                </div>
            </div>
            <span id="passwordError"></span>
            <br/>
            <br/>

            <div class="form-group">
                <label for="birthday" class="col-sm-2 control-label">تاريخ تولد</label>

                <div class="col-sm-3">
                    <input type="text" style="text-align: left;direction: ltr" class="form-control" name="birthday"
                           id="birthday" placeholder=""
                           data-inputmask='"mask": "9999-99-99"' data-mask><img id="date_btn_1"
                                                                                src="<?= ASSETS_LOCATION . 'panel_assets/images/calendar24.png'; ?>"/>
                </div>
                <script type="text/javascript">
                    Calendar.setup({
                        inputField: "birthday",
                        button: "date_btn_1",
                        ifFormat: "%Y-%m-%d",
                        dateType: 'jalali',
                        weekNumbers: false
                    });
                </script>
            </div>

            <div class="form-group" style="padding-top: 50px;">
                <label for="phone" class="col-sm-2 control-label">شماره موبایل</label>

                <div class="col-sm-3">
                    <input type="text" id="phone" name="phone" onblur="checkPhone();" style="text-align: left;direction: ltr" class="form-control"
                           data-inputmask='"mask": "0999-999-9999"' data-mask>
                </div>
            </div>

            <div class="form-group" style="padding-top: 50px;">
                <label for="email" class="col-sm-2 control-label">پست الکترونیکی (اختیاری)</label>

                <div class="col-sm-3">
                    <input type="text" style="text-align: left;direction: ltr;" id="email" onblur="checkE();"
                           class="form-control" name="email" placeholder="example@gmail.com">
                </div>
            </div>
            <br/>
            <br/>
            <span id="formError" style="color:red;"><?php echo validation_errors(); ?></span>
            <br>
            <button type="button" onclick="submitForm();" class="btn btn-primary">ثبت نام</button>
            </form>
        </div>
    </div>
</div>
</body>
