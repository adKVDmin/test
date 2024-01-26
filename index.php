<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/phpForm.css">
</head>

<body>

    <header>
        <?php require_once "form.php"; ?>
        <?php if (!((empty($_POST['name'])) or (empty($_POST['fam'])) or (empty($_POST['pass'])) or (empty($_POST['check'])) or (empty($_POST['region'])))) : ?>
            <div class="loggined">
                <span class="regWelcom">Имя: <span class="as"><?php echo htmlspecialchars($_POST['name']); ?></span></span>
                <span class="regWelcom">Фамилия: <span class="as"><?php echo htmlspecialchars($_POST['fam']); ?></span></span>
                <span class="regWelcom">Пароль: <span class="as"><?php echo urlencode($_POST['pass']); ?></span></span>

            </div>
        <?php endif ?>

    </header>



    <main>
        <?php 
        $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        echo '<pre>';
        if (!((empty($_POST['name'])) or (empty($_POST['fam'])) or (empty($_POST['pass'])) or (empty($_POST['check'])) or (empty($_POST['region'])))) {
            echo "Пароль в защифрованном виде: " . "[" . urlencode($_POST['pass']) . "]" . "<br>Вы находитесь на странице: " . $url . "<br><br>";
            print_r($_POST);
            echo  print_r($_FILES, true);
        }

        echo '</pre>';
        ?>
    






    </main>

    <footer>

    </footer>


</body>


</html>