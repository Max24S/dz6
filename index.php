<?php
    require_once ("FunctionsSession.php");
    $Session = new FunctionsSession();
    if (!$Session->IsSetCheck('userTimeOnPage')){
        $Session->save("userTimeOnPage",date('Y-m-d H:i:s'));
    }
    else{
        $sec = time() - strtotime($Session->select('userTimeOnPage'));
    }
    echo 'Вы заходили на сайт '.$sec.' секунд назад';
    if (!$Session->IsSetCheck('counter'))
    {
        $Session->save("counter",1);
        echo "Вы еще не обновляли страницу" . '<br>';
    }
    else
    {
        $update=$_SESSION['counter']++;
        echo "Вы обновили эту страницу ".$update." раз. ";
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $country=$Session->clearData($_POST['userCountry']);
        $email=$Session->clearData($_POST['userEmail']);
        $age=$Session->clearData($_POST['userAge']);
        $town=$Session->clearData($_POST['userTown']);
        if (!empty($country)) {
            $Session->save("userCountry",$country);
        }
        if (!empty($email))
        {
            $Session->save("userEmail",$email);
        }
        if (!empty($age)&&(!empty($age)))
        {
            $Session->save("userTown",$town);
            $Session->save("userAge",$age);
        }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>task</title>
</head>
<body>
<form id="task1" action="" method="POST">
    <div>C какой вы страны?</div>
    <input type="text" name="userCountry">

    <input type="submit">
</form>
<form id="task3" action="" method="POST">
    <div>Введите email</div>
    <input type="email" name="userEmail">
    <input type="submit">
</form>
<form id="task5" action="" method="POST">
    <label for="name_id">Введите город</label>
    <input id="name_id" type="text" name="userTown">
    <label for="age_id">Введите возраст</label>
    <input id="age_id" type="number" name="userAge">
    <input type="submit">
</form>
<a href="test.php">Переход на test.php</a>.<br>
<a href="email.php">Переход на taks3</a>.<br>
<a href="form.php">Переход на taks5</a>
<!--<button>--><?php //$Session->destroy();?><!--</button>-->
</body>
</html>
