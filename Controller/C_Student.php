<?php
require_once __DIR__ . '/../Model/M_Student(BO&DAO)/BO_Student.php';
class C_Student
{

    private sinhvienBO $svBO;

    public function __construct()
    {
        $this->svBO = new sinhvienBO();
    }

    //hiển thị danh sách sinh viên
    public function listSV()
    {
        $list = $this->svBO->getALLSV();

        //gọi view
        require_once __DIR__ . '/../View/StudentList.php';
    }

    public function getSVBYID(int $id)
    {
        return $this->svBO->getSvBYID($id);
    }

    public function detailSV()
    {
        if (isset($_GET['stid'])) {
            $stid = $_GET['stid'];

            $sv = $this->getSVBYID((int)$stid);

            if ($sv === false) {
                echo "Ko tìm thấy sinh viên";
            }

            //gọi view
            require_once './View/StudentDetail.php';
        } else {
            echo "ko tìm thấy id";
        }
    }

    public function addSV()
    {
        //nếu người dùng gửi form
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            //lấy dữ liệu từ form
            $name = $_POST['name'];
            $age = $_POST['age'];
            $univer = $_POST['university'];

            //tạo đối tượng sinh viên
            $sv = new sinhvien(null, $name, $age, $univer);

            //gọi BO để thêm sinh viên
            $result = $this->svBO->insertSV($sv);

            if ($result) {
                echo 'Thêm sinh viên thành công';
                echo '<br>';
                echo '<a href="index.php?action=add">Quay lại</a>';
            } else {
                echo 'Thêm sinh viên thất bại';
                echo '<br>';
                echo '<a href="index.php?action=add">Quay lại</a>';
            }
        } else {
            //Nếu là phương thức GET thì chuyển đến trang add
            require_once __DIR__ . '/../View/StudentAdd.php';
        }
    }

    public function updateSV() {
        if(isset($_GET['stid'])){

            //Kiểm tra  2 trường hợp : GET HAY POST
            if()
            $id = $_GET['stid'];
            $sv = $this->svBO->getSvBYID((int)$id);

            if($sv === false){
                echo "Ko tìm thấy sinh viên!";
                require_once __DIR__ . '/../View/StudentUpdate.php';
            }

            require_once __DIR__ . '/../View/StudentUpdate_view.php';
        }else{
            $list = $this->svBO->getALLSV();
            require_once __DIR__ . '/../View/StudentUpdate.php';
        }
    }

    public function searchSV() {}

    public  function deleteSV()
    {
        if (isset($_GET['stid'])) {
            $id = $_GET['stid'];

            if ($this->svBO->deleteSV((int)$id)) {
                echo "<script>
                        alert('Đã xóa sinh viên có id: $id');
                        window.location.href = 'index.php?action=delete';
                    </script>";
            } else {
                echo "<script>
                        alert('Xóa thất bại hoặc không tìm thấy sinh viên!');
                        window.location.href = 'index.php?action=delete';
                    </script>";
            }
        } else {
            $list = $this->svBO->getALLSV();
            require_once __DIR__ . '/../View/StudentDelete.php';
        }
    }
}
