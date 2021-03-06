  <?php
  include "includes/header.php";

  $q = $_GET["q"];
  ?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><img src="https://catcatgo.xyz/assets/mimi-index.png" width="50"> CatCatGo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <form class="d-flex" action="https://catcatgo.xyz/search.php" method="get">
            <input class="form-control me-2" type="search" placeholder="Search anything" value="<?php echo $q; ?>" aria-label="Search" name="q" id="q">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </ul>
    </div>
  </div>
  </nav>
  <div class="search-results container">
    <?php
    if(!$q){
    ?>
    <br>
    <div class="alert alert-danger" role="alert">
      Umm, try searching something ¯\_(ツ)_/¯
    </div>
    <?php
    return;
    }

    $curl = curl_init("https://api.duckduckgo.com/?q=".$q."&format=json&pretty=1");

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $json_res = curl_exec($curl);

    $array_res = json_decode($json_res);
    ?>
    <br>
    <div class="alert alert-info">
      <h4 class="alert-heading"><?php echo $array_res->Heading; ?></h4>
      <?php echo $array_res->Abstract; ?>
    </div>
    <?php
    foreach($array_res->Results as $topic){
    ?>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?php echo $topic->Result; ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?php echo $topic->FirstURL; ?></h6>
      </div>
    </div>
    <br>
    <?php
    }
    ?>
    <br>
    <?php
    foreach($array_res->RelatedTopics as $topic){
    ?>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?php echo $topic->Result; ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?php echo $topic->FirstURL; ?></h6>
      </div>
    </div>
    <br>
    <?php
    }
    ?>
  </div>
  <?php
  include "includes/footer.php";
  ?>
