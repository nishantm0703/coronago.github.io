<!DOCTYPE html>
<html>
<head>
    <title></title>
    <?php  include 'link/links.php'; ?>
    <?php  include 'css/style.php'; ?>
</head>
<body>
    
<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sympid">symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventid">prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#indiacoronalive.phpid">indiacoronalive</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">contact</a>
      </li>
    </ul>
  </div>
</nav>
<div class="main_header">
    <div class="row w-100 h-100">
         <div class="col-lg-5 col-mb-5 col-12 order-lg-1 order-2">
              <div class="leftside w-10 h-30 d-flex justify-content-center aling-items-center">
                  <img src="images/eksath.png" width="300" height="300">
              </div>
         </div>

         <div class="col-lg-7 col-mb-7 col-12 order-lg-2 order-1">
            <div class="rightside  w-100 h-100 d-flex justify-content-center aling-items-center">
                <h1>Let's Stay Safe & Fight together Against Cor<span class="corona_rotate"> <img src="images/corona.png" width="60" height="50">
                </span>na Virus</h1>
            </div>
         </div>
    </div>
</div>




<!-- ******************* about section ******************* -->

<div class="container-fluid sub_section pt-5 pb-5 " id="aboutid">
    <div class="section_header text-center mb-5 mt-4">
         <h1> About COVID-19 </h1>
    </div>

    <div class="row pt-5">
         <div class="col-lg-5 col-md-6 col-12 ml-5">
              <img src="images/newcorona.png" class="img-fluid">
         </div>

         <div class="col-lg-6 col-md-6 col-12">
              <h2>What is COVID-19 (Corona-Virus)</h2>
              <p>Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.
The best way to prevent and slow down transmission is to be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face. 
The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow).</p>
         </div>
    </div>
</div>

<div class="col-lg-15 col-mb-7 col-12">
        <div class="container-fluid  " id="indiacoronalive.phpid">
         <div> <?php  include 'indiacoronalive.php'; ?> </div>

<!-- /////////////////////Coronavirus symptoms ////////////////////// -->

<div class="container-fluid  pt-5 pb-5 " id="sympid">
    <div class="section_header text-center mb-5 mt-4">
         <h1> Coronavirus symptoms </h1>
         <img src="images/coronasymptoms.png" width="800" height="800" >
      </div>
     </div>
  </div>
   
 

</div>

<!-- ///////////////////// Prevention Against Coronavirus ////////////////////// -->

<div class="container-fluid sub_section pt-5 pb-5 " id="preventid">
    <div class="section_header text-center mb-5 mt-4">
         <h1> 6 Steps Prevention Against Coronavirus </h1>
         <img src="images/newnew.png" width="1200" height="900">
         
    </div>
 </div>

<!-- ///////////////////// Contact Us ASAP ////////////////////// -->

<div class="container-fluid sub_section pt-5 pb-5 " id="contactid">
    <div class="section_header text-center mb-5 mt-4">
         <h1> Contact Us ASAP </h1>         
    </div>
 
    <div class="container">
         <div class="row">
              <div class="col-lg-8 offset-lg-2 col-12">
              
              <form action="" method="POST">



  <div class="form-group">
    <label >Username </label>
    <input type="text" class="form-control" name="username" placeholder="username" autocomplete="off" required>
  </div>

  <div class="form-group">
    <label >Email </label>
    <input type="email" class="form-control" name="email" placeholder="email" required autocomplete="off">
  </div>

  <div class="form-group">
    <label >Mobile number </label>
    <input type="number"  class="form-control" name="mobile" placeholder="mobile" autocomplete="off" required>
  </div>

  <div class="from-group">
              <label >Select Symptoms</label> <br>


              <div class="custom-control custom-checkbox
              custom-control-inline text-capitalize">
                 <input type="checkbox" class="custom-control-input " id
                 ="customcheckbox1"  name="coronasym[]" value="cold">
                 <label class="custom-control-label" for="
                 customcheckbox1">Cold</label>
               </div>
               <div class="custom-control custom-checkbox
              custom-control-inline text-capitalize ">
                 <input type="checkbox" class="custom-control-input  "
                 id=" customcheckbox2" name="coronasym[]" value="fever">
                 <label class="custom-control-label" for="
                 customcheckbox2">fever</label>
               </div>

                <div class="custom-control custom-checkbox
              custom-control-inline text-capitalize ">
                 <input type="checkbox" class="custom-control-input  "
                 id=" customcheckbox3" name="coronasym[]" value="breath">
                 <label class="custom-control-label" for="
                 customcheckbox3">difficulty in breath</label>
               </div>   

                <div class="custom-control custom-checkbox
              custom-control-inline text-capitalize ">
                 <input type="checkbox" class="custom-control-input  "
                 id=" customcheckbox4" name="coronasym[]" value="ftired">
                 <label class="custom-control-label" for="
                 customcheckbox4">feeling weak</label>
               </div> 

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
  </div>

      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
   </form>
              </div>
         </div>
    </div>

</div>


<!-- ////////////////////////// top cursor ///////////////////////////////// -->

<div class="container scrolltop float-right pr-5">
    <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i> 
</div>


<!-- ///////////////////////////// footer /////////////////////////////// -->

<footer class="mt-5">
    <div class="footer_style text-red text-center container-fluid">
        <p>COPYRIGHT BY NISHANT MAURYA</p>
    </div> 
</footer>


<script type="text/javascript"> 




mybutton = document.getElementByTd("myBtn");
// When the user scrolls down 20px from the top of the document, show the button
window.onescroll = function() {scrollfunction()};
function scrollFunction() {
if (document.body.scrollTop > 100 || document.documentElement.scrollTop >
    100) {
mybutton.style.display = "block";
} else {
mybutton.style.display = "none";
}
}
//When the user clicks on the button, scroll to the top of the document
function topFunction() {
document.body.scrollTop = 0; // For Safari
document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and 
Opera
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
    $symp = $_POST['coronasymp'];
    $msg = $_POST['msg'];


    $ckk = "";

    foreach($symp as $chk1){
      $chk .= $chk1."," ;
    }

    $insertquery = " insert into coronacase(username,	email,	mobile,	symp,	message) values('$username', '$email', '$mobile', '$chk', '$msg') ";

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
          alert("No inserted ");
      </script>
      <?php
   }
  
}


?>