<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Ictas PR</title>
<link rel="stylesheet" href="../plugins/css/bootstrap.min.css" />
<script src="../js/jquery.js"></script>
<script src="../plugins/js/bootstrap.min.js"></script>
</head>


<body>

<div class="jumbotron">
<h2 style="text-align:center;">Tech carnival 7.0</h2>      
</div>
<div class="col-md-6 col-md-offset-3">
<div class="panel panel-default">
<div class="panel-heading">
    <h4 style="text-align: center;">Registration</h4>
</div>


    <form class="form-horizontal" id="myForm"
        action="prServer.php" method="post">

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
   $id = $_SESSION['reg'];
   $year = $_SESSION['year'];
  //  $id = 117014027;
// database configure _variable
            
        $dbhost = 'localhost';
	    $dbuser = 'root';
	    $dbpass= "";
	    $dbname='ICTAS';


// 1.Create connection
$conn = mysqli_connect ($dbhost,$dbuser,$dbpass,$dbname);


// 2.Check connection						
if (!$conn)
{
die("Connection failed: " . mysqli_connect_error());			    
}



//3.selecting DB(database)


//4.Assign Query into the variable 
$sql="SELECT EVENT FROM event_form WHERE REGISTER_NO='$id' ";

//5.Assign result of the  query into variable 
$resultset=mysqli_query($conn, $sql);  //It gives only the '1st row pointer' 


if($resultset)
{
  while($row = mysqli_fetch_assoc($resultset)){
     $event = $row['EVENT'];
     $new=1;
     
     if($event == 'Junior Coding'){
         $jc = 1;
     }

     if($event == 'Senior Coding'){
         $sc = 1;
     }
     if($event == 'Idea Presentation'){
         $ip = 1;
     }
     if($event == 'Puzzle Coding'){
         $pc = 1;
     }
     if($event == 'Quiz'){
         $q = 1;
     }
     if($event == 'Logo Quiz'){
         $lq = 1;
     }
     if($event == 'Virtual Placements'){
         $vp = 1;
     }
     if($event == 'Word Sauce'){
         $ws = 1;
     }
     if($event == 'Treasure Hunt'){
         $th = 1;
     }
     if($event == 'Mad Ads'){
         $ma = 1;
     }
     if($event == 'Mixed Images'){
         $mi = 1;
     }
     if($event == 'Collage'){
         $c = 1;
     }
     if($event == 'Pencil sketching'){
         $ps = 1;
     }
     if($event == 'Flameless Cooking'){
         $fc = 1;
     }
     if($event == 'Comic Stripping'){
         $cs = 1;
     }
     if($event == 'Fifa 15'){
         $f = 1;
     }
     if($event == 'Dota'){
         $do = 1;
     }
     if($event == 'Rainbow siege Six'){
         $rs = 1;
     }

 }
}
        if($new==1)
        echo '  <input type="hidden" name="new" value="1">';
echo " 
    <div class='panel-body'>
    <h3>Technical</h3>";
if($year == 1){		
if($jc == 1){
echo  		
"<input type='checkbox' name='jc' value='0' checked disabled>Junior coding<br>";
}
else {
echo "<input type='checkbox' name='jc' value='1'>Junior Coding<br>";
}

 echo "<input type='checkbox' name='sc' value='0'  disabled>Senior  Coding<br>";
}

else{
  echo "<input type='checkbox' name='jc' value='0'  disabled>Junior Coding<br>";
  if($sc == 1){
echo
    "<input type='checkbox' name='sc' value='0' checked  disabled>Senior Coding<br>";
}
else{
echo "<input type='checkbox' name='sc' value='1'>Senior Coding<br>"; 
}

}

    echo
"
";
if($ip==1){
echo
    "<input type='checkbox' name='ip' value='0' checked  disabled>Idea Presentation<br>";
}
else{
echo "<input type='checkbox' name='ip' value='1'>Idea Presentation<br>";
}

if($pc == 1){
echo
    "<input type='checkbox' name='pc' value='0' checked  disabled>Puzzle Coding";
}
else{
echo "<input type='checkbox' name='pc' value='1'>Puzzle Coding";
}

 echo
"</div>
";

echo
"
<div class='panel-body'>
    <h3>Communication</h3>";                    
if($q == 1){
echo
    "<input type='checkbox' name='q' value='0' checked  disabled>Quiz<br>";
}
else{
echo "<input type='checkbox' name='q' value='1' >Quiz<br>";
}
if($lq == 1){
echo
    "<input type='checkbox' name='lq' value='0' checked  disabled>Logo Quiz<br>";
}
else{
echo "<input type='checkbox' name='lq' value='1' >Logo Quiz<br>";
}
echo
"
";



if($vp == 1){
echo
    "<input type='checkbox' name='vp' value='0' checked  disabled>Virtual Placements<br>";
}
else{
echo "<input type='checkbox' name='vp' value='1' >Virtual Placements<br>";
}

if($ws == 1){
echo
    "<input type='checkbox' name='ws' value='0' checked  disabled>Word Sauce";
}
else{
echo "<input type='checkbox' name='ws' value='1' >Word Sauce";
}
echo
"</div>
<div class='panel-body'>
    <h3>FUN</h3>";    
if($th == 1){
echo
    "<input type='checkbox' name='th' value='0' checked  disabled>Treasure Hunt<br>";
}
else{
echo "<input type='checkbox' name='th' value='1'>Treasure Hunt<br>";
}

if($ma == 1){
echo
    "<input type='checkbox' name='ma' value='0' checked  disabled>Mad Ads<br>";
}
else{
echo "<input type='checkbox' name='ma' value='1'>Mad Ads<br>";
}
echo
"
";

if($mi == 1){
echo
    "<input type='checkbox' name='mi' value='0' checked  disabled>Mixed Images";
}
else{
echo "<input type='checkbox' name='mi' value='1'>Mixed Images";
}

echo
"
<div class='panel-body'>
    <h3>Arts</h3>";                    
if($c == 1){
echo
    "<input type='checkbox' name='c' value='0' checked  disabled>Collage<br>";
}
else{
echo "<input type='checkbox' name='c' value='1' >Collage<br>";
}
if($ps == 1){
echo
    "<input type='checkbox' name='ps' value='0' checked  disabled>Pencil sketching<br>";
}
else{
echo "<input type='checkbox' name='ps' value='1' >Pencil sketching<br>";
}
echo
"
";



if($fc == 1){
echo
    "<input type='checkbox' name='fc' value='0' checked  disabled>Flameless Cooking<br>";
}
else{
echo "<input type='checkbox' name='fc' value='1' >Flameless Cooking<br>";
}

if($cs == 1){
echo
    "<input type='checkbox' name='cs' value='0' checked  disabled>Comic Stripping";
}
else{
echo "<input type='checkbox' name='cs' value='1' >Comic Stripping";
}

echo
"
</div>
<div class='panel-body'>
<h3>Gaming</h3>";                    
if($f == 1){
echo
    "<input type='checkbox' name='f' value='0' checked  disabled>Fifa 15<br>";
}
else{
echo "<input type='checkbox' name='f' value='1' >Fifa 15<br>";
}

if($rs == 1){
echo
    "<input type='checkbox' name='rs' value='0' checked  disabled>Rainbow siege Six<br>";
}
else{
echo "<input type='checkbox' name='rs' value='1'>Rainbow siege Six<br>";
}
echo
"
";

if($do == 1){
echo
    "<input type='checkbox' name='do' value='0' checked  disabled>Dota";
}
else{
echo "<input type='checkbox' name='do' value='1'>Dota";
}
echo
"

";

//8. Closing the DB Connection  *****IMPORTANT******
mysqli_close($conn);
?>
<div style="text-align: center;">
            <button type="submit" class="btn btn-primary">submit</button>
        </div>
</form>
</div>
</div>

</body>
</html>

