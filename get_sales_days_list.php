<?php

$conn=new mysqli("remotemysql.com","rCtGtsSc2X","7tN1qsJpsJ","rCtGtsSc2X");

$date=$_POST['2021-05-05'];


        $sql = $conn->query("SELECT * FROM sales WHERE Date='".$date."' ORDER BY Time DESC");

                $res = array();

        while ($row=$sql->fetch_assoc()) {
                $res[]=$row;
            }
            echo json_encode($res);


?> 



