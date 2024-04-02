<?php 
include_once 'config.php'; // Include the file where $conn is defined

if ($link) {
    if(isset($_POST['submit'])) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $contact_number = $_POST['contact_number'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Proceed with using $conn for database operations
        $stmt = $link->prepare("INSERT INTO contact(first_name, last_name, email, contact_number, message) VALUES (?, ?, ?, ?, ?)");
        
        if ($stmt) {
            $stmt->bind_param("sssss", $first_name, $last_name, $email, $contact_number, $message);

            if($stmt->execute()) {
                echo "Data inserted successfully!";
            } else {
                echo "Error executing query: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Error preparing statement: " . $link->error;
        }
    }
} else {
    echo "Database connection failed!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <section>
        <center>
            <h1 style="font-size: 50px; color:white;">Contact US &#129309</h1>
        </center>
        <div class="contactcontainer">
            <div><img src="https://learningchain.in/wp-content/uploads/2020/06/Get-in-touch-1024x1024.png"
                    class="contactimg" alt=""></div>
            <form class="form" method="POST" action="">
                <div class="flex">
                    <label>
                        <span>first name</span>
                        <input required="" placeholder="" type="text" class="input" name="first_name">
                    </label>
                    <label>
                        <span>last name</span>
                        <input required="" placeholder="" type="text" class="input" name="last_name">
                    </label>
                </div>
                <label>
                    <span>email</span>
                    <input required="" placeholder="" type="email" class="input" name="email">
                </label>
                <label>
                    <span>contact number</span>
                    <input required="" type="tel" placeholder="" class="input" name="contact_number">
                </label>
                <label>
                    <span>message</span>
                    <textarea required="" rows="3" placeholder="" class="input01" name="message"></textarea>
                </label>
                <button class="fancy" type="submit" name="submit">
                    <span class="top-key"></span>
                    <span class="text">Submit</span>
                    <span class="bottom-key-1"></span>
                    <span class="bottom-key-2"></span>
                </button>
            </form>
        </div>
    </section>
</body>
</html>