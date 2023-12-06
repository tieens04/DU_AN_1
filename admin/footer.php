
</body>
<script>
function validateForm() {
    var tensp = document.forms["myForm"]["tensp"].value;
    var giasp = document.forms["myForm"]["giasp"].value;
    var soluong = document.forms["myForm"]["soluong"].value;
    var danhgia = document.forms["myForm"]["danhgia"].value;
    var giatrikm = document.forms["myForm"]["giatrikhuyenmai"].value;
    var ram = document.forms["myForm"]["ram"].value;

    if (tensp == "" || giasp == "" || soluong == "" || danhgia == "" || giatrikm == "" || ram == "") {
        alert("Vui lòng điền đầy đủ thông tin.");
        return false;
    }

    if (isNaN(giasp) || isNaN(soluong) || isNaN(danhgia) || isNaN(giatrikm) || isNaN(ram)) {
        alert("Giá sản phẩm, số lượng, đánh giá, giá trị khuyến mãi và RAM phải là giá trị số.");
        return false;
    }

    if (giasp < 0 || soluong < 0 || danhgia < 0 || giatrikm < 0 || ram < 0) {
        alert("Giá sản phẩm, số lượng, đánh giá, giá trị khuyến mãi và RAM không được âm.");
        return false;
    }

    if (parseFloat(giatrikm) > parseFloat(giasp)) {
        alert("Giá trị khuyến mãi không được lớn hơn giá sản phẩm.");
        return false;
    }
}
</script>
</html>