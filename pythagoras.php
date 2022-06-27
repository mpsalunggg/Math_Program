<html>
    <head>
        <title>Pythagoras</title>
        <link href="css/rumus.css" rel="stylesheet">
    </head>
    <body>
        <!-- Mencari Nilai C -->
        <?php
        if (isset ($_POST["btnsubmit1"])){
            if(empty($_POST["a"]) || empty($_POST["b"])){
                $tidakvalid = true;
            }else {
                $a = $_POST["a"];
                $b = $_POST["b"];
                $c = round(sqrt($a*$a + $b*$b),2);
            }
        }
        ?>
        <!-- Mencari Nilai A -->
        <?php
        if (isset ($_POST["btnsubmit2"])){
            if(empty($_POST["c2"]) || empty($_POST["b2"])){
                $tidakvalid2 = true;
            }elseif($_POST["c2"] < $_POST["b2"]){
                $dataerror = true;
            }else {
                $c2 = $_POST["c2"];
                $b2 = $_POST["b2"];
                $a2 = round(sqrt($c2*$c2 - $b2*$b2),2);
            }
        }
        ?>
        <!-- Mencari Nilai B -->
        <?php
        if (isset ($_POST["btnsubmit3"])){
            if(empty($_POST["c3"]) || empty($_POST["a3"])){
                $tidakvalid3 = true;
            }elseif($_POST["c3"] < $_POST["a3"]) {
                $dataerror2 = true; 
            }else {
                $c3= $_POST["c3"];
                $a3 = $_POST["a3"];
                $b3 = round(sqrt($c3*$c3 - $a3*$a3),2);
            }
        }
        ?>
        <p class="text1">PYHTAGORAS</p>
        <img src="logo/pythagoras.png" alt="" class="image">
        <div class="tes1">


            <!-- Bagian untuk mencari C -->
            <div class="tes2">
                <form method="post">
                    <table align="center">
                        <tr align="center" class="posisitext">
                            <td>
                                <p>(a<sup>2</sup> + b<sup>2</sup> = c<sup>2</sup>)</p>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <input type="text" name="a" placeholder="a" class="text"><br>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <input type="text" name="b" placeholder="b"class="text"><br>
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
                                <?php if(isset($c)) : ?>
                                    <p><?php echo "Nilai C adalah ".$c; ?></p>
                                <?php endif; ?> 
                            </td>
                        </tr>
                    </table>         
                </form>
            </div>


            <!-- Bagian untuk mencari A -->
            <div class="tes2">
                <form method="post">
                    <table align="center">
                        <tr align="center" class="posisitext">
                            <td>
                                <p>(c<sup>2</sup> - b<sup>2</sup> = a<sup>2</sup>)</p>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <input type="text" name="c2" placeholder="c" class="text"><br>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <input type="text" name="b2" placeholder="b" class="text"><br>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <input type="submit" value="Submit" name="btnsubmit2" class="btn">
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <?php if(isset($tidakvalid2)) : ?>
                                    <p class="error">Data Tidak Boleh Kosong</p>
                                <?php endif; ?>
                                <?php if(isset($a2)) : ?>
                                    <p><?php echo "Nilai A adalah ".$a2; ?></p>
                                <?php endif; ?>
                                <?php if(isset($dataerror)) : ?>
                                    <p><?php echo "Nilai B harus Lebih Kecil "; ?></p>
                                <?php endif; ?>
                            </td>
                        </tr>
                    </table>         
                </form>
            </div>


            <!-- Bagian untuk mencari B -->
            <div class="tes2">
                <form method="post">
                    <table align="center">
                        <tr align="center" class="posisitext">
                            <td>
                                <p>(c<sup>2</sup> - a<sup>2</sup> = b<sup>2</sup>)</p>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <input type="text" name="c3" placeholder="c" class="text"><br>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <input type="text" name="a3" placeholder="a" class="text"><br>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <input type="submit" value="Submit" name="btnsubmit3" class="btn">
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <?php if(isset($tidakvalid3)) : ?>
                                    <p class="error">Data Tidak Boleh Kosong</p>
                                <?php endif; ?>
                                <?php if(isset($b3)) : ?>
                                    <p><?php echo "Nilai B adalah ".$b3; ?></p>
                                <?php endif; ?>
                                <?php if(isset($dataerror2)) : ?>
                                    <p><?php echo "Nilai A harus Lebih Kecil "; ?></p>
                                <?php endif; ?>
                            </td>
                        </tr>
                    </table>         
                </form>
            </div>
        </div>


        <!-- Button Kembali -->
        <div class="tes3">
            <a href="halamanrumus.php">
                <input type="button" class="button" value="BACK">
            </a>
            <br>
        </div>
        <p class="ket">Matematika itu tidak sulit gaisss:)</p>
    </body>
</html>