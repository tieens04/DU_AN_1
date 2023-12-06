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

    if (isNaN(giasp)) {
        alert("Giá sản phẩm phải là giá trị số.");
        return false;
    }

    if (isNaN(soluong)) {
        alert("Số lượng sản phẩm phải là giá trị số.");
        return false;
    }

    if (isNaN(danhgia)) {
        alert("Đánh giá sản phẩm phải là giá trị số.");
        return false;
    }

    if (isNaN(giatrikm)) {
        alert("Giá trị khuyến mãi phải là giá trị số.");
        return false;
    }

    if (isNaN(ram)) {
        alert("RAM phải là giá trị số.");
        return false;
    }

    if (giasp < 0) {
        alert("Giá sản phẩm không được âm.");
        return false;
    }

    if (soluong < 0) {
        alert("Số lượng sản phẩm không được âm.");
        return false;
    }

    if (danhgia < 0) {
        alert("Đánh giá sản phẩm không được âm.");
        return false;
    }

    if (giatrikm < 0) {
        alert("Giá trị khuyến mãi không được âm.");
        return false;
    }

    if (ram < 0) {
        alert("RAM không được âm.");
        return false;
    }

    if (parseFloat(giatrikm) < 0 || parseFloat(giatrikm) > 100) {
        alert("Giá trị khuyến mãi phải nằm trong khoảng từ 0 đến 100.");
        return false;
    }
}
</script>
