<div class="container-fluid pt-5 pb-5" id="contactid">
  <div class="section_header text-center mb-5 mt-4">
    <h1> Contact Us </h1>
  </div>
  <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 col-12">
        
        <form action="" method="POST">

        <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="username" placeholder="name" autocomplete="off" required>
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email"   placeholder="name@example.com" required autocomplete="off">
  </div>

  <div class="form-group">
    <label>Mobile</label>
    <input type="number" class="form-control" name="mobile" placeholder="mobile" autocomplete="off" required>
  </div>

  <div class="form-group">
      <label>Select Symptoms</label> <br>

        <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
          <input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
          <label class="custom-control-label" for="customcheckbox1">cold</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
          <input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever">
          <label class="custom-control-label" for="customcheckbox2">fever</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
          <input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="breath">
          <label class="custom-control-label" for="customcheckbox3">difficulty in breath</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
          <input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="tired">
          <label class="custom-control-label" for="customcheckbox4">feeling weak</label>
        </div>
</div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
  </div>

  <button type="submit" class="btn btn-primary" name="submit">submit</button>
</form>

          </div>

      </div>

  </div>
</div>

<!--/////////   top cursor   /////////-->

<div class="container scrolltop float-right pr-5">
    <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>

</div>



<!--/////////   footer   /////////-->
<footer class="mt-5">
    <div class="footer_style text-white text-center container-fluid">
        <p>Copyright © 2021 All Rights Reserved </p>

    </div>
</footer> 
 


<script type="text/javascript">

 
$('.count').counterUp({
    delay:10,
    time: 3000
})



    mybutton = document.getElementById("myBtn");

    window.onscroll = function() {scrollFunction()};
    function scrollFunction(){
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
            mybutton.style.display = "block";
        } else{
            mybutton.style.display = "none";
        }
        }

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
</script>    
</body>
</html>


<?php

include 'dbcon.php';

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $symp = $_POST['coronasym'];
    $msg = $_POST['msg'];

    $chk = "";

    foreach($symp as $chk1){
        $chk .= $chk1."," ;
    }
    
    $insertquery = "insert into coronacase(username, email, mobile, symp, message) 
    values('$username', '$email', '$mobile', '$chk', '$msg') ";

    $query = mysqli_query($con, $insertquery);

    if($query){
        ?>
        <script>
            alert("inserted successful");
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("No inserted");
        </script>
        <?php
    }



}

?>