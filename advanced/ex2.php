<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex2</title>
</head>
<body>

    <?php
    $carAgency  = array(
        "Mercedes" => array("Availability"=> "available",
                             "numberOFSeats" => 5,
                             "color" => "green",
                             "price" => 199,
                             "location" => "downey street 11"   ),
    
    "Bmw" => array("Availability"=> "available",
    "numberOFSeats" => 5,
    "color" => "red",
    "price" => 229,
    "location" => "jordan street 11"   ),

    "Lada" => array("Availability"=> "not available",
    "numberOFSeats" => 5,
    "color" => "grey",
    "price" => 20,
    "location" => "downey street 12"   ),

    "Lamborghini" => array("Availability"=> "available",
    "numberOFSeats" => 2,
    "color" => "Magenta",
    "price" => 300,
    "location" => "downey street 11"   ),

    "Ford" => array("Availability"=> "available",
    "numberOFSeats" => 5,
    "color" => "black",
    "price" => 89,
    "location" => "downey street 11"   ),

    "Renault" => array("Availability"=> "available",
    "numberOFSeats" => 5,
    "color" => "pink",
    "price" => 100,
    "location" => "bobers street 11"   )

    );
    ?>

<div class="container mt-5">
<div class="row row-cols-2 row-cols-md-3 row cols-lg-4 p-2 m-2">
<div class="card p-2 m-2" style="width: 18rem;">
  <img src="https://cdn.prod.www.spiegel.de/images/ad24e10d-c21f-427b-a4c5-1a4348a45ce6_w1600_r1.4998125234345707_fpx50_fpy52.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Mercedes</h5>
<p class="card-text"> THe car is <?php echo $carAgency["Mercedes"]["Availability"]?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"> It has <?php echo $carAgency["Mercedes"]["numberOFSeats"]?> seats</li>
    <li class="list-group-item"> color: <?php echo $carAgency["Mercedes"]["color"]?></li>
    <li class="list-group-item"> You can find it here : <?php echo $carAgency["Mercedes"]["location"]?></li>
  </ul>
  <a href="#" class="btn btn-dark"> The price is: <?php echo $carAgency["Mercedes"]["price"]?></a>
</div>

<div class="card p-2 m-2" style="width: 18rem;">
  <img src="https://i.auto-bild.de/ir_img/9/9/0/4/8/5/BMW-M4-CSL-orange-a25ffbaa8df2b03e.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">BMW</h5>
<p class="card-text"> THe car is <?php echo $carAgency["Bmw"]["Availability"]?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"> It has <?php echo $carAgency["Bmw"]["numberOFSeats"]?> seats</li>
    <li class="list-group-item"> color: <?php echo $carAgency["Bmw"]["color"]?></li>
    <li class="list-group-item"> You can find it here : <?php echo $carAgency["Bmw"]["location"]?></li>
  </ul>
  <a href="#" class="btn btn-dark"> The price is: <?php echo $carAgency["Bmw"]["price"]?></a>
</div>


<div class="card p-2 m-2" style="width: 18rem;">
  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e6/Lada_2107_aka_Lada_Riva_October_1995_1452cc.jpg/1200px-Lada_2107_aka_Lada_Riva_October_1995_1452cc.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Lada</h5>
<p class="card-text"> THe car is <?php echo $carAgency["Mercedes"]["Availability"]?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"> It has <?php echo $carAgency["Mercedes"]["numberOFSeats"]?> seats</li>
    <li class="list-group-item"> color: <?php echo $carAgency["Mercedes"]["color"]?></li>
    <li class="list-group-item"> You can find it here : <?php echo $carAgency["Mercedes"]["location"]?></li>
  </ul>
  <a href="#" class="btn btn-dark"> The price is: <?php echo $carAgency["Mercedes"]["price"]?></a>
</div>


<div class="card p-2 m-2" style="width: 18rem;">
  <img src="https://cdn.prod.www.spiegel.de/images/ad24e10d-c21f-427b-a4c5-1a4348a45ce6_w1600_r1.4998125234345707_fpx50_fpy52.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Mercedes</h5>
<p class="card-text"> THe car is <?php echo $carAgency["Mercedes"]["Availability"]?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"> It has <?php echo $carAgency["Mercedes"]["numberOFSeats"]?> seats</li>
    <li class="list-group-item"> color: <?php echo $carAgency["Mercedes"]["color"]?></li>
    <li class="list-group-item"> You can find it here : <?php echo $carAgency["Mercedes"]["location"]?></li>
  </ul>
  <a href="#" class="btn btn-dark"> The price is: <?php echo $carAgency["Mercedes"]["price"]?></a>
</div>

<div class="card p-2 m-2" style="width: 18rem;">
  <img src="https://cdn.prod.www.spiegel.de/images/ad24e10d-c21f-427b-a4c5-1a4348a45ce6_w1600_r1.4998125234345707_fpx50_fpy52.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Mercedes</h5>
<p class="card-text"> THe car is <?php echo $carAgency["Mercedes"]["Availability"]?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"> It has <?php echo $carAgency["Mercedes"]["numberOFSeats"]?> seats</li>
    <li class="list-group-item"> color: <?php echo $carAgency["Mercedes"]["color"]?></li>
    <li class="list-group-item"> You can find it here : <?php echo $carAgency["Mercedes"]["location"]?></li>
  </ul>
  <a href="#" class="btn btn-dark"> The price is: <?php echo $carAgency["Mercedes"]["price"]?></a>
</div>

<div class="card p-2 m-2" style="width: 18rem;">
  <img src="https://cdn.prod.www.spiegel.de/images/ad24e10d-c21f-427b-a4c5-1a4348a45ce6_w1600_r1.4998125234345707_fpx50_fpy52.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Mercedes</h5>
<p class="card-text"> THe car is <?php echo $carAgency["Mercedes"]["Availability"]?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"> It has <?php echo $carAgency["Mercedes"]["numberOFSeats"]?> seats</li>
    <li class="list-group-item"> color: <?php echo $carAgency["Mercedes"]["color"]?></li>
    <li class="list-group-item"> You can find it here : <?php echo $carAgency["Mercedes"]["location"]?></li>
  </ul>
  <a href="#" class="btn btn-dark"> The price is: <?php echo $carAgency["Mercedes"]["price"]?></a>
</div>


</div>
</div>

</body>
</html>