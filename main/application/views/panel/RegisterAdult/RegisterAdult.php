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
                <?=$part1?>
                <?=$part2?>
                <?=$part3?>
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