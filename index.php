<?php include_once'header.php'
?>
<?php include_once'tnf.php'
?>

<!-- Title variabele kan geplaatst worden in de card zelf-->
  
   <?php 
  $title_yeezy[1]["title"] = "The Yeezy Line"
  ?>
   <?php 
  $title_tommy = "The Tommy Hilfiger Line"
  ?>
  <? $euro = "€" ?>
  



  <div id="ye"></div>
        <div class="yeezy-t"><h1><?php echo $title_yeezy[1]["title"]?></h1></div>
        <?php
          $prijs_yeezy[1]["price"] = 635.00;
          $prijs_yeezyExcl[1]["priceExcl"] = $prijs_yeezy[1]["price"] * 0.79;
        ?>
        <?php $img_yeezy[1]["image"] = 'img\yeezy1.jpg' ;
?>
        <div class="col">
          <div class="card">


          <img src="<?=$img_yeezy[1]["image"]?>" class="card-img-top kaart2" alt="..." />
          <?php $item_name[1]["item_name"] = "Yeezy 350 V2"
          ?>
          <?php $item_desc[1]["item_desc"] = "Black Pirate"
          ?>
            <div class="card-body">
              <h5 class="card-title"> <?php echo $item_name[1]["item_name"]?></h5>
              <p class="card-text"><?php echo $item_desc[1]["item_desc"]?>
                
                
                
                
                <H3 class=prijs>
                  <?php echo $euro?>
                <?= number_format($prijs_yeezy[1]["price"], 2, ',', '') ?> incl BTW
                <h6 class=prijs><?= number_format($prijs_yeezyExcl[1]["priceExcl"], 2, ',', '') ?> excl BTW </h6>
                </H3>
                <button type="button" class="btn btn-dark">Add to cart</button>

                <?php
                if($prijs_yeezy[1]["price"] >634){
                  echo 'niet op voorraad';
                }else if($prijs_yeezy[1]["price"] < 440){
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
          $prijs_yeezy[2]["price"] = 450.00;
          $prijs_yeezyExcl[2]["priceExcl"] = $prijs_yeezy[2]["price"] * 0.79;
        ?>
        <?php $img_yeezy[2]["image"] = 'img\yeezy2.jpg' ;
?>
        
        <div class="col">
          <div class="card">
          <img src="<?=$img_yeezy[2]["image"]?>" class="card-img-top kaart2" alt="..." />
            <div class="card-body">
              <!-- !foutmelding als ik de 1 naar 2 verander? -->
              <h5 class="card-title"><?php echo $item_name[1]["item_name"]?></h5>
              <p class="card-text">
              <?php echo "Ash Pearle";$item_desc?> 
                
              </p>
              <H3 class=prijs>
              <?php echo $euro?>
                <?= number_format($prijs_yeezy[2]["price"], 2, ',', '') ?> incl BTW
                <h6 class=prijs> <?= number_format($prijs_yeezyExcl[2]["priceExcl"], 2, ',', '') ?> excl BTW </h6>
                </H3>
              <button type="button" class="btn btn-dark">Add to cart</button>
              
              <?php
                if($prijs_yeezy[2]["price"] >634){
                  echo 'niet op voorraad';
                }else if($prijs_yeezy[2]["price"] < 440){
                  echo '<span class= "<button type="button" class="btn btn-outline-dark">Weinig op voorraad</button>
                  </button> </span>';
                } else{
                  echo 'Ruim op voorraad';
                }
                ?>
            </div>
          </div>
        </div>
        <?php $img_yeezy[3]["image"] = 'img\yeezy3.jpg' ;
?>
        <div class="col">
        <?php
          $prijs_yeezy[3]["price"] = 439.00;
          $prijs_yeezyExcl[3]["priceExcl"] = $prijs_yeezy[3]["price"] * 0.79;
        ?>
          <div class="card">
          <img src="<?=$img_yeezy[3]["image"]?>" class="card-img-top kaart2" alt="..." />
          <?php $item_name1[3]["item_name"] = "Yeezy 350 V2"
          ?>
            <div class="card-body">
              <!-- ZELFDE PROBLEEM MOET OP 1 EN BIJ 117(item desc oreo) GEEN  -->
              <h5 class="card-title"><?php echo $item_name[1]["item_name"]?></h5>
              <p class="card-text">
              <?php echo "Oreo";$item_desc1?> 
                
                
                <H3 class=prijs>
                <?php echo $euro?>
                <?= number_format($prijs_yeezy[3]["price"], 2, ',', '') ?> incl BTW
                <h6 class=prijs><?= number_format($prijs_yeezyExcl[3]["priceExcl"], 2, ',', '') ?> excl BTW</h6>
                </H3>
                <button type="button" class="btn btn-dark">Add to cart</button>
                <?php
                if($prijs_yeezy[3]["price"] >634){
                  echo 'niet op voorraad';
                }else if($prijs_yeezy[3]["price"] < 440){
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
      <!-- kan hier onder geen array doen? -->
      <div class="tommy-t"><h1><?php echo $title_tommy?></h1></div>
      <div class="row row-cols-1 row-cols-md-2 g-4">
      <?php $img_tommy[4]["image"] = 'img\tom1.jpg' ;
?>
        <div class="col">
        <?php
          $prijs_tommy[4]["price"] = 99.99;
          $prijs_tommyExcl[4]["priceExcl"] = $prijs_tommy[4]["price"] * 0.79;
        ?>
          <div class="card">
          
          <img src="<?=$img_tommy[4]["image"]?>" class="card-img-top kaart3" alt="..." />
            <div class="card-body">
            <?php $item_name1[4]["item_name"] = "Tommy Hilfiger crewneck"?>
            <?php $item_desc1[4]["item_desc"] = "White Tommy Hilfiger Crewneck"?>
              <h5 class="card-title"><?php echo $item_name1[4]["item_name"]?></h5>
              
          
              <p class="card-text">
              <?php echo $item_desc1[4]["item_desc"]?>
                
                
                <H3 class=prijs>
                <?php echo $euro?>
                <?= number_format($prijs_tommy[4]["price"], 2, ',', '') ?> incl BTW
                <h6 class=prijs> <?= number_format($prijs_tommyExcl[4]["priceExcl"], 2, ',', '') ?> excl BTW</h6>
                </H3>
                <button type="button" class="btn btn-dark">Add to cart</button>

                <?php
                if($prijs_tommy[4]["price"] >130){
                  echo 'niet op voorraad';
                }else if($prijs_tommy[4]["price"] > 100){
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
        <?php $img_tommy[5]["image"] = 'img\tom2.jpg' ;
?>
        <div class="col">
        <?php
          $prijs_tommy[5]["price"] = 99.99;
          $prijs_tommyExcl[5]["priceExcl"] = $prijs_tommy[5]["price"] * 0.79;
        ?>
          <div class="card">
          <img src="<?=$img_tommy[5]["image"]?>" class="card-img-top kaart3" alt="..." />
            <div class="card-body">
            <?php $item_name1[5]["item_name"] = "Tommy Hilfiger crewneck"?>
            <?php $item_desc1[5]["item_desc"] = "Green Tommy Hilfiger Crewneck"?>
              <h5 class="card-title"><?php echo $item_name1[5]["item_name"]?></h5>
              <p class="card-text">
              <?php echo $item_desc1[5]["item_desc"]?>
                
                
                <H3 class=prijs>
                <?php echo $euro?>
                <?= number_format($prijs_tommy[5]["price"], 2, ',', '') ?> incl BTW
                <h6 class=prijs> <?= number_format($prijs_tommyExcl[5]["priceExcl"], 2, ',', '') ?> excl BTW</h6>
                </H3>
                <button type="button" class="btn btn-dark">Add to cart</button>
                <?php
                if($prijs_tommy[5]["price"] >130){
                  echo 'niet op voorraad';
                }else if($prijs_tommy[5]["price"]  >100){
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
        <?php $img_tommy[6]["image"] = 'img\tom3.jpg' ;
?>
        <div class="col">
        <?php
          $prijs_tommy[6]["price"] = 134.99;
          $prijs_tommyExcl[6]["priceExcl"] = $prijs_tommy[6]["price"] * 0.79;

        ?>
          <div class="card">
          <img src="<?=$img_tommy[6]["image"]?>" class="card-img-top kaart4" alt="..." />
            <div class="card-body">
            <?php $item_name1[6]["item_name"] = "Tommy Hilfiger Hoodie"?>
            <?php $item_desc1[6]["item_desc"] = "Beige Tommy Hilfiger Hoodie"?>
              <h5 class="card-title"><?php echo $item_name1[6]["item_name"]?></h5>
              <p class="card-text">
              <?php echo $item_desc1[6]["item_desc"]?>
                
                
                <H3 class=prijs>
                <?php echo $euro?>
                <?= number_format($prijs_tommy[6]["price"], 2, ',', '') ?> incl BTW
                <h6 class=prijs> <?= number_format($prijs_tommyExcl[6]["priceExcl"], 2, ',', '') ?> excl btw</h6>
                </H3>
                <button type="button" class="btn btn-dark">Add to cart</button>
                <?php
                if($prijs_tommy[6]["price"] >130){
                  echo 'niet op voorraad';
                }else if($prijs_tommy[6]["price"] >100){
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
        <?php $img_tommy[7]["image"] = 'img\tom4.jpg' ;
?>
        <div class="col">
        <?php
          $prijs_tommy[7]["price"] = 109.99;
          $prijs_tommyExcl[7]["priceExcl"] = $prijs_tommy[7]["price"] * 0.79;

        ?>
          <div class="card">
          <img src="<?=$img_tommy[7]["image"]?>" class="card-img-top kaart5" alt="..." />
            <div class="card-body">
            <?php $item_name1[7]["item_name"] = "Tommy Hilfiger Hoodie"?>
            <?php $item_desc1[7]["item_desc"] = "Dark Blue Tommy Hilfiger Hoodie"?>
              <h5 class="card-title"><?php echo $item_name1[7]["item_name"]?></h5>
              <p class="card-text">
              <?php echo $item_desc1[7]["item_desc"]?>
                
                
                <H3 class=prijs>
                <?php echo $euro?>
                <?= number_format($prijs_tommy[7]["price"], 2, ',', '') ?> incl BTW
                <h6 class=prijs> <?= number_format($prijs_tommyExcl[7]["priceExcl"], 2, ',', '') ?> excl BTW</h6>
                </H3>
                <button type="button" class="btn btn-dark">Add to cart</button>
                <?php
                if($prijs_tommy[7]["price"] >634){
                  echo 'niet op voorraad';
                }else if($prijs_tommy[7]["price"] < 440){
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
