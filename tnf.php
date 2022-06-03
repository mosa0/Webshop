<?php 
  $title_tnf = "The North Face Puffer Jackets Line"
  ?>
  <?$picture = "img/tnf1.jpg"
  maakbutton($picture)
  ?>
  <?php $korting =true;
  ?>
  
    
    <div class="cards">
      <div id="north"></div>


<?php $img_tnf = 'img/tnf1.jpg' ;
?>

      <div class="tnf-t"><h1><?php echo $title_tnf?></h1></div>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          

          <div class="card">
          <img src="<?=$img_tnf?>" class="card-img-top kaart" alt="..." />
          <?php $item_name3 = "The North Face"
          ?>
          <?php $item_desc3 = "Black Puffer Jacket"
          ?>
            <div class="card-body">

            
              <h5 class="card-title"><?php echo $item_name3?></h5>
              
              <p class="card-text">
              <?php echo $item_desc3?>
                <div class="korting">
              <?php
            if($korting == true){
              echo 'Dikke korting!';
            }?>
          </div>
                <?php
                $prijs_tnf = 249.99;
                $prijs_tnfExcl = $prijs_tnf * 0.79; 
                $euro = "€"
               ?>

                
                
                <H3 class=prijs>
                <?php echo $euro?>
                <?= number_format($prijs_tnf, 2, ',', '') ?> incl BTW
                <h6 class=prijs> <?= number_format($prijs_tnfExcl, 2, ',', '') ?> excl BTW
                </h6>
                </H3>
                <button type="button" class="btn btn-dark">Add to cart</button>
                

                <?php
                if($prijs_tnf <249){
                  echo 'niet op voorraad';
                }else if($prijs_tnf < 250){
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
        <?php $img_tnf = 'img\tnf2.png' ;
?>
        <div class="col">
          <div class="card">

          <img src="<?=$img_tnf?>" class="card-img-top kaart" alt="..." />
          <?php $item_name3 = "The North Face"
          ?>
          <?php $item_desc3 = "Orange Puffer Jacket"
          ?>
          
            <div class="card-body">
              <h5 class="card-title">The North Face</h5>
              <p class="card-text">
              <?php echo $item_desc3?>
                <?php
                $prijs_tnf = 264.99;
                $prijs_tnfExcl = $prijs_tnf * 0.79; 
               
                
                ?>
                
                <H3 class=prijs>
                <?php echo $euro?>
                <?= number_format($prijs_tnf, 2, ',', '') ?> incl BTW
                <h6 class=prijs> <?= number_format($prijs_tnfExcl, 2, ',', '') ?> excl BTW</h6>
                </H3>
                <button type="button" class="btn btn-dark">Add to cart</button>

                <?php
                if($prijs_tnf <249){
                  echo 'niet op voorraad';
                }else if($prijs_tnf < 260){
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
        <?php $img_tnf = 'img\tnf3.png' ;
?>
        <div class="col">
          <div class="card">
          <img src="<?=$img_tnf?>" class="card-img-top kaart" alt="..." />
          <?php $item_name3 = "The North Face"
          ?>
          <?php $item_desc3 = "Yellow Puffer Jacket"
          ?>
            <div class="card-body">
              <h5 class="card-title"><?php echo $item_name3?></h5>
              <p class="card-text">
              <?php echo $item_desc3?>
                <?php
                $prijs_tnf = 229.99;
                $prijs_tnfExcl = $prijs_tnf * 0.79; 
                $euro = "€"
                ?>
                
                <H3 class=prijs>
                <?php echo $euro ?>
                <?= number_format($prijs_tnf, 2, ',', '') ?>
                incl BTW
                <h6 class=prijs> <?= number_format($prijs_tnfExcl, 2, ',', '') ?> excl BTW</h6>
                </H3>
                <button type="button" class="btn btn-dark">Add to cart</button>

                <?php
                if($prijs_tnf <249){
                  echo 'niet op voorraad';
                }else if($prijs_tnf < 260){
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