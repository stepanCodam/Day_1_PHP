<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex1 advanced</title>
</head>
<body>
  <?php
    $dotaHeroes = array(
        "Pudge" => array(
            "Strength_gain_per_level" =>3.0 ,
            "Agility_gain_per_level" =>1.4 ,
            "Intelligence_gain_per_level" =>1.8 
        ),
        "Slardar" => array(
            "Strength_gain_per_level" =>3.6 ,
            "Agility_gain_per_level" =>2.4 ,
            "Intelligence_gain_per_level" => 1.5
        ),
        "Brew Master" => array (
            "Strength_gain_per_level" => 3.7,
            "Agility_gain_per_level" => 2.0,
            "Intelligence_gain_per_level" => 1.6 
        ),
        "Beast Master" => array(
            "Strength_gain_per_level" => 2.9,
            "Agility_gain_per_level" => 1.6,
            "Intelligence_gain_per_level" =>1.9 
        )
    

        );
  ?>
   <div class ="container mt-5">
       <div class = "row">
   <h1 class="text-center mt-3 text-warning"> Today we learn dota 2 offlane heroes atribute gains per level </h1>
       
        <div class="card" style="width: 18rem;">
        <img src= "https://static.gosugamers.net/61/e9/5e/427c51cd221aff391383b3e3fc52468d13facfa1951d11fe0f477ba6f3.png?w=840" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"> Beast Master</h5>
    <div class="card" style="width: 20rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item text-danger"> Strength <?php echo $dotaHeroes ['Beast Master']['Strength_gain_per_level']  ?></li>
    <li class="list-group-item text-success"> Agility <?php echo $dotaHeroes ['Beast Master']['Agility_gain_per_level']  ?></li>
    <li class="list-group-item text-info"> Intelligence <?php echo $dotaHeroes ['Beast Master']['Intelligence_gain_per_level']  ?></li>
  </ul>
</div>
    <a href="#" class="btn btn-dark">REPORT</a>
  </div>
  </div>
    </div>



    <div class = "row">
        <div class="card" style="width: 18rem;">
  <img src="https://svirtus.cdnvideo.ru/Z-9JYtn5fiFQ36-OwWK7d6N6cRE=/293x100:1254x613/1200x1200/filters:quality(100)/https://hb.bizmrg.com/cybersportru-media/8b/8bcb64452d896037033a39fdc5a4c151.jpg?m=cfcdc2f7fc91d87b3ecc7c9eef7cf386" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"> Pudge</h5>
    <div class="card" style="width: 20rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item text-danger"> Strength <?php echo $dotaHeroes ['Pudge']['Strength_gain_per_level']  ?></li>
    <li class="list-group-item text-success"> Agility <?php echo $dotaHeroes ['Pudge']['Agility_gain_per_level']  ?></li>
    <li class="list-group-item text-info"> Intelligence <?php echo $dotaHeroes ['Pudge']['Intelligence_gain_per_level']  ?></li>
  </ul>

    <a href="#" class="btn btn-dark">REPORT</a>
  </div>
  </div>
</div>

<div class = "row">
        <div class="card" style="width: 18rem;">
        <img src= "https://cdn0.gamesports.net/content_teasers/101000/101020.jpg?1613381923"  class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">  Brew Master</h5>
    <div class="card" style="width: 20rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item text-danger"> Strength <?php echo $dotaHeroes ['Brew Master']['Strength_gain_per_level']  ?></li>
    <li class="list-group-item text-success"> Agility <?php echo $dotaHeroes ['Brew Master']['Agility_gain_per_level']  ?></li>
    <li class="list-group-item text-info"> Intelligence <?php echo $dotaHeroes ['Brew Master']['Intelligence_gain_per_level']  ?></li>
  </ul>

    <a href="#" class="btn btn-dark">REPORT</a>
  </div>
  </div>
</div>
<div class = "row">
        <div class="card" style="width: 18rem;">
        <img src= "https://i.pinimg.com/originals/38/3b/f5/383bf59f4e3c0ee6627fd757085b3732.jpg"  class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Slardar</h5>
    <div class="card" style="width: 20rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item text-danger"> Strength <?php echo $dotaHeroes ['Slardar']['Strength_gain_per_level']  ?></li>
    <li class="list-group-item text-success"> Agility <?php echo $dotaHeroes ['Slardar']['Agility_gain_per_level']  ?></li>
    <li class="list-group-item text-info"> Intelligence <?php echo $dotaHeroes ['Slardar']['Intelligence_gain_per_level']  ?></li>
  </ul>

    <a href="#" class="btn btn-dark">REPORT</a>
  </div>
</div>
</div> 
    </div>
    </div>
</body>
</html>
