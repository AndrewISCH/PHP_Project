<?php
$title = "Про нас";
require_once "blocks/header.php";
?>
<div class="container mt-5">
    <h1>Про нас</h1>
<form action="check_post.php" method="post">
    <input type="text" name="username" placeholder="Введите имя" class="form-control"><br>
    <input type="email" name="email" placeholder="Введите почту" class="form-control"><br>
    <input type="password" name="password" placeholder="Введите пароль" class="form-control"><br>
    <textarea name="message" class="form-control" placeholder="Введите сообщение"></textarea><br>
    <input type="submit" value = "Отправить" classe="btn btn-success">
</form>
</div>
<?php
require_once "blocks/footer.php";
?>