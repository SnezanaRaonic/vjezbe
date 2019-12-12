<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



<?php
$user_status=1;


if($user_status==1){
    echo "<p style = 'background-color: green; color: white;'>Welcome Administrator</p>";
}elseif($user_status==2){
    echo "<p  style = 'background-color:blue; color: white;'>Welcome User</p>";
}else{
    echo "<p style = 'background-color:red; color: white;'>Unknown User type</p>";
}



?>

</body>
</html>

