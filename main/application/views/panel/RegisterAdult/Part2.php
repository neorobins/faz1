<div id="part2">

    <div class="box box-solid box-info">
        <div class="box-header with-border">
            <h3 class="box-title">تاریخچه خانوادگی</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <div class="form-group">
                <label for="getEmail" class="col-sm-2 control-label">با چه کسی یا کسانی زندگی می کنید؟</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" name="28" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="getEmail" class="col-sm-2 control-label">وضعیت تاهل</label>

                <div class="col-sm-10">
                    <script>
                        function getMariage() {
                            if ($("#mariage").val() == 1) {
                                $("#d20").hide();
                            } else {
                                $("#d20").show();
                            }
                        }
                    </script>
                    <select id="mariage" onchange="getMariage();">
                        <option value="1">مجرد</option>
                        <option value="2">متاهل</option>
                        <option value="3">مطلقه</option>
                        <option value="4">متاهل اما جدا زندگی میکنیم</option>
                        <option value="5">همسرم فوت شده</option>
                    </select>
                    <input type="text" id="d20" style="display: none;" placeholder="از سال...">
                </div>
            </div>

            <div class="form-group">
                <label for="getSMS" class="col-sm-2 control-label">آیا دارای فرزند هستید؟</label>

                <div class="col-sm-10">
                    <input id="sms_yes" type="radio" class="minimal" name="14" value="yes" checked>
                    <label for="sms_yes">بله</label>
                    <input id="sms_no" type="radio" class="minimal" name="14" value="no">
                    <label for="sms_no">خیر</label>
                </div>
            </div>
            <div class="form-group">
                <label for="child_number" class="col-sm-2 control-label">تعداد فرزندان</label>

                <div class="col-sm-10">
                    <input id="child_number" type="number" size="6" min="0" max="17" value="0" class="form-control"
                           name="age" placeholder="">
                </div>
            </div>

            <br/>
            <label><span class="glyphicon glyphicon-chevron-left"></span>در صورت پاسخ بله به سوالات زیر پاسخ دهید:</label>
            <br/>

            <div class="form-group">
                <label for="education" class="col-sm- control-label">نوع زایمان</label>

                <div class="col-sm-10">
                    <select class="form-control" name="9" style="height: auto;">
                        <option value="underDiploma">طبیعی (استفاده از فورسپس یا وکیوم ذکر شود)</option>
                        <option value="diploma">سزارین</option>
                    </select>
                </div>
            </div>

            <br/>
            <label><span class="glyphicon glyphicon-chevron-left"></span>کدام یک از مشکلات زیر را حین یا بعد از بارداری تجربه کردید:</label>
            <br/>

            <div class="form-group">
                <label for="ch1" class="col-sm-3 control-label">سقط جنین</label>

                <div class="col-sm-1">
                    <label class="">
                        <input id="ch1" type="checkbox" class="minimal" name="26b">&nbsp&nbsp
                    </label>
                </div>
                <div class="col-sm-8">
                        <input id="child_number" type="number" size="6" min="0" max="17" value="0" class="form-control"
                               name="age" placeholder="">
                </div>
            </div>

            <div class="form-group">
                <label for="ch2" class="col-sm-3 control-label">افسردگی</label>

                <div class="col-sm-9">
                    <label class="">
                        <input id="ch2" type="checkbox" class="minimal" name="26b">
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="ch3" class="col-sm-3 control-label">استفاده از فورسپس یا وکیوم</label>

                <div class="col-sm-9">
                    <label class="">
                        <input id="ch3" type="checkbox" class="minimal" name="26b">
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="ch4" class="col-sm-3 control-label">دوران بارداری سخت</label>

                <div class="col-sm-9">
                    <label class="">
                        <input id="ch4" type="checkbox" class="minimal" name="26b">
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label for="ch5" class="col-sm-3 control-label">دیگر مشکلات و موارد</label>

                <div class="col-sm-1">
                    <label class="">
                        <input id="ch5" type="checkbox" class="minimal" name="26b">&nbsp&nbsp
                    </label>
                </div>
                <div class="col-sm-8">
                    <input type="text" name="26" class="form-control">
                </div>
            </div>

            <br/>
            <label><span class="glyphicon glyphicon-chevron-left"></span> لطفا جدول زیر را تکمیل نمایید</label>
            <br/>
            <br/>

            <div class="form-group">
                <div class="box-body table-responsive padding-10px">
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <th></th>
                            <th>اعضای خانواده</th>
                            <th>نام و نام خانوادگی</th>
                            <th>سن</th>
                            <th>تحصیلات</th>
                            <th>دو ویژگی شخصیتی بارز در فرد ذکر شده را بنویسید</th>
                            <th>کیفیت ارتباط</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td>پدر</td>
                            <td><input type="text" class="form-control" name="38-43" placeholder=""></td>
                            <td><input type="text" class="form-control" name="38-44" placeholder=""></td>
                            <td><input type="text" class="form-control" name="38-45" placeholder=""></td>
                            <td><input type="text" class="form-control" name="38-46" placeholder=""></td>
                            <td>
                                <div class="col-sm-10">
                                    <select name="38-47">
                                        <option value="1">خوب</option>
                                        <option value="2">متوسط</option>
                                        <option value="3">بد</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>مادر</td>
                            <td><input type="text" class="form-control" name="39-43" placeholder=""></td>
                            <td><input type="text" class="form-control" name="39-44" placeholder=""></td>
                            <td><input type="text" class="form-control" name="39-45" placeholder=""></td>
                            <td><input type="text" class="form-control" name="39-46" placeholder=""></td>
                            <td>
                                <div class="col-sm-10">
                                    <select name="39-47">
                                        <option value="1">خوب</option>
                                        <option value="2">متوسط</option>
                                        <option value="3">بد</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>همسر</td>
                            <td><input type="text" class="form-control" name="40-43" placeholder=""></td>
                            <td><input type="text" class="form-control" name="40-44" placeholder=""></td>
                            <td><input type="text" class="form-control" name="40-45" placeholder=""></td>
                            <td><input type="text" class="form-control" name="40-46" placeholder=""></td>
                            <td>
                                <div class="col-sm-10">
                                    <select name="40-47">
                                        <option value="1">خوب</option>
                                        <option value="2">متوسط</option>
                                        <option value="3">بد</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>فرزند 1</td>
                            <td><input type="text" class="form-control" name="41-43-1" placeholder=""></td>
                            <td><input type="text" class="form-control" name="41-44-1" placeholder=""></td>
                            <td><input type="text" class="form-control" name="41-45-1" placeholder=""></td>
                            <td><input type="text" class="form-control" name="41-46-1" placeholder=""></td>
                            <td>
                                <div class="col-sm-10">
                                    <select name="41-47-1">
                                        <option value="1">خوب</option>
                                        <option value="2">متوسط</option>
                                        <option value="3">بد</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <script>
                            $(document).ready(function () {
                                $('#add_children').click(function () {
                                    increaseChildrenCount();
                                    var count = getChildrenCount();
                                    div =   '<tr>' +
                                            '<td></td>' +
                                            '<td>فرزند ' + count + '</td>' +
                                            '<td><input type="text" class="form-control" name="41-43-' + count + '" placeholder=""></td>' +
                                            '<td><input type="text" class="form-control" name="41-44-' + count + '" placeholder=""></td>' +
                                            '<td><input type="text" class="form-control" name="41-45-' + count + '" placeholder=""></td>' +
                                            '<td><input type="text" class="form-control" name="41-46-' + count + '" placeholder=""></td>' +
                                            '<td>' +
                                            '<div class="col-sm-10">' +
                                            '<select name="41-47-' + count + '">' +
                                            '<option value="1">خوب</option>' +
                                            '<option value="2">متوسط</option>' +
                                            '<option value="3">بد</option>' +
                                            '</select>' +
                                            '</div>' +
                                            '</td>' +
                                            '</tr>';
                                    $('#add_children_row').before(div);
                                });
                            });

                            function getChildrenCount() {
                                var x = document.getElementById('children_count');
                                var count = x.className;
                                return count;
                            }

                            function increaseChildrenCount() {
                                var x = document.getElementById('children_count');
                                x.className++;
                            }
                        </script>
                        <tr id="add_children_row">
                            <td id="children_count" class="1"></td>
                            <td>
                                <a class="btn btn-block btn-social btn-facebook" id="add_children">
                                    <i class="fa fa-plus"></i>افزودن فرزند
                                </a>

                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>برادر/خواهر 1</td>
                            <td><input type="text" class="form-control" name="42-43-1" placeholder=""></td>
                            <td><input type="text" class="form-control" name="42-44-1" placeholder=""></td>
                            <td><input type="text" class="form-control" name="42-45-1" placeholder=""></td>
                            <td><input type="text" class="form-control" name="42-46-1" placeholder=""></td>
                            <td>
                                <div class="col-sm-10">
                                    <select name="42-47-1">
                                        <option value="1">خوب</option>
                                        <option value="2">متوسط</option>
                                        <option value="3">بد</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <script>
                            $(document).ready(function () {
                                $('#add_sibling').click(function () {
                                    increaseSiblingCount();
                                    var count = getSiblingCount();
                                    div =   '<tr>' +
                                        '<td></td>' +
                                        '<td>برادر/خواهر ' + count + '</td>' +
                                        '<td><input type="text" class="form-control" name="42-43-' + count + '" placeholder=""></td>' +
                                        '<td><input type="text" class="form-control" name="42-44-' + count + '" placeholder=""></td>' +
                                        '<td><input type="text" class="form-control" name="42-45-' + count + '" placeholder=""></td>' +
                                        '<td><input type="text" class="form-control" name="42-46-' + count + '" placeholder=""></td>' +
                                        '<td>' +
                                        '<div class="col-sm-10">' +
                                        '<select name="42-47-' + count + '">' +
                                        '<option value="1">خوب</option>' +
                                        '<option value="2">متوسط</option>' +
                                        '<option value="3">بد</option>' +
                                        '</select>' +
                                        '</div>' +
                                        '</td>' +
                                        '</tr>';
                                    $('#add_sibling_row').before(div);
                                });
                            });

                            function getSiblingCount() {
                                var x = document.getElementById('sibling_count');
                                var count = x.className;
                                return count;
                            }

                            function increaseSiblingCount() {
                                var x = document.getElementById('sibling_count');
                                x.className++;
                            }
                        </script>
                        <tr id="add_sibling_row">
                            <td id="sibling_count" class="1"></td>
                            <td>
                                <a class="btn btn-block btn-social btn-facebook" id="add_sibling">
                                    <i class="fa fa-plus"></i>افزودن برادر / خواهر
                                </a>

                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <br/>
            <label><span class="glyphicon glyphicon-chevron-left"></span>در صورت وجود سابقه ی بیماری پزشکی یا اختلالات
                روانشناختی در افراد آن را در جدول زیر یادداشت نمایید</label>
            <br/>
            <br/>

            <div class="form-group">
                <div class="box-body table-responsive padding-10px">
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <td></td>
                            <th>نسبت</th>
                            <th>نام بیماری/اختلال</th>
                            <th>سن بروز علائم</th>
                            <th>علائم</th>
                            <th>درمان های انجام شده</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td></td>
                            <td>پدر</td>
                            <td><input type="text" class="form-control" name="48-53" placeholder=""></td>
                            <td><input type="text" class="form-control" name="48-54" placeholder=""></td>
                            <td><input type="text" class="form-control" name="48-55" placeholder=""></td>
                            <td><input type="text" class="form-control" name="48-56" placeholder=""></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>مادر</td>
                            <td><input type="text" class="form-control" name="49-53" placeholder=""></td>
                            <td><input type="text" class="form-control" name="49-54" placeholder=""></td>
                            <td><input type="text" class="form-control" name="49-55" placeholder=""></td>
                            <td><input type="text" class="form-control" name="49-56" placeholder=""></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>فرزندان</td>
                            <td><input type="text" class="form-control" name="50-53-1" placeholder=""></td>
                            <td><input type="text" class="form-control" name="50-54-1" placeholder=""></td>
                            <td><input type="text" class="form-control" name="50-55-1" placeholder=""></td>
                            <td><input type="text" class="form-control" name="50-56-1" placeholder=""></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>برادر/خواهر</td>
                            <td><input type="text" class="form-control" name="51-53-1" placeholder=""></td>
                            <td><input type="text" class="form-control" name="51-54-1" placeholder=""></td>
                            <td><input type="text" class="form-control" name="51-55-1" placeholder=""></td>
                            <td><input type="text" class="form-control" name="51-56-1" placeholder=""></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>سایرین (دایی،عمه،عمو...)</td>
                            <td><input type="text" class="form-control" name="52-53-1" placeholder=""></td>
                            <td><input type="text" class="form-control" name="52-54-1" placeholder=""></td>
                            <td><input type="text" class="form-control" name="52-55-1" placeholder=""></td>
                            <td><input type="text" class="form-control" name="52-56-1" placeholder=""></td>
                            <td></td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>

        </div><!-- /.box-body -->
    </div><!-- /.box -->

</div> <!--part2-->