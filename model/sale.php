<?php
function insert_sale($tensale){
    $sql = "INSERT INTO khuyenmai(name) values('$tensale')";
    pdo_execute($sql);
}
 function delete_sale($id){
    $sql = "delete from khuyenmai where id=" .$id;
    pdo_execute($sql);
}
function loadall_sale(){
    $sql = "select * from khuyenmai order by id desc";
    $listsale = pdo_query($sql);
    return $listsale;
}
function loadone_sale($id){
    $sql = "select * from khuyenmai where id=" .$id;
    $sale = pdo_query_one($sql); 
    return $sale;
}
function update_sale($id,$tensale){
    $sql = "update khuyenmai set name='".$tensale."' where id=".$id;
    pdo_execute($sql);
} 
?>