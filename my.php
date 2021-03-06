<?php
include "includes/header.php";
?>
  <div class="search-index container">
    <img src="<?php echo $_GET["i"]; if (!$_GET["i"]) {echo "https://catcatgo.xyz/assets/mimi-index.png";} ?>">
    <h1><?php echo $_GET["n"]; if (!$_GET["n"]) {echo "CatCatGo";} ?></h1>
    <br>
    <form class="d-flex" action="https://catcatgo.xyz/search.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search anything" aria-label="Search" name="q" id="q">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
  <?php
  include "includes/footer.php";
  ?>
