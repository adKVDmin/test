<form action="/index.php" method="post">
<input type="text" name="name" placeholder="Имя для регистрации" >

</form>

<?php if (!empty($_POST['name'])){
    $url = "index.php?name=" . urlencode($_POST['name']);
    header("location: $url");
} ?>