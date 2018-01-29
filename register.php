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
    
        <?php
        $var=$_GET["event"];
        if($var=='t1')
            $event='Junior Coding';
        else if($var=='t2')
            $event='Senior Coding';
        else if($var=='t3')
            $event='Idea Presentation';
        else if($var=='t4')
            $event='Puzzle Coding';
        else if($var=='c1')
            $event='c1';
        else if($var=='c2')
            $event='c2';
        else if($var=='c3')
            $event='c3';
       else if($var=='c4')
            $event='c4';
        else if($var=='f1')
            $event='f1';
        else if($var=='f2')
            $event='f2';
        else if($var=='f3')
            $event='f3';
        else if($var=='a1')
            $event='Collage';
        else if($var=='a2')
            $event='Pencil sketching';
        else if($var=='a3')
            $event='Flameless Cooking';
        else if($var=='a4')
            $event='Comic Stripping';
        else if($var=='g1')
            $event='FIFA';
        else if($var=='g2')
            $event='Rainbow siege';
        else
            $event="Invalid event";
        ?>
    
	    <div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
                <div class="panel-heading">
                    <h4 style="text-align: center;">Registration</h4>
                </div>
                </div>
				<div class="panel-body">

					<form class="form-horizontal" id="myForm"
						action="serverSingle.php" method="post">
                        
                        
                        
                     <div class="form-group">
							<label for="regno" class="col-sm-2 control-label">Register No*
							</label>
							<div class="col-sm-10">
								<input type="tel" class="form-control" pattern="[0-9]{9}" name="regno" id="regno" required autofocus
                                       title="Provide a valid Register No">
							</div>
						</div>



						<div class="form-group">
							<label for="name" class="col-sm-2 control-label">Name*</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="name" id="name" required>
							</div>
						</div>




						<div class="form-group">
							<label for="mobile" class="col-sm-2 control-label">Mobile*
							</label>
							<div class="col-sm-10">
								<input type="tel" class="form-control" pattern="[7|8|9]{1}[0-9]{9}" name="mobile" id="mobile" required
                                       title="Provide a valid Mobile No">
							</div>
						</div>


						<div class="form-group">
							<label for="dept" class="col-sm-2 control-label" >Department*</label>
							<div class="col-sm-10">
                            <select class="form-control" name="dept" id="dept" required >
                                <option value="" disabled selected>Select the department</option>
                                <option value="B.Tech. Bioinformatics">B.Tech. Bioinformatics</option>
                                <option value="B.Tech. Biotechnology">B.Tech. Biotechnology</option>
                                <option value="B.Tech. Civil Engineering">B.Tech. Civil Engineering </option>
                                <option value="B.Tech. Chemical Engineering">B.Tech. Chemical Engineering</option>
                                <option value="B.Tech. Computer Science & Engineering">B.Tech. Computer Science & Engineering</option>
                                <option value="B.Tech. Electrical & Electronics Engineering">B.Tech. Electrical & Electronics Engineering</option>
                                <option value="B.Tech. Electronics & Instrumentation Engineering">B.Tech. Electronics & Instrumentation Engineering</option>
                                <option value="B.Tech. Information & Communication Technolog">B.Tech. Information & Communication Technolog</option>
                                <option value="B.Tech. Information Technology">B.Tech. Information Technology</option>
                                <option value="B.Tech. Mechanical Engineering">B.Tech. Mechanical Engineering</option>
                                <option value="B.Tech. Mechatronics">B.Tech. Mechatronics</option>
                                <option value="M.Tech. Advanced Manufacturing (Integrated Course)">M.Tech. Advanced Manufacturing (Integrated Course)</option>
                                <option value="M.Tech. Biotechnology (Integrated Course)">M.Tech. Biotechnology (Integrated Course)</option>
                                <option value="M.Tech. Chemical Engineering (Integrated Course)">M.Tech. Chemical Engineering (Integrated Course)</option>
                                <option value="M.Tech. Communication Systems (Integrated Course)">M.Tech. Communication Systems (Integrated Course)</option>
                                <option value="M.Tech. Construction Engineering & Management (Integrated Course)">M.Tech. Construction Engineering & Management (Integrated Course)</option>
                                <option value="M.Tech. Instrumentation & Control (Integrated Course)">M.Tech. Instrumentation & Control (Integrated Course)</option>
                                <option value="M.Tech. Medical Nanotechnology (Integrated Course)">M.Tech. Medical Nanotechnology (Integrated Course)</option>
                                <option value="M.Tech. Power Systems (Integrated Course)">M.Tech. Power Systems (Integrated Course)</option>
                                <option value="M.Tech. Structural Engineering (Integrated Course)">M.Tech. Structural Engineering (Integrated Course)</option>
                                <option value="B.Com (Computer Applications)">B.Com (Computer Applications)</option>
                            </select>
							</div>
						</div>


                        
						<div class="form-group">
							<label for="year" class="col-sm-2 control-label">Year*</label>
							<div class="col-sm-10">
							<select class="form-control" name="year" id="year" required>
								<option value="" disabled selected>Select the Year</option>
                        <?php
						
                        if($var=='t1')
                            echo '<option value="1">1st year</option>';
                        else if($var=='t2')
                             echo '
                                <option value="2">2nd year</option>
                                <option value="3">3rd year</option>
                                <option value="4">4th year</option>
                                <option value="5">5th year</option>';
                        else
                            echo '
							    <option value="1">1st year</option>
                                <option value="2">2nd year</option>
                                <option value="3">3rd year</option>
                                <option value="4">4th year</option>
                                <option value="5">5th year</option>';
                         ?>
						     </select>
							</div>
						</div>
						
                       


						<div class="form-group">
							<label for="event" class="col-sm-2 control-label">Event*</label>
							<div class="col-sm-10">
                               <?php echo "<input type=text class=form-control  value='$event'  name=event id=event readonly>"; ?>
							</div>
						</div>


						<div style="text-align: center;">
                            <button type="submit" class="btn btn-primary">submit</button>
						</div>
					</form>

					</div> 
				
            </div>

          	<script src="./js/eventLayout1.js"></script>
  	        <script src="./js/scripts.js" type="text/javascript" ></script>
            
	
</body>
</html>
	
	