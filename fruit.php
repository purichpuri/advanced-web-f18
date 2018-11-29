<?php
$connection = mysqli_connect('localhost', 'website', 'password', 'data');
//check connection
if($connection == true){
    echo "connected";
}
else{
    echo "not connected";
}

//query
$query = "SELECT fruit_id, name, color, is_organic, price FROM fruit";
//prepare the query
$statement = $connection -> prepare($query );
$statement -> execute();
$result = $statement -> get_result();
if($result -> num_rows > 0){
    while ($row = $result -> fetch_assoc() ){
        $id = $row['fruit_id'];
        $name = $row['name'];
        $color = $row['color'];
        $organic = $row['is_organic'];
        $price = $row['price'];
        echo "<h4>$name</h4>";
        echo "<p>color=$color</p>";
        echo "<p>$ $price</p>";
    }
}
?>

