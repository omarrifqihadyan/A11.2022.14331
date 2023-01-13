<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <div class="body" style="background-color: #b8b8b8;border-radius:30px;margin-top:15%;margin-left:10%;margin-right:10%">
            <div class="maincontent">
                <center>
                    <h3>Selamat </h3>
                    <h3>Anda Berhasil untuk Pembelian </h3>
                    <?php 
                                if (isset($_POST ['smt'] )){
                                    if (isset($_POST['pilih1'])) {
                                        $nama1 = $_POST['fname'];
                                        $nama2 = $_POST['lname'];
                                        $alt = $_POST['alt'];

                                        echo '<script type ="text/JavaScript">';
                                        echo 'alert("Berhasil")';
                                        echo '</script>';
                                        echo "Nama kamu : $nama1   $nama2";
                                        echo "<br>";
                                        echo "Alamat : $alt";
                                        echo "<br>";
                                        echo "pembelian : LAND CRUISER";
                                    }
                                    if (isset($_POST['pilih2'])) {
                                        $nama1 = $_POST['fname'];
                                        $nama2 = $_POST['lname'];
                                        $alt = $_POST['alt'];

                                        echo '<script type ="text/JavaScript">';
                                        echo 'alert("Berhasil")';
                                        echo '</script>';

                                        echo "Nama kamu : $nama1   $nama2";
                                        echo "<br>";
                                        echo "Alamat : $alt";
                                        echo "<br>";
                                        echo "pembelian : FORTUNER";
                                    }
                                    if (isset($_POST['pilih2'])) {
                                        $nama1 = $_POST['fname'];
                                        $nama2 = $_POST['lname'];
                                        $alt = $_POST['alt'];

                                        echo '<script type ="text/JavaScript">';
                                        echo 'alert("Berhasil")';
                                        echo '</script>';

                                        echo "Nama kamu : $nama1   $nama2";
                                        echo "<br>";
                                        echo "Alamat : $alt";
                                        echo "<br>";
                                        echo "pembelian : INNOVA ZENIX";
                                    }
                                    if (isset($_POST['pilih4'])) {
                                        $nama1 = $_POST['fname'];
                                        $nama2 = $_POST['lname'];
                                        $alt = $_POST['alt'];

                                        echo '<script type ="text/JavaScript">';
                                        echo 'alert("Berhasil")';
                                        echo '</script>';

                                        echo "Nama kamu : $nama1   $nama2";
                                        echo "<br>";
                                        echo "Alamat : $alt";
                                        echo "<br>";
                                        echo "pembelian : ALPHARD";
                                    }
                                }
                        ?>
                        
                
                </center>
            </div>
        </div>
        <center>
            <a href="home.php">
                    <button style="margin-top:5%;border:none;background-color:pink;border-radius:10px;width:90px;height:34px"> Kembali</button>
            </a>
        </center>
</body>
</html>


<