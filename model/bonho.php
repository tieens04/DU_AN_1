<?php
function insert_bonho($tenbonho){
    $sql = "INSERT INTO bonho(name) values('$tenbonho')";
    pdo_execute($sql);
}
 function delete_bonho($id){
    $sql = "delete from bonho where id=" .$id;
    pdo_execute($sql);
}
function loadall_bonho(){
    $sql = "select * from bonho order by id desc";
    $listbonho = pdo_query($sql);
    return $listbonho;
}
function loadone_bonho($id){
    $sql = "select * from bonho where id=" .$id;
    $bonho = pdo_query_one($sql); 
    return $bonho;
}
function update_bonho($id,$tenbonho){
    $sql = "update bonho set name='".$tenbonho."' where id=".$id;
    pdo_execute($sql);
} 
?>