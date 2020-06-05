<main>
<?php 
  
  $pixel = new Smartphone("Google", "Pixel 4", "Smartphone", 10, "Bianco", "Disponibile", 799);
  $iphone = new Smartphone("Apple", "Iphone Pro Max", "Smartphone", 8, "Grigio Siderale", "Non Disponibile", 1289);
  $oneplus = new Smartphone("One Plus", "8 Pro", "Smartphone", 5, "Glacial Green", "Disponibile", 1019);

  /*$notebook1 = new Smartphone("Asus", "Vivobook", "Notebook", 15, "Nero", "Disponibile", 999);
  var_dump($notebook1);
  echo "prezzo con sconto:{$notebook1->calcolaSconto($notebook1->prezzo)}";  */
?>

  <div class="container">

    <div class="card flex_column">

      <div class="card_img">
        <img src="assets/img/pixel.jpg" alt="">
      </div>

      <div class="card_info flex_column_center">
        <h2><?php echo $pixel->marca ." ". $pixel->nome ?></h2>
        <span>Colore: <?php echo $pixel->colore ?> </span>  
        
        <div class="price flex_column_center">
          <h4 class="delete"><?php echo $pixel->prezzo ?> €</h4>
          <span>Prezzo:</span>
          <h2><?php echo $pixel->calcolaSconto($pixel->prezzo) ?> €</h2>
        </div>

        <span class="ok_disp"><?php echo $pixel->disponibilita ?> </span>
        
        <span class="sconto">Sconto: <?php echo $pixel->sconto ?>% </span>
        
      </div>

    </div><!-- Fine card -->

    <div class="card flex_column">

      <div class="card_img">
        <img src="assets/img/iphone.jpg" alt="">
      </div>

      <div class="card_info flex_column_center">
        <h2><?php echo $iphone->marca ." ". $iphone->nome ?></h2>
        <span>Colore: <?php echo $iphone->colore ?> </span>  
        
        <div class="price flex_column_center">
          <h4 class="delete"><?php echo $iphone->prezzo ?> €</h4>
          <span>Prezzo:</span>
          <h2><?php echo $iphone->calcolaSconto($iphone->prezzo) ?> €</h2>
        </div>

        <span class="no_disp"><?php echo $iphone->disponibilita ?> </span>
        
        <span class="sconto">Sconto: <?php echo $iphone->sconto ?>% </span>
        
      </div>

    </div><!-- Fine card -->

    <div class="card flex_column">

      <div class="card_img">
        <img src="assets/img/oneplus.jpg" alt="">
      </div>

      <div class="card_info flex_column_center">
        <h2><?php echo $oneplus->marca ." ". $oneplus->nome ?></h2>
        <span>Colore: <?php echo $oneplus->colore ?> </span>  
        
        <div class="price flex_column_center">
          <h4 class="delete"><?php echo $oneplus->prezzo ?> €</h4>
          <span>Prezzo:</span>
          <h2><?php echo $oneplus->calcolaSconto($oneplus->prezzo) ?> €</h2>
        </div>

        <span class="ok_disp"><?php echo $oneplus->disponibilita ?> </span>
        
        <span class="sconto">Sconto: <?php echo $oneplus->sconto ?>% </span>
        
      </div>

    </div><!-- Fine card -->

    <div class="card flex_column">

      <div class="card_img">
        <img src="assets/img/pixel.jpg" alt="">
      </div>

      <div class="card_info flex_column_center">
        <h2><?php echo $pixel->marca ." ". $pixel->nome ?></h2>
        <span>Colore: <?php echo $pixel->colore ?> </span>  
        
        <div class="price flex_column_center">
          <h4 class="delete"><?php echo $pixel->prezzo ?> €</h4>
          <span>Prezzo:</span>
          <h2><?php echo $pixel->calcolaSconto($pixel->prezzo) ?> €</h2>
        </div>

        <span class="ok_disp"><?php echo $pixel->disponibilita ?> </span>
        
        <span class="sconto">Sconto: <?php echo $pixel->sconto ?>% </span>
        
      </div>

    </div><!-- Fine card -->

    <div class="card flex_column">

      <div class="card_img">
        <img src="assets/img/pixel.jpg" alt="">
      </div>

      <div class="card_info flex_column_center">
        <h2><?php echo $pixel->marca ." ". $pixel->nome ?></h2>
        <span>Colore: <?php echo $pixel->colore ?> </span>  
        
        <div class="price flex_column_center">
          <h4 class="delete"><?php echo $pixel->prezzo ?> €</h4>
          <span>Prezzo:</span>
          <h2><?php echo $pixel->calcolaSconto($pixel->prezzo) ?> €</h2>
        </div>

        <span class="ok_disp"><?php echo $pixel->disponibilita ?> </span>
        
        <span class="sconto">Sconto: <?php echo $pixel->sconto ?>% </span>
        
      </div>

    </div><!-- Fine card -->

    <div class="card flex_column">

      <div class="card_img">
        <img src="assets/img/pixel.jpg" alt="">
      </div>

      <div class="card_info flex_column_center">
        <h2><?php echo $pixel->marca ." ". $pixel->nome ?></h2>
        <span>Colore: <?php echo $pixel->colore ?> </span>  
        
        <div class="price flex_column_center">
          <h4 class="delete"><?php echo $pixel->prezzo ?> €</h4>
          <span>Prezzo:</span>
          <h2><?php echo $pixel->calcolaSconto($pixel->prezzo) ?> €</h2>
        </div>

        <span class="ok_disp"><?php echo $pixel->disponibilita ?> </span>
        
        <span class="sconto">Sconto: <?php echo $pixel->sconto ?>% </span>
        
      </div>

    </div><!-- Fine card -->

    <div class="card flex_column">

      <div class="card_img">
        <img src="assets/img/pixel.jpg" alt="">
      </div>

      <div class="card_info flex_column_center">
        <h2><?php echo $pixel->marca ." ". $pixel->nome ?></h2>
        <span>Colore: <?php echo $pixel->colore ?> </span>  
        
        <div class="price flex_column_center">
          <h4 class="delete"><?php echo $pixel->prezzo ?> €</h4>
          <span>Prezzo:</span>
          <h2><?php echo $pixel->calcolaSconto($pixel->prezzo) ?> €</h2>
        </div>

        <span class="ok_disp"><?php echo $pixel->disponibilita ?> </span>
        
        <span class="sconto">Sconto: <?php echo $pixel->sconto ?>% </span>
        
      </div>

    </div><!-- Fine card -->

    <div class="card flex_column">

      <div class="card_img">
        <img src="assets/img/oneplus.jpg" alt="">
      </div>

      <div class="card_info flex_column_center">
        <h2><?php echo $pixel->marca ." ". $pixel->nome ?></h2>
        <span>Colore: <?php echo $pixel->colore ?> </span>  
        
        <div class="price flex_column_center">
          <h4 class="delete"><?php echo $pixel->prezzo ?> €</h4>
          <span>Prezzo:</span>
          <h2><?php echo $pixel->calcolaSconto($pixel->prezzo) ?> €</h2>
        </div>

        <span class="ok_disp"><?php echo $pixel->disponibilita ?> </span>
        
        <span class="sconto">Sconto: <?php echo $pixel->sconto ?>% </span>
        
      </div>

    </div><!-- Fine card -->

    

    
  </div>

  
  
</main>
