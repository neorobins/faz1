<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">لیست خدمات</h3>
                </div>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>کد</th>
                        <th>نام</th>
                        <th>نوع</th>
                        <th>بخش</th>
                        <th>قیمت ریال</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1001</td>
                        <td>ASR</td>
                        <td>آزمون</td>
                        <td>خدمات عمومی</td>
                        <td>40000</td>
                    </tr>
                    <tr>
                        <td>1002</td>
                        <td>CBCL</td>
                        <td>آزمون</td>
                        <td>خدمات عمومی</td>
                        <td>20000</td>
                    </tr>
                    <tr>
                        <td>1003</td>
                        <td>تست IQ</td>
                        <td>آزمون</td>
                        <td>خدمات عمومی</td>
                        <td>50000</td>
                    </tr>
                    <tr>
                        <td>1004</td>
                        <td>تمرکز</td>
                        <td>آزمون</td>
                        <td>خدمات عمومی</td>
                        <td>80000</td>
                    </tr>
                    <tr>
                        <td>1005</td>
                        <td>آزمون 1</td>
                        <td>آزمون</td>
                        <td>کلینیک اختلالات خلقی</td>
                        <td>40000</td>
                    </tr>
                    <tr>
                        <td>1006</td>
                        <td>آزمون 2</td>
                        <td>آزمون</td>
                        <td>کلینیک اختلالات خلقی</td>
                        <td>90000</td>
                    </tr>
                    <tr>
                        <td>1007</td>
                        <td>مشاوره آنلاین</td>
                        <td>مشاوره</td>
                        <td>کلینیک تحول و تکامل</td>
                        <td>120000</td>
                    </tr>
                    <tr>
                        <td>1008</td>
                        <td>مشاوره آنلاین</td>
                        <td>مشاوره</td>
                        <td>کلینیک اختلالات خلقی</td>
                        <td>120000</td>
                    </tr>
                    <tr>
                        <td>1009</td>
                        <td>آزمون 3</td>
                        <td>آزمون</td>
                        <td>کلینیک اختلالات خلقی</td>
                        <td>110000</td>
                    </tr>
                    <tr>
                        <td>1010</td>
                        <td>آزمون 4</td>
                        <td>آزمون</td>
                        <td>کلینیک اختلالات خلقی</td>
                        <td>110000</td>
                    </tr>



                    </tbody>
                    <tfoot>
<!--                    <tr>-->
<!--                        <th>کد</th>-->
<!--                        <th>نام</th>-->
<!--                        <th>نوع</th>-->
<!--                        <th>بخش</th>-->
<!--                        <th>قیمت ریال</th>-->
<!--                    </tr>-->
                    </tfoot>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->
<script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>