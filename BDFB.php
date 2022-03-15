<!DOCTYPE html>
<html>
<head>
  <title>BDFB</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="BDFB.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <header>
    <?php
      include "topnav.php";
    ?>
  </header>
  <main>
  <div class="grid-container">
    <div class="grid-item move-right-smaller text-item">
       <h2>Current League</h2>
    <div class="ranks">
       <button type="button" onclick="" class="ranks-button">
         <img src="jpgs/iron.jpg" alt="iron" width="50px" height="50px">
       </button>
       <button type="button" onclick="" class="ranks-button">
         <img src="jpgs/bronze.jpg" alt="bronze" width="50px" height="50px">
       </button>
    </div>
    <div class="ranks">
      <button type="button" onclick="" class="ranks-button">
        <img src="jpgs/silver.jpg" alt="silver" width="50px" height="50px">
      </button>
      <button type="button" onclick="" class="ranks-button">
        <img src="jpgs/gold.jpg" alt="gold" width="50px" height="50px">
      </button>
    </div>
    <div class="ranks">
      <button type="button" onclick="" class="ranks-button">
        <img src="jpgs/platinium.jpg" alt="platinium" width="50px" height="50px">
      </button>
      <button type="button" onclick="" class="ranks-button">
        <img src="jpgs/diamond.jpg" alt="diamond" width="50px" height="50px">
      </button>
    </div>
    <div class="ranks">
      <button type="button" onclick="" class="ranks-button">
        <img src="jpgs/master.jpg" alt="master" width="50px" height="50px">
      </button>
    </div>
    <div class="ranks">
      <select class="current-button" name="lp-current">
        <option value="020">0-20 lp</option>
        <option value="2140">21-40 lp</option>
        <option value="4160">41-60 lp</option>
        <option value="6180">61-80 lp</option>
        <option value="8199">81-99 lp</option>
      </select>

    <select class="ranks-button" name="lp-gains">
      <option value="11+">11 or more</option>
      <option value="13+">13 or more</option>
      <option value="15+">15 or more</option>
      <option value="17+">17 or more</option>
      <option value="20+">20 or more</option>
    </select>
    </div>
    </div>
  <div class="grid-item move-right">2</div>
  </div>
  <div class="grid-container">
    <div class="grid-item move-right-smaller">3</div>
  </div>
  </main>
  <footer>
  </footer>
</body>
</html>
