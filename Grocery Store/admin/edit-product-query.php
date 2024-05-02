
<?php
 require_once("./db-con.php");

$id = $_GET['id'];
if(!empty($id)){

    
$sql = "SELECT * FROM products WHERE id = $id";
$result = mysqli_query($conn , $sql);

if ($row= mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $name = $row['name'];
        $unit_price = $row['unit_price'];
        $category = $row['category'];
        $quantity = $row['quantity'];
        $image = $row['image'];
        $status = $row['status'];
}
   } 
?>