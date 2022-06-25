<?php 
// session_start();
$lapangan = ['Lapangan 1', 'Lapangan 2', 'Lapangan 3', 'Lapangan 4'];
// include_once('booking.php');
// $data = $a;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>Konfirmasi Pembayaran</title>
    <center>
        <h1 style="color:white ;">
            <svg xmlns="http://www.w3.org/2000/svg" style="margin-top:-5px;" width="40" height="40" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
              </svg>
            Konfirmasi Pembayaran
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
    </center>
    <style>
        body {
            font-family: sans-serif;
            background-color: brown;
        }
        h1 {
            background-color: rgb(30, 30, 30);
            padding: 10px;
        }
        .isian{
            background-color: rgb(229, 202, 232);
            width:max-content;padding: 10px;
            border-radius: 10px;
            font-size: 14px;
        }
        tr,td{
            padding:6px;
        }
        td{
            text-align: left;
        }
        table{
            text-align: center;
        }
    </style>
</head>
<body>
    <center>
        <div class="isian">
            <table id="bokku" style="width:100%;color:black;">
                <tr>
                    <th width="150"> Nama </th>
                    <th width="150"> No. Hp </th>
                    <th width="150"> Lapangan </th>
                    <th width="150"> Tanggal </th>
                    <th width="220"> Jam </th>
                    <th width="120"> Pembayaran </th>
                    <th width="120"> Harga </th>
                    <th width="120"> Status </th>
                    <th width="50"></th>
                    <th width="50"></th>
                </tr>
            </table>
        </div>
    </center>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- pooper js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
    <script>
        var lapangan = ['Lapangan 1', 'Lapangan 2', 'Lapangan 3', 'Lapangan 4'];
        $(document).ready(function () {
            $.get("booking.php?show=1", function (response) {
                $.each(response, function (key, value){
                    $("#bokku").append("<tr><td>"+ value.nama +"</td><td>"+ value.no_hp +"</td><td>"+ lapangan[value.lapangan_id-1] +"</td><td>"+ value.tanggal +"</td><td>"+ value.jam +"</td><td><img src='"+ value.img + "' style='width: 40px;height:40px;cursor:pointer;'></td><td>"+ value.harga +"</td><td>"+ value.statuss +"</td>"+
                                        "<td style='text-align: center ;'>"+
                                            "<a href='booking.php?setStatus=" + value.id_booking + "'><i class='bi bi-check2-circle'></i></a>"+
                                        "</td>"+
                                        "<td style='text-align: center ;'>"+
                                            "<a href='booking.php?reject=" + value.id_booking + "'><i class='bi bi-x-circle'></i></a>"+
                                        "</td></tr>");
                    
                });
            });
        });
    </script>
</body>
</html>