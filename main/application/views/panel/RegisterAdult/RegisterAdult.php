<script>
    $(function () {
        formHelper(3);
        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        });
    });
</script>
<section class="content">
    <div class="row">
        <div class="box box-info">

            <!-- form start -->
            <form class="form-horizontal">
<<<<<<< HEAD
                <div class="box-body">
                    <div class="form-group">
                        <label for="firstName" class="col-sm-2 control-label">نام</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="firstName" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lastName" class="col-sm-2 control-label">نام خانوادگی</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="lastName" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="gender" class="col-sm-2 control-label">جنسیت</label>

                        <div class="col-sm-10">
                            <input type="radio" name="gender" value="male"> مذکر
                            <input type="radio" name="gender" value="female"> مونث
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="box-body row">
                            <label for="birthday" class="col-xs-2 control-label">تاريخ تولد</label>

                            <div class="col-xs-9">
                                <input type="text" class="form-control" name="birthday" id="birthday2" placeholder=""
                                       value="">
                            </div>
                            
                            <div class="col-xs-1">
                                <img id="date_btn_1"
                                     src="<?= base_url('assets/panel_assets/images/calendar24.png'); ?>"/>
                            </div>
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
                    ...
                </div><!-- /.box-body -->
=======
                <?=$part1?>
                <?=$part2?>
                <?=$part3?>
>>>>>>> refs/remotes/origin/Mohammad-Amin
                <div class="box-footer">
                    <button type="button" id="previous_step" class="btn btn-info pull-right" style="display: none;" onclick="previousStepRegister();">مرحله ی قبل
                    </button>
                    <button type="button" id="next_step" class="btn btn-info pull-right" onclick="nextStepRegister();">مرحله بعد
                    </button>
                    <button type="submit" id="submit" class="btn btn-danger pull-right" style="display: none;">تکمیل ثبت نام
                    </button>
                </div><!-- /.box-footer -->
            </form>
        </div>
    </div>
</section>