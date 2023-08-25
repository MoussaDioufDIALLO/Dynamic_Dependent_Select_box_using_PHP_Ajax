<?php 

//fetch_third_level_category.php 

include('database_connection.php');

if(isset($_POST["selected"]))
{
    $id = join ("','", $_POST["selected"]);
    $query = "SELECT * FROM third_level_category
    WHERE second_level_category_id IN ('".$id."')";

    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    $output = '';
    foreach($result as $row)
    {
        $output .= '<option value"'.$row["third_level_category_name"].'</option>';
    }
    echo $output; 
}

?>