<?php
function loadall_binhluan($idpro)
{
    $sql = "select * from comment where 1";
    if ($idpro > 0)
        $sql .= " AND idpro='" . $idpro . "'";
    $sql .= " order by id desc";
    $listbl = pdo_query($sql);
    return $listbl;
}
