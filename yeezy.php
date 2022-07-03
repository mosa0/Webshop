<?php 
  $title_yeezy[1]["title"] = "The Yeezy Line"
?>

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
        <?php $korting[3]["korting"] =true;
  ?>
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
                <div class="spacing_title">
              <?php echo "Oreo";$item_desc1?>
            </div> 
              <div class="korting">
              <?php
            if($korting[3]["korting"] == true){
              echo '€499,99';
            }?>
          </div>
                
                
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