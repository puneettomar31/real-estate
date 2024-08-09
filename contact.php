<?php

include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
   integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
   crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
</head>
<body>
    
</body>
</html>


<div class="container-fluid py-6 px-5">
<div class="row gx-3">
<div class="col-lg-4 mb-5 mb-lg-0">
<div class="mb-4">
<h1 class="display-5 text-uppercase mb-4">Request A <span class="text-primary">Call Back</span></h1>
</div>
<p class="mb-5">Nonumy ipsum amet tempor takimata vero ea elitr. Diam diam ut et eos duo duo sed. Lorem elitr sadipscing eos et ut et stet justo, sit dolore et voluptua labore. Ipsum erat et ea ipsum magna sadipscing lorem. Sit lorem sea sanctus eos. Sanctus sit tempor dolores ipsum stet justo sit erat ea, sed diam sanctus takimata sit. Et at voluptua amet erat justo amet ea ipsum eos, eirmod accusam sea sed ipsum kasd ut.</p>
<a class="btn btn-primary py-3 px-5" href="">Get A Quote</a>
</div>
<div class="col-lg-8">
<div class="bg-light text-center p-5">
 <form method="Post" action="submit.php">
<div class="row g-3">
<div class="col-12 col-sm-6">
<input type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;">
</div>
<div class="col-12 col-sm-6">
<input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
</div>
<div class="col-12 col-sm-6">
<div class="date" id="date" data-target-input="nearest">
<input type="text" class="form-control border-0 datetimepicker-input" placeholder="Call Back Date" data-target="#date" data-toggle="datetimepicker" style="height: 55px;">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="time" id="time" data-target-input="nearest">
<input type="text" class="form-control border-0 datetimepicker-input" placeholder="Call Back Time" data-target="#time" data-toggle="datetimepicker" style="height: 55px;">
</div>
</div>
<div class="col-12">
<textarea class="form-control border-0" rows="5" placeholder="Message"></textarea>
</div>
<div class="col-12">
<button class="btn btn-primary w-100 py-3" type="submit">Submit Request</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>




<?php

include 'footer.php';

?>