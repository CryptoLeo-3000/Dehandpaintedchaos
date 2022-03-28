<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>

  <style>
    body {
      font-family: Arial;
      font-size: 17px;
      padding: 8px;
    }

    * {
      box-sizing: border-box;
    }

    .row {
      display: -ms-flexbox; /* IE10 */
      display: flex;
      -ms-flex-wrap: wrap; /* IE10 */
      flex-wrap: wrap;
      margin: 0 -16px;
    }

    .col-25 {
      -ms-flex: 25%; /* IE10 */
      flex: 25%;
    }

    .col-50 {
      -ms-flex: 50%; /* IE10 */
      flex: 50%;
    }

    .col-75 {
      -ms-flex: 75%; /* IE10 */
      flex: 75%;
    }

    .col-25,
    .col-50,
    .col-75 {
      padding: 0 16px;
    }

    .container {
      background-color: #f2f2f2;
      padding: 5px 20px 15px 20px;
      border: 1px solid lightgrey;
      border-radius: 3px;
    }

    input[type=text] {
      width: 100%;
      margin-bottom: 20px;
      padding: 12px;
      border: 1px solid rgb(168, 168, 168);
      border-radius: 3px;
    }

    label {
      margin-bottom: 10px;
      display: block;
    }

    .icon-container {
      margin-bottom: 20px;
      padding: 7px 0;
      font-size: 24px;
    }

    .btn {
      background-color: #04AA6D;
      color: white;
      padding: 12px;
      margin: 10px 0;
      border: none;
      width: 100%;
      border-radius: 3px;
      cursor: pointer;
      font-size: 17px;
    }

    .btn:hover {
      background-color: #45a049;
    }

    a {
      color: #2196F3;
    }

    hr {
      border: 1px solid lightgrey;
    }

    span.price {
      float: right;
      color: grey;
    }

    input[type=submit]
    {
      background-color: #3B3039;
      color: #bf2766;
      color: white;
      font-weight: bold;
    }

    input[type=submit]:hover
    {
      color: black;
      background-color: #EE4B2B;
    }

    @media (max-width: 800px) {
      .row {
        flex-direction: column-reverse;
      }
      .col-25 {
        margin-bottom: 20px;
      }
    }
  </style>
</head>
<body>
  <div class="row">
    <div class="col-75">
      <div class="container">
        <form action="razorpay/payscript.php">
          <div class="row">
            <div class="col-50">
              <h3>Billing Address</h3>
              <label for="fullname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fullname" name="fullname" placeholder="John M. Doe" required>
            <label for="cellnumber"><i class="fa fa-phone"></i> Cell Number</label>
            <input type="text" id="cellnumber" name="cellnumber" placeholder="9912345678" required>
            <label for="gmail"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="gmail" name="email" placeholder="john@example.com" required>
            <label for="adress"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adress" name="address" placeholder="542 W. 15th Street" required>
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York" required>
            <div class="row">
                <div class="col-50">
                  <label for="state">State</label>
                  <input type="text" id="state" name="state" placeholder="NY">
                </div>
                <div class="col-50">
                  <label for="zip">Zip</label>
                  <input type="text" id="zip" name="zip" placeholder="10001">
                </div>
              </div>
            </div>            
          </div>
          <label>
            <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
          </label>
          <script name="submit" src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_JCMQXdcSIqR5Oz" async></script>
          <!-- <script class="pay-now-button" name="submit" src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_JCMQXdcSIqR5Oz" async></script> -->
        </form>
      </div>
    </div>
  </div>
</body>
</html>