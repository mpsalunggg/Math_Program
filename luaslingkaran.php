<html>
    <head>
        <title>Luas Lingkaran</title>
        <link href="css/rumus.css" rel="stylesheet">
    </head>
    <body>
        <?php
        if (isset ($_POST["btnsubmit1"])){
            if(empty($_POST["r"])){
                $tidakvalid = true;
            }else {
                $r = $_POST["r"];
                $hasil = round(3.14 * $r * $r,3);
            }
        }
        ?>
        
        <p class="text1">LUAS LINGKARAN</p>
        <img src="logo/lingkaran.png" alt="" class="image">
        <div class="tes1">
            <div class="cadangankotak">
                <form method="post">
                    <table align="center">
                        <tr align="center" class="posisitext">
                            <td>
                                <p>(&pi; x r<sup>2</sup>) =...</p>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <input type="text" name="r" placeholder="r / Jarijari" class="text"><br>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <input type="submit" value="Submit" name="btnsubmit1"class="btn">
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <?php if(isset($tidakvalid)) : ?>
                                    <p class="error">Data Tidak Boleh Kosong</p>
                                <?php endif; ?>
                                <?php if(isset($hasil)) : ?>
                                    <p><?php echo "Keliling lingkaran adalah ".$hasil; ?></p>
                                <?php endif; ?>
                            </td>
                        </tr>
                    </table>         
                </form>
            </div>
        </div>
        <div class="tes3">
            <a href="halamanrumus.php">
                <input type="button" class="button" value="BACK">
            </a>
        </div>
    </body>
</html>