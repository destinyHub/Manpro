<div class="top">
    <img src="../../img/logo.jpg" alt="banner" class="logo">
    <img src="../../img/banner2.jpg" class="gambar">
    
    <h1 class="judul">eLibrary SMA BPK Penabur Holis</h1>
</div>
<div class="topNav">
    <?php
        //session_start();
        $nama = $_SESSION['name'];
        if($nama != null){
            echo "<p id='log'>You are logged in as ".$nama."</p>";
        }
        else{
            header("Location:../general/login.php");
        }
    ?>
    <ul>	
        <li><a href="../general/logout.php" class="symbol"><i class="fa fa-sign-out"></i></a></li>			
        <li><a href="../general/profile.php" class="symbol"><i class="fa fa-user"></i></a></li>
        <li><a href="mailto:someone@example.com?Subject=Hello%20again"  target="_top" class="symbol"><i class="fa fa-envelope"></i></a></li>
        <li><a href="../general/news.php" class="symbol"><i class="fa fa-newspaper-o"></i></a></li>
        <?php
            if(isset($_SESSION['role']))
                $peran = $_SESSION['role'];
                if($peran=="user_biasa"){
                    echo "<li><a href='../user/usr.php' class='symbol'><i class='fa fa-home'></i></a></li>";
                }
                else{
                    echo "<li><a href='../admin/adm.php' class='symbol'><i class='fa fa-home'></i></a></li>";
                }
        ?>
    </ul>
</div>