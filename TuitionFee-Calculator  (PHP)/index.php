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
   <title>Tuition Fee Calculator</title>
  </head>
  <body>
      <div class="container">
         <div class="card col-lg-6 mx-auto" id="fix">
            <div class="card-header text-center">
              <h4><i class="fas fa-calculator"></i> Tuition Fee Calculator</h4>
            </div>
            <div class="card-body">
               <form action="calculate.php" method="post">
                  <!-- Credit  -->
                  <div class="form-group">
                    <input type="text" class="form-control" name="credit" id="" aria-describedby="helpId" Required placeholder="Total Credits">
                  </div>

                   <!-- Credit Fee -->
                  <div class="form-group">
                    <input type="text" class="form-control" name="credit_fee" id="" aria-describedby="helpId" Required placeholder="Fees Per Credit">
                  </div>

                  <!-- Lab Fee -->
                  <div class="form-group">
                    <input type="text" class="form-control" name="lab_fee" id="" aria-describedby="helpId" placeholder="Lab Fee">
                  </div>

                  <!-- Others Fee -->
                  <div class="form-group">
                    <input type="text" class="form-control" name="other_fee" id="" aria-describedby="helpId" placeholder="Others Fee">
                  </div>

                  <!-- Waiver -->
                  <div class="form-group">
                    <input type="text" class="form-control" name="waiber" id="" aria-describedby="helpId" placeholder="Waiver">
                  </div>

                  <!-- Retake Fine
                  <div class="form-group">
                    <input type="text" class="form-control" name="retake_fine" id="" aria-describedby="helpId" placeholder="Retake Fine">
                  </div> -->

                  <button type="submit"  name="submit" class="btn btn-primary btn-block">Calculate</button>
                  
               
            </div>
            <div class="card-footer text-muted">
                  <button type="reset" class="btn btn-secondary btn-block"><i class="fas fa-redo-alt"></i> Reset</button>

                  </form>
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