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
                        <th>کد پرونده</th>
                        <th>نام و نام خانوادگی</th>
                        <th>پرونده</th>
                        <th>تنظیمات کاربری</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>92699</td>
                        <td>علی احمدی</td>
                        <td><i class="fa fa-fw fa-folder-o"></i>مشاهده</td>
                        <td><i class="fa fa-fw fa-cog"></i>مشاهده</td>
                    </tr>
                    <tr>
                        <td>92700</td>
                        <td>محمد امین باژند</td>
                        <td><i class="fa fa-fw fa-folder-o"></i>مشاهده</td>
                        <td><i class="fa fa-fw fa-cog"></i>مشاهده</td>
                    </tr>
                    <tr>
                        <td>92701</td>
                        <td>حامد احتشام</td>
                        <td><i class="fa fa-fw fa-folder-o"></i>مشاهده</td>
                        <td><i class="fa fa-fw fa-cog"></i>مشاهده</td>
                    </tr>
                    <tr>
                        <td>92702</td>
                        <td>سامان جلیلی</td>
                        <td><i class="fa fa-fw fa-folder-o"></i>مشاهده</td>
                        <td><i class="fa fa-fw fa-cog"></i>مشاهده</td>
                    </tr>
                    <tr>
                        <td>92703</td>
                        <td>علی عبد المالکی</td>
                        <td><i class="fa fa-fw fa-folder-o"></i>مشاهده</td>
                        <td><i class="fa fa-fw fa-cog"></i>مشاهده</td>
                    </tr>
                    <tr>
                        <td>92704</td>
                        <td>داریوش حق پرست</td>
                        <td><i class="fa fa-fw fa-folder-o"></i>مشاهده</td>
                        <td><i class="fa fa-fw fa-cog"></i>مشاهده</td>
                    </tr>
                    </tbody>
                    <tfoot>
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