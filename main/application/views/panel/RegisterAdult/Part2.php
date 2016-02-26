<div id="part2" style="display: none;">
    <div class="box-header with-border">
        <h3 class="box-title">تاریخچه خانوادگی</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
        <div class="form-group">
            <label for="getEmail" class="col-sm-2 control-label">با چه کسی یا کسانی زندگی می کنید؟</label>

            <div class="col-sm-10">
                <input type="text" class="form-control" name="d21" placeholder="">
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
                        <td><input type="text" class="form-control" name="d10" placeholder=""></td>
                        <td><input type="text" class="form-control" name="d11" placeholder=""></td>
                        <td><input type="text" class="form-control" name="d12" placeholder=""></td>
                        <td><input type="text" class="form-control" name="d13" placeholder=""></td>
                        <td>
                            <div class="col-sm-10">
                                <select>
                                    <option>خوب</option>
                                    <option>متوسط</option>
                                    <option>بد</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>مادر</td>
                        <td><input type="text" class="form-control" name="d15" placeholder=""></td>
                        <td><input type="text" class="form-control" name="d16" placeholder=""></td>
                        <td><input type="text" class="form-control" name="d17" placeholder=""></td>
                        <td><input type="text" class="form-control" name="d18" placeholder=""></td>
                        <td>
                            <div class="col-sm-10">
                                <select>
                                    <option>خوب</option>
                                    <option>متوسط</option>
                                    <option>بد</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>همسر</td>
                        <td><input type="text" class="form-control" name="d20" placeholder=""></td>
                        <td><input type="text" class="form-control" name="d21" placeholder=""></td>
                        <td><input type="text" class="form-control" name="d22" placeholder=""></td>
                        <td><input type="text" class="form-control" name="d23" placeholder=""></td>
                        <td>
                            <div class="col-sm-10">
                                <select>
                                    <option>خوب</option>
                                    <option>متوسط</option>
                                    <option>بد</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>فرزندان</td>
                        <td><input type="text" class="form-control" name="d25" placeholder=""></td>
                        <td><input type="text" class="form-control" name="d26" placeholder=""></td>
                        <td><input type="text" class="form-control" name="d27" placeholder=""></td>
                        <td><input type="text" class="form-control" name="d28" placeholder=""></td>
                        <td>
                            <div class="col-sm-10">
                                <select>
                                    <option>خوب</option>
                                    <option>متوسط</option>
                                    <option>بد</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>برادر/خواهر</td>
                        <td><input type="text" class="form-control" name="d31" placeholder=""></td>
                        <td><input type="text" class="form-control" name="d32" placeholder=""></td>
                        <td><input type="text" class="form-control" name="d33" placeholder=""></td>
                        <td><input type="text" class="form-control" name="d34" placeholder=""></td>
                        <td>
                            <div class="col-sm-10">
                                <select>
                                    <option>خوب</option>
                                    <option>متوسط</option>
                                    <option>بد</option>
                                </select>
                            </div>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <br/>
        <label><span class="glyphicon glyphicon-chevron-left"></span>در صورت وجود سابقه ی بیماری پزشکی یا اختلالات روانشناختی در افراد آن را در جدول زیر یادداشت نمایید</label>
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
                        <td><input type="text" class="form-control" name="d10" placeholder=""></td>
                        <td><input type="text" class="form-control" name="d11" placeholder=""></td>
                        <td><input type="text" class="form-control" name="d12" placeholder=""></td>
                        <td><input type="text" class="form-control" name="d13" placeholder=""></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>مادر</td>
                        <td><input type="text" class="form-control" name="d15" placeholder=""></td>
                        <td><input type="text" class="form-control" name="d16" placeholder=""></td>
                        <td><input type="text" class="form-control" name="d17" placeholder=""></td>
                        <td><input type="text" class="form-control" name="d18" placeholder=""></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>همسر</td>
                        <td><input type="text" class="form-control" name="d20" placeholder=""></td>
                        <td><input type="text" class="form-control" name="d21" placeholder=""></td>
                        <td><input type="text" class="form-control" name="d22" placeholder=""></td>
                        <td><input type="text" class="form-control" name="d23" placeholder=""></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>فرزندان</td>
                        <td><input type="text" class="form-control" name="d25" placeholder=""></td>
                        <td><input type="text" class="form-control" name="d26" placeholder=""></td>
                        <td><input type="text" class="form-control" name="d27" placeholder=""></td>
                        <td><input type="text" class="form-control" name="d28" placeholder=""></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>برادر/خواهر</td>
                        <td><input type="text" class="form-control" name="d31" placeholder=""></td>
                        <td><input type="text" class="form-control" name="d32" placeholder=""></td>
                        <td><input type="text" class="form-control" name="d33" placeholder=""></td>
                        <td><input type="text" class="form-control" name="d34" placeholder=""></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>سایرین (دایی،عمه،عمو...)</td>
                        <td><input type="text" class="form-control" name="d31" placeholder=""></td>
                        <td><input type="text" class="form-control" name="d32" placeholder=""></td>
                        <td><input type="text" class="form-control" name="d33" placeholder=""></td>
                        <td><input type="text" class="form-control" name="d34" placeholder=""></td>
                        <td></td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>




