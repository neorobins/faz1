<div id="part1">

    <div class="box box-solid box-info">
        <div class="box-header with-border">
            <h3 class="box-title">اطلاعات شخصی</h3>
        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="form-group">
                <label for="firstName" class="col-sm-2 control-label">نام</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" name="1" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="lastName" class="col-sm-2 control-label">نام خانوادگی</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" name="2" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="gender" class="col-sm-2 control-label">جنسیت</label>

                <div class="col-sm-10">
                    <input id="male" type="radio" class="minimal" name="3" value="male">
                    <label for="male">مذکر</label>
                    <input id="female" type="radio" class="minimal" name="3" value="female">
                    <label for="female">مونث</label>
                </div>
            </div>
            <div class="form-group">
                <label for="birthday" class="col-sm-2 control-label">تاريخ تولد</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" name="4" id="birthday2" placeholder=""
                           value=""><img id="date_btn_1"
                                         src="<?= ASSETS_LOCATION . '/panel_assets/images/calendar24.png'; ?>"/>
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
                    <input type="text" class="form-control" name="5"
                           placeholder="در صورت نداشتن بیمه این فیلد را خالی بگذارید">
                </div>
            </div>
            <div class="form-group">
                <label for="birthplace" class="col-sm-2 control-label">محل تولد</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" name="6" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="career" class="col-sm-2 control-label">شغل</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" name="7" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="vernacular" class="col-sm-2 control-label">زبان مادری</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" name="8" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="education" class="col-sm-2 control-label">میزان تحصیلات</label>

                <div class="col-sm-10">
                    <select class="form-control" name="9" style="height: auto;">
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
                    <input type="text" class="form-control" name="10" placeholder="">
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
                    <input type="text" class="form-control" name="11" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="phoneNumber" class="col-sm-2 control-label">تلفن ثابت</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" name="12" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="mobileNumber" class="col-sm-2 control-label">تلفن همراه</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" name="13" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="getSMS" class="col-sm-2 control-label">دریافت پیام کوتاه</label>

                <div class="col-sm-10">
                    <input id="sms_yes" type="radio" class="minimal" name="14" value="yes" checked>
                    <label for="sms_yes">بله</label>
                    <input id="sms_no" type="radio" class="minimal" name="14" value="no">
                    <label for="sms_no">خیر</label>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">پست الکترونیکی</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" name="15" placeholder="example@gmail.com">
                </div>
            </div>
            <div class="form-group">
                <label for="getEmail" class="col-sm-2 control-label">دریافت پست الکترونیکی</label>

                <div class="col-sm-10">
                    <input id="email_yes" type="radio" class="minimal" name="16" value="yes" checked>
                    <label for="email_yes">بله</label>
                    <input id="email_no" type="radio" class="minimal" name="16" value="no">
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
                    <input type="text" class="form-control" name="17" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="d2" class="col-sm-2 control-label">تلفن ثابت</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" name="18" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="d3" class="col-sm-2 control-label">تلفن همراه</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" name="19" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="d4" class="col-sm-2 control-label">نسبت</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" name="20" placeholder="">
                </div>
            </div>
            <hr/>
            <label><span class="glyphicon glyphicon-chevron-left"></span> لطفا نحوه ی آشنایی با مرکز را
                علامت بزنید</label>

            <div class="form-group">
                <label for="d5" class="col-sm-2 control-label">متخصصین دیگر</label>

                <div class="col-sm-10">
                    <label class="">
                        <input type="checkbox" class="minimal" name="21b">&nbsp&nbsp
                        <input type="text" name="21" placeholder="نام معرف">
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="d7" class="col-sm-2 control-label">دوستان و آشنایان</label>

                <div class="col-sm-10">
                    <label class="">
                        <input type="checkbox" class="minimal" name="22b">&nbsp&nbsp
                        <input type="text" name="22" placeholder="نام معرف">
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="d5" class="col-sm-2 control-label">اینترنت</label>

                <div class="col-sm-10">
                    <label class="">
                        <input type="checkbox" class="minimal" name="23b">&nbsp&nbsp
                        <input type="text" name="23" placeholder="نام سایت">
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="d5" class="col-sm-2 control-label">مدرسه یا مهدکودک</label>

                <div class="col-sm-10">
                    <label class="">
                        <input type="checkbox" class="minimal" name="24b">&nbsp&nbsp
                        <input type="text" name="24" placeholder="نام محل">
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="d5" class="col-sm-2 control-label">رسانه های عمومی</label>

                <div class="col-sm-10">
                    <label class="">
                        <input type="checkbox" class="minimal" name="25b">&nbsp&nbsp
                        <input type="text" name="25" placeholder="نام برنامه">
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="d5" class="col-sm-2 control-label">مراجعین قبلی آتیه</label>

                <div class="col-sm-10">
                    <label class="">
                        <input type="checkbox" class="minimal" name="26b">&nbsp&nbsp
                        <input type="text" name="26" placeholder="نام معرف">
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="d5" class="col-sm-2 control-label">غیره</label>

                <div class="col-sm-10">
                    <label class="">
                        <input type="checkbox" class="minimal" name="27b">&nbsp&nbsp
                        <input type="text" name="27" placeholder="لطفا ذکر شود">
                    </label>
                </div>
            </div>
        </div><!-- /.box-body -->
    </div><!-- /.box -->

</div> <!--part1-->