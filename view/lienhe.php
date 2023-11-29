<style>
table{	
	margin-top: 10px;
	height: 20px;
}
.open-modal-btn{
	padding: 5px;
	cursor: pointer;
	background: #FFF;
	border: 1px solid #0C9;
}
.open-modal-btn:hover{
    background: #0C9;
}
    .modal {
	position: fixed;
	top: 0;
	left: 0;
	height: 100%;
	width: 100%;
	background: rgba(0, 0, 0, 0.6);
}

.modal_inner {
	width: 600px;
	position: relative;
	margin: auto;
	top: 50%;
	background: #eee;
	border-radius: 5px;
	overflow: hidden;
	animation: modalShow 0.2s linear;
}

.modal_body {
	padding: 15px;
	background: #eee;
}

.modal_body h2 {
	color: #505260;
	margin-bottom: 10px;
}

.modal_footer {
	padding: 15px;
	text-align: center;
	background: #3599ae;
}

.modal_footer button {
	padding: 10px 20px;
	color: white;
	border-radius: 5px;
	border: none;
	outline: none;
	cursor: pointer;
}

.hide {
	display: none;
}

@keyframes modalShow {
	from {
		top: -200px;
		opacity: 0;

	}

	to {
		top: 50%;
		opacity: 1;
	}
}
</style>
<div class="body-lienhe">
    <div class="lienhe-header">Liên hệ</div>
    <div class="lienhe-info">
        <div class="info-left">
            <p>
            <h2 style="color: gray"> CÔNG TY CỔ PHẦN H - GROUP </h2><br />
            <b>Địa chỉ:</b> 273 An Dương Vương, phường 3, Quận 5, TPHCM<br /><br />
            <b>Telephone:</b> 028 3835 4409<br /><br />
            <b>Hotline:</b> 097777777 - CSKH: 028 9996 777<br /><br />
            <b>Website:</b> <a href="https://github.com/HoangTran0410/DoAn_Web1">Github</a> <br /><br />
            <b>E-mail:</b> DoAn@gmail.com<br /><br />
            <b>Mã số thuế:</b> 01 02 03 04 05<br /><br />
            <b>Tài khoản ngân hàng :</b><br /><br />
            <b>Số TK:</b> 060008086888 <br /><br />
            <b>Tại Ngân hàng:</b> Agribank Chi nhánh Sài Gòn<br /><br /><br /><br />
            <b>Quý khách có thể gửi liên hệ tới chúng tôi bằng cách hoàn tất biểu mẫu dưới đây. Chúng tôi
                sẽ trả lời thư của quý khách, xin vui lòng khai báo đầy đủ. Hân hạnh phục vụ và chân thành
                cảm ơn sự quan tâm, đóng góp ý kiến đến Smartphone Store.</b>
            </p>
        </div>
        <div class="info-right">
            <iframe width="100%" height="450"
                src="https://maps.google.com/maps?width=100%&amp;height=450&amp;hl=en&amp;coord=10.759660000323064,106.68192160315813&amp;q=273%20An%20D%C6%B0%C6%A1ng%20V%C6%B0%C6%A1ng%20Ph%C6%B0%E1%BB%9Dng%203%20Qu%E1%BA%ADn%205%20H%E1%BB%93%20Ch%C3%AD%20Minh%20700000%2C%20Vi%E1%BB%87t%20Nam+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed"
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a
                    href="https://www.maps.ie/create-google-map/">Embed
                    Google Map
                </a>
            </iframe>
            <br />
        </div>
    </div>
    <div class="lienhe-info">

        <div class="guithongtin">
            <p style="font-size: 22px; color: gray">Gửi thông tin liên lạc cho chúng tôi: </p>
            <hr />
            <form name="formlh">
                <table cellspacing="10px">
                    <tr>
                        <td>Họ và tên</td>
                        <td><input type="text" name="ht" size="40" maxlength="40" placeholder="Họ tên"
                                autocomplete="off" required></td>
                    </tr>
                    <tr>
                        <td>Điện thoại liên hệ</td>
                        <td><input type="text" name="sdt" size="40" maxlength="11" minlength="10"
                                placeholder="Điện thoại" required></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ Email</td>
                        <td><input type="email" name="em" size="40" placeholder="Email" autocomplete="off" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Tiêu đề</td>
                        <td><input type="text" name="tde" size="40" maxlength="100" placeholder="Tiêu đề" required>
                    </tr>
                    <tr>
                        <td>Nội dung</td>
                        <td><textarea name="nd" rows="5" cols="44" maxlength="500" wrap="physical"
                                placeholder="Nội dung liên hệ" required></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <!-- <input type="submit" name="guithongtin" class="open-modal-btn" placeholder="Gửi thông tin liên hệ" > -->
                            <input type="button" class="open-modal-btn" value="Gửi thông tin liên hệ" >
                        </td>
                    </tr>
                </table>
            </form>

        </div>
        <div class="modal hide" >
            <div class="modal_inner">
                <div class="modal_body">
                    <h2>Bạn đã gửi thông tin liên hệ thành công</h2>
                </div>
                <div class="modal_footer">
                    <button><a href="index.php">Trở về trang chủ</a></button>
                </div>
            </div>
        </div>
        <div class="thongtinnhom">
            <p style="font-size: 22px; color: gray">Thông tin thành viên nhóm: </p>
            <hr />
            <table>
                <tr>
                    <th>Họ tên</th>
                    <th>MSSV</th>
                    <th>Giới tính</th>
                    <th>Lớp</th>
                    <th>Tỉ lệ công việc</th>
                </tr>
                <tr>
                    <td>Nguyễn Việt Anh</td>
                    <td>PH33479</td>
                    <td>Nam</td>
                    <td>WD18337</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Ngô Quốc Tiến</td>
                    <td>PH38179</td>
                    <td>Nam</td>
                    <td>WD18337</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Nguyễn Đức Hiếu</td>
                    <td>PH31723</td>
                    <td>Nam</td>
                    <td>WD18337</td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<script>

    var btnOpen = document.querySelector('.open-modal-btn');
    var modal = document.querySelector('.modal')
    function toggleModal() {
        modal.classList.toggle('hide')
    }
    btnOpen.addEventListener('click', toggleModal);
    modal.addEventListener('click', function (e) {
        if (e.target == e.currentTarget) {
            toggleModal()
        }
    });

</script>