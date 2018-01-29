<html>
	<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="./plugins/css/bootstrap.min.css" />
  <script src="./plugins/js/jquery.js"></script>
  <script src="./plugins/js/bootstrap.min.js"></script>
        
</head>
	

<body data-spy="scroll" data-target="#myScrollspy" data-offset="15">
       <div class="jumbotron">
    <h2 style="text-align:center;">Tech carnival 7.0</h2>      
  </div>
   
    
    
    
    <?php
    
    $usr=$_POST["username"];
    $pwd=$_POST["pwd"];
        
            
        $dbhost = 'mysql.hostinger.in';
	    $dbuser = 'u670330821_ictas';
	    $dbpass= "Sastra321";
	    $dbname='u670330821_ictas';

	    $conn = mysqli_connect ($dbhost,$dbuser,$dbpass,$dbname);
        if(!$conn)
        {
            die("connection failed:".mysqli_connect_eror());
            //header ("location:confrim.php?var=0");
            //exit;
        }
        else {
        }
        
        $sql1="SELECT COUNT(USERNAME) FROM cluster WHERE USERNAME='$usr' AND PASSWORD='$pwd'";
        $resultset=mysqli_query( $conn,$sql1 );
			if($resultset)			
			{
				$data=mysqli_fetch_row($resultset);
				$count=implode(" ",$data);   
            }
            else
                echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
        if($count==1){
            echo ' <div class="row">
                <nav class="col-sm-2" >
                  <ul class="nav nav-pills nav-stacked">
                      <h3>Events</h3>';
            
        $sql="SELECT * FROM events WHERE USERNAME='$usr'";

        $result=mysqli_query( $conn,$sql );
            
         while($row = mysqli_fetch_assoc($result)) {
        echo "<li><a id='".$row['EVENT'] ."' href=# onclick='show(this.id)''>".$row['EVENT']."</a></li>";
         }
                echo  '</ul>
                </nav>
                <div class="col-sm-10">
                  <div id="content">    
                    <h1>Welcome!!!</h1>
                    <p>Select any Events in the list</p>
                  </div>
                </div>
              </div>';
        }
        else {
            echo "<h4> wrong password or username </h4>
            <a href='./loginForm.php'>Try again</a>";
        }

     mysqli_close($conn);
    
    
    
    ?>
    
   <script>
    
      function show(id) {
	console.log(id);
	$.ajax({
        url: "getEvent.php?event=" +id,
        method: "POST",
        success: function (result) 
        {
            var htmlFiltered = $(result).filter("#getEvent");
            console.log(htmlFiltered);
            var finalText = htmlFiltered.html();
            console.log(finalText);
            console.log("getEvent.php?event=" +id);
            $("#content").html(finalText);
        }
    });
}
    </script>
    </body>
</html>