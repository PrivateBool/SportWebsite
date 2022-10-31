<?php
function hacherPassword($password){
    $passHache = password_hash($password, PASSWORD_BCRYPT);
    return $passHache;
}
?>