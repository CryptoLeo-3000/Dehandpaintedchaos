<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <style>
        .razorpay-payment-button {
            display: none;
        }
</style>
</head>
<body>
    <form action="" method="POST">
        <script
            src="https://checkout.razorpay.com/v1/checkout.js"
            data-key="<?php echo "rzp_test_EvErVi7FkUmThy"?>"
            data-amount="<?php echo 100;?>"
            data-currency="INR"
            data-id="<?php echo 'OID'.rand(10,100).'END';?>"
            data-buttontext="Pay with Razorpay"
            data-name="Traidev Solutions"
            data-description="Training & Development!"
            data-image="https://traidev.com/img/web-desgin-development.png"
            data-prefill.name="<?php echo $_POST['name'];?>"
            data-prefill.email="<?php echo $_POST['email'];?>"
            data-prefill.contact="<?php echo $_POST['mobile'];?>"
            data-theme.color="#F37254"
        ></script>
        <input type="hidden" custom="Hidden Element" name="hidden">
    </form>

    <script>
        $(document).ready(function() {
            $('.razorpay-payment-button').click()
        });
    </script>
</body>
</html>