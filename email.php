<?php
    require_once ("FunctionsSession.php");
    $Session = new FunctionsSession();
    if (!empty($Session->select("userEmail"))) {
        $email=$Session->select("userEmail");
    }
    else {
        $email='default';
    }
?>
<form action="" method="POST">
    <label for="name_id">Имя:</label>  <input id="name_id" type="text" name="name"><br>
    <label for="surname_id"> Фамилия:</label> <input id="surname_id" type="text" name="surname"><br>
    <label for="password_id">Пароль:</label> <input id="password_id" type="text" name="password"><br>
    <label for="email_id"> Email:</label> <input id="email_id" type="email" name="email" value="<?php echo $email ?>"><br>
    <input type="submit">
</form>
<a href="index.php">Назад</a>