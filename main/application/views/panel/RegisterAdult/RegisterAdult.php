<section class="content">
    <div class="row">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">اطلاعات شخصی</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
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
                        <label for="birthday" class="col-sm-2 control-label">تاريخ تولد</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="birthday" id="birthday2" placeholder="" value=""><img id="date_btn_1" src="<?=base_url('assets/panel_assets/images/calendar24.png');?>" />
                        </div>
                        <script type="text/javascript">
                            Calendar.setup({
                                inputField     :    "birthday2",
                                button         :    "date_btn_1",
                                ifFormat       :    "%Y-%m-%d",
                                dateType	   :	'jalali',
                                weekNumbers    : false
                            });
                        </script>
                    </div>
                    ...
                </div><!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right">مرحله بعد</button>
                </div><!-- /.box-footer -->
            </form>
        </div>
    </div>
</section>