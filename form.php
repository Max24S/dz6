<?php
    require_once ("FunctionsSession.php");
    $Session = new FunctionsSession();
    if (!empty($Session->select("userTown")))
    {
        $town=$Session->select("userTown");
    }
    else {
        $town="default";
    }
    if(!empty($Session->select("userAge")))
    {
        $age=$Session->select("userAge");
    }
    else {
        $age="default";
    }
?>
<form action="" method="POST">
    <label for="name_id">Имя:</label>  <input id="name_id" type="text" name="name"value=""><br>
    <label for="age_id"> Возраст:</label> <input id="age_id" type="text" name="age" value="<?php echo $age?>"><br>
    <label for="town_id">Город:</label> <input id="town_id" type="text" name="town" value="<?php echo $town?>"><br>
    <input type="submit">
</form>
<a href="logout.php">Taks6</a>.<br>
<a href="index.php">Назад</a>
