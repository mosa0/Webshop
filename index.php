<?php include_once'header.php'
?>

<!-- Title variabele-->
  <?php 
  $title_tnf = "The North Face Puffer Jackets Line"
  ?>
   <?php 
  $title_yeezy = "The Yeezy Line"
  ?>
   <?php 
  $title_tommy = "The Tommy Hilfiger Line"
  ?>
  
  <!-- Prijs Variable-->
  <?php 
  $prijs_tnf = "$249,99"
  ?>
  
  
  <?php 
  $prijs_yeezy1 = "$599,00"
  ?>
  
  
  <?php 
  $prijs_tommy2 = "$110,00"
  ?>
  
    <div class="cards">
      
      <div class="tnf-t"><h1><?php echo $title_tnf?></h1></div>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
        <?php
          $prijs_tnf = 249.99;
        ?>
        <?php
          $prijs_tnf = 249.99;
        ?>
          <div class="card">
            <img src="./img/tnf1.jpg" class="card-img-top kaart" alt="..." />
            <div class="card-body">
              <h5 class="card-title">The North Face</h5>
              <p class="card-text">
                Black Puffer Jacket
                
                <h3 class=prijs> <?= number_format($prijs_tnf, 2, ',', '') ?></h3>
                <button type="button" class="btn btn-dark">Dark</button>
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="./img/tnf2.png" class="card-img-top kaart" alt="..." />
            <div class="card-body">
              <h5 class="card-title">The North Face</h5>
              <p class="card-text">
                Orange Puffer Jacket
                
                <h3 class=prijs> <?= number_format($prijs_tnf, 2, ',', '') ?></h3>
                <button type="button" class="btn btn-dark">Dark</button>
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="./img/tnf3.png" class="card-img-top kaart" alt="..." />
            <div class="card-body">
              <h5 class="card-title">The North Face</h5>
              <p class="card-text">
                Yellow Puffer Jacket
                
                <h3 class=prijs> <?= number_format($prijs_tnf, 2, ',', '') ?></h3>
                <button type="button" class="btn btn-dark">Dark</button>
              </p>
            </div>
          </div>
        </div>

        <div class="yeezy-t"><h1><?php echo $title_yeezy?></h1></div>

        <?php
          $prijs_yeezy = 635.00;
        ?>
        <div class="col">
          <div class="card">
            <img src="./img/yeezy1.jpg" class="card-img-top kaart2" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Yeezy 350 V2</h5>
              <p class="card-text">
                Black Pirate
                
                <h3 class=prijs><?= number_format($prijs_yeezy, 2, ',', '') ?> </h3>
                <button type="button" class="btn btn-dark">Dark</button>
              </p>
            </div>
          </div>
        </div>
        <?php
          $prijs_yeezy = 450.00;
        ?>
        <div class="col">
          <div class="card">
            <img src="./img/yeezy2.jpg" class="card-img-top kaart2" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Yeezy 350 V2</h5>
              <p class="card-text">
                Ash Pearle
                <h3 class=prijs> <?= number_format($prijs_yeezy, 2, ',', '') ?>
              </p>
              <button type="button" class="btn btn-dark">Dark</button>
            </div>
          </div>
        </div>
        <div class="col">
        <?php
          $prijs_yeezy = 439.00;
        ?>
          <div class="card">
            <img src="./img/yeezy3.jpg" class="card-img-top kaart2" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Yeezy 350 V2</h5>
              <p class="card-text">
                Oreo
                
                <h3 class=prijs><?= number_format($prijs_yeezy, 2, ',', '') ?></h3>
                <button type="button" class="btn btn-dark">Dark</button>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="tommy-t"><h1><?php echo $title_tommy?></h1></div>
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
        <?php
          $prijs_tommy = 99.99;
        ?>
          <div class="card">
            <img src="./img/tom1.jpg" class="card-img-top kaart3" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Tommy Hilfiger Crewneck</h5>
              <p class="card-text">
                White Tommy Hilfiger Crewneck.
                
                <h3 class=prijs> <?= number_format($prijs_tommy, 2, ',', '') ?></h3>
                <button type="button" class="btn btn-dark">Dark</button>
              </p>
            </div>
          </div>
        </div>
        <div class="col">
        <?php
          $prijs_tommy = 99.99;
        ?>
          <div class="card">
            <img src="./img/tom2.jpg" class="card-img-top kaart3" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Tommy Hilfiger crewneck</h5>
              <p class="card-text">
              Green Tommy Hilfiger Crewneck.
                
                <h3 class=prijs> <?= number_format($prijs_tommy, 2, ',', '') ?></h3>
                <button type="button" class="btn btn-dark">Dark</button>
              </p>
            </div>
          </div>
        </div>
        <div class="col">
        <?php
          $prijs_tommy = 109.99;
        ?>
          <div class="card">
            <img src="./img/tom3.jpg" class="card-img-top kaart4" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Tommy Hilfiger Hoodie</h5>
              <p class="card-text">
                Beige Tommy Hilfiger Hoodie.
                
                <h3 class=prijs> <?= number_format($prijs_tommy, 2, ',', '') ?></h3>
                <button type="button" class="btn btn-dark">Dark</button>
              </p>
            </div>
          </div>
        </div>
        <div class="col">
        <?php
          $prijs_tommy = 109.99;
        ?>
          <div class="card">
            <img src="./img/tom4.jpg" class="card-img-top kaart5" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Tommy Hilfiger Hoodie</h5>
              <p class="card-text">
                Dark Blue Tommy Hilfiger Hoodie.
                
                <h3 class=prijs> <?= number_format($prijs_tommy, 2, ',', '') ?></h3>
                <button type="button" class="btn btn-dark">Dark</button>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="row1">
      <div class="column1">
        <img src="./img/tnf1.jpg" alt="" style="width: 50%" />
      </div>
      <div class="column1">
        <img src="./img/tnf2.png" alt="" style="width: 50%" />
      </div>
      <div class="cor1">
        <div class="column1">
          <img src="./img/tnf3.png" alt="" style="width: 50%" />
        </div>
      </div>
      <div class="column2">
        <img src="./img/yeezy1.jpg" alt="" style="width: 50%" />
      </div>
      <div class="column2">
        <img src="./img/yeezy2.jpg" alt="" style="width: 50%" />
      </div>
      <div class="column2">
        <img src="./img/yeezy3.jpg" alt="" style="width: 50%" />
      </div>
    </div> -->
  </body>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"
  ></script>
</html>
