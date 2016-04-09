<script>
    $(document).ready(function() {
        $(window).keydown(function(event){
            if(event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });
    });
    $(function () {
        formHelper(9);
        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        });
    });
</script>


<!-- Main content -->
<section class="content">

    <!-- Horizontal Form -->
    <!-- form start -->
    <div class="text-danger">
        <?php
        echo validation_errors();

        ?>
    </div>
    <?= form_open('RegisterJuvenile/doRegister', ['class' => 'form-horizontal']); ?>

        <?=$part1?>
        <?=$part2?>
        <?=$part3?>
        <?=$part4?>
        <?=$part5?>
        <?=$part6?>
        <?=$part7?>
        <?=$part8?>
        <?=$part9?>

        <div class="box-footer">
            <button type="button" id="previous_step" class="btn btn-info pull-right" style="display: none;" onclick="previousStepRegister();">مرحله ی قبل
            </button>
            <button type="button" id="next_step" class="btn btn-info pull-right" style="display: none;" onclick="nextStepRegister();">مرحله بعد
            </button>
            <button type="submit" id="submit" class="btn btn-danger pull-right" >تکمیل ثبت نام
            </button>
        </div><!-- /.box-footer -->

    </form>

</section><!-- /.content -->