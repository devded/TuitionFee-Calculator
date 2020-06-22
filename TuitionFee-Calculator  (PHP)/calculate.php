<?php
   error_reporting(0);
   if(isset($_POST['submit'])) {

      //Number of credit
   $a = $_POST['credit'];

   //Per Credit Fee
   $b = $_POST['credit_fee'];

   //Lab Fee
   $c = $_POST['lab_fee'];

   //Other fee
   $d = $_POST['other_fee'];

   //Waiber
   $e = $_POST['waiber'];

   //Operation

   $f = $e / 100;
   $g = $a * $b;
   $h = $f * $g;
   $i = $g - $h;
   $j = $i + $c + $d;
   }

   
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="img/fav.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

   <!-- Fornt Awesome CSS  -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
   
   <style>
   #fix {
      margin-top: 10%;
   }
   </style>
   <title>Tution Fee Calculator</title>
  </head>
  <body>
    <div class="container">
       <div class="card col-lg-6 mx-auto" id="fix">
          <div class="card-header text-center">
            <h4><i class="fas fa-calculator"></i> Tuition Fee Calculator</h4>
          </div>
          <div class="card-body">
             <h6>Credits :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $a;?></h6>
             <h6>Fees per credit :&nbsp&nbsp<?php echo $b;?></h6>
             <h6>Lab Fee :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $c;?></h6>
             <h6>Others Fee :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $d;?> </h6>
             <h6>Waiver :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $e;?> % </h6>
             <!-- <h6>Retake Fee :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 5000 </h6> -->
             
             <hr>
             <h6 class="p-3 mb-2 bg-warning text-dark">Tuition Fee :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $j;?> </h6>

          </div>
          <div class="card-footer ">
             <a class="btn btn-success btn-block " href="index.php" role="button"><i class="fas fa-redo"></i> Refresh</a>
          </div>
       </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>

