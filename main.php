<?php
   
   include 'config.php';

if (isset($_POST['submit'])){
    $empid=isset($_POST['empid']) ? $_POST['empid'] :"100" ;
    $dob=isset($_POST['dob']) ? $_POST['dob'] :"default" ;
    $fname=isset($_POST['fname']) ? $_POST['fname'] :"default" ;
    $lname=isset($_POST['lname']) ? $_POST['lname'] :"default" ;
    $gender=isset($_POST['gender']) ? $_POST['gender'] :"default" ;
    $appdate=isset($_POST['appdate']) ? $_POST['appdate'] :"default" ;
}
    /*$empid='8';
    $dob='2000-10-10';
    $fname='Shan';
    $lname='Lalith';
    $gender='male';
    $appdate='2020-06-15';*/

    $sql = "insert into employees(Emp_id , DoB , First_name , Last_name , Gender , App_date) values(?,?,?,?,?,?)";
    $statement = $connection->prepare($sql);

    if(!$statement){
        echo "Error";
    }
    else{
        $statement->bind_param("isssss", $empid, $dob, $fname ,$lname, $gender, $appdate);
        echo nl2br("");
        if($statement->execute()){
            echo("<br />Insert Data Success");
        }
        else{
            mysqli_error($connection);
        }
        
    }
         
?>