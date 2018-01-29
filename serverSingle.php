<html>
    <head>
        <style>
.loader {
    margin-top:30%;
    margin-left: 45%;
      border: 6px solid #f3f3f3;
      border-radius: 50%;
      border-top: 6px solid #3498db;
      width: 40px;
      height: 40px;
      -webkit-animation: spin 2s linear infinite; /* Safari */
      animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
    </head>
    <body>
        <div class="loader"></div>
        <?php
        $name=$_POST["name"];
        $reg=$_POST["regno"];
		$mobile=$_POST["mobile"];
		$dept=$_POST["dept"];
        $year=$_POST["year"];
        $event=$_POST["event"];
        
        if($event=="Invalid event")
        {
            header ("location:confrim.php?var=0");
            exit;
        }
            
            
        $dbhost = 'mysql.hostinger.in';
	    $dbuser = 'u670330821_ictas';
	    $dbpass= "Sastra321";
	    $dbname='u670330821_ictas';

	    $conn = mysqli_connect ($dbhost,$dbuser,$dbpass,$dbname);
        if(!$conn)
        {
            die("connection failed:".mysqli_connect_eror());
            header ("location:confrim.php?var=0");
            exit;
        }
        else {
            echo"connection found";
        }
        
        
        $sql1="SELECT COUNT(REGISTER_NO)FROM REGISTER_FORM WHERE REGISTER_NO=$reg";
        $resultset=mysqli_query( $conn,$sql1 );
			if($resultset)			
			{
				$data=mysqli_fetch_row($resultset);
				$count=implode(" ",$data);   
            }
        
        if($count==0)
        {
        $sql2="INSERT INTO REGISTER_FORM (NAME,REGISTER_NO,MOBILE,DEPARTMENT,YEAR)
        VALUES ('$name','$reg','$mobile','$dept','$year')";
        if(mysqli_query($conn,$sql2))
        {
        }
        else {
           header ("location:confrim.php?var=0");
           exit;

        }
        }
        
        $sql3="SELECT COUNT(REGISTER_NO) FROM EVENT_FORM WHERE REGISTER_NO=$reg AND EVENT='$event'";
        $resultset2=mysqli_query( $conn, $sql3 );
			if($resultset2)			
			{
				$data2=mysqli_fetch_row($resultset2);
				$count2=implode(" ",$data2);   
            }
        if($count2==0)
        {
        $sql4="INSERT INTO EVENT_FORM (REGISTER_NO,EVENT)
        VALUES ('$reg','$event')";
        if(mysqli_query($conn,$sql4))
        {
            header ("location:confrim.php?var=1");
            exit;
        }
        }
        else{
            header ("location:confrim.php?var=2");
            exit;
        }
        
        
        
       mysqli_close($conn);
	?>

    </body>
</html>