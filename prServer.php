<html>
    <head>
    </head>
    <body>
        <?php
            $new=1;
    $jc=0;
    $sc=0;
    $ip=0;
    $pc=0;
    $q=0;
    $lq=0;
    $vp=0;
    $ws=0;
    $th=0;
    $ma=0;
    $mi=0;
    $c=0;
    $ps=0;
    $fc=0;
    $cs=0;
    $f=0;
    $rs=0;
    $do=0;

        
        session_start();
        $name=$_SESSION['name'];
        $reg=$_SESSION['reg'];
        $dept=$_SESSION['dept'];
        $mobile=$_SESSION['mobile'];
        $year=$_SESSION['year'];
        
        
        $new=$_POST["new"];
        $jc=$_POST["jc"];
        $sc=$_POST["sc"];
        $ip=$_POST["ip"];
        $pc=$_POST["pc"];
        $q=$_POST["q"];
        $lq=$_POST["lq"];
        $vp=$_POST["vp"];
        $ws=$_POST["ws"];
        $th=$_POST["th"];
        $ma=$_POST["ma"];
        $mi=$_POST["mi"];
        $c=$_POST["c"];
        $ps=$_POST["ps"];
        $fc=$_POST["fc"];
        $cs=$_POST["cs"];
        $rs=$_POST["rs"];
        $do=$_POST["do"];
        $f=$_POST["f"];
                    
        $dbhost = 'localhost';
	    $dbuser = 'root';
	    $dbpass= "";
	    $dbname='ICTAS';

        // 1.Create connection
        $conn = mysqli_connect ($dbhost,$dbuser,$dbpass,$dbname);
        if(!$conn)
        {
            die("connection failed:".mysqli_connect_eror());

        }
        else {
            echo"connection found";
        }
        if($new==1)
        {
        $sql="INSERT INTO register_form (NAME,REGISTER_NO,MOBILE,DEPARTMENT,YEAR)
        VALUES ('$name','$reg','$mobile','$dept','$year')";
        mysqli_query($conn, $sql);
        }
        
        if($jc == 1){
            $sql="INSERT INTO event_form VALUES ('$reg','Junior Coding')";
            mysqli_query($conn, $sql);
        }
         if($sc == 1){
            $sql="INSERT INTO event_form VALUES ('$reg','Senior Coding')";
             mysqli_query($conn, $sql);
         }
         if($ip == 1){
            $sql="INSERT INTO event_form VALUES ('$reg','Idea Presentation')";
             mysqli_query($conn, $sql);
         }
         if($pc == 1){
            $sql="INSERT INTO event_form VALUES ('$reg','Puzzle Coding')";
             mysqli_query($conn, $sql);
         }
         if($c == 1){
            $sql="INSERT INTO event_form VALUES ('$reg','Collage')";
             mysqli_query($conn, $sql);
         }
         if($ps == 1){
            $sql="INSERT INTO event_form VALUES ('$reg','Pencil sketching')";
             mysqli_query($conn, $sql);
         }
         if($fc == 1){
            $sql="INSERT INTO event_form VALUES ('$reg','Flameless Cooking')";
             mysqli_query($conn, $sql);
         }
         if($cs == 1){
            $sql="INSERT INTO event_form VALUES ('$reg','Comic Stripping')";
             mysqli_query($conn, $sql);
         }
         if($th == 1){
            $sql="INSERT INTO event_form VALUES ('$reg','Treasure Hunt')";
             mysqli_query($conn, $sql);
         }
         if($ma == 1){
            $sql="INSERT INTO event_form VALUES ('$reg','Mad Ads')";
             mysqli_query($conn, $sql);
         }
         if($mi == 1){
            $sql="INSERT INTO event_form VALUES ('$reg','Mixed Images')";
             mysqli_query($conn, $sql);
         }
         if($q == 1){
            $sql="INSERT INTO event_form VALUES ('$reg','Quiz')";
             mysqli_query($conn, $sql);
         }
        if($lq == 1){
            $sql="INSERT INTO event_form VALUES ('$reg','Logo Quiz')";
             mysqli_query($conn, $sql);
         }
         if($vp == 1){
            $sql="INSERT INTO event_form VALUES ('$reg','Virtual Placements')";
             mysqli_query($conn, $sql);
         }
         if($ws == 1){
            $sql="INSERT INTO event_form VALUES ('$reg','Word Sauce')";
             mysqli_query($conn, $sql);
         }
        if($f == 1){
            $sql="INSERT INTO event_form VALUES ('$reg','Fifa 15')";
             mysqli_query($conn, $sql);
         }
         if($do == 1){
            $sql="INSERT INTO event_form VALUES ('$reg','Dota')";
             mysqli_query($conn, $sql);
         }

         if($rs == 1){
            $sql="INSERT INTO event_form VALUES ('$reg','Rainbow siege Six')";
             mysqli_query($conn, $sql);
         }
        
        
        
//8. Closing the DB Connection  *****IMPORTANT******
mysqli_close($conn);
        
        header ("location:index.php");
        exit;
        
        ?>

    </body>
</html>