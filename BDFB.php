<!DOCTYPE html>
<html>
<head>
  <title>BDFB</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="BDFB.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="dropdown.js"></script>
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
       <button type="button" class="ranks-button">I</button>
       <button type="button" class="ranks-button">B</button>
    </div>
    <div class="ranks">
       <button type="button" class="ranks-button">S</button>
       <button type="button" class="ranks-button">G</button>
    </div>
    <div class="ranks">
       <button type="button" class="ranks-button">P</button>
       <button type="button" class="ranks-button">D</button>
    </div>
    <div class="ranks">
       <button type="button" class="ranks-button">M</button>
    </div>
  <div class="ranks">
    <div class="dropdown">
      <button class="dropbtn">Curret lp</button>
        <div class="dropdown-content">
          <a href="#">0-20 lp</a>
          <a href="#">21-40 lp</a>
          <a href="#">41-60 lp</a>
          <a href="#">61-60 lp</a>
          <a href="#">81-99 lp</a>
        </div>
      </div>
    <select class="button" name="lp-gains">
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
</div>
  <div class="grid-container">
    <div class="grid-item move-right-smaller">3</div>
  </div>
  </main>
  <footer>
  </footer>
</body>
</html>
