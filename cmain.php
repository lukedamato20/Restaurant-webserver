<!DOCTYPE html>
<html>
 <head>
  <title>Contact Us</title>
  <link rel="stylesheet" href="styles3.css">
  </head>
  <body>

  <div class="nav-bar">
    <a href="index.php" class="logo">CompanyLogo</a>

    <div class="nav-bar-right">
        <a class="" href="booking.php">Booking</a>
        <a href="menu.php">Menu</a>
        <a href="favs.php">Favourites</a>
        <a href="aboutus.html">About</a>
        <a href="cmain.php">Contact Us</a>
    </div>
</div>
    <main>

    <h1>Contact Us</h1>

    <form class="contact-form" action ="cform.php" method = "post">
        <input type="text" name ="name" placeholder="Name">
        <input type="text" name ="subject" placeholder="Subject">
        <input type="text" name ="mail" placeholder="Email">
        <textarea name="message" placeholder = "Message" id="textareat"></textarea>
        <input type="submit" name="submit" value="Submit"  id="submit" />
      </form>
    </main>

    <div class="footer">
    <h2>Opening hours: Monday to Sunday 12pm - 12am</h2>
    <h3>Address: 20 Willock Road Sliema</h3>
    <h4>Telephone: 21492312</h4>
   </div>
  </body>
</html>

    