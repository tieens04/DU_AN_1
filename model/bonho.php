<?php
function loadall_bonho()
{
    $sql = "select * from bonho";
    $listbonho = pdo_query($sql);
    return $listbonho;
}
?>