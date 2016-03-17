<section class="content">
    <h4>گزارش های امروز</h4>

    <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="info-box bg-green">
                <span class="info-box-icon"><i class="glyphicon glyphicon-user"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">بازدید کنندگان</span>
                    <span class="info-box-number">41,410</span>

                    <div class="progress">
                        <div class="progress-bar" style="width: 100%"></div>
                    </div>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div><!-- /.col -->
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="info-box bg-green">
                <span class="info-box-icon"><i class="glyphicon glyphicon-transfer"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">مجموع خرید های کاربران</span>
                    <span class="info-box-number">41,410 ریال</span>

                    <div class="progress">
                        <div class="progress-bar" style="width: 100%"></div>
                    </div>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div><!-- /.col -->
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="info-box bg-green">
                <span class="info-box-icon"><i class="ion ion-stats-bars"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">مجموع کاربران سیستم</span>
                    <span class="info-box-number">4100</span>

                    <div class="progress">
                        <div class="progress-bar" style="width: 100%"></div>
                    </div>

                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div><!-- /.col -->
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">بازدیدکنندگان هفته</h3>

                </div>
                <div class="box-body">
                    <div class="chart">
                        <canvas id="barChartVisitor" style="height: 143px; width: 371px;" width="463"
                                height="178"></canvas>
                    </div>
                </div><!-- /.box-body -->
            </div>
        </div>
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">مجموع پرداخت های هفته (ریال)</h3>
                </div>
                <div class="box-body">
                    <div class="chart">
                        <canvas id="barChartPurchase" style="height: 143px; width: 371px;" width="463"
                                height="178"></canvas>
                    </div>
                </div><!-- /.box-body -->
            </div>
        </div>
    </div>
</section>
<script>
    $(function () {
        var dataVisitor = {
            labels: ["1394/12/13", "1394/12/14", "1394/12/15", "1394/12/16", "1394/12/17", "1394/12/18", "1394/12/19"],
            datasets: [
                {
                    label: "Visitor",
                    fillColor: "#3090C7",
                    strokeColor: "#3D3C3A",
                    pointColor: "#000",
                    pointStrokeColor: "rgba(60,141,188,1)",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(60,141,188,1)",
                    data: [28, 48, 40, 19, 86, 27, 90]
                }
            ]
        };
        var dataPurchase = {
            labels: ["1394/12/13", "1394/12/14", "1394/12/15", "1394/12/16", "1394/12/17", "1394/12/18", "1394/12/19"],
            datasets: [
                {
                    label: "Purchase",
                    fillColor: "#3090C7",
                    strokeColor: "#3D3C3A",
                    pointColor: "#000",
                    pointStrokeColor: "rgba(60,141,188,1)",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(60,141,188,1)",
                    data: [8800000, 7200000, 4900000, 2500000, 4900000, 4000000, 9000000]
                }
            ]
        };
        runBarChart(dataPurchase, "#barChartPurchase");
        runBarChart(dataVisitor, "#barChartVisitor");
    });
</script>