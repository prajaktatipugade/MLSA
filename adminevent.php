<?php

@include 'config.php';

$p_name = $p_image = "";

if (isset ($_POST['add_event'])) {
    $p_name = $_POST['p_name'];
    $p_image = $_FILES['p_image']['name'];
    $p_date = $_POST['p_date'];
    $p_info = $_POST['p_info'];

    $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
    $p_image_folder = 'Image/' . $p_image; // Corrected path

    $insert_query = mysqli_query($link, "INSERT INTO `events` (name, date, image, info) VALUES ('$p_name', '$p_date', '$p_image', '$p_info')") or die ('query failed');

    if ($insert_query) {
        move_uploaded_file($p_image_tmp_name, $p_image_folder);
        $message[] = 'profile added successfully';
    } else {
        $message[] = 'could not add the profile';
    }
}

if (isset ($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    $delete_query = mysqli_query($link, "DELETE FROM `events` WHERE id = $delete_id") or die ('query failed');
    if ($delete_query) {
        header('location:adminevent.php');
        $message[] = 'profile has been deleted';
    } else {
        header('location:adminevent.php');
        $message[] = 'profile could not be deleted';
    }
    ;
}
;

if (isset ($_POST['update_profile'])) {
    $update_p_id = $_POST['update_p_id'];
    $update_p_name = $_POST['update_p_name'];
    $update_p_date = $_POST['update_p_date'];
    $update_p_info = $_POST['update_p_info'];
    $update_p_image = $_FILES['update_p_image']['name'];
    $update_p_image_tmp_name = $_FILES['update_p_image']['tmp_name'];
    $update_p_image_folder = 'image/' . $update_p_image;

    $update_query = mysqli_query($link, "UPDATE `events` SET name = '$update_p_name', post = '$update_p_date', linkedin = '$update_p_info',  image = '$update_p_image' WHERE id = '$update_p_id'");

    if ($update_query) {
        move_uploaded_file($update_p_image_tmp_name, $update_p_image_folder);
        $message[] = 'profile updated successfully';
        header('location:adminevent.php');
    } else {
        $message[] = 'profile could not be updated';
        header('location:adminevent.php');
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


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="adminevent.css">

</head>

<body>

    <?php

    if (isset ($message)) {
        foreach ($message as $message) {
            echo '<div class="message"><span>' . $message . '</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
        }
        ;
    }
    ;

    ?>

    <div class="containeer">
        <section>
            <form action="" method="post" class="add-event-form" enctype="multipart/form-data">
                <h3>add a new profile</h3>
                <input type="text" name="p_name" placeholder="enter the name" class="box" required>
                <input type="date" name="p_date" placeholder="enter the date " class="box" required>
                <input type="text" name="p_info" placeholder="enter the info" class="box" required>
                <input type="file" name="p_image" min="0" accept="image/png,image/jpg,image/jpeg" class="box" required>
                <input type="submit" value="add the event" name="add_event" class="btn">
            </form>
        </section>
        <section class="display-event-table">
            <table>
                <thead>
                    <th>event image</th>
                    <th>event name</th>
                    <th>event date</th>
                    <th>event info</th>
                    <th>action</th>
                </thead>
                <tbody>
                    <?php
                    $select_events = mysqli_query($link, "select * from  `events` ");
                    if (mysqli_num_rows($select_events) > 0) {
                        while ($row = mysqli_fetch_assoc($select_events)) {
                            ?>
                            <tr>
                                <td>
                                    <image src="image/<?php echo $row['image']; ?>" height="100" alt="">
                                </td>
                                <td>
                                    <?php echo $row['name']; ?>
                                </td>
                                <td>
                                    <?php echo $row['date']; ?>
                                </td>
                                <td>
                                    <?php echo $row['info']; ?>
                                </td>

                                <td>
                                    <a href="adminevent.php?delete=<?php echo $row['id']; ?>" class="delete-btn"
                                        onclick="return confirm('are your sure you want to delete this?');"><i
                                            class="material-icons">delete</i>Delete </a>
                                    <a href="adminevent.php?edit=<?php echo $row['id']; ?>" class="option-btn"> <i
                                            class="material-icons">edit</i> update </a>
                                </td>
                            </tr>
                            <?php
                        }
                        ;
                    } else {
                        echo "<span>no events are added</span>";
                    }

                    ?>

                </tbody>


            </table>

        </section>

        <section class="edit-form-container">

            <?php

            if (isset ($_GET['edit'])) {
                $edit_id = $_GET['edit'];
                $edit_query = mysqli_query($link, "SELECT * FROM `events` WHERE id = $edit_id");
                if (mysqli_num_rows($edit_query) > 0) {
                    while ($fetch_edit = mysqli_fetch_assoc($edit_query)) {
                        ?>

                        <form action="" method="post" enctype="multipart/form-data">
                            <img src="uploaded_img/<?php echo $fetch_edit['image']; ?>" height="200" alt="">
                            <input type="hidden" name="update_p_id" value="<?php echo $fetch_edit['id']; ?>">
                            <input type="text" class="box" required name="update_p_name" value="<?php echo $fetch_edit['name']; ?>">
                            <input type="text" class="box" required name="update_p_date" value="<?php echo $fetch_edit['date']; ?>">
                            <input type="text" class="box" required name="update_p_info" value="<?php echo $fetch_edit['info']; ?>">
                            <input type="file" class="box" required name="update_p_image" accept="image/png, image/jpg, image/jpeg">
                            <input type="submit" value="update the event" name="update_event" class="btn">
                            <input type="reset" value="cancel" id="close-edit" class="option-btn">
                        </form>

                        <?php
                    }
                    ;
                }
                ;
                echo "<script>document.querySelector('.edit-form-container').style.display = 'flex';</script>";
            }
            ;
            ?>

        </section>

    </div>




    </div>


</body>

</html>