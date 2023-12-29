<?php

class config{
   public  $HOSTNAME = "127.0.0.1";
   public  $USERNAME = "root";
   public  $PASSWORD = "";
   public  $DATABASENAME = "school";
   public  $CONNECT_RES;

    public function connect(){
        $this->CONNECT_RES = mysqli_connect($this->HOSTNAME,$this->USERNAME,$this->PASSWORD,$this->DATABASENAME);
        return $this->CONNECT_RES;
     }

    public function addstudent($NAME,$CITY,$STD,$MO_NO,$GRADE){
        $this->connect();

        $query ="INSERT INTO school_student(NAME,CITY,STD,MO_NO,GRADE)VALUES('$NAME','$CITY',$STD,$MO_NO,'$GRADE');";

        $res = mysqli_query($this->CONNECT_RES,$query);
        return $res;
    }

    public function fetchstudent(){
        $this->connect();

        $query = "SELECT * FROM school_student;";

        $res = mysqli_query($this->CONNECT_RES,$query);

        return $res;
    }
  
}

?>