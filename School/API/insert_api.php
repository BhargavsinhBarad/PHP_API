<?php 
   header("Access-Control-Allow-Methods:POST");
   include("../Config/config.php");      

   $config = new config();

   if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    $name = $_POST['NAME'];
    $city= $_POST['CITY'];
    $std =$_POST['STD'];
    $mo_no = $_POST['MO_NO'];
    $grade = $_POST['GRADE'];

    $isadded = $config->addstudent($name,$city,$std,$mo_no,$grade);

    if($isadded)
    {
        $res['data'] = "DATA ADD...";

    }else{
        $res['data'] = "DATA NOT ADD...";
    }
   }
   else{
    $res['error'] = "only POST METHOD";
   }
   echo json_encode($res);

?>