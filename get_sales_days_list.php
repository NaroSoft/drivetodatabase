<?php

$date='2021-05-05';


        $sql = $conn->query("SELECT * FROM sales WHERE Date='$date' ORDER BY Time DESC");

                $res = array();

        while ($row=$sql->fetch_assoc()) {
                $res[]=$row;
            }
            echo json_encode($res);


?> 



