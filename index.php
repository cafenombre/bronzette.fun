<?php
include('components/header.php');
?>


<?php

$builds = getAllBuilds($conn);



$r = json_decode(CallAPI("http://ddragon.leagueoflegends.com/cdn/10.21.1/data/en_US/champion.json"), true)["data"];
$rando = rand(0, count($r)-1);
$i = 0;
$championg = "";
foreach ($r as $champ) {
  if ($i == $rando) {
    $championg = $champ["id"];
  }
  $i++;
}

/*$pingux = json_decode(CallApi("​https://127.0.0.1:2999/liveclientdata/badvampy123"), true);
var_dump($pingux);*/

?>

    <div class="row">
      <div class="card col-3 m-3 ml-5" id="card1">
        <div class="card-body">
          <h5 class="card-title">Créer un build</h5>
          <form action="utils/BuildController.php" method="post">
            <div class="form-group">
              <label for="build">Build</label>
              <input type="text" class="form-control" id="build" name="build" aria-describedby="build">
              <small id="buildHelp" class="form-text text-muted">Petit pd</small>
            </div>
            <div class="form-group">
              <label for="type">Type</label>
              <input type="text" class="form-control" id="text" name="type">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>

      <div class="card col-3 m-3" id="card2">
        <div class="card-body">
          <h5 class="card-title">Liste des builds</h5>
          <ul class="list-group list-group-flush">

            <?php
            foreach ($builds as $build) {
            ?>

              <form method="post" action="utils/BuildController.php">
                <li class="list-group-item">
                  <?php echo $build[1]; ?>
                  <button class="btn" name="deletebuild" value="<?php echo $build[0]; ?>" style="display:inline; position: absolute; right: 0;">
                    <i class="fas fa-dumpster"></i>
                  </button>
                </li>
              </form>

            <?php
            }
            ?>

          </ul>
        </div>
      </div>


      <div class="card col-3 mr-1 m-3">
        <div class="card-body">
          <h5 class="card-title">Build aléatoire</h5>
          <div class="alert alert-secondary" role="alert">
            <div class="w" style="display:flex;">
              <img src="http://ddragon.leagueoflegends.com/cdn/10.21.1/img/champion/<?php echo $championg; ?>.png" class="img-fluid" alt="<?php echo $championg; ?>">
              <div class="ml-4" style="width: 120px; height: 120px; background: center / cover no-repeat url('https://94.citoyens.com/wp-content/blogs.dir/2/files/2012/01/incendie-%C2%A9-Giorgio-Clementi-Fotolia.com_.jpg'); display:flex; justify-content: center; align-items: center;">
                <span class="badge badge-primary" style="font-size: 90%;"><?php echo $builds[rand(0, count($builds) - 1)][1] ?></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


<?php
include('components/footer.php');
?>
