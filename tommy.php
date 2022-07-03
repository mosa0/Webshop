<?php 
  $title_tommy = "The Tommy Hilfiger Line"
  ?>
  <div id="tm"></div>
      <!-- kan hier onder geen array doen? -->
      <div class="tommy-t"><h1><?php echo $title_tommy?></h1></div>
      <div class="row row-cols-1 row-cols-md-2 g-4">
      <?php $img_tommy[4]["image"] = 'img\tom1.jpg' ;
?>
<?php $korting[4]["korting"] =true;
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
              <div class="spacing_title">
              <?php echo $item_desc1[4]["item_desc"]?>
              </div>
              <div class="korting">
              <?php
            if($korting[4]["korting"] == true){
              echo '€120,00';
            }?>
          </div>
                
                
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
        <?php $korting[5]["korting"] =true;
  ?>
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
                <div class="space_lining">
              <?php echo $item_desc1[5]["item_desc"]?>
              </div>
              <div class="korting">
              <?php
            if($korting[5]["korting"] == true){
              echo '€120,00';
            }?>
          </div>
                
                
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
        <?php $korting[7]["korting"] =true;
  ?>
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
                <div class = space_lining>
              <?php echo $item_desc1[7]["item_desc"]?>
              </div>
              <div class="korting">
              <?php
            if($korting[7]["korting"] == true){
              echo '€120,00';
            }?>
          </div>
                
                
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