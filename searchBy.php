<?php
    include 'config.php';
    
    $key = $_POST['key'];
    $sql = "SELECT* FROM employees WHERE Emp_id = '$key'";

    $result = $connection->query($sql);

    if ($result->num_rows>0){
        while ($row = $result->fetch_assoc()){
            echo '<table border=1>';
                echo '<tr>
                        <th>Employee Id</th>
                        <th>DoB</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
                        <th>App Date</th>
                    </tr>';
                echo '<tr>
                        <td>'.$row['Emp_id'].'</td>
                        <td>'.$row['DoB'].'</td>
                        <td>'.$row['First_name'].'</td>
                        <td>'.$row['Last_name'].'</td>
                        <td>'.$row['Gender'].'</td>
                        <td>'. $row['App_date'].'</td>
                </tr>';

            echo '</table>';

        }
    }
    else{
        echo "<br />Id not exist";
    }

?>