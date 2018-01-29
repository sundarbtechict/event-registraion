<!DOCTYPE html>
<html lang="en">
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
    
    
      <div class="jumbotron">
    <h2 style="text-align:center;">Tech carnival 7.0</h2>      
  </div>
    
	    <div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default">
                <div class="panel-heading">
                    <h4 style="text-align: center;">Sign In</h4>
                </div>
                </div>
				<div class="panel-body">

					<form class="form-horizontal" id="myForm"
						action="homePage.php" method="post">
                        
						<div class="form-group">
							<label for="name" class="col-sm-3 control-label">Username: </label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="username" id="username" placeholder="Enter usernmae" required>
							</div>
						</div>
                        
                        <div class="form-group">
                          <label class="control-label col-sm-3" for="pwd">Password: </label>
                          <div class="col-sm-9">          
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
                          </div>
                        </div>

						<div style="text-align: center;">
                            <button type="submit" class="btn btn-primary">Login</button>
						</div>
					</form>

					</div> 
				
            </div>

          	<script src="./js/eventLayout1.js"></script>
  	        <script src="./js/scripts.js" type="text/javascript" ></script>
            
	
</body>
</html>
	
	