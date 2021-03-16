<?php
require_once 'User.php';
require_once 'Employee.php';

$user_1 = new Employee('Michael','Alesiano','qwoeiuoi23',21);
var_dump($user_1);
try {
    echo $user_1->sconto_abbonamento;
} catch (Exception $e) {
    echo $e->getMessage();
}