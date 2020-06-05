<?php 

include_once __DIR__.'/classes/Prodotti.php';

$prodotto1 = new Prodotto("1-A", "disponibile", 10, "Google", "Pixel 4", "Smartphone", 799 );
//var_dump($prodotto1);
/* echo $prodotto1->show();
echo "Prezzo finale : €  {$prodotto1->calcolaSconto(10)}"; */

$prodotto2 = new Prodotto("1-B", "disponibile", 20, "Oneplus", "8 pro", "Smartphone", 1099);
/* echo $prodotto2->show();
echo "Prezzo finale : €  {$prodotto2->calcolaSconto(20)}"; */

$prodotto3 = new Prodotto("2-A", "disponibile", 5, "Razer", "Blade Stealth ", "Notebook Gaming", 1000);
echo $prodotto3->show();
echo "Prezzo finale : €  {$prodotto3->calcolaSconto()}"; 


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  
    <div class="card">
      <h2>Reparto: <?php echo $prodotto1->reparto ?></h2>
      <span>Disponibilità: <?php echo $prodotto1->dispon ?></span>
      <span>Tipologia: <?php echo $prodotto1->tipologia ?></span>
      <span>Nome: <?php echo $prodotto1->nome ?></span>
      <span>Marca: <?php echo $prodotto1->marca ?></span>
      <span>Prezzo: <?php echo $prodotto1->prezzo ?></span>
      <span>Sconto: <?php echo $prodotto1->sconto ?>%</span>
      <span>Prezzo finale : <?php echo $prodotto1->calcolaSconto()  ?></span>
    </div>

    <div class="card">
      <h2>Reparto: <?php echo $prodotto2->reparto ?></h2>
      <span>Disponibilità: <?php echo $prodotto2->dispon ?></span>
      <span>Tipologia: <?php echo $prodotto2->tipologia ?></span>
      <span>Nome: <?php echo $prodotto2->nome ?></span>
      <span>Marca: <?php echo $prodotto2->marca ?></span>
      <span>Prezzo: <?php echo $prodotto2->prezzo ?></span>
      <span>Sconto: <?php echo $prodotto2->sconto ?>%</span>
      <span>Prezzo finale : <?php echo $prodotto2->calcolaSconto()  ?></span>
    </div>




</body>
</html>