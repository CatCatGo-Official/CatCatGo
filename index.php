<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CatCatGo</title>

    <meta name="title" content="CatCatGo">
    <meta name="description" content="An open source search engine">
    <meta name="keywords" content="Search Engine, Open Source, Cat, Internet, CatCatGo, DuckDuckGo">
    <meta name="og:title" content="CatCatGo">
    <meta name="og:description" content="An open source search engine">
    <meta name="og:keywords" content="Search Engine, Open Source, Cat, Internet, CatCatGo, DuckDuckGo">


    <link href="./style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
  <div class="search-index container">
    <img src="./assets/mimi-index.png">
    <h1>CatCatGo</h1>
    <br>
    <form class="d-flex" action="./search.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search anything" aria-label="Search" name="q" id="q">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
  </body>
</html>
