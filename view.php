
<?php
include 'db.php';

$sql= "SELECT * FROM  names ";
$data = mysqli_query($conn,$sql);
while($query = msqli_fetch_array ($data) )
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
if (mysqli_num_rows($result)>0){

?>
<table>
    <tr>
        <td>si no</td>
        <td>nom</td>
        <td>prenom</td>
        <td>city</td>
        <td>email</td>
        <td>discription</td>
    </tr>
    <?php
    $i=0;
    while($row = mysqli_fetch_array($result)){
        ?>
<tr>

 <td><?php echo $row ["si no"]; ?></td>
 <td><?php echo $row["nom"]; ?></td>
 <td><?php echo $row ["prenom"]; ?></td>
 <td><?php echo $row["city"]; ?></td><td>
<?php echo $row ["email"]; ?></td>
 <td><?php echo $row["discrption"]; ?></td>
 <td><a href="update-process.php?id=<?php echo $row["id"]; ?>">update </a></td>
 </tr>
 <?php
 $i++;
 }
 ?>
 </table>
 <?php
 }
 else {
    echo "no result found";

}
 
</body>
</html>