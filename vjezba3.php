<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pristup stranici</title>
</head>
<body>
  
<div id= "wrapper" style="width: 60%; margin:auto;text-align:center;">
   <h1>Uloge na sistemu</h1>
   <?php
      //uloge definisane u bazi
      $student = 1;
      $profesor = 2;
      $koordinator = 4;
      $podrska = 8;

      //korisnik koji se ulogovao i postoji u bazi
      $korisnik = 2;

      $allowedUser = $koordinator | $podrska;

      if(($allowedUser & $korisnik) != 0){
          ?>
          <div style="background-color:#eb492d; color:#e9f2f2;margin:auto; padding:10%; font-size:2em;" >
          <p>Zona dostupna samo koordinatorima i podrsci</p>
          </div>
          <?php
      }
      ?>
         <div style="background-color:#1a8be8; color:#e9f2f2; margin:auto; padding:10%; font-size:2em;">
         <p>Zona dostupna svima</p>

         </div>
      <?php
      if($korisnik & $student){
          echo "<p style='background-color:#42f5ef;  color:white; margin:auto; padding:10%; font-size:2em;'> Student</p>";
      }else if($korisnik & $profesor){
          echo "<p style='background-color:#eb492d;  color:white; margin:auto; padding:10%; font-size:2em;'> Profesor </p>";
      }else if($korisnik & $podrska){
          echo "<p style='background-color:#86eb2d;  color:white; margin:auto; padding:10%; font-size:2em;'> Podrska</p>";
      }else if($korisnik & $koordinator){
          echo "<p style='background-color:#86eb2d;  color:white; margin:auto; padding:10%; font-size:2em;'> Koordinator</p>";
      }else{
          echo "<p style='background-color:#e86c1a;  color:white; margin:auto; padding:10%; font-size:2em;'> Nepoznat korisnik!</p>";
      }
   ?>
   </div> 
</body>
</html>