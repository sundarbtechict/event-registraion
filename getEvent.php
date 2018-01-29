<html>
<?php
        $event=$_REQUEST["event"];
                         
        $dbhost = 'mysql.hostinger.in';
	    $dbuser = 'u670330821_ictas';
	    $dbpass= "Sastra321";
	    $dbname='u670330821_ictas';
    
	    $conn = mysqli_connect ($dbhost,$dbuser,$dbpass,$dbname);
        if(!$conn)
        {
            die("connection failed:".mysqli_connect_eror());
            exit;
        }
        else {
            echo"connection found";
        }
        
        
        $sql="SELECT * FROM register_form WHERE REGISTER_NO IN (SELECT REGISTER_NO FROM event_form WHERE EVENT='$event')";

        $resultset=mysqli_query( $conn,$sql );
        echo ' <div id="getEvent">
        <h3>' . $event . '</h3>
        <div class="table-responsive">
                 <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Register No</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Department</th>
                    <th>year</th>
                  </tr>
                </thead>
                <tbody>';
        while($row = mysqli_fetch_assoc($resultset)) {
        echo "<tr><td>" . $row['REGISTER_NO'] ."</td><td>". $row['NAME']."</td><td>".$row['MOBILE']. "</td><td>" .$row['DEPARTMENT']."</td><td>".$row['YEAR']. "</td></tr>";
    }
        echo ' </tbody>
              </table>
                </div></div>';

    
        mysqli_close($conn);
    ?>
    </html>