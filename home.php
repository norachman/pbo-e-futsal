<?php session_start();
if(isset($_SESSION["username"])): ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Home</title>
    <center>
        <h1 style="color:white ;">
            <a href="user.php?logout=1">
                <button type="button" class="btn btn-danger" style="float: left;margin-top: 5px;">
                    <svg xmlns="http://www.w3.org/2000/svg" style="margin-top:-5px;" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                      </svg>
                    Logout
                </button>
            </a>
            <svg xmlns="http://www.w3.org/2000/svg"  style="margin-top:-5px;" width="50" height="50" fill="currentColor" class="bi bi-ticket-detailed" viewBox="0 0 16 16">
                <path d="M4 5.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5Zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5ZM5 7a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2H5Z"/>
                <path d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6V4.5ZM1.5 4a.5.5 0 0 0-.5.5v1.05a2.5 2.5 0 0 1 0 4.9v1.05a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-1.05a2.5 2.5 0 0 1 0-4.9V4.5a.5.5 0 0 0-.5-.5h-13Z"/>
              </svg>
            E-Futsal Ticket
            <a href="riwayat.php">
                <button type="button" class="btn btn-light" style="float: right;margin-top: 5px;margin-left:-50px;">
                    <svg xmlns="http://www.w3.org/2000/svg" style="margin-top:-5px;" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                      </svg>
                    Riwayat
                </button>
            </a>
        </h1>
    </center>
    <style>
        
        table {
            font-family: sans-serif;
            width: 80%;
            height: 60%;
            border-collapse: collapse;
            text-align: center;
            background-color: white;
        }
        th {
            background-color: grey;
        }
        th,td {
            padding: 5px;
            border:solid 1px black;
        }
        body {
            background-color: brown;
        }
        .btn {
            width: 120px;
        }
        h1 {
            background-color: rgb(30, 30, 30);
            padding: 10px;
        }
    </style>
</head>
<body>
    <a type="button" class="btn btn-light ms-3" style="float: left; width:auto" id="tanggal" name="tanggal">
        <label for="tanggal">Tanggal</label>
        <input type="date" id="tanggal" name="tanggal">
    </a>
    <center class="mb-5">
        <table>
            <tr>
                <th>PUKUL</th>
                <th>LAP 1</th>
                <th>LAP 2</th>
                <th>LAP 3</th>
                <th>LAP 4</th>
            </tr>
            <tr>
                <td>07.00 - 08.00</td>
                <td <?php if($_SESSION['jadwal'][0][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][0][0][0] == 'done') {echo $_SESSION['jadwal'][0][0][1];} ?> </td>
                <td <?php if($_SESSION['jadwal'][1][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][1][0][0] == 'done') {echo $_SESSION['jadwal'][1][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][2][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][2][0][0] == 'done') {echo $_SESSION['jadwal'][2][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][3][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][3][0][0] == 'done') {echo $_SESSION['jadwal'][3][0][1];}?> </td>
            </tr>
            <tr>
                <td>08.00 - 09.00</td>
                <td <?php if($_SESSION['jadwal'][4][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][4][0][0] == 'done') {echo $_SESSION['jadwal'][4][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][5][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][5][0][0] == 'done') {echo $_SESSION['jadwal'][5][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][6][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][6][0][0] == 'done') {echo $_SESSION['jadwal'][6][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][7][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][7][0][0] == 'done') {echo $_SESSION['jadwal'][7][0][1];}?> </td>
            </tr>
            <tr>
                <td>09.00 - 10.00</td>
                <td <?php if($_SESSION['jadwal'][8][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][8][0][0] == 'done') {echo $_SESSION['jadwal'][8][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][9][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][9][0][0] == 'done') {echo $_SESSION['jadwal'][9][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][10][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][10][0][0] == 'done') {echo $_SESSION['jadwal'][10][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][11][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][11][0][0] == 'done') {echo $_SESSION['jadwal'][11][0][1];}?> </td>
            </tr>
            <tr>
                <td>10.00 - 11.00</td>
                <td <?php if($_SESSION['jadwal'][12][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][12][0][0] == 'done') {echo $_SESSION['jadwal'][12][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][13][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][13][0][0] == 'done') {echo $_SESSION['jadwal'][13][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][14][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][14][0][0] == 'done') {echo $_SESSION['jadwal'][14][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][15][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][15][0][0] == 'done') {echo $_SESSION['jadwal'][15][0][1];}?> </td>
            </tr>
            <tr>
                <td>11.00 - 12.00</td>
                <td <?php if($_SESSION['jadwal'][16][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][16][0][0] == 'done') {echo $_SESSION['jadwal'][16][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][17][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][17][0][0] == 'done') {echo $_SESSION['jadwal'][17][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][18][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][18][0][0] == 'done') {echo $_SESSION['jadwal'][18][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][19][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][19][0][0] == 'done') {echo $_SESSION['jadwal'][19][0][1];}?> </td>
            </tr>
            <tr>
                <td>12.00 - 13.00</td>
                <td <?php if($_SESSION['jadwal'][20][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][20][0][0] == 'done') {echo $_SESSION['jadwal'][20][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][21][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][21][0][0] == 'done') {echo $_SESSION['jadwal'][21][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][22][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][22][0][0] == 'done') {echo $_SESSION['jadwal'][22][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][23][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][23][0][0] == 'done') {echo $_SESSION['jadwal'][23][0][1];}?> </td>
            </tr>
            <tr>
                <td>13.00 - 14.00</td>
                <td <?php if($_SESSION['jadwal'][24][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][24][0][0] == 'done') {echo $_SESSION['jadwal'][24][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][25][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][25][0][0] == 'done') {echo $_SESSION['jadwal'][25][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][26][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][26][0][0] == 'done') {echo $_SESSION['jadwal'][26][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][27][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][27][0][0] == 'done') {echo $_SESSION['jadwal'][27][0][1];}?> </td>
            </tr>
            <tr>
                <td>14.00 - 15.00</td>
                <td <?php if($_SESSION['jadwal'][28][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][28][0][0] == 'done') {echo $_SESSION['jadwal'][28][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][29][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][29][0][0] == 'done') {echo $_SESSION['jadwal'][29][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][30][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][30][0][0] == 'done') {echo $_SESSION['jadwal'][30][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][31][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][31][0][0] == 'done') {echo $_SESSION['jadwal'][31][0][1];}?> </td>
            </tr>
            <tr>

                <td>15.00 - 16.00</td>
                <td <?php if($_SESSION['jadwal'][32][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][32][0][0] == 'done') {echo $_SESSION['jadwal'][32][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][33][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][33][0][0] == 'done') {echo $_SESSION['jadwal'][33][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][34][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][34][0][0] == 'done') {echo $_SESSION['jadwal'][34][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][35][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][35][0][0] == 'done') {echo $_SESSION['jadwal'][35][0][1];}?> </td>
            </tr>
            <tr>
                <td>16.00 - 17.00</td>
                <td <?php if($_SESSION['jadwal'][36][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][36][0][0] == 'done') {echo $_SESSION['jadwal'][36][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][37][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][37][0][0] == 'done') {echo $_SESSION['jadwal'][37][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][38][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][38][0][0] == 'done') {echo $_SESSION['jadwal'][38][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][39][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][39][0][0] == 'done') {echo $_SESSION['jadwal'][39][0][1];}?> </td>
            </tr>
            <tr>
                <td>17.00 - 18.00</td>
                <td <?php if($_SESSION['jadwal'][40][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][40][0][0] == 'done') {echo $_SESSION['jadwal'][40][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][41][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][41][0][0] == 'done') {echo $_SESSION['jadwal'][41][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][42][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][42][0][0] == 'done') {echo $_SESSION['jadwal'][42][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][43][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][43][0][0] == 'done') {echo $_SESSION['jadwal'][43][0][1];}?> </td>
            </tr>
            <tr>
                <td>18.00 - 19.00</td>
                <td <?php if($_SESSION['jadwal'][44][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][44][0][0] == 'done') {echo $_SESSION['jadwal'][44][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][45][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][45][0][0] == 'done') {echo $_SESSION['jadwal'][45][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][46][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][46][0][0] == 'done') {echo $_SESSION['jadwal'][46][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][47][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][47][0][0] == 'done') {echo $_SESSION['jadwal'][47][0][1];}?> </td>
            </tr>
            <tr>
                <td>19.00 - 20.00</td>
                <td <?php if($_SESSION['jadwal'][48][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][48][0][0] == 'done') {echo $_SESSION['jadwal'][48][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][49][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][49][0][0] == 'done') {echo $_SESSION['jadwal'][49][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][50][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][50][0][0] == 'done') {echo $_SESSION['jadwal'][50][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][51][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][51][0][0] == 'done') {echo $_SESSION['jadwal'][51][0][1];}?> </td>
            </tr>
            <tr>
                <td>20.00 - 21.00</td>
                <td <?php if($_SESSION['jadwal'][52][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][52][0][0] == 'done') {echo $_SESSION['jadwal'][52][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][53][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][53][0][0] == 'done') {echo $_SESSION['jadwal'][53][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][54][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][54][0][0] == 'done') {echo $_SESSION['jadwal'][54][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][55][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][55][0][0] == 'done') {echo $_SESSION['jadwal'][55][0][1];}?> </td>
            </tr>
            <tr>
                <td>21.00 - 22.00</td>
                <td <?php if($_SESSION['jadwal'][56][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][56][0][0] == 'done') {echo $_SESSION['jadwal'][56][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][57][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][57][0][0] == 'done') {echo $_SESSION['jadwal'][57][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][58][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][58][0][0] == 'done') {echo $_SESSION['jadwal'][58][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][59][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][59][0][0] == 'done') {echo $_SESSION['jadwal'][59][0][1];}?> </td>
            </tr>
            <tr>
                <td>22.00 - 23.00</td>
                <td <?php if($_SESSION['jadwal'][60][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][60][0][0] == 'done') {echo $_SESSION['jadwal'][60][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][61][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][61][0][0] == 'done') {echo $_SESSION['jadwal'][61][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][62][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][62][0][0] == 'done') {echo $_SESSION['jadwal'][62][0][1];}?> </td>
                <td <?php if($_SESSION['jadwal'][63][0][0] == 'done' ) { ?> class="bg-danger" <?php } ?>> <?php if($_SESSION['jadwal'][63][0][0] == 'done') {echo $_SESSION['jadwal'][63][0][1];}?> </td>
            </tr>
        </table>
        <br>
        <a href="orderForm.php">
            <button type="button" class="btn btn-warning">
                <svg xmlns="http://www.w3.org/2000/svg" style="margin-top:-5px;" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                    <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                  </svg>
                Book Now
            </button>
        </a>
        <?php if($_SESSION['status'] == 'admin'):?>
            <a href="konfirm.php">
                <button type="button" style="width: auto;" class="btn btn-info">
                    <i class="bi bi-envelope-exclamation"></i>
                    Konfirmasi
                </button>
            </a>
        <?php endif; ?>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $.get("booking.php?jadwal=1" , function (response) {
                $.each(response, function (key, value){
                    
                });
            });
        })
    </script>
</body>
</html>
<?php endif; ?>