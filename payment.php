<?php 
require_once('db.php');
$id_book = $_GET['id_booking'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Pembayaran</title>
    <center>
        <h1 style="color:white ;">
            <svg xmlns="http://www.w3.org/2000/svg"  style="margin-top:-5px;" width="40" height="40" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
                <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
              </svg>
            Pembayaran
            <a href="home.php">
                <button type="button" class="btn btn-danger" style="float: right;margin-top: 3px;margin-left:-50px;">
                    <svg xmlns="http://www.w3.org/2000/svg" style="margin-top:-5px;" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                      </svg>
                    Exit
                </button>
            </a>
        </h1>
        <style>
            body {
            font-family: sans-serif;
            background-color: brown;
        }
        h1 {
            background-color: rgb(30, 30, 30);
            padding: 10px;
        }
        .tombol {
            background-color: green;
            border: none;
            padding: 8px;
            color:white;
            border-radius: 5px;
            width: 100px;
            cursor: pointer;
            font-size:16px;
        }
        .tombol:hover {
            background-color: rgb(0, 161, 0);
        }
        .isian{
            background-color: rgb(95,95,95);
            width:max-content;padding: 10px;
            border-radius: 10px;
            font-size: 14px;
        }
        tr,td{
            padding:6px;
        }
        </style>
    </center>
</head>
<body>
    <center>
        <div class="isian">
            <form action="booking.php" method="POST" enctype="multipart/form-data">
                <table style="width:100%;color:black;">
                    <tr>
                        <td width="130"> Metode </td>
                        <td>
                            <img src="./img/icon/dana.png" style="width:100px ;height:30px;cursor:pointer;">
                            <img src="./img/icon/gopay.png" style="width:100px ;height:30px;cursor:pointer;">
                        </td>
                    </tr>
                    <tr style="text-align:center;">
                        <td>
                            No. Hp
                        </td>
                        <td>
                            0888888888
                        </td>
                    </tr>
                    <tr id="harga"  style="text-align:center;">
                        <!-- <td>
                            Harga yang harus dibayar
                        </td>
                        <td> $data[0]['harga']; ?>
                        </td> -->
                    </tr>
                    
                    <tr>
                        <td width="130"> Bukti Pembayaran </td>
                        <td>
                            <div class="mb-3">
                                <label for="gambar" class="form-label"></label>
                                <input class="form-control" type="file" id="gambar" name="gambar">
                              </div>
                        </td>
                    </tr>
                </table>
                <input type="submit" value="Send" class="tombol my-3" >
            </form>
            <a style="color: yellow;">Setelah melakukan pembayaran harap Screenshot Bukti Pembayaran<br> lalu kirim Bukti melalui form diatas !! <br></a>    
        </div>
    </center>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- pooper js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
    <script>
        <?php echo "var id ='$id_book';"; ?>
        $(document).ready(function () {
            $.get("booking.php?payment=" + id , function (response) {
                $.each(response, function (key, value){
                    $("#harga").append("<td>Harga yang harus dibayar</td><td>"+ value.harga +"</td><input type='hidden' id='id_booking' name='id_booking' value='"+ value.id_booking +"'>");
                    
                });
            });
        });
    </script>
</body>
</html>