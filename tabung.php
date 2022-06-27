<html>
    <head>
        <title>Volume Tabung</title>
        <link href="css/rumus.css" rel="stylesheet">
    </head>
    <body>
        <?php
        if (isset ($_POST["btnsubmit1"])){
            if(empty($_POST["r"]) || empty($_POST["t"])){
                $tidakvalid = true;
            }else {
                $r = $_POST["r"];
                $t = $_POST["t"];
                $v = round(3.14 * $r*$r *$t,3);
            }
        }
        ?>
        
        <p class="text1">VOLUME TABUNG</p>
        <img src="logo/tabung.png" alt="" class="image">
        <div class="tes1">
            <div class="tes2">
                <form method="post">
                    <table align="center">
                        <tr align="center" class="posisitext">
                            <td>
                                <p>(22/7 x r<sup>2</sup> x t = Volume)</p>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <input type="text" name="r" placeholder="r / Jarijari" class="text"><br>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <input type="text" name="t" placeholder="t / tinggi"class="text"><br>
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
                                <?php if(isset($v)) : ?>
                                    <p><?php echo "Volume Tabung adalah ".$v; ?></p>
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