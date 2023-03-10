<?php

   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send']))
   {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $address = $_POST['address'];
      $city = $_POST['city'];
      $state = $_POST['state'];
      $code = $_POST['code'];
      $cardname = $_POST['cardname'];
      $cardnumber = $_POST['cardnumber'];
      $month = $_POST['month'];
      $year = $_POST['year'];
      $cvv = $_POST['cvv'];

      $request = " insert into payment_form(name, email, address, city, state, code, cardname,cardnumber,month,year,cvv) values('$name','$email','$address','$city','$state','$code','$cardname','$cardnumber','$month','$year','$cvv') ";
      mysqli_query($connection, $request);

      header('location:payment.php'); 

   }
   else{
      echo 'something went wrong please try again!';
   }

?>