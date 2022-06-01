<?php include_once'header.php'
?>
<?php include_once'tnf.php'
?>

<!-- Title variabele kan geplaatst worden in de card zelf-->
  
   <?php 
  $title_yeezy = "The Yeezy Line"
  ?>
   <?php 
  $title_tommy = "The Tommy Hilfiger Line"
  ?>
  



  <div id="ye"></div>
        <div class="yeezy-t"><h1><?php echo $title_yeezy?></h1></div>
        <?php
          $prijs_yeezy = 635.00;
          $prijs_yeezyExcl = $prijs_yeezy * 0.79;
        ?>
        <?php $img_yeezy = 'img\yeezy1.jpg' ;
?>
        <div class="col">
          <div class="card">


          <img src="<?=$img_yeezy?>" class="card-img-top kaart2" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Yeezy 350 V2</h5>
              <p class="card-text">
                Black Pirate
                
                
                <H3 class=prijs>
                <?= number_format($prijs_yeezy, 2, ',', '') ?> incl BTW
                <h6 class=prijs><?= number_format($prijs_yeezyExcl, 2, ',', '') ?> excl BTW </h6>
                </H3>
                <button type="button" class="btn btn-dark">Dark</button>

                <?php
                if($prijs_yeezy >634){
                  echo 'niet op voorraad';
                }else if($prijs_yeezy < 440){
                  echo '<span class= "<button type="button" class="btn btn-outline-dark">Weinig op voorraad</button>
                  </button> </span>';
                } else{
                  echo 'Ruim op voorraad';
                }
                ?>

              </p>
            </div>
          </div>
        </div>
        <?php
          $prijs_yeezy = 450.00;
          $prijs_yeezyExcl = $prijs_yeezy * 0.79;
        ?>
        <?php $img_yeezy = 'img\yeezy2.jpg' ;
?>
        
        <div class="col">
          <div class="card">
          <img src="<?=$img_yeezy?>" class="card-img-top kaart2" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Yeezy 350 V2</h5>
              <p class="card-text">
                Ash Pearle
                
              </p>
              <H3 class=prijs>
                <?= number_format($prijs_yeezy, 2, ',', '') ?> incl BTW
                <h6 class=prijs> <?= number_format($prijs_yeezyExcl, 2, ',', '') ?> excl BTW </h6>
                </H3>
              <button type="button" class="btn btn-dark">Dark</button>
              
              <?php
                if($prijs_yeezy >634){
                  echo 'niet op voorraad';
                }else if($prijs_yeezy < 440){
                  echo '<span class= "<button type="button" class="btn btn-outline-dark">Weinig op voorraad</button>
                  </button> </span>';
                } else{
                  echo 'Ruim op voorraad';
                }
                ?>
            </div>
          </div>
        </div>
        <?php $img_yeezy = 'img\yeezy3.jpg' ;
?>
        <div class="col">
        <?php
          $prijs_yeezy = 439.00;
          $prijs_yeezyExcl = $prijs_yeezy * 0.79;
        ?>
          <div class="card">
          <img src="<?=$img_yeezy?>" class="card-img-top kaart2" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Yeezy 350 V2</h5>
              <p class="card-text">
                Oreo
                
                
                <H3 class=prijs>
                <?= number_format($prijs_yeezy, 2, ',', '') ?> incl BTW
                <h6 class=prijs><?= number_format($prijs_yeezyExcl, 2, ',', '') ?> excl BTW</h6>
                </H3>
                <button type="button" class="btn btn-dark">Dark</button>
                <?php
                if($prijs_yeezy >634){
                  echo 'niet op voorraad';
                }else if($prijs_yeezy < 440){
                  echo '<span class= "<button type="button" class="btn btn-outline-dark">Weinig op voorraad</button>
                  </button> </span>';
                } else{
                  echo 'Ruim op voorraad';
                }
                ?>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div id="tm"></div>
      <div class="tommy-t"><h1><?php echo $title_tommy?></h1></div>
      <div class="row row-cols-1 row-cols-md-2 g-4">
      <?php $img_tommy = 'img\tom1.jpg' ;
?>
        <div class="col">
        <?php
          $prijs_tommy = 99.99;
          $prijs_tommyExcl = $prijs_tommy * 0.79;
        ?>
          <div class="card">
          
          <img src="<?=$img_tommy?>" class="card-img-top kaart3" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Tommy Hilfiger Crewneck</h5>
              <p class="card-text">
                White Tommy Hilfiger Crewneck.
                
                
                <H3 class=prijs>
                <?= number_format($prijs_tommy, 2, ',', '') ?> incl BTW
                <h6 class=prijs> <?= number_format($prijs_tommyExcl, 2, ',', '') ?> excl BTW</h6>
                </H3>
                <button type="button" class="btn btn-dark">Dark</button>

                <?php
                if($prijs_tommy >130){
                  echo 'niet op voorraad';
                }else if($prijs_tommy > 100){
                  echo '<span class= "<button type="button" class="btn btn-outline-dark">Weinig op voorraad</button>
                  </button> </span>';
                } else{
                  echo 'Ruim op voorraad';
                }
                ?>

              </p>
            </div>
          </div>
        </div>
        <?php $img_tommy = 'img\tom2.jpg' ;
?>
        <div class="col">
        <?php
          $prijs_tommy = 99.99;
          $prijs_tommyExcl = $prijs_tommy * 0.79;
        ?>
          <div class="card">
          <img src="<?=$img_tommy?>" class="card-img-top kaart3" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Tommy Hilfiger crewneck</h5>
              <p class="card-text">
              Green Tommy Hilfiger Crewneck.
                
                
                <H3 class=prijs>
                <?= number_format($prijs_tommy, 2, ',', '') ?> incl BTW
                <h6 class=prijs> <?= number_format($prijs_tommyExcl, 2, ',', '') ?> excl BTW</h6>
                </H3>
                <button type="button" class="btn btn-dark">Dark</button>
                <?php
                if($prijs_tommy >130){
                  echo 'niet op voorraad';
                }else if($prijs_tommy  >100){
                  echo '<span class= "<button type="button" class="btn btn-outline-dark">Weinig op voorraad</button>
                  </button> </span>';
                } else{
                  echo 'Ruim op voorraad';
                }
                ?>
              </p>
            </div>
          </div>
        </div>
        <?php $img_tommy = 'img\tom3.jpg' ;
?>
        <div class="col">
        <?php
          $prijs_tommy = 134.99;
          $prijs_tommyExcl = $prijs_tommy * 0.79;

        ?>
          <div class="card">
          <img src="<?=$img_tommy?>" class="card-img-top kaart4" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Tommy Hilfiger Hoodie</h5>
              <p class="card-text">
                Beige Tommy Hilfiger Hoodie.
                
                
                <H3 class=prijs>
                <?= number_format($prijs_tommy, 2, ',', '') ?> incl BTW
                <h6 class=prijs> <?= number_format($prijs_tommyExcl, 2, ',', '') ?> excl btw</h6>
                </H3>
                <button type="button" class="btn btn-dark">Dark</button>
                <?php
                if($prijs_tommy >130){
                  echo 'niet op voorraad';
                }else if($prijs_tommy >100){
                  echo '<span class= "<button type="button" class="btn btn-outline-dark">Weinig op voorraad</button>
                  </button> </span>';
                } else{
                  echo 'Ruim op voorraad';
                }
                ?>
              </p>
            </div>
          </div>
        </div>
        <?php $img_tommy = 'img\tom4.jpg' ;
?>
        <div class="col">
        <?php
          $prijs_tommy = 109.99;
          $prijs_tommyExcl = $prijs_tommy * 0.79;

        ?>
          <div class="card">
          <img src="<?=$img_tommy?>" class="card-img-top kaart5" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Tommy Hilfiger Hoodie</h5>
              <p class="card-text">
                Dark Blue Tommy Hilfiger Hoodie.
                
                
                <H3 class=prijs>
                <?= number_format($prijs_tommy, 2, ',', '') ?> incl BTW
                <h6 class=prijs> <?= number_format($prijs_tommyExcl, 2, ',', '') ?> excl BTW</h6>
                </H3>
                <button type="button" class="btn btn-dark">Dark</button>
                <?php
                if($prijs_tommy >634){
                  echo 'niet op voorraad';
                }else if($prijs_tommy < 440){
                  echo '<span class= "<button type="button" class="btn btn-outline-dark">Weinig op voorraad</button>
                  </button> </span>';
                } else{
                  echo 'Ruim op voorraad';
                }
                ?>
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
