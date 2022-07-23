<link rel="stylesheet" href="main.css">

<?php
    require("ketnoidatabase.php");
    $id = (int) $_GET['id'];
    $sql = "SELECT * FROM `sanpham` WHERE `id` = '$id'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);
    $img = $row['imgURL']
?>
 <button><a href = "trangchu.php">Home</a></button>
    <h2>Update</h2>
    <form action ="" method = "POST" enctype= "multipart/form-data">
        <div>
            <label for = "name" >NAME</label>
            <input type = "text" id='name' name="name" value="<?= $row["name"]?>">
        </div>
        <div>
            <label for = "price">PRICE</label>
            <input type = "number" id = 'price' name = "price" value="<?= $row["price"]?>">
        </div>
        <div>
            <img style = "width:200px; height:200px;  " src= './images/<?= $row["imgURL"]?>' alt="">
        </div>
        <div>
            <label for = "file"> PHOTO </label>
            <input type = "file" id="file" name="photo" value="Choose File">
        </div>
        <div>
            <label for="describe"> DESCRIBE  </label>
            <textarea name = "describe" id = 'describe' cols="30" rows="10"><?= $row["describe"]?></textarea>
        </div>
        <button type="submit" name = "submit"> UPDATE </button>
    </form>