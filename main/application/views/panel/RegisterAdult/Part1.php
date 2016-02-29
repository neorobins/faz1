<div id="part1">

    <div class="box box-solid box-info">
        <div class="box-header with-border">
            <h3 class="box-title">اطلاعات شخصی</h3>
        </div><!-- /.box-header -->

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
                    <input id="male" type="radio" class="minimal" name="gender" value="male">
                    <label for="male">مذکر</label>
                    <input id="female" type="radio" class="minimal" name="gender" value="female">
                    <label for="female">مونث</label>
                </div>
            </div>
            <div class="form-group">
                <label for="birthday" class="col-sm-2 control-label">تاريخ تولد</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" name="birthday" id="birthday2" placeholder=""
                           value=""><img id="date_btn_1"
                                         src="<?= base_url('assets/panel_assets/images/calendar24.png'); ?>"/>
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
            <div class="form-group">
                <label for="insurance" class="col-sm-2 control-label">نوع بیمه</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" name="insurance"
                           placeholder="در صورت نداشتن بیمه این فیلد را خالی بگذارید">
                </div>
            </div>
            <div class="form-group">
                <label for="birthplace" class="col-sm-2 control-label">محل تولد</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" name="birthplace" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="career" class="col-sm-2 control-label">شغل</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" name="career" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="vernacular" class="col-sm-2 control-label">زبان مادری</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" name="vernacular" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="education" class="col-sm-2 control-label">میزان تحصیلات</label>

                <div class="col-sm-10">
                    <select class="form-control" name="education" style="height: auto;">
                        <option value="underDiploma">زیر دیپلم</option>
                        <option value="diploma">دیپلم</option>
                        <option value="associate">فوق دیپلم</option>
                        <option value="bachelor">کارشناسی</option>
                        <option value="master">کارشناسی ارشد</option>
                        <option value="doctoral">دکتری و بالاتر</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="educationField" class="col-sm-2 control-label">رشته ی تحصیلی</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" name="educationField" placeholder="">
                </div>
            </div>
            <br/>
            <label><span class="glyphicon glyphicon-info-sign"></span> لطفا آدرس و شماره تماسی که مایل هستید
                توسط آن با شما در تماس باشیم را در جدول زیر بنویسید</label>
            <br/>
            <br/>

            <div class="form-group">
                <label for="address" class="col-sm-2 control-label">آدرس</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" name="address" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="phoneNumber" class="col-sm-2 control-label">تلفن ثابت</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" name="phoneNumber" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="mobileNumber" class="col-sm-2 control-label">تلفن همراه</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mobileNumber" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="getSMS" class="col-sm-2 control-label">دریافت پیام کوتاه</label>

                <div class="col-sm-10">
                    <input id="sms_yes" type="radio" class="minimal" name="getSMS" value="yes" checked>
                    <label for="sms_yes">بله</label>
                    <input id="sms_no" type="radio" class="minimal" name="getSMS" value="no">
                    <label for="sms_no">خیر</label>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">پست الکترونیکی</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" name="email" placeholder="example@gmail.com">
                </div>
            </div>
            <div class="form-group">
                <label for="getEmail" class="col-sm-2 control-label">دریافت پست الکترونیکی</label>

                <div class="col-sm-10">
                    <input id="email_yes" type="radio" class="minimal" name="getEmail" value="yes" checked>
                    <label for="email_yes">بله</label>
                    <input id="email_no" type="radio" class="minimal" name="getEmail" value="no">
                    <label for="email_no">خیر</label>
                </div>
            </div>
            <br/>
            <label><span class="glyphicon glyphicon-info-sign"></span> در صورت وجود نداشتن امکان دسترسی به
                شما لطفا شماره تماس شخص دیگری را جهت تماس بنویسید</label>
            <br/>
            <br/>

            <div class="form-group">
                <label for="اd1" class="col-sm-2 control-label">نام و نام خانوادگی</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" name="d1" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="d2" class="col-sm-2 control-label">تلفن ثابت</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" name="d2" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="d3" class="col-sm-2 control-label">تلفن همراه</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" name="d3" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="d4" class="col-sm-2 control-label">نسبت</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" name="d4" placeholder="">
                </div>
            </div>
            <hr/>
            <label><span class="glyphicon glyphicon-chevron-left"></span> لطفا نحوه ی آشنایی با مرکز را
                علامت بزنید</label>

            <div class="form-group">
                <label for="d5" class="col-sm-2 control-label">متخصصین دیگر</label>

                <div class="col-sm-10">
                    <label class="">
                        <input type="checkbox" class="minimal" name="d5">&nbsp&nbsp
                        <input type="text" name="d6" placeholder="نام معرف">
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="d7" class="col-sm-2 control-label">دوستان و آشنایان</label>

                <div class="col-sm-10">
                    <label class="">
                        <input type="checkbox" class="minimal" name="d7">&nbsp&nbsp
                        <input type="text" name="d8" placeholder="نام معرف">
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="d5" class="col-sm-2 control-label">اینترنت</label>

                <div class="col-sm-10">
                    <label class="">
                        <input type="checkbox" class="minimal" name="d5">&nbsp&nbsp
                        <input type="text" name="d6" placeholder="نام سایت">
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="d5" class="col-sm-2 control-label">مدرسه یا مهدکودک</label>

                <div class="col-sm-10">
                    <label class="">
                        <input type="checkbox" class="minimal" name="d5">&nbsp&nbsp
                        <input type="text" name="d6" placeholder="نام محل">
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="d5" class="col-sm-2 control-label">رسانه های عمومی</label>

                <div class="col-sm-10">
                    <label class="">
                        <input type="checkbox" class="minimal" name="d5">&nbsp&nbsp
                        <input type="text" name="d6" placeholder="نام برنامه">
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="d5" class="col-sm-2 control-label">مراجعین قبلی آتیه</label>

                <div class="col-sm-10">
                    <label class="">
                        <input type="checkbox" class="minimal" name="d5">&nbsp&nbsp
                        <input type="text" name="d6" placeholder="نام معرف">
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="d5" class="col-sm-2 control-label">غیره</label>

                <div class="col-sm-10">
                    <label class="">
                        <input type="checkbox" class="minimal" name="d5">&nbsp&nbsp
                        <input type="text" name="d6" placeholder="لطفا ذکر شود">
                    </label>
                </div>
            </div>
        </div><!-- /.box-body -->
    </div><!-- /.box -->

</div> <!--part1-->