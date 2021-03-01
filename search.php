<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CatCatGo</title>

    <link href="./style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </head>
  <body>
  <?php
  $q = $_GET["q"];
  ?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><img src="./assets/mimi-index.png" width="50"> CatCatGo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <form class="d-flex" action="./search.php" method="get">
            <input class="form-control me-2" type="search" placeholder="Search anything" value="<?php echo $q; ?>" aria-label="Search" name="q" id="q">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </ul>
    </div>
  </div>
  </nav>
  <div class="search-results">
    <?php
    if(!$q){
      echo "You didn't input anything";
      return;
    }
    $curl = curl_init();

    curl_setopt_array($curl, [
    	CURLOPT_URL => "https://duckduckgo-duckduckgo-zero-click-info.p.rapidapi.com/?q=".$q."&no_redirect=1&no_html=1&callback=process_duckduckgo&skip_disambig=1&format=json",
    	CURLOPT_RETURNTRANSFER => true,
    	CURLOPT_FOLLOWLOCATION => true,
    	CURLOPT_ENCODING => "",
    	CURLOPT_MAXREDIRS => 10,
    	CURLOPT_TIMEOUT => 30,
    	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    	CURLOPT_CUSTOMREQUEST => "GET",
    	CURLOPT_HTTPHEADER => [
    		"x-rapidapi-host: duckduckgo-duckduckgo-zero-click-info.p.rapidapi.com",
    		"x-rapidapi-key: YOUR-API-KEY"
    	],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
    	echo "cURL Error #:" . $err;
    } else {
    	echo $response;
    }
    ?>
  </div>
  </body>
</html>
