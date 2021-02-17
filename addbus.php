<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<title>Add bus</title>
<link rel="stylesheet" href="styles.css">
</head>

<body>
<div class="title">
<div class="logo"><img src="obtms-logo.png"></div>
<div class="heading"><h1 >Online Bus Ticketing System</h1></div>
 </div>
    <div class="btn-group">
	<br>
        <a href="home.php"class="button"> Home </a>
        <a href="signin.php" class="button">Add bus </a>
        <a href="#" class="button"> Print ticket</a>
        <a href="contactUs.php" class="button">Contact us</a>
        <a href="howToPay.php" class="button">How to pay </a>
		<br><br><br><br><br>
    </div>
	
<div class="container">
  <div class="overlay">Explore the World, Enjoy the World</div>
</div>

  <div id="main"></div>
  
  <form  class="whole-form" action="action_page.php" method="POST" enctype="multipart/from-data" >
  <div class="form-inline">
  <h1 class="root-heading">Route details</h1><br>
  <label for="date">Date:</label><br>
  <input type="Date" id="date" placeholder="DD/MM/YYYY" name="date"><br>
  <label for="from">From:</label><br>
  <input type="text" id="from" placeholder="Travelling from?" name="from"><br>
  <label for="to">To:</label><br>
  <input type="text" id="to" placeholder="Where to?" name="to"><br> <br>
  </div>
  
  <div class="bus-details-form">
  <h1 class="bus-heading">Bus details</h1><br>
  <label for="date">Bus No:</label><br>
  <input type="text" id="date" placeholder="Bus number (TZ-4342)" name="number"><br>
  <label for="from">Class:</label><br>
  <input type="text" id="from" placeholder="Bus class" name="from"><br>
  <label for="to">Seat No:</label><br>
  <input type="number" id="to" placeholder="Number of seats" name="to"><br>
  <label for="to">Departure time:</label><br>
  <input type="time" id="to" placeholder="HH/MM/SS" name="to"><br><br>
  </div>
  
  
  
  <input class="file-button" type="file" name="file"><br><br>

  
  <button class="submit-button" type="submit">Save details</button> 
  
</form>

</body>
</html> 
