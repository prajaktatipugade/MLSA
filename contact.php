
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "prajaktatipugade82@gmail.com"; 
    $subject = "New Contact Form Submission";
    $headers = "From: $email";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for contacting us!";
    } else {
        echo "Oops! Something went wrong.";
    }


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
    <section >
    <center><h1 style="font-size: 50px; color:white;">Contact US &#129309</h1></center>
    <div class="contactcontainer">
    <div><img src="https://learningchain.in/wp-content/uploads/2020/06/Get-in-touch-1024x1024.png" class="contactimg" alt=""></div>

   
   <form class="form">
    <div class="flex">
        <label>
            <input required="" placeholder="" type="text" class="input">
            <span>first name</span>
        </label>

        <label>
            <input required="" placeholder="" type="text" class="input">
            <span>last name</span>
        </label>
    </div>  
            
    <label>
        <input required="" placeholder="" type="email" class="input">
        <span>email</span>
    </label> 
        
    <label>
        <input required="" type="tel" placeholder="" class="input">
        <span>contact number</span>
    </label>
    <label>
        <textarea required="" rows="3" placeholder="" class="input01"></textarea>
        <span>message</span>
    </label>
    
    <button class="fancy" href="#">
      <span class="top-key"></span>
      <span class="text">submit</span>
      <span class="bottom-key-1"></span>
      <span class="bottom-key-2"></span>
    </button>
</form>
</div>
    </section>

            

</body>
</html>
        </div>
    </div>
</body>
</html>
