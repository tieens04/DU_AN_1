function tang(x) {
    var cha = x.parentElement;
    var soluongcu = cha.children[1];
    var soluongmoi = parseFloat(soluongcu.innerText) + 1;
    soluongcu.innerText = soluongmoi;
    // var vitri = cha.children[4];
    var id = parseFloat(cha.parentElement.children[0].innerText);
    // var dongia = parseFloat(cha.parentElement.children[4].innerText);
    // var km = parseFloat(cha.parentElement.children[6].innerText);
    // var thanhtien = (dongia - km) * soluongmoi;
    // cha.parentElement.children[7].innerText = thanhtien; // Cập nhật số tiền phụ với 2 chữ số thập phân

    // updateTotalAmount(); // Gọi hàm để cập nhật tổng số tiền đơn hàng
    sendData(soluongmoi,id);
}

function giam(x) {
    var cha = x.parentElement;
    var soluongcu = cha.children[1];
    if (parseFloat(soluongcu.innerText) > 1) {
        var soluongmoi = parseFloat(soluongcu.innerText) - 1;
        soluongcu.innerText = soluongmoi;
        var id = parseFloat(cha.parentElement.children[0].innerText);
        // var dongia = parseFloat(cha.parentElement.children[4].innerText);
        // var km = parseFloat(cha.parentElement.children[6].innerText);
        // var thanhtien = (dongia - km) * soluongmoi;
        // cha.parentElement.children[7].innerText = thanhtien; // Cập nhật số tiền phụ với 2 chữ số thập phân

        // updateTotalAmount(); // Gọi hàm để cập nhật tổng số tiền đơn hàng
        sendData(soluongmoi,id);
    } else {
        alert("Đặt hàng tối thiểu là 1");
    }
}
// function tongdonhang(){
//     var tongdh = $("#tong").children("tr");
//     var giohang = $("#giohang").children("tr");
//     var tong =0; 
//     for(let i=0; i<giohang.length;i++){
//         tong+=giohang.eq(i).children("td").eq(7).text();
//     }
//     tongdh.children("td").eq(1).text(tong);
// }

// function updateTotalAmount() {
//     var rows = document.querySelectorAll(".listSanPham tr");
//     var total = 0;

//     rows.forEach(function (row) {
//         var subtotal = parseFloat(row.children[4].innerText);
//         total += subtotal;
//     });

//     document.getElementById("total-amount").innerText = total.toFixed(2); // Cập nhật tổng số tiền trong bảng với 2 chữ số thập phân
// }
// function sendData(soluongmoi) {
//     // Sử dụng fetch để gửi dữ liệu lên server
//     fetch('view/cart/process.php', {
//         method: 'POST',
//         headers: {
//             'Content-Type': 'application/x-www-form-urlencoded',
//         },
//         body: 'soluong=' + soluongmoi,
//     })
//     .then(response => response.text())
//     .then(data => {
//         console.log(data); // Xử lý dữ liệu trả về từ server nếu cần
//     })
//     .catch(error => {
//         console.error('Error:', error);
//     });
// }
