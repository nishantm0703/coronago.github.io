<!DOCTYPE html>
<html>
<head>
    <title></title>
    <?php  include 'link/links.php'; ?>
    <?php  include 'css/style.php'; ?>
</head>
<body>
    


    </ul>
  </div>
</nav>


<!-- ******************************** Project done start ************************************ -->

<section class="corona_update container-fluid">
  <div class=" my-5 ">
    <h3 class="text-center text-uppercase"> COVID-19 LIVE UPDATES OF THE INDIA </h3>  
  </div>

  <div class="table-responsive">

    <table class="table table-bordered table-striped text-center">
      <tr>
        <th class="text-capitalize" >lastupdatedtime</th>
        <th class="text-capitalize" >state</th>
        <th class="text-capitalize" >confirmed</th>
        <th class="text-capitalize" >active</th>
        <th class="text-capitalize" >TotalDeaths</th>
        <th class="text-capitalize" >deaths</th>
      </tr>


<?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$coronalive = json_decode($data, true);


$statescount = count($coronalive['statewise']);

$i=1;
while($i < $statescount){

   ?> 

   <tr>
     <td><?php  echo $coronalive['statewise'][$i]['lastupdatedtime'] ?></td>
     <td><?php  echo $coronalive['statewise'][$i]['state'] ?></td>
     <td><?php  echo $coronalive['statewise'][$i]['confirmed'] ?></td>
     <td><?php  echo $coronalive['statewise'][$i]['active'] ?></td>
     <td><?php  echo $coronalive['statewise'][$i]['recovered'] ?></td>
     <td><?php  echo $coronalive['statewise'][$i]['lastupdatedtime'] ?></td>

   </tr>   


  <!-- echo $coronalive['statewise'][$i]['lastupdatedtime'] ."<br>"  ;
  echo $coronalive['statewise'][$i]['state']  ."<br>"   ;
  echo $coronalive['statewise'][$i]['confirmed']  ."<br>"    ;
  echo $coronalive['statewise'][$i]['active']   ."<br>"    ;
  echo $coronalive['statewise'][$i]['recovered']    ."<br>"    ;
  echo $coronalive['statewise'][$i]['deaths']    ."<br>"    ; -->

<?php
  $i++;
}

?>


    </table>  
  
  </div>

 </div>
</section>


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


// ************************* top arrow script ****************************

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