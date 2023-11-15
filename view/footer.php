<div class="footer">
    <div class="copy-right">
        <div class="plc">
            <section>
                <ul class="flexContain">
                    <li>Giao hàng hỏa tốc trong 1 giờ</li>
                    <li>Thanh toán linh hoạt: tiền mặt, visa / master, trả góp</li>
                    <li>Trải nghiệm sản phẩm tại nhà</li>
                    <li>Lỗi đổi tại nhà trong 1 ngày</li>
                    <li>Hỗ trợ suốt thời gian sử dụng.
                        <br>Hotline:
                        <a href="tel:12345678" style="color: #288ad6;">12345678</a>
                    </li>
                </ul>
            </section>
        </div>

        <p><a href="index.html">LDD Phone Store</a> - All rights reserved © 2021 - Designed by
            <span style="color: #eee; font-weight: bold">group 15th</span>
        </p>
    </div>
</div>
<i class="fa fa-arrow-up" id="goto-top-page"></i>
</body>
<script>
    var album=[];
for(var i=0;i<7;i++){
    album[i]=new Image();
    album[i].src="view/img/banners/banner"+i+".png";
}
 var interval=setInterval(slideshow,2000);
index=0;
function slideshow(){
    index++;
    if(index>7){
        index=0;
    }
    document.getElementById("banner").src=album[index].src;
}

</script>

</html>