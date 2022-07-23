<link rel="stylesheet" href="main.css"/>
<?php
    require("ketnoidatabase.php");
    $sql="SELECT * FROM `sanpham`";
    $query = mysqli_query($conn,$sql);
?>
<br>
<img src="NEWARRIVAL.jpg" width=100%;>
<h1>HOME</h1>
<button>
    <a href="themsanpham.php">Add</a>
</button>
<table id="productlist">
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>PRICE</th>
        <th>PHOTO</th>
        <th>ACTION</th>
    </tr>
    <?php
        while($row=mysqli_fetch_array($query)){
    ?>
    <tr>
        <td><?=$row["id"]?></td>
        <td><?=$row["name"]?></td>
        <td><?=$row["price"]?>&nbsp;$</td>
        <td><img style="width: 200px; height:200px" src="./images/<?=$row['imgURL'] ?>" alt=""></td>
        <td><a href="suasanpham.php?id=<?=$row['id']?>">Edit</a>
        <a onclick="return xoasanpham()" href="xoasanpham.php?id=<?=$row['id']?>">Del</a>
        </td>
    </tr>
    <?php   }?>
</table>