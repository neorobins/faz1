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
                <label for="d5" class="col-sm-2 control-label">آیا دارای فرزند هستید؟</label>

                <div class="col-sm-10">
                    <label>بله
                        <input type="radio" class="iradio_flat-blue" id="has-child-yes" value="yes" name="25b">
                    </label>
                    <label>خیر
                        <input type="radio" class="iradio_flat-blue" id="has-child-no" value="no" name="25b">
                    </label>
                </div>
            </div>
            <script>
                $(document).ready(function () {
                    $("#has-child-yes").click(function () {
                        $("#child-birth-number").removeClass("hidden");
                        $("#child-birth-type").removeClass("hidden");
                        $("#child-birth-problem").removeClass("hidden");
                        $("#child-birth-another-problem").removeClass("hidden");
                    });
                    $("#has-child-no").click(function () {
                        $("#child-birth-number").addClass("hidden");
                        $("#child-birth-type").addClass("hidden");
                        $("#child-birth-problem").addClass("hidden");
                        $("#child-birth-another-problem").addClass("hidden");
                    });
                });
            </script>
            <div class="form-group hidden" id="child-birth-number">
                <label for="d5" class="col-sm-2 control-label">تعداد فرزند ها</label>

                <div class="col-sm-10">
                    <label>
                        <input type="number" name="27b">
                    </label>
                </div>
            </div>
            <div class="form-group hidden" id="child-birth-type">
                <label for="d5" class="col-sm-2 control-label">نوع زایمان ها</label>

                <div class="col-sm-10">
                    <label>طبیعی (فورسپس)
                        <input type="checkbox" class="minimal" name="27b">
                    </label>
                    <label>طبیعی (وکیوم)
                        <input type="checkbox" class="minimal" name="27b">
                    </label>
                    <label>سزارین
                        <input type="checkbox" class="minimal" name="27b">
                    </label>
                </div>
            </div>
            <div class="form-group hidden" id="child-birth-problem">
                <label for="d5" class="col-sm-2 control-label">مشکلات حین یا بعد از بارداری</label>
                <script>
                    $(document).ready(function () {
                        $('#abortion').click(function () {
                            $("#abortion-number").toggle(this.checked);
                        });
                    });

                </script>
                <div class="col-sm-10">

                    <label>سقط جنین
                        <input type="checkbox" class="icheckbox_minimal-blue" value="yes" id="abortion" name="30b">
                    </label>
                    <input type="number" id="abortion-number" name="27b" style="display: none" placeholder="تعداد سقط">
                    <label>افسردگی
                        <input type="checkbox" class="icheckbox_minimal-blue" value="yes" name="27b">
                    </label>
                    <label>استفاده از فورسپس یا وکیوم
                        <input type="checkbox" class="icheckbox_minimal-blue" value="yes" name="27b">
                    </label>
                    <label>دوران سخت بارداری
                        <input type="checkbox" class="icheckbox_minimal-blue" value="yes" name="27b">
                    </label>
                </div>
            </div>
            <div class="form-group hidden" id="child-birth-another-problem">
                <label for="d5" class="col-sm-2 control-label">مشکلات حین یا بعد از بارداری</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" name="27b" placeholder="دیگر موارد مشکلات">
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
                                    div = '<tr>' +
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
                                    div = '<tr>' +
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