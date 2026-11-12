<?php

$action = $_GET['action'] ?? 'home';

switch($action){
    case 'home': 
        require_once './View/Home.php';
        break;
    case 'list':
        require_once './Controller/C_Student.php';
        $control = new C_Student();
        $control->listSV();
        break;
    case 'add':
        require_once './Controller/C_Student.php';
        $control = new C_Student();
        $control->addSV();
        break;
    case 'update':
        require_once './Controller/C_Student.php';
        $control = new C_Student();
        $control->updateSV();
        break;
    case 'search':
        require_once './Controller/C_Student.php';
        $control = new C_Student();
        $control->searchSV();
        break;
    case 'delete':
        require_once './Controller/C_Student.php';
        $control = new C_Student(); 
        $control->deleteSV();
        break;
    case 'detail':
        require_once './Controller/C_Student.php';
        $control = new C_Student();
        $control->detailSV();
        break;
    default:
        echo 'Ko tìm thấy chức năng!';
        break;
}

?>