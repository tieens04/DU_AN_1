<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Định dạng cho phần form bình luận và danh sách bình luận */
        .comment-form {
            margin-bottom: 20px;
        }

        .comment-form textarea {
            width: 100%;
            padding: 10px 0px;
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: vertical; /* Cho phép chỉnh kích thước theo chiều dọc */
        }

        .comment-form button {
            padding: 8px 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .comment {
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            position: relative;
        }

        .delete-btn {
            padding: 5px 10px;
            background-color: #dc3545;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            position: absolute;
            top: 5px;
            right: 5px;
            transition: background-color 0.3s;
        }

        .delete-btn:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <?php
    session_start(); 
    include "../model/pdo.php";
    include "../model/binhluan.php";
    $idpro = isset($_REQUEST['idpro']) ? $_REQUEST['idpro'] : 0;
// Hoặc nếu chỉ cần kiểm tra GET thì có thể dùng:
// $idpro = isset($_GET['idpro']) ? $_GET['idpro'] : 0;
    if (isset($_GET['idpro'])) {
        $idpro = $_GET['idpro'];
    }

    // Xử lý xóa bình luận
    if (isset($_POST['delete_comment'])) {
        $comment_id = $_POST['comment_id'];
        delete_binhluan($comment_id);
    }

    if (isset($_POST['guibinhluan'])) {
        $idpro = $_POST['idpro'];
        $noidung = $_POST['noidung'];
        $ngaybinhluan = date('H:i:s d/m/Y');
        $iduser = $_SESSION['user']['id'];
        insert_binhluan($iduser, $idpro, $noidung, $ngaybinhluan);
    }

    $dsbl = loadall_binhluan($idpro);
    $html_bl = "";
    foreach ($dsbl as $bl) {
        extract($bl);
        $html_bl .= '<div class="comment"><p>' . $username . '<br> Nội dung: ' . $noidung . ' - (' . $ngaybinhluan . ')</p>';

        // Nút xóa bình luận chỉ hiển thị nếu là bình luận của người dùng đang đăng nhập
        if (isset($_SESSION['user']) && $_SESSION['user']['id'] == $iduser) {
            $html_bl .= '<form method="post" action=""><input type="hidden" name="comment_id" value="' . $id . '"><button type="submit" name="delete_comment" class="delete-btn">Xóa</button></form>';
        }

        $html_bl .= '</div>';
    }
    ?>

    <h1>Bình luận</h1>

    <?php
    if (isset($_SESSION['user']) && (count($_SESSION['user']) > 0)) {
    ?>
        <div class="comment-form">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                <input type="hidden" name="idpro" value="<?php echo $idpro; ?>">
                <textarea name="noidung" id="" cols="100%" rows="5"></textarea><br>
                <button type="submit" name="guibinhluan">Gửi bình luận</button>
            </form>
        </div>
    <?php
    } else {
        echo "<div class='comment-form'><a href='../index.php' target='_parent'>Bạn phải đăng nhập mới có thể bình luận</a></div><br>";
    }
    ?>

    <div class="dsbl">
        <?php echo $html_bl; ?>
    </div>
</body>
</html>