<?php include 'database.php'; ?>
<?php 
  $query = "SELECT * FROM shouts ORDER BY id";
  $shouts = mysqli_query($link, $query);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Leave a message after the...</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
  </head>
  <body>
    <div id="container">
      <header>
        <h1>Shoutbox</h1>
      </header>

      <div id="shouts">
        <ul>
          <?php while($row = mysqli_fetch_assoc($shouts)) : ?>
            <li class="shout"><span><?php echo $row['time'] ?> - </span><strong><?php echo $row['user'] ?></strong>: <?php echo $row['message'] ?></li>
          <?php endwhile; ?>
        </ul>
      </div>
      <div id="input">
        <?php if(isset($_GET['error'])) : ?>
          <div class="error"><?php echo $_GET['error'] ?></div>
        <?php endif; ?>
        <form method="post" action="process.php">
          <input type="text" name="user" placeholder="Your Name">
          <input type="text" name="message" placeholder="Your Message">
          <br>
          <input type="submit" name="Submit" value="From the Rooftops!" class="shout-btn">
        </form>
      </div>
    </div>
  </body>
</html>