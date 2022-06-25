<?php 

require_once('db.php');
session_start();

class Booking
{
    public  $tanggal,
            $db,
            $status;

    function __construct()
    {
        //koneksi database
        $this->db = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        if($this->db->connect_error){
            http_response_code(500);
            die("Connection failed: {$this->db->connection_error}");
        }
    }
    
    function __destruct()
    {
        $this->db->close();
    }

    public function addBooking($data)
    {
        foreach ($data as $key => $value){
            $value = is_array($value) ? trim(implode(',',$value)) : trim($value);
            $data[$key] = (strlen($value) > 0 ? $value : NULL);
        }
        // var_dump($data["jam"]);
        // die;
        $tmp= [];
        $jam = explode(',',$data["jam"]);
        foreach ($jam as $str) {
            $query1 = "SELECT * FROM booking WHERE lapangan_id = {$data['lapangan']} AND tanggal = '{$data['tanggal']}' AND jam LIKE '%{$str}%'";
            $sql1 = $this->db->query($query1);
            while($row = $sql1->fetch_assoc()) {
                array_push($tmp, $row);
            }
        }

        if (count($tmp) != 0) {
            return ['false'];
        } else{
            $query = "INSERT INTO booking(pemesan, nama, no_hp, lapangan_id, tanggal, jam, last_create, statuss) VALUES(?, ?, ?, ?, ?, ?, NOW(), 'unpaid')";
            $sql = $this->db->prepare($query);
            $sql->bind_param(
                'ississ',
                $_SESSION['id_user'],
                $data['nama'],
                $data['no_hp'],
                $data['lapangan'],
                $data['tanggal'],
                $data['jam']);
            try {
                $sql->execute();
            } catch (\Exception $e) {
                $sql->close();
                http_response_code(500);
                die($e->getMessage());
            }
            
            $tmp2 = [];
            $query2 = "SELECT * FROM booking WHERE lapangan_id = {$data['lapangan']} AND tanggal = '{$data['tanggal']}' AND jam = '{$data['jam']}' AND nama = '{$data['nama']}' AND no_hp = '{$data['no_hp']}' AND pemesan = {$_SESSION['id_user']} ";
            $sql2 = $this->db->query($query2);
            while($row = $sql2->fetch_assoc()) {
                array_push($tmp2, $row);
            }
            $id_booking = $tmp2[0]['id_booking'];
            
            header("Content-Type: application/json");
            echo json_encode($data);


            $sql->close();
            return ['true', $id_booking];
        }
    }

    public function showPopUp()
    {
        //a
    }

    public function setStatus($data)
    {
        $query = "UPDATE booking SET statuss = 'done' WHERE id_booking = ?";
        $sql = $this->db->prepare($query);
        $sql->bind_param(
            'i',
            $data);
        try {
            $sql->execute();
        } catch (\Exception $e) {
            $sql->close();
            http_response_code(500);
            die($e->getMessage());
        }
        // echo "test";
        // die();
        
        $query1 = "SELECT * FROM booking WHERE id_booking = {$data}";
        $sql1 = $this->db->query($query1);
        $tmp= [];
        while($row = $sql1->fetch_assoc()) {
            array_push($tmp, $row);
        }
        $tmp2=[];
        $jam = explode(',', $tmp[0]['jam'] );
        foreach ($jam as $str) {
            $query2 = "UPDATE booking SET statuss = 'reject' WHERE statuss = 'pending' AND lapangan_id = {$tmp[0]['lapangan_id']} AND tanggal = '{$tmp[0]['tanggal']}' AND jam LIKE '%{$str}%'";
            $sql2 = $this->db->query($query2);
        }


        $sql->close();
    }

    public function showRiwayat()
    {
        // $query = "SELECT * FROM booking WHERE pemesan={$_SESSION['id_user']}";
        $query = "SELECT booking.*, lapangan.harga FROM booking 
                    INNER JOIN lapangan ON booking.lapangan_id=lapangan.id_lapangan
                    WHERE pemesan={$_SESSION['id_user']}";
        $sql = $this->db->query($query);
        $data= [];
        while($row = $sql->fetch_assoc()) {
            array_push($data, $row);
        }
        foreach($data as $k => $v){
            $n = is_null($data[$k]['jam']) ? 0 : count(explode(',',$data[$k]['jam']));
            $data[$k]['harga'] *= $n; 
        }
        header("Content-Type: application/json");
        echo json_encode($data);   
    }

    public function setImage($data, $img)
    {
        $filename = $img['name'];
        $path = $img['tmp_name'];
        $err = $img['error'];
        $type = explode('.',$filename);
        $type = strtolower(end($type));
        $format = ['jpg','jpeg','png'];
        if($err != 0) {
            return 'false';
        }
        if(!in_array($type,$format)) {
            return 'type error';
        }

        move_uploaded_file($path, 'img/assets/' . $data['id_booking'] . '.' . $type);

        $gambar = 'img/assets/' . $data['id_booking'] . '.' . $type;

        $query = "UPDATE booking SET img = ?, statuss = 'pending', last_create = NOW()  WHERE id_booking = ?";
        $sql = $this->db->prepare($query);
        $sql->bind_param(
            'si',
            $gambar,
            $data['id_booking']);
        try {
            $sql->execute();
        } catch (\Exception $e) {
            $sql->close();
            http_response_code(500);
            die($e->getMessage());
        }
        $sql->close();
        return 'true';
    }

    public function getBooking($data)
    {
        $query = "SELECT booking.*, lapangan.harga FROM booking 
                INNER JOIN lapangan ON booking.lapangan_id=lapangan.id_lapangan
                WHERE id_booking = {$data}";
        $sql = $this->db->query($query);
        $tmp= [];
        while($row = $sql->fetch_assoc()) {
            array_push($tmp, $row);
        }
        foreach($tmp as $k => $v){
            $n = is_null($tmp[$k]['jam']) ? 0 : count(explode(',',$tmp[$k]['jam']));
            $tmp[$k]['harga'] *= $n; 
        }
        
        header("Content-Type: application/json");
        echo json_encode($tmp);
    }

    public function showBooking()
    {

        $query = "SELECT booking.*, lapangan.harga FROM booking 
                INNER JOIN lapangan ON booking.lapangan_id=lapangan.id_lapangan
                WHERE statuss='pending' OR statuss = 'unpaid' ORDER BY last_create ASC";
        $sql = $this->db->query($query);
        $data= [];
        while($row = $sql->fetch_assoc()) {
        array_push($data, $row);
        }
        foreach($data as $k => $v){
        $n = is_null($data[$k]['jam']) ? 0 : count(explode(',',$data[$k]['jam']));
        $data[$k]['harga'] *= $n; 
        }

        header("Content-Type: application/json");
        echo json_encode($data);
    }

    public function rejectBooking($data)
    {
        $query = "UPDATE booking SET statuss = 'reject' WHERE id_booking = ?";
        $sql = $this->db->prepare($query);
        $sql->bind_param(
            'i',
            $data);
        try {
            $sql->execute();
        } catch (\Exception $e) {
            $sql->close();
            http_response_code(500);
            die($e->getMessage());
        }
    }

    public function getStatus()
    {
        $this->status = [];
        $lapangan = [1, 2, 3, 4];
        $jam = ['07.00 - 08.00', '08.00 - 09.00', '09.00 - 10.00', '10.00 - 11.00', '11.00 - 12.00', '12.00 - 13.00', '13.00 - 14.00', '14.00 - 15.00', '15.00 - 16.00', '16.00 - 17.00', '17.00 - 18.00', '18.00 - 19.00', '19.00 - 20.00', '20.00 - 21.00', '21.00 - 22.00', '22.00 - 23.00'];
        foreach($jam as $x){
            foreach($lapangan as $y) {
                $query = "SELECT * FROM booking WHERE tanggal = DATE(NOW()) AND lapangan_id = {$y} AND jam LIKE '%{$x}%'  ";
                $sql = $this->db->query($query);
                $tmp= [];
                while($row = $sql->fetch_assoc()) {
                    array_push($tmp, $row);
                }
                if(count($tmp) == 0) {
                    $statuss= ['undone',''];
                } else {
                    $statuss = [$tmp[0]['statuss'] == 'done' ? 'done' : 'undone' , $tmp[0]['nama'] ];

                }
                array_push($this->status, [$statuss]);

            }
        }
        $_SESSION['jadwal'] = $this->status;
        header("Content-Type: application/json");
        echo json_encode($this->status);
    
    }

}

$pesanan = new Booking;

// $pesanan->getStatus();
// var_dump(isset($_GET['riwayat']));
// $pesanan->showRiwayat();

if(isset($_GET['show'])){
    $pesanan->showBooking();
} 
if(isset($_POST['lapangan'])){
    $a = $pesanan->addBooking($_POST);
    if($a[0] == 'false'){
        echo "<script>alert('Jadwal yang dipilih tidak tersedia'); window.history.back()</script>";
    } else {
        header('Location: payment.php?id_booking=' . $a[1]);
    }
}
if(isset($_GET['riwayat'])) {
    $pesanan->showRiwayat();
}
if(isset($_GET['payment'])) {
    $pesanan->getBooking($_GET['payment']);
}
if(isset($_FILES['gambar'])){
    $a = $pesanan->setImage($_POST,$_FILES['gambar']);
    if($a == 'false'){
       echo "<script>alert('Tidak ada file'); window.history.back();</script>";
    } 
    if($a== 'type error') {
       echo "<script>alert('harus tipe gambar'); window.history.back();</script>";
    }
    if($a== 'true') {
        header('Location: home.php');
    }
}
if(isset($_GET['setStatus'])) {
    $pesanan->setStatus($_GET['setStatus']);
    header('Location: konfirm.php');
}
if(isset($_GET['reject'])) {
    $pesanan->setStatus($_GET['reject']);
    header('Location: konfirm.php');
} 
if(isset($_GET['jadwal'])) {
   $pesanan->getStatus();
} 
