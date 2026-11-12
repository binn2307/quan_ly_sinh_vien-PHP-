<?php

//bắt buộc phải nạp file và chỉ nạp 1 lần
//__DIR__ là  đường dẫn thư mục chưa file php hiện tại
require_once __DIR__ . '/../E_Student(BEAN)/E_Student.php';
require_once __DIR__ . '/../../config/database.php';

class sinhvienDAO{
    private PDO $conn;

    //khởi tạo
    public function __construct()
    {
        $db = new database();
        $this->conn = $db->connection();
    }

    //Thêm 1 sv
    public function insertSV(sinhvien $sv){
        $sql = "INSERT INTO sinhvien(name, age, university) 
                VALUES(:name, :age, :university)";

        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([
            ':name'=>$sv->getName(),
            ':age' => $sv->getAge(),
            ':university' => $sv->getUniversity()
        ]);
    }

    //Lấy tất cả sinh viênn
    public function getALLSV(){
        $sql = "SELECT * FROM sinhvien";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //Tìm sinh viên theo id
    public function getSVBYID(int $id){
        $sql = "SELECT * FROM sinhvien WHERE id = :id";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':id' => $id
        ]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    //update sinh vien
    public function updateSV(sinhvien $sv){
        $sql = "UPDATE sinhvien SET 
                name = :name, age = :age,
                university = :university
                WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([
            ':name'=>$sv->getName(),
            ':age'=>$sv->getAge(),
            ':university'=>$sv->getUniversity(),
            ':id'=>$sv->getId()
        ]); 
    }

    //Xóa sinh viênn
    public function deleteSV(int $id){
        $sql = "DELETE FROM sinhvien WHERE id = :id";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':id'=>$id
        ]);
        return $stmt->rowCount() > 0;
    }
}
?>