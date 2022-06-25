<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Booking</title>
    <center>
        <h1 style="color:white ;">
            <svg xmlns="http://www.w3.org/2000/svg" style="margin-top:-5px;" width="40" height="40" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
                <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
              </svg>
            Booking
            <a href="home.php">
                <button type="button" class="btn btn-danger" style="float: right;margin-top: 5px;margin-left:-50px;">
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

        tr,td{
            padding:6px;
            width: 200px;
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
            background-color: rgb(95, 95, 95);
            width:max-content;padding: 10px;
            border-radius: 10px;
            font-size: 14px;
        }


    </style>
</head>
<body>
    <center>
    <div class="isian">
    <form action="booking.php" method="POST">
        <table style="width:100%;color:white;">
            <tr>
                <td><label for="nama">Nama lengkap</label></td>
                <td>
                    <input type="text" id="nama" name="nama" style="border-radius:5px;border:none;height:28px;width:200px;" placeholder=" Masukan Nama Lengkap " required >
                </td>
            </tr>
            <tr>
                <td><label for="no_hp">No. HP</label></td>
                <td>
                    <input type="text" id="no_hp" name="no_hp" style="border-radius:5px;border:none;height:28px;width:200px;" placeholder=" Masukan No HP " required>
                </td>
            </tr>
            <tr>
                <td><label for="lapangan">Lapangan</label></td>
                <td>
                    <select id="lapangan" name="lapangan" class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option value="1">Lapangan 1</option>
                        <option value="2">Lapangan 2</option>
                        <option value="3">Lapangan 3</option>
                        <option value="3">Lapangan 4</option>
                      </select>
                </td>
            </tr>
            <tr>
                <td><label for="tanggal">Tanggal</label></td>
                <td>
                    <input type="date" id="tanggal" name="tanggal" style="border-radius:5px;border:none;height:28px;width:200px;" required>
                </td>
            </tr>
            <tr>
                <td><label for="jam">Jam</label></td>
                <td>
                    <select class="form-select form-select-sm" id="jam" name="jam[]" multiple>
                        <option value="07.00 - 08.00">07.00 - 08.00</option>
                        <option value="08.00 - 09.00">08.00 - 09.00</option>
                        <option value="09.00 - 10.00">09.00 - 10.00</option>
                        <option value="10.00 - 11.00">10.00 - 11.00</option>
                        <option value="11.00 - 12.00">11.00 - 12.00</option>
                        <option value="12.00 - 13.00">12.00 - 13.00</option>
                        <option value="13.00 - 14.00">13.00 - 14.00</option>
                        <option value="14.00 - 15.00">14.00 - 15.00</option>
                        <option value="15.00 - 16.00">15.00 - 16.00</option>
                        <option value="16.00 - 17.00">16.00 - 17.00</option>
                        <option value="17.00 - 18.00">17.00 - 18.00</option>
                        <option value="18.00 - 19.00">18.00 - 19.00</option>
                        <option value="19.00 - 20.00">19.00 - 20.00</option>
                        <option value="20.00 - 21.00">20.00 - 21.00</option>
                        <option value="21.00 - 22.00">21.00 - 22.00</option>
                        <option value="22.00 - 23.00">22.00 - 23.00</option>
                      </select>
                </td>
            </tr>
        </table>
        <input type="submit" value="Book" class="tombol mt-3" >
    </form>    
    </div>
        
</center>
</body>
</html>