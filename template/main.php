<main>
<?php 
  
  $pixel = new Smartphone("Google", "Pixel 4", "Smartphone", 10, "Bianco", 2, 799);
  $iphone = new Smartphone("Apple", "Iphone Pro Max", "Smartphone", 8, "Grigio Siderale", 0, 1289);
  $oneplus = new Smartphone("One Plus", "8 Pro", "Smartphone", 5, "Glacial Green", 4, 1019);

  $msi = new Notebook("MSI", "GP75 Leopard", "Notebook", 15, "Nero", 20, 1849);
  $asus = new Notebook("ASUS", "Strix SCAR III", "Notebook", 20, "Nero", 0, 2459);
  $macbook = new Notebook("Apple", "MacBook Pro", "Notebook", 16, "Argento", 15, 2990);
 
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

        <span class="ok_disp"><?php echo $pixel->disponibilita($pixel->quantita) ?> </span>
        
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

        <span class="no_disp"><?php echo $iphone->disponibilita($iphone->quantita) ?> </span>
        
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

        <span class="ok_disp"><?php echo $oneplus->disponibilita($oneplus->quantita) ?> </span>
        
        <span class="sconto">Sconto: <?php echo $oneplus->sconto ?>% </span>
        
      </div>

    </div><!-- Fine card -->

    <div class="card flex_column">

      <div class="card_img">
        <img src="assets/img/msi.jpg" alt="">
      </div>

      <div class="card_info flex_column_center">
        <h2><?php echo $msi->marca ." ". $msi->nome ?></h2>
        <span>Colore: <?php echo $msi->colore ?> </span>  
        
        <div class="price flex_column_center">
          <h4 class="delete"><?php echo $msi->prezzo ?> €</h4>
          <span>Prezzo:</span>
          <h2><?php echo $msi->calcolaSconto($msi->prezzo) ?> €</h2>
        </div>

        <span class="ok_disp"><?php echo $msi->disponibilita($msi->quantita) ?> </span>
        
        <span class="sconto">Sconto: <?php echo $msi->sconto ?>% </span>
        
      </div>

    </div><!-- Fine card -->

    <div class="card flex_column">

      <div class="card_img">
        <img src="assets/img/asus.jpg" alt="">
      </div>

      <div class="card_info flex_column_center">
        <h2><?php echo $asus->marca ." ". $asus->nome ?></h2>
        <span>Colore: <?php echo $asus->colore ?> </span>  
        
        <div class="price flex_column_center">
          <h4 class="delete"><?php echo $asus->prezzo ?> €</h4>
          <span>Prezzo:</span>
          <h2><?php echo $asus->calcolaSconto($asus->prezzo) ?> €</h2>
        </div>

        <span class="no_disp"><?php echo $asus->disponibilita($asus->quantita) ?> </span>
        
        <span class="sconto">Sconto: <?php echo $asus->sconto ?>% </span>
        
      </div>

    </div><!-- Fine card -->

    <div class="card flex_column">

      <div class="card_img">
        <img src="assets/img/macbook.jpg" alt="">
      </div>

      <div class="card_info flex_column_center">
        <h2><?php echo $macbook->marca ." ". $macbook->nome ?></h2>
        <span>Colore: <?php echo $macbook->colore ?> </span>  
        
        <div class="price flex_column_center">
          <h4 class="delete"><?php echo $macbook->prezzo ?> €</h4>
          <span>Prezzo:</span>
          <h2><?php echo $macbook->calcolaSconto($macbook->prezzo) ?> €</h2>
        </div>

        <span class="ok_disp"><?php echo $macbook->disponibilita($macbook->quantita) ?> </span>
        
        <span class="sconto">Sconto: <?php echo $macbook->sconto ?>% </span>
        
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

        <span class="ok_disp"><?php echo $oneplus->disponibilita($oneplus->quantita) ?> </span>
        
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

        <span class="ok_disp"><?php echo $oneplus->disponibilita($oneplus->quantita) ?> </span>
        
        <span class="sconto">Sconto: <?php echo $pixel->sconto ?>% </span>
        
      </div>

    </div><!-- Fine card -->

    

    
  </div>

  
  
</main>
