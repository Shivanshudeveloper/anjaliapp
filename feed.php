<?php

    if(isset($_GET['category'])){
        include_once 'con.php';
        $cate = $_GET['cat'];
        echo '
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwE$
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <center>
        <form action="feed2.php" method="POST">
        <h2>Shop Name</h2>
        <input type="text" name="shopname" placeholder="Name"><br/>
        <br/>
        <h2>Tags</h2>
        <input type="hidden" name="category" value='.$cate.'>


        <input type="checkbox" name="ck1">Tube/Bandeau Dresses<br/>
        <img src="https://s3.ap-south-1.amazonaws.com/girls-dress-app-bucket/1.jpg" alt="Not Found" width="100%" height="auto"></br>
        
        <input type="checkbox" name="ck2">Sheath Dresses<br/>
        <img src=" 	https://s3.ap-south-1.amazonaws.com/girls-dress-app-bucket/2.jpg" alt="Not Found" width="100%" height="auto"></br>

        <input type="checkbox" name="ck3">Blouson Dresses<br/>
        <img src=" 	https://s3.ap-south-1.amazonaws.com/girls-dress-app-bucket/3.jpg" alt="Not Found" width="100%" height="auto"></br>

        <input type="checkbox" name="ck4">Tunic Dresses<br/>
        <img src=" 	https://s3.ap-south-1.amazonaws.com/girls-dress-app-bucket/4.jpg" alt="Not Found" width="100%" height="auto"></br>

        <input type="checkbox" name="ck5">Pencil Dresses<br/>
        <img src=" 	https://s3.ap-south-1.amazonaws.com/girls-dress-app-bucket/5.jpg" alt="Not Found" width="100%" height="auto"></br>

        <input type="checkbox" name="ck6">Asymmetric Dresses<br/>
        <img src=" 	https://s3.ap-south-1.amazonaws.com/girls-dress-app-bucket/6.jpg" alt="Not Found" width="100%" height="auto"></br>

        <input type="checkbox" name="ck7">Trench Dresses<br/>
        <img src=" 	https://s3.ap-south-1.amazonaws.com/girls-dress-app-bucket/7.jpg" alt="Not Found" width="100%" height="auto"></br>

        <input type="checkbox" name="ck8">Bandage Dresses<br/>
        <img src=" 	https://s3.ap-south-1.amazonaws.com/girls-dress-app-bucket/8.jpg" alt="Not Found" width="100%" height="auto"></br>

        <input type="checkbox" name="ck9">High-Low Dresses<br/>
        <img src=" 	https://s3.ap-south-1.amazonaws.com/girls-dress-app-bucket/9.jpg" alt="Not Found" width="100%" height="auto"></br>

        <input type="checkbox" name="ck10">Empire Waist Dresses<br/>
        <img src=" 	https://s3.ap-south-1.amazonaws.com/girls-dress-app-bucket/10.jpg" alt="Not Found" width="100%" height="auto"></br>



        <input type="checkbox" name="ck11">Bodycon Dresses<br/>
        <img src="https://s3.ap-south-1.amazonaws.com/girls-dress-app-bucket/11.jpg" alt="Not Found" width="100%" height="auto"></br>

        <input type="checkbox" name="ck12">Skater Dresses<br/>
        <img src=" 	https://s3.ap-south-1.amazonaws.com/girls-dress-app-bucket/12.jpg" alt="Not Found" width="100%" height="auto"></br>

        <input type="checkbox" name="ck13">Maxi/Long Dresses<br/>
        <img src=" 	https://s3.ap-south-1.amazonaws.com/girls-dress-app-bucket/13.jpg" alt="Not Found" width="100%" height="auto"></br>

        <input type="checkbox" name="ck14">Midi Dresses<br/>
        <img src=" 	https://s3.ap-south-1.amazonaws.com/girls-dress-app-bucket/14.jpg" alt="Not Found" width="100%" height="auto"></br>

        <input type="checkbox" name="ck15">Mini Dresses<br/>
        <img src=" 	https://s3.ap-south-1.amazonaws.com/girls-dress-app-bucket/15.jpg" alt="Not Found" width="100%" height="auto"></br>

        <input type="checkbox" name="ck16">Kaftan Dresses<br/>
        <img src=" 	https://s3.ap-south-1.amazonaws.com/girls-dress-app-bucket/16.jpg" alt="Not Found" width="100%" height="auto"></br>

        <input type="checkbox" name="ck17">Shirt Dresses<br/>
        <img src=" 	https://s3.ap-south-1.amazonaws.com/girls-dress-app-bucket/17.jpg" alt="Not Found" width="100%" height="auto"></br>

        <input type="checkbox" name="ck18">Off Shoulder Dresses<br/>
        <img src=" 	https://s3.ap-south-1.amazonaws.com/girls-dress-app-bucket/18.jpg" alt="Not Found" width="100%" height="auto"></br>

        <input type="checkbox" name="ck19">Sweater Dresses<br/>
        <img src=" 	https://s3.ap-south-1.amazonaws.com/girls-dress-app-bucket/19.jpg" alt="Not Found" width="100%" height="auto"></br>

        <input type="checkbox" name="ck20">Tie Detail Dresses<br/>
        <img src=" 	https://s3.ap-south-1.amazonaws.com/girls-dress-app-bucket/20.jpg" alt="Not Found" width="100%" height="auto"></br>

       

        <input type="checkbox" name="ck21">Peplum Dresses<br/>
        <img src="https://s3.ap-south-1.amazonaws.com/girls-dress-app-bucket/21.jpg" alt="Not Found" width="100%" height="auto"></br>

        <input type="checkbox" name="ck22">Party Dresses<br/>
        <img src=" 	https://s3.ap-south-1.amazonaws.com/girls-dress-app-bucket/22.jpg" alt="Not Found" width="100%" height="auto"></br>

        <input type="checkbox" name="ck23">Backless Dresses<br/>
        <img src=" 	https://s3.ap-south-1.amazonaws.com/girls-dress-app-bucket/23.jpg" alt="Not Found" width="100%" height="auto"></br>

        <input type="checkbox" name="ck24">Fringe Detail Dresses<br/>
        <img src=" 	https://s3.ap-south-1.amazonaws.com/girls-dress-app-bucket/24.jpg" alt="Not Found" width="100%" height="auto"></br>

        <input type="checkbox" name="ck25">Pop over Dresses<br/>
        <img src=" 	https://s3.ap-south-1.amazonaws.com/girls-dress-app-bucket/25.jpg" alt="Not Found" width="100%" height="auto"></br>

        <input type="checkbox" name="ck26">Baby Doll Dresses<br/>
        <img src=" 	https://s3.ap-south-1.amazonaws.com/girls-dress-app-bucket/26.jpg" alt="Not Found" width="100%" height="auto"></br>

        <input type="checkbox" name="ck27">A-line Dresses<br/>
        <img src=" 	https://s3.ap-south-1.amazonaws.com/girls-dress-app-bucket/27.jpg" alt="Not Found" width="100%" height="auto"></br>

        <input type="checkbox" name="ck28">Layered Dresses<br/>
        <img src=" 	https://s3.ap-south-1.amazonaws.com/girls-dress-app-bucket/28.jpg" alt="Not Found" width="100%" height="auto"></br>

        <input type="checkbox" name="ck29">Lace-Up Detail Dresses<br/>
        <img src=" 	https://s3.ap-south-1.amazonaws.com/girls-dress-app-bucket/29.jpg" alt="Not Found" width="100%" height="auto"></br>

        <input type="checkbox" name="ck30">Denim Dresses<br/>
        <img src=" 	https://s3.ap-south-1.amazonaws.com/girls-dress-app-bucket/30.jpg" alt="Not Found" width="100%" height="auto"></br>


        <input type="checkbox" name="ck31">Dungaree/Pinafore Dresses<br/>
        <img src="https://s3.ap-south-1.amazonaws.com/girls-dress-app-bucket/31.jpg" alt="Not Found" width="100%" height="auto"></br>

        <input type="checkbox" name="ck32">Cape Dresses<br/>
        <img src=" 	https://s3.ap-south-1.amazonaws.com/girls-dress-app-bucket/32.jpg" alt="Not Found" width="100%" height="auto"></br>

        <input type="checkbox" name="ck33">Fit & Flare Dresses<br/>
        <img src=" 	https://s3.ap-south-1.amazonaws.com/girls-dress-app-bucket/33.jpg" alt="Not Found" width="100%" height="auto"></br>

        <input type="checkbox" name="ck34">Shift Dresses<br/>
        <img src=" 	https://s3.ap-south-1.amazonaws.com/girls-dress-app-bucket/34.jpg" alt="Not Found" width="100%" height="auto"></br>

        <input type="checkbox" name="ck35">Slit Dresses<br/>
        <img src=" 	https://s3.ap-south-1.amazonaws.com/girls-dress-app-bucket/35.jpg" alt="Not Found" width="100%" height="auto"></br>

        <input type="checkbox" name="ck36">Spaghetti Dresses<br/>
        <img src=" 	https://s3.ap-south-1.amazonaws.com/girls-dress-app-bucket/36.jpg" alt="Not Found" width="100%" height="auto"></br>

        <input type="checkbox" name="ck37">T-shirt Dresses<br/>
        <img src=" 	https://s3.ap-south-1.amazonaws.com/girls-dress-app-bucket/37.jpg" alt="Not Found" width="100%" height="auto"></br>

        <input type="checkbox" name="ck38">Tulle Dresses<br/>
        <img src=" 	https://s3.ap-south-1.amazonaws.com/girls-dress-app-bucket/38.jpg" alt="Not Found" width="100%" height="auto"></br>

        <input type="checkbox" name="ck39">Tuxedo Dresses<br/>
        <img src=" 	https://s3.ap-south-1.amazonaws.com/girls-dress-app-bucket/39.jpg" alt="Not Found" width="100%" height="auto"></br>

        <input type="checkbox" name="ck40">Tweed Dresses<br/>
        <img src=" 	https://s3.ap-south-1.amazonaws.com/girls-dress-app-bucket/40.jpg" alt="Not Found" width="100%" height="auto"></br>

        <input type="checkbox" name="ck41">Wrap Dresses<br/>
        <img src=" 	https://s3.ap-south-1.amazonaws.com/girls-dress-app-bucket/41.jpg" alt="Not Found" width="100%" height="auto"></br>



        <button class="btn btn-primary" type="submit" name="shopcategory">Submit</button>
        </form>
        </center>
        ';
    }
?>
<img src="" alt="Not Found" width="100%" height="auto">