<?php 
  $title_tnf[8]["title"] = "The North Face Puffer Jackets Line"
  ?>
  <?$picture[8]["image"] = "img/tnf1.jpg"
  maakbutton($picture[8]["image"])
  ?>
  <?php $korting[8]["korting"] =true;
  ?>
  
    
    <div class="cards">
      <div id="north"></div>


<?php $img_tnf[8]["image"] = 'img/tnf1.jpg' ;
?>

      <div class="tnf-t"><h1><?php echo $title_tnf[8]["title"]?></h1></div>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          

          <div class="card">
          <img src="<?=$img_tnf[8]["image"]?>" class="card-img-top kaart" alt="..." />
          <?php $item_name3[8]["item_name"] = "The North Face"
          ?>
          <?php $item_desc3[8]["item_desc"] = "Black Puffer Jacket"
          ?>
            <div class="card-body">

            
              <h5 class="card-title"><?php echo $item_name3[8]["item_name"]?></h5>
              
              <p class="card-text">
              <div class="spacing_title">
              <?php echo $item_desc3[8]["item_desc"]?>
              </div>
                <div class="korting">
              <?php
            if($korting[8]["korting"] == true){
              echo '€300,00';
            }?>
          </div>
                <?php
                $prijs_tnf[8]["price"] = 249.99;
                $prijs_tnfExcl[8]["priceExcl"] = $prijs_tnf[8]["price"] * 0.79; 
                $euro = "€"
               ?>

                
                
                <H3 class=prijs>
                <?php echo $euro?>
                <?= number_format($prijs_tnf[8]["price"], 2, ',', '') ?> incl BTW
                <h6 class=prijs> <?= number_format($prijs_tnfExcl[8]["priceExcl"], 2, ',', '') ?> excl BTW
                </h6>
                </H3>
                <button type="button" class="btn btn-dark">Add to cart</button>
                

                <?php
                if($prijs_tnf[8]["price"] <249){
                  echo 'niet op voorraad';
                }else if($prijs_tnf[8]["price"] < 250){
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
        <?php $img_tnf[9]["image"] = 'img\tnf2.png' ;
?>
        <div class="col">
          <div class="card">

          <img src="<?=$img_tnf[9]["image"]?>" class="card-img-top kaart" alt="..." />
          <?php $item_name3[9]["item_name"] = "The North Face"
          ?>
          <?php $item_desc3[9]["item_desc"] = "Orange Puffer Jacket"
          ?>
          
            <div class="card-body">
              <h5 class="card-title">The North Face</h5>
              <p class="card-text">
              <?php echo $item_desc3[9]["item_desc"]?>
                <?php
                $prijs_tnf[9]["price"] = 264.99;
                $prijs_tnfExcl[9]["priceExcl"] = $prijs_tnf[9]["price"] * 0.79; 
               
                
                ?>
                
                <H3 class=prijs>
                <?php echo $euro?>
                <?= number_format($prijs_tnf[9]["price"], 2, ',', '') ?> incl BTW
                <h6 class=prijs> <?= number_format($prijs_tnfExcl[9]["priceExcl"], 2, ',', '') ?> excl BTW</h6>
                </H3>
                <button type="button" class="btn btn-dark">Add to cart</button>

                <?php
                if($prijs_tnf[9]["price"] <249){
                  echo 'niet op voorraad';
                }else if($prijs_tnf[9]["price"] < 260){
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
        <?php $img_tnf[10]["image"] = 'img\tnf3.png' ;
?>
        <div class="col">
          <div class="card">
          <img src="<?=$img_tnf[10]["image"]?>" class="card-img-top kaart" alt="..." />
          <?php $item_name3[10]["item_name"] = "The North Face"
          ?>
          <?php $item_desc3[10]["item_desc"] = "Yellow Puffer Jacket"
          ?>
            <div class="card-body">
              <h5 class="card-title"><?php echo $item_name3[10]["item_name"]?></h5>
              <p class="card-text">
              <?php echo $item_desc3[10]["item_desc"]?>
                <?php
                $prijs_tnf[10]["price"] = 229.99;
                $prijs_tnfExcl[10]["priceExcl"] = $prijs_tnf[10]["price"] * 0.79; 
                $euro = "€"
                ?>
                
                <H3 class=prijs>
                <?php echo $euro ?>
                <?= number_format($prijs_tnf[10]["price"], 2, ',', '') ?>
                incl BTW
                <h6 class=prijs> <?= number_format($prijs_tnfExcl[10]["priceExcl"], 2, ',', '') ?> excl BTW</h6>
                </H3>
                <button type="button" class="btn btn-dark">Add to cart</button>

                <?php
                if($prijs_tnf[10]["price"] <249){
                  echo 'niet op voorraad';
                }else if($prijs_tnf[10]["price"] < 260){
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