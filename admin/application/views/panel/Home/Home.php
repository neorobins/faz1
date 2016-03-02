<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">بازیابی سیستم</h3>
                </div>
                <!-- /.box-header -->

                <div class="box box-danger">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="<?= base_url('backup/recovery'); ?>"
                              method="post"
                              accept-charset="utf-8" role="form">
                            <!-- text input -->
                            <div class="form-group">
                                <input name="subject_name" type="file" class="form-control"
                                       value="">
                            </div>
                            <button type="submit" class="btn btn-danger">بارگذاری پشتیبانی</button>
                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>


                <!-- /.box-body -->
            </div>
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">دریافت فایل پشتیبان</h3>
                </div>
                <!-- /.box-header -->

                <div class="box box-success">
                    <!-- /.box-header -->
                    <div class="box-body">
                            <a href="<?=base_url('backup/getBackup');?>"><button class="btn btn-success">دریافت فایل پشتیبان</button>
                    </div>
                    <!-- /.box-body -->
                </div>


                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- /.box-footer -->

            <!-- /.box -->
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->
</section>