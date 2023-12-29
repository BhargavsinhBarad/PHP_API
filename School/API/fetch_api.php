<?php
   header("Access-Control-Allow-Methods:GET");
   include("../Config/config.php");      

   $config = new config();

   if($_SERVER['REQUEST_METHOD'] == 'GET'){
    
   

    $object = $config->fetchstudent();

    $my_data=[];

    while($record = mysqli_fetch_assoc($object)){
        array_push($my_data,$record);
    }

    $res['data']=$my_data;

   }
   else{
    $res['error'] = "only GET METHOD";
   }
   echo json_encode($res);
?>