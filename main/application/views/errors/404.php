<!-- Main content -->
<section class="content">
    <div class="error-page">
        <h2 class="headline text-yellow"> 404</h2>

        <div class="error-content">
            <h3><i class="fa fa-warning text-yellow"></i>صفحه مورد نظر یافت نشد.</h3>

            <p>
                متأسفانه ما نتوانستیم صفحه ای که به دنبالش بودید را بیابیم
                در ضمن شما ممکن است بخواهید به <a href="<?= base_url() ?>">صحفه ی اصلی</a> بازگردید یا از جست و جوی زیر استفاده کنید
            </p>

            <form class="search-form">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="جست و جو">

                    <div class="input-group-btn">
                        <button type="submit" name="submit" class="btn btn-warning btn-flat"><i
                                class="fa fa-search"></i></button>
                    </div>
                </div><!-- /.input-group -->
            </form>
        </div><!-- /.error-content -->
    </div><!-- /.error-page -->
</section><!-- /.content -->