<?php 
include_once 'db_connection.php'; 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PayPal API</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="App">
  <h1>PayPal</h1>
  <div class="wrapper">
  
	    <div class="col__box">
	      <h5></h5>
        <h6>Price: </h6>
        <form class="paypal" action="request.php" method="post" id="paypal_form">
          <input type="hidden" name="item_number">
          <input type="hidden" name="item_name">
          <input type="hidden" name="amount">
          <input type="hidden" name="currency_code" value="USD" >
          <input type="submit" name="submit" value="Buy Now" class="btn__default">
        </form>
	    </div>

  </div>
</body>
</html>