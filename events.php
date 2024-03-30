<?php
@include 'config.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="events.css">

</head>

<body>

  <div class="container2">


      <center><h1  style="font-size: 50px;">Our Events</h1></center>

      <div class="box-container">
      <?php
                $select_events = mysqli_query($link, "SELECT * FROM `events`");
                if (mysqli_num_rows($select_events) > 0) {
                    while ($fetch_event = mysqli_fetch_assoc($select_events)) {
      ?>
        <div class="eventcard">
              
              <img class="eventimg" src="Image/<?php echo $fetch_event['image']; ?>" alt="">
            
             <div>
                  <h4><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-event" viewBox="0 0 16 16">
  <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z"/>
  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
</svg></i>  <?php echo $fetch_event['date']; ?> </h4>
                  <h3><?php echo $fetch_event['name']; ?></h3>
                  <p>
                  <?php echo $fetch_event['info']; ?>                  
                  </p>

             </div>
           



        </div>
        <?php
                    }
                    ;
                }
                ;
                ?>



      </div>

  </div>


</body>

</html>