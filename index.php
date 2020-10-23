<?php
include('components/header.php');
?>


<?php
if (isset($_POST["build"]))
{
  addBuild($conn, $_POST["build"], $_POST["type"]);
}

$builds = getAllBuilds($conn);



$r = json_decode(CallAPI("http://ddragon.leagueoflegends.com/cdn/10.21.1/data/en_US/champion.json"), true)["data"];
$rando = rand(0, count($r));
$i = 0;
$championg = "";
foreach ($r as $champ) {
  if ($i == $rando) {
    $championg = $champ["id"];
  }
  $i++;
}


if(array_key_exists('. $builds[0]. ', $_POST))
  {
     echo (int) $builds[0];
  }
//$pingux = json_decode(CallApi("​https://127.0.0.1:2999/liveclientdata/badvampy123"), true);
//var_dump($pingux);

?>


<body>

  <div class="row">
    <div class="card col-3 m-3 ml-5">
      <div class="card-body">
        <h5 class="card-title">Creer un build</h5>
        <form action="#" method="post">
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

    <div class="card col-3 m-3">
      <div class="card-body">
        <h5 class="card-title">Liste des builds</h5>
        <ul class="list-group list-group-flush">


          <?php
          foreach ($builds as $build) {
            echo
            '<form method="post">
              <li class="list-group-item">' . $build[1] . '
                <button class="btn" name="button" style="display:inline; position: absolute; right: 0;">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                  </svg>
                <Trash/button>
              </li>
            </form>';
            //echo $build[0];
          }
          ?>

        </ul>
      </div>
    </div>

    <div class="card col-3 mr-1 m-3">
      <div class="card-body">
        <h5 class="card-title">Build aleatoire</h5>
        <div class="alert alert-primary" role="alert">
          <?php echo $championg; ?>
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-align-bottom" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M6 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V2z"/>
            <path fill-rule="evenodd" d="M1 14.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5z"/>
          </svg>
        </div>
      </div>
    </div>
  </div>




</body>




<?php
include('components/footer.php');
?>
