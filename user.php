<?php 
require_once("db.php");
session_start();


class User
{
    public  $db,
            $nama = "",
            $username = "",
            $status = "",
            $id_user= "";

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

    public function setAttr($nama, $username, $status, $id_user)
    {
        $this->nama = $nama;
        $this->username = $username;
        $this->status = $status;
        $this->id_user = $id_user;
    }

    public function login($data)
    {
        //ambil data dari database
        $username = $data['username'];
        $pwd = $data['password1'];

        $query = " SELECT * FROM users WHERE username='{$username}' AND pasword='{$pwd}' ";
        $sql = $this->db->query($query);
        $result = [];
        while($row = $sql->fetch_assoc()) {
            array_push($result, $row);
        }
        
        if(count($result) != 0) {
            return ['true', $result[0]["nama"], $result[0]["username"], $result[0]["peran"], $result[0]["id_user"]];
        } else {
            return ['false'];
        }

    }

    public function logout()
    {
        $this->nama = "";
        $this->username = "";
        $this->status = "";
        $this->id_user = "";
    }

    
    public function regis($data)
    {    
        //tambahkan data film baru        
        foreach ($data as $key => $value){
            $value = is_array($value) ? trim(implode(',',$value)) : trim($value);
            $data[$key] = (strlen($value) > 0 ? $value : NULL);
        }
        $query = "INSERT INTO users(nama, username, pasword, gender, peran) VALUES(?, ?, ?, ?, 'customer')";
        $sql = $this->db->prepare($query);
        $sql->bind_param(
            'ssss',
            $data['nama'],
            $data['username'],
            $data['password1'],
            $data['jenis_kelamin']);
        try {
            $sql->execute();
        } catch (\Exception $e) {
            $sql->close();
            http_response_code(500);
            die($e->getMessage());
        }
        $sql->close();
    }
}

$user = new User();
// $film->read();
if (!isset($_POST['nama'])) {
    $a = $user->login($_POST);
    if ($a[0] == 'true') {
        $user->setAttr($a[1], $a[2], $a[3], $a[4]);
        $_SESSION['nama'] = $user->nama;
        $_SESSION['username'] = $user->username;
        $_SESSION['status'] = $user->status;
        $_SESSION['id_user'] = $user->id_user;
        
        header("Location: home.php");
        exit();
    } else {
        echo "<script type='text/javascript'>alert('Akun tidak valid');</script>";
        echo "<script>window.location.href='login.php';</script>";
    }
} else if(isset($_GET['logout'])){
    $user->logout();
    header('Location: index.php');
} else {
    $a = $user->login($_POST);
    if($a[0] == 'true') {
        echo "<script type='text/javascript'>alert('Username telah ada, gunakan username lain'); window.history.back();;</script>";
    } else {
        $user->regis($_POST);
        header("Location: login.php");
        exit();
    }
}

