<?php
/**
 * Created by PhpStorm.
 * User: Mohammad Amin
 * Date: 19/03/2016
 * Time: 01:06 PM
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>کلینیک آتیه | انتخاب بخش</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link rel="stylesheet" href="<?= ASSETS_LOCATION ?>panel_assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= ASSETS_LOCATION ?>panel_assets/dist/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= ASSETS_LOCATION ?>panel_assets/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= ASSETS_LOCATION ?>panel_assets/plugins/iCheck/square/blue.css">

    <link rel="stylesheet" href="<?= ASSETS_LOCATION ?>panel_assets/dist/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= ASSETS_LOCATION ?>panel_assets/dist/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= ASSETS_LOCATION ?>panel_assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?= ASSETS_LOCATION ?>panel_assets/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="<?= ASSETS_LOCATION ?>panel_assets/dist/fonts/fonts-fa.css">
    <link rel="stylesheet" href="<?= ASSETS_LOCATION ?>panel_assets/dist/css/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="<?= ASSETS_LOCATION ?>panel_assets/dist/css/login.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="<?=ASSETS_LOCATION ?>panel_assets/dist/js/html5shiv.min.js"></script>
    <script src="<?=ASSETS_LOCATION ?>panel_assets/dist/js/respond.min.js"></script>
    <![endif]-->
</head>
<body class="register-page">
<div class="register-box">
    <div class="register-logo">
        <a href="" style="color: floralwhite;">بازیابی رمز عبور</a>
    </div>

    <div class="register-box-body">
        <p class="login-box-msg">لطفا کد ملی خود را برای دریافت کد بازیابی حساب کاربری وارد نمایید</p>
        <?= form_open('Authentication/passwordRecovery/recovery') ?>
        <div class="form-group has-feedback">
            <input name="national_id" type="text" class="form-control" style="height: auto;" placeholder="کد ملی">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input name="recovery_code" type="text" class="form-control" style="height: auto;" placeholder="کد بازیابی">
            <span class="glyphicon glyphicon-barcode form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input name="password" type="password" class="form-control" style="height: auto;" placeholder="رمز عبور جدید">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input name="passwordRepeat" type="password" class="form-control" style="height: auto;" placeholder="تکرار رمز عبور جدید">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <button type="submit" class="btn btn-danger btn-block btn-flat">تغییر رمز عبور</button>
        </form>
        <h5 style="color: #9f191f;text-align: center;padding-top: 10px;"><?=validation_errors();?><br/><?=((isset($error)&&$error==1)?$this->lang->line('national_id_recovery_code_not_exist'):'');?></h5>
    </div><!-- /.form-box -->
</div><!-- /.register-box -->

<!-- jQuery 2.1.4 -->
<script src="<?= ASSETS_LOCATION ?>panel_assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.4 -->
<script src="<?= ASSETS_LOCATION ?>panel_assets/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?= ASSETS_LOCATION ?>panel_assets/plugins/iCheck/icheck.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>


