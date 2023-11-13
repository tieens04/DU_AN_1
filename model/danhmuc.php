<?php
function insert_danhmuc($tenloai){
    $sql = "INSERT INTO loaisp(name) values('$tenloai')";
    pdo_execute($sql);
}
 function delete_danhmuc($id){
    $sql = "delete from loaisp where id=" .$id;
    pdo_execute($sql);
}
function loadall_danhmuc(){
    $sql = "select * from loaisp order by id desc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
function loadone_danhmuc($id){
    $sql = "select * from loaisp where id=" .$id;
    $dm = pdo_query_one($sql); 
    return $dm;
}
function update_danhmuc($id,$tenloai){
    $sql = "update loaisp set name='".$tenloai."' where id=".$id;
    pdo_execute($sql);
} 
?>