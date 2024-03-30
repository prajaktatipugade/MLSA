<?php

@include 'config.php';

$p_name = $p_image = "";

if (isset($_POST['add_profile'])) {
    $p_name = $_POST['p_name'];
    $p_image = $_FILES['p_image']['name'];
    $p_post = $_POST['p_post'];
    $p_linkedin = $_POST['p_linkedin'];
    $p_insta = $_POST['p_insta'];
    $p_twitter = $_POST['p_twitter'];

    $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
    $p_image_folder = 'Image/' . $p_image; // Corrected path

    $insert_query = mysqli_query($link, "INSERT INTO `profile` (name, post, image, linkedin, insta, twitter) VALUES ('$p_name', '$p_post', '$p_image', '$p_linkedin', '$p_insta', '$p_twitter')") or die('query failed');

    if ($insert_query) {
        move_uploaded_file($p_image_tmp_name, $p_image_folder);
        $message[] = 'profile added successfully';
    } else {
        $message[] = 'could not add the profile';
    }
}

if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    $delete_query = mysqli_query($link, "DELETE FROM `profile` WHERE id = $delete_id") or die('query failed');
    if ($delete_query) {
        header('location:adminprofile.php');
        $message[] = 'profile has been deleted';
    } else {
        header('location:adminprofile.php');
        $message[] = 'profile could not be deleted';
    };
};

if (isset($_POST['update_profile'])) {
    $update_p_id = $_POST['update_p_id'];
    $update_p_name = $_POST['update_p_name'];
    $update_p_post = $_POST['update_p_post'];
    $update_p_linkedin = $_POST['update_p_linkedin'];
    $update_p_twitter = $_POST['update_p_twitter'];
    $update_p_insta = $_POST['update_p_insta'];
    $update_p_image = $_FILES['update_p_image']['name'];
    $update_p_image_tmp_name = $_FILES['update_p_image']['tmp_name'];
    $update_p_image_folder = 'image/' . $update_p_image;

    $update_query = mysqli_query($link, "UPDATE `profile` SET name = '$update_p_name', post = '$update_p_post', linkedin = '$update_p_linkedin', twitter = '$update_p_twitter', insta = '$update_p_insta', image = '$update_p_image' WHERE id = '$update_p_id'");

    if ($update_query) {
        move_uploaded_file($update_p_image_tmp_name, $update_p_image_folder);
        $message[] = 'profile updated successfully';
        header('location:adminprofile.php');
    } else {
        $message[] = 'profile could not be updated';
        header('location:adminprofile.php');
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="admin.css">
    
</head>
<body>
  
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>
    
    <div class="containeer">
        <section>
            <form action="" method="post" class="add-product-form" enctype="multipart/form-data">
                    <h3>add a new profile</h3>
                    <input type="text" name="p_name" placeholder="enter the name" class="box" required>
                    <input type="text" name="p_post" placeholder="enter the post " class="box" required>
                    <input type="text" name="p_linkedin" placeholder="enter the linkedin" class="box" required>
                    <input type="text" name="p_twitter" placeholder="enter the twitter" class="box" required>
                    <input type="text" name="p_insta" placeholder="enter the insta" class="box" required>


                    <input type="file" name="p_image" min="0" accept="image/png,image/jpg,image/jpeg" class="box" required>
                    <input type="submit" value="add the profile" name="add_profile" class="btn">
            </form>
        </section>
        <section class="display-product-table">
            <table>
                    <thead>
                        <th>profile image</th>
                        <th>profile name</th>
                        <th>profile post</th>
                        <th>profile insta</th>
                        <th>profile twitter</th>
                        <th>profile linkedin</th>

                        <th>action</th>
                    </thead>
                    <tbody>
                        <?php
                            $select_profiles=mysqli_query($link,"select * from  `profile` ");
                            if(mysqli_num_rows($select_profiles)>0){
                                while($row=mysqli_fetch_assoc($select_profiles)){
                           
                        ?>
                        <tr>
                            <td><image src="image/<?php echo $row['image'];?>" height="100" alt=""></td>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['post'];?></td>
                            <td><?php echo $row['linkedin'];?></td>
                            <td><?php echo $row['twitter'];?></td>
                            <td><?php echo $row['insta'];?></td>
                            <td>
               <a href="adminprofile.php?delete=<?php echo $row['id']; ?>" class="delete-btn" onclick="return confirm('are your sure you want to delete this?');"><i class="material-icons">delete</i>Delete </a>
               <a href="adminprofile.php?edit=<?php echo $row['id']; ?>" class="option-btn"> <i class="material-icons">edit</i> update </a>
            </td>
                        </tr>
                        <?php
                                };
                            }else{
                                echo "<span>no products are added</span>";
                            }

                        ?>

                    </tbody>


            </table>

        </section>
        
<section class="edit-form-container">

<?php

if(isset($_GET['edit'])){
   $edit_id = $_GET['edit'];
   $edit_query = mysqli_query($link, "SELECT * FROM `profile` WHERE id = $edit_id");
   if(mysqli_num_rows($edit_query) > 0){
      while($fetch_edit = mysqli_fetch_assoc($edit_query)){
?>

<form action="" method="post" enctype="multipart/form-data">
   <img src="uploaded_img/<?php echo $fetch_edit['image']; ?>" height="200" alt="">
   <input type="hidden" name="update_p_id" value="<?php echo $fetch_edit['id']; ?>">
   <input type="text" class="box" required name="update_p_name" value="<?php echo $fetch_edit['name']; ?>">
   <input type="text" class="box" required name="update_p_post" value="<?php echo $fetch_edit['post']; ?>">

   <input type="text" class="box" required name="update_p_linkedin" value="<?php echo $fetch_edit['linkedin']; ?>">

   <input type="text" class="box" required name="update_p_insta" value="<?php echo $fetch_edit['insta']; ?>">

   <input type="text" class="box" required name="update_p_twitter" value="<?php echo $fetch_edit['twitter']; ?>">
   <input type="file" class="box" required name="update_p_image" accept="image/png, image/jpg, image/jpeg">
   <input type="submit" value="update the prodcut" name="update_profile" class="btn">
   <input type="reset" value="cancel" id="close-edit" class="option-btn">
</form>

<?php
         };
      };
      echo "<script>document.querySelector('.edit-form-container').style.display = 'flex';</script>";
   };
?>

</section>

</div>



        
    </div>

    
</body>
</html>