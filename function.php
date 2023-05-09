<?php
require 'dbcon.php';
function get_positive_compliment(){

    global $conn;

    $query = "SELECT * FROM positive_people";
    $query_run = mysqli_query($conn,$query);

    if($query_run){

        if(mysql_num_rows($query_run) > 0){

            $res = mysqli_fetch_all($query_run, MYSQL_ASSOC);
            $data = [
                'status' => 200,
                'message' => 'Positive compliment Fetched Succesfully',
            ];
            header("HTTP/1.0 200 OK");
            return json_encode($data);  
        }
        else
        {
            $data = [
                'status' => 404,
                'message' => 'No positive people found'
            ];
            header("HTTP/1.0 404 No positive people found");
            return json_encode($data);    
        }

    }
    else
    {
        $data = [
            'status' => 500,
            'message' => 'Internal Server Error'
        ];
        header("HTTP/1.0 500 Internal Server Error");
        return json_encode($data);    

    }
    
}
?>