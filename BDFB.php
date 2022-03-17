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
       <button id="ironButton1" type="button" onclick="change()" class="ranks-button">
         <img src="jpgs/iron.jpg" alt="iron" width="50px" height="50px">
       </button>
       <button id="btn2" type="button" onclick="pictureChange()" class="ranks-button">
         <img src="jpgs/bronze.jpg" alt="bronze" width="50px" height="50px">
       </button>
    </div>
    <div class="ranks">
      <button id="btn3" type="button" onclick="pictureChange()" class="ranks-button">
        <img src="jpgs/silver.jpg" alt="silver" width="50px" height="50px">
      </button>
      <button type="button" onclick="pictureChange()" class="ranks-button">
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
      <button id="btn1" type="button" onclick="" class="ranks-button">
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
  <div class="grid-item move-right text-item">
    <h2>Checkout</h2>
    <div class="ranks">
      <img id="from" src="jpgs/silver.jpg" alt="silver" width="60px" height="60px">
      <img id="to" src="jpgs/gold.jpg" alt="gold" width="60px" height="60px">
    </div>
  </div>
  </div>
  <div class="grid-container">
    <div class="grid-item move-right-smaller text-item">
      <h2>Desired League</h2>
      <div class="ranks">
         <button type="button" onclick="" class="ranks-button">
           <img src="jpgs/iron.jpg" alt="iron" width="50px" height="50px">
         </button>
         <button type="button" onclick="" class="ranks-button">
           <img src="jpgs/bronze.jpg"  alt="bronze" width="50px" height="50px">
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
      <div class="server">
        <select class="current-button" name="server">
          <option value="eune">Europe Nordic & East</option>
          <option value="euw">Europe West</option>
          <option value="ru">Russia</option>
          <option value="tr">Turkey</option>
        </select>
      </div>
      <div class="queue">
        <input type="radio" class="radio" id="soloq" name="soloq" value="soloq" checked>
        <label for="soloq">SoloQ</label>
        <input type="radio" class="radio" id="soloq" name="soloq" value="soloq">
        <label for="soloq">FlexQ</label>
    </div>
  </div>
  </main>
  <footer>
  </footer>
  <script src="BDFB.js"></script>
</body>
</html>
