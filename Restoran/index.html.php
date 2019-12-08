<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet">
    <title>Laverna</title>
</head>
<body>
    <div id="wrapper">

<div id="header">
    <div class="left">
 <img src="slike/laverna.jpg" alt="unutrasnjost restorana">
</div>
 <div class="right">
 <div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d7803.169596763139!2d-77.16858957605912!3d-12.072063165801776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e2!4m5!1s0x9105cb136ef708cd%3A0x4f5e18ec79616185!2sJir%C3%B3n+Saenz+Pe%C3%B1a%2C+La+Punta+07021%2C+Peru!3m2!1d-12.072063199999999!2d-77.1642122!4m0!5e0!3m2!1sbs!2sba!4v1563562861566!5m2!1sbs!2sba"   frameborder="0" style="border:0" allowfullscreen></iframe>
            
    </div>  
    <div>   
 <img src="slike/food.jpg" alt="hrana">
    </div>
</div>
    </div>
    <div id="main">
<div class="logo">
    <img src="slike/logo.png" alt="logo">
</div>


    <div class="button">
        <button>web lokacija</button>
        <button>uputstva</button>
        <button>sacuvaj</button>
        <h1>Restoran</h1>
    </div>
    <?php 
  
$nazivRestorana ="LAVERNA";
$adresaRestorana ="Zmaja od Bosne 16, Sarajevo";
$ocjena ="4,5";
$statusRestorana ="Otvoren";
$telefon ="+38733456732";



?>
    <div class="adresa">
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
    </div>

    <div class="korisniku">
    <a href="#">Predlozite izmjenu</a>
    
    </div>
    <div class="korisniku">
        <p>Poznajete li ovo mjesto? <a href="#">Odgovorite na kratka pitanja</a></p>
</div>
<div class="info">
<div>
    <p>Posaljite na telefon</p>
</div>
<div>
<button>Posalji</button>
</div>

</div>

<div id="footer">
<div class="recenzija">
    <h3>Recenzije</h3>
    <a href="#"> 12 Google recenzija</a>
</div>
<div class= "button3">
       <button>Napisi recenziju</button>
        <button>Dodaj fotografiju</button>

</div>

</div>




    </div>
    
</body>
</html>