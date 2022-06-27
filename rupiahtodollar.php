<html>
    <head>
        <title>Dollar To Rupiah</title>
        <link href="css/rumus.css" rel="stylesheet">
    </head>
    <body>
        <?php
        if (isset ($_POST["btnsubmit1"])){
            if(empty($_POST["m"])){
                $tidakvalid = true;
            }else {
                $m = $_POST["m"];
                $hasil = round(0.000070 * $m,6);
            }
        }
        ?>
        
        
        <p class="text1">RUPIAH TO DOLLAR</p>
        <img src="logo/money.png" alt="" class="image">
        <div class="tes1">
            <div class="cadangankotak">
                <form method="post">
                    <table align="center">
                        <tr align="center" class="posisitext">
                            <td>
                                <p>Rupiah > $USD</p>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <input type="text" name="m" placeholder="Rupiah" class="text"><br>
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
                                    <p><?php echo "$".$hasil; ?></p>
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