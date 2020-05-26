<?php

$conn = mysqli_connect("localhost", "root", "", "zomato");

$user_input = $_POST['user_post'];

$querry = "SELECT * FROM discount WHERE name LIKE '$user_input'";

$result = mysqli_query($conn, $query);

$result = mysqli_fetch_arry($result);

if (empty($result)){

    $response = array('response'=> 404);
}
else{
    if($result['status'] == 0){
        $response = array('response'=> 201);
    }
    else{
        $response = array('response'=> 200, 'percent'=>$result['persent']);
    }
}

$response = json_encode($response);

print_r($response);





?>