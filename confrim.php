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
	

<body>
    
       
    	<br><br><br>
	    <div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
                <div class="panel-heading">
                    <h4 style="text-align: center;">Registration</h4>
                </div>
                </div>
				<div class="panel-body">
                    
                     <?php
        $var=$_GET["var"];
                    
        if($var==1)
            echo '<div class="alert alert-success">
  <strong>Registration is successful.</strong> 
</div>';
        else if($var==2)
            echo '<div class="alert alert-info">
  <strong>your Register no is already registered</strong> .
</div>';
        else
            echo '<div class="alert alert-warning">
  <strong>Try again later.</strong> 
</div>';
            
        ?>
            </div>
    </div>
	</body>
</html>