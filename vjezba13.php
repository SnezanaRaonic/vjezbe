<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link  rel="stylesheet" href="restoran.css">
</head>
<body>

<?php 
  
$nazivRestorana ="LAVERNA";
$adresaRestorana ="Zmaja od Bosne 16, Sarajevo";
$ocjena ="4,5";
$statusRestorana ="Otvoren";
$telefon ="+38733456732";



?>
<h1><?php echo $nazivRestorana; ?> </h1>
<p>Adresa:
<a href="https://maps.google.com?q=<?php echo $adresaRestorana; ?>">
<?php echo $adresaRestorana; ?>
</a>
</p>
<p> Ocjena <?php echo $ocjena; ?> </p>
<p><?php echo $statusRestorana; ?> </p>
<p>Broj telefona 
<a href="tel:<?php echo $telefon; ?>">

<?php echo $telefon; ?>
</a> </p>

   
   
</body>
</html>












