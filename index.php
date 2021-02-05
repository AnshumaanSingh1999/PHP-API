<?php
$response=array();
$db_connection = mysqli_connect("localhost", "root", "", "apidb");
if($db_connection){
    $query = "SELECT * FROM cars"; 
    $result = mysqli_query($db_connection,$query);
    if($result){
        header("Content-Type: JSON");
        $i=0;
        while($row=mysqli_fetch_assoc($result)){
            $response[$i]['Car Name']=$row['Car Name'];
            $response[$i]['Price']=$row['Price'];
            $response[$i]['Age']=$row['Age'];
            $response[$i]['Company']=$row['Company'];
            $i++;
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}
else{
    echo "DB not connected";
}
		



