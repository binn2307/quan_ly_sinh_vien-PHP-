<?php

require_once __DIR__."/DAO_Student.php";

class sinhvienBO{
    private sinhvienDAO $svDAO;

    public function __construct()
    {
        $this->svDAO = new sinhvienDAO();
    }

    //lấy tất cả sinh viên
    public function getALLSV(){
        return $this->svDAO->getALLSV();
    }

    //Lấy sinh viên theo id
    public function getSvBYID(int $id){
        if(!is_numeric($id) || $id <= 0){
            return false;
        }
        return $this->svDAO->getSVBYID($id);
    }

    //Thêm sinh viên
    public function insertSV(sinhvien $sv){
        //nếu tên trống
        if(trim($sv->getName()) === "" || !is_string($sv->getName())){
            return false; 
        }

        //nếu tuổi ko phải là số và bé hơn 0
        if(!is_numeric($sv->getAge()) || $sv->getAge() < 0){
            return false;
        }

        if(trim($sv->getUniversity()) === "" || !is_string($sv->getUniversity())){
            return false;
        }

        return $this->svDAO->insertSV($sv);
    }

    //Cập nhập sinh viên
    public function updateSV(sinhvien $sv){
        //nếu tên trống
        if(trim($sv->getName()) === "" || !is_string($sv->getName())){
            return false; 
        }

        //nếu tuổi ko phải là số và bé hơn 0
        if(!is_numeric($sv->getAge()) || $sv->getAge() < 0){
            return false;
        }

        if(trim($sv->getUniversity()) === "" || !is_string($sv->getUniversity())){
            return false;
        }

        if(!is_numeric($sv->getId()) || $sv->getId() < 0){
            return false;
        }

        return $this->svDAO->updateSV($sv);
    }

    //Xóa sinh viên
    public function deleteSV(int $id){
        if(!is_numeric($id) || $id < 0){
            return false;
        }
        return $this->svDAO->deleteSV($id);
    }
} 

?>