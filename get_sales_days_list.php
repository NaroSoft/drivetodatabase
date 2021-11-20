<?php

include 'conn.php';

$date=$_POST['2021-05-05'];


        $sql = $conn->query("SELECT * FROM sales");

                $res = array();

        while ($row=$sql->fetch_assoc()) {
                $res[]=$row;
            }
            echo json_encode($res);


?> 



