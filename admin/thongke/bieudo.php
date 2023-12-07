<div class="row2">
    <div id="columnchart" style="width: 900px; height: 500px;"></div>
</div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', { 'packages': ['corechart'] });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Thông tin', 'Số liệu'],
            ['Tổng doanh thu', <?php echo $thongke['total_revenue']; ?>],
            ['Tổng số lượng sản phẩm đã bán', <?php echo $thongke['total_sold_quantity']; ?>],
            ['Đơn hàng mới', <?php echo $thongke_donhang['new_orders']; ?>],
            ['Đang xử lý', <?php echo $thongke_donhang['processing_orders']; ?>],
            ['Đang giao hàng', <?php echo $thongke_donhang['delivering_orders']; ?>],
            ['Hoàn tất', <?php echo $thongke_donhang['completed_orders']; ?>],
            ['Đã hủy', <?php echo $thongke_donhang['cancelled_orders']; ?>]
        ]);

        var options = {
            title: 'Thống kê thông tin',
            legend: { position: 'none' }
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('columnchart'));
        chart.draw(data, options);
    }
</script>