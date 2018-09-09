<?php
    if(isset($_POST['shopcategory'])){
        include_once 'con.php';
        $category = mysqli_real_escape_string($conn, $_POST['category']);
        $shopname = mysqli_real_escape_string($conn, $_POST['shopname']);
        if(isset($_POST['ck1'])){
            $c1 = "Tube/Bandeau Dresses";

            $sql = "INSERT INTO shop(name, category, tags) VALUES('{$shopname}', '{$category}', '{$c1}');";
            mysqli_query($conn, $sql);

        }
        if(isset($_POST['ck2'])){
            $c2 = "Sheath Dresses";

            $sql = "INSERT INTO shop(name, category, tags) VALUES('{$shopname}', '{$category}', '{$c2}');";
            mysqli_query($conn, $sql);
        }

        if(isset($_POST['ck3'])){
            $c3 = "Blouson Dresses";

            $sql = "INSERT INTO shop(name, category, tags) VALUES('{$shopname}', '{$category}', '{$c3}');";
            mysqli_query($conn, $sql);
        }

        if(isset($_POST['ck4'])){
            $c4 = "Tunic Dresses";

            $sql = "INSERT INTO shop(name, category, tags) VALUES('{$shopname}', '{$category}', '{$c4}');";
            mysqli_query($conn, $sql);
        }

        if(isset($_POST['ck5'])){
            $c5 = "Pencil Dresses";

            $sql = "INSERT INTO shop(name, category, tags) VALUES('{$shopname}', '{$category}', '{$c5}');";
            mysqli_query($conn, $sql);
        }

        if(isset($_POST['ck6'])){
            $c6 = "Asymmetric Dresses";

            $sql = "INSERT INTO shop(name, category, tags) VALUES('{$shopname}', '{$category}', '{$c6}');";
            mysqli_query($conn, $sql);
        }

        if(isset($_POST['ck7'])){
            $c7 = "Trench Dresses";

            $sql = "INSERT INTO shop(name, category, tags) VALUES('{$shopname}', '{$category}', '{$c7}');";
            mysqli_query($conn, $sql);
        }

        if(isset($_POST['ck8'])){
            $c8 = "Bandage Dresses";

            $sql = "INSERT INTO shop(name, category, tags) VALUES('{$shopname}', '{$category}', '{$c8}');";
            mysqli_query($conn, $sql);
        }

        if(isset($_POST['ck9'])){
            $c9 = "High-Low Dresses";

            $sql = "INSERT INTO shop(name, category, tags) VALUES('{$shopname}', '{$category}', '{$c9}');";
            mysqli_query($conn, $sql);
        }

        if(isset($_POST['ck10'])){
            $c10 = "Empire Waist Dresses";

            $sql = "INSERT INTO shop(name, category, tags) VALUES('{$shopname}', '{$category}', '{$c10}');";
            mysqli_query($conn, $sql);
        }

        if(isset($_POST['ck11'])){
            $c11 = "Bodycon Dresses";

            $sql = "INSERT INTO shop(name, category, tags) VALUES('{$shopname}', '{$category}', '{$c11}');";
            mysqli_query($conn, $sql);
        }

        if(isset($_POST['ck12'])){
            $c12 = "Skater Dresses";

            $sql = "INSERT INTO shop(name, category, tags) VALUES('{$shopname}', '{$category}', '{$c12}');";
            mysqli_query($conn, $sql);

        }
        if(isset($_POST['ck13'])){
            $c13 = "Maxi/Long Dresses";

            $sql = "INSERT INTO shop(name, category, tags) VALUES('{$shopname}', '{$category}', '{$c13}');";
            mysqli_query($conn, $sql);
        }

        if(isset($_POST['ck14'])){
            $c14 = "Midi Dresses";

            $sql = "INSERT INTO shop(name, category, tags) VALUES('{$shopname}', '{$category}', '{$c14}');";
            mysqli_query($conn, $sql);
        }

        if(isset($_POST['ck15'])){
            $c15 = "Mini Dresses";

            $sql = "INSERT INTO shop(name, category, tags) VALUES('{$shopname}', '{$category}', '{$c15}');";
            mysqli_query($conn, $sql);
        }

        if(isset($_POST['ck16'])){
            $c16 = "Kaftan Dresses";

            $sql = "INSERT INTO shop(name, category, tags) VALUES('{$shopname}', '{$category}', '{$c16}');";
            mysqli_query($conn, $sql);
        }

        if(isset($_POST['ck17'])){
            $c17 = "Shirt Dresses";

            $sql = "INSERT INTO shop(name, category, tags) VALUES('{$shopname}', '{$category}', '{$c17}');";
            mysqli_query($conn, $sql);
        }

        if(isset($_POST['ck18'])){
            $c18 = "Off Shoulder Dresses";

            $sql = "INSERT INTO shop(name, category, tags) VALUES('{$shopname}', '{$category}', '{$c18}');";
            mysqli_query($conn, $sql);
        }

        if(isset($_POST['ck19'])){
            $c19 = "Sweater Dresses";

            $sql = "INSERT INTO shop(name, category, tags) VALUES('{$shopname}', '{$category}', '{$c19}');";
            mysqli_query($conn, $sql);
        }

        if(isset($_POST['ck20'])){
            $c20 = "Tie Detail Dresses";

            $sql = "INSERT INTO shop(name, category, tags) VALUES('{$shopname}', '{$category}', '{$c20}');";
            mysqli_query($conn, $sql);
        }

        if(isset($_POST['ck21'])){
            $c21 = "Peplum Dresses";

            $sql = "INSERT INTO shop(name, category, tags) VALUES('{$shopname}', '{$category}', '{$c21}');";
            mysqli_query($conn, $sql);
        }

        if(isset($_POST['ck22'])){
            $c22 = "Party Dresses";

            $sql = "INSERT INTO shop(name, category, tags) VALUES('{$shopname}', '{$category}', '{$c22}');";
            mysqli_query($conn, $sql);
        }

        if(isset($_POST['ck23'])){
            $c23 = "Backless Dresses";

            $sql = "INSERT INTO shop(name, category, tags) VALUES('{$shopname}', '{$category}', '{$c23}');";
            mysqli_query($conn, $sql);
        }

        

        if(isset($_POST['ck24'])){
            $c24 = "Fringe Detail Dresses";

            $sql = "INSERT INTO shop(name, category, tags) VALUES('{$shopname}', '{$category}', '{$c24}');";
            mysqli_query($conn, $sql);
        }

        if(isset($_POST['ck25'])){
            $c25 = "Pop over Dresses";

            $sql = "INSERT INTO shop(name, category, tags) VALUES('{$shopname}', '{$category}', '{$c25}');";
            mysqli_query($conn, $sql);
        }

        if(isset($_POST['ck26'])){
            $c26 = "Baby Doll Dresses";

            $sql = "INSERT INTO shop(name, category, tags) VALUES('{$shopname}', '{$category}', '{$c26}');";
            mysqli_query($conn, $sql);
        }

        if(isset($_POST['ck27'])){
            $c27 = "A-line Dresses";

            $sql = "INSERT INTO shop(name, category, tags) VALUES('{$shopname}', '{$category}', '{$c27}');";
            mysqli_query($conn, $sql);
        }

        if(isset($_POST['ck28'])){
            $c28 = "Layered Dresses";

            $sql = "INSERT INTO shop(name, category, tags) VALUES('{$shopname}', '{$category}', '{$c28}');";
            mysqli_query($conn, $sql);
        }

        if(isset($_POST['ck29'])){
            $c29 = "Lace-Up Detail Dresses";

            $sql = "INSERT INTO shop(name, category, tags) VALUES('{$shopname}', '{$category}', '{$c29}');";
            mysqli_query($conn, $sql);
        }

        if(isset($_POST['ck30'])){
            $c30 = "Denim Dresses";

            $sql = "INSERT INTO shop(name, category, tags) VALUES('{$shopname}', '{$category}', '{$c30}');";
            mysqli_query($conn, $sql);
        }

        if(isset($_POST['ck31'])){
            $c31 = "Dungaree/Pinafore Dresses";

            $sql = "INSERT INTO shop(name, category, tags) VALUES('{$shopname}', '{$category}', '{$c31}');";
            mysqli_query($conn, $sql);
        }

        if(isset($_POST['ck32'])){
            $c32 = "Cape Dresses";

            $sql = "INSERT INTO shop(name, category, tags) VALUES('{$shopname}', '{$category}', '{$c32}');";
            mysqli_query($conn, $sql);
        }

        if(isset($_POST['ck33'])){
            $c33 = "Fit & Flare Dresses";

            $sql = "INSERT INTO shop(name, category, tags) VALUES('{$shopname}', '{$category}', '{$c33}');";
            mysqli_query($conn, $sql);
        }

        if(isset($_POST['ck34'])){
            $c34 = "Shift Dresses";

            $sql = "INSERT INTO shop(name, category, tags) VALUES('{$shopname}', '{$category}', '{$c34}');";
            mysqli_query($conn, $sql);
        }
        if(isset($_POST['ck35'])){
            $c35 = "Slit Dresses";

            $sql = "INSERT INTO shop(name, category, tags) VALUES('{$shopname}', '{$category}', '{$c35}');";
            mysqli_query($conn, $sql);
        }
        if(isset($_POST['ck36'])){
            $c36 = "Spaghetti Dresses";

            $sql = "INSERT INTO shop(name, category, tags) VALUES('{$shopname}', '{$category}', '{$c36}');";
            mysqli_query($conn, $sql);
        }
        if(isset($_POST['ck37'])){
            $c37 = "T-shirt Dresses";

            $sql = "INSERT INTO shop(name, category, tags) VALUES('{$shopname}', '{$category}', '{$c37}');";
            mysqli_query($conn, $sql);
        }
        if(isset($_POST['ck38'])){
            $c38 = "Tulle Dresses";

            $sql = "INSERT INTO shop(name, category, tags) VALUES('{$shopname}', '{$category}', '{$c38}');";
            mysqli_query($conn, $sql);
        }
        if(isset($_POST['ck39'])){
            $c39 = "Tuxedo Dresses";

            $sql = "INSERT INTO shop(name, category, tags) VALUES('{$shopname}', '{$category}', '{$c39}');";
            mysqli_query($conn, $sql);
        }
        if(isset($_POST['ck40'])){
            $c40 = "Tweed Dresses";

            $sql = "INSERT INTO shop(name, category, tags) VALUES('{$shopname}', '{$category}', '{$c40}');";
            mysqli_query($conn, $sql);
        }
        if(isset($_POST['ck41'])){
            $c41 = "Wrap Dresses";

            $sql = "INSERT INTO shop(name, category, tags) VALUES('{$shopname}', '{$category}', '{$c41}');";
            mysqli_query($conn, $sql);
        }





        header("Location: index.php?Done=Done");
        exit();
    }
?>
