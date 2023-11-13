<?php
function insert_color($tenmau){
    $sql = "INSERT INTO color(name) values('$tenmau')";
    pdo_execute($sql);
}
 function delete_color($id){
    $sql = "delete from color where id=" .$id;
    pdo_execute($sql);
}
function loadall_color(){
    $sql = "select * from color order by id desc";
    $listcolor = pdo_query($sql);
    return $listcolor;
}
function loadone_color($id){
    $sql = "select * from color where id=" .$id;
    $color = pdo_query_one($sql); 
    return $color;
}
function update_color($id,$tenmau){
    $sql = "update color set name='".$tenmau."' where id=".$id;
    pdo_execute($sql);
} 
?>