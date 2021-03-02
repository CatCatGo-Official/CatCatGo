<?php
include "includes/header.php";
include "includes/menu.php";
?>
  <div class="search-index container">
    <img src="https://catcatgo.xyz/assets/mimi-index.png">
    <h1>CatCatGo</h1>
    <br>
    <form class="d-flex" action="https://catcatgo.xyz/search.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search anything" aria-label="Search" name="q" id="q">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
  <?php
  include "includes/footer.php";
  ?>
