<?php
//create connection with database server
$server='localhost';
$db_user_name='root';
$db_user_pass='';
$db_name='store31';

$conn= new mysqli($server,$db_user_name,$db_user_pass,$db_name);

// var_dump($conn);

if($conn -> connect_errno)
{
    echo "there is aconnection error";
}
else
{
    echo "connection created successfully";
}

$sql='select * from catagory';
$catagoriesResult = $conn -> query($sql);

echo "<pre>";
print_r($catagoriesResult);
echo "</pre>";

if ($catagoriesResult -> num_rows)
{
    // data found
    // loop throw data
   for($i=0; $i<$catagoriesResult->num_rows; $i++)
   {
        $onecatagoryData=$catagoriesResult->fetch_assoc();
        echo "<pre>";
        print_r($onecatagoryData);
        echo "</pre>";

   }
}
else
{
    echo "no data found";
}
// $conn -> close();
