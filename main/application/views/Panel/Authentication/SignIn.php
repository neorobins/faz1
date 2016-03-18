<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>کلینیک آتیه | ورود</title>
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
        <a href="" style="color: floralwhite;">ورود به آتیه</a>
    </div>

    <div class="register-box-body">
        <!--        <p class="login-box-msg">register new </p>-->
        <?=form_open('Authentication/signIn/doSignIn')?>
            <div class="form-group has-feedback">
                <input name="national_id" value="<?=$this->session->flashdata('national_id');?>" type="text" class="form-control" style="height: auto;" placeholder="کد ملی">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input name="password" value="<?=$this->session->flashdata('password');?>" type="password" class="form-control" style="height: auto;" placeholder="رمز عبور">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group">
                <select name="section" class="form-control" style="height: auto; ">
                    <option value="clinic">بخش کلینیک</option>
                    <option value="education">بخش آموزش</option>
                </select>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input name="remember" type="checkbox" value="1"> من را به خاطر بسپار
                        </label>
                    </div>
                </div><!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">ورود</button>
                </div><!-- /.col -->
            </div>
        </form>
        <a href="login.html" class="text-center">رمز عبورم را فراموش کرده ام</a>
        <h5 style="color: #9f191f;text-align: center;padding-top: 10px;"><?php echo validation_errors(); ?><br/><?php if($error===1) {echo 'نام کاربری یا رمز عبور نامعتبر است';}?></h5>
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
