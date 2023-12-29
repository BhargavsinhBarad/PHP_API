
<?php
  
 include("Config/Config.php");

 $config = new config();

 $res = $config->connect();

  if($res)
  {
      echo "successfully"; 
  }
  else
  {
      echo "failed";
  }

 ?>

  