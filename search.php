<?php
    include 'config.php';
    $sql= "SELECT * FROM employees";

    $result = $connection->query($sql);

    if($result->num_rows> 0){
        while($row=$result->fetch_assoc()){
            echo 'Employee_id: '.$row['Emp_id']. 'Date of Birth: '.$row['DoB']. 'First Name: '.$row['First_name']. 'Last Name: '.$row['Last_name']. 'Gender: '.$row['Gender'] .'App Date' . $row['App_date'];

            echo '<br>';
        }
    }
    else{
        echo "Empty Table";
    }
?>