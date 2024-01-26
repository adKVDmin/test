<?php if ((empty($_POST['name'])) or (empty($_POST['fam'])) or (empty($_POST['pass'])) or (empty($_POST['check'])) or (empty($_POST['region']))) :
    static $nameIncorrect = null;
    static $oldIncorrect = null;
    static $passIncorrect = null;
?>

    <div class="registration">

        <fieldset>
            <legend>Форма регистрации</legend>
            <form method="POST" enctype="multipart/form-data">
                <input type="text" name="name" placeholder="Имя" value="<?php echo htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES) ?>">

                <?php
                if (!empty($_POST))
                    if (empty($_POST['name']))
                        $nameIncorrect = "Заполните имя";
                ?>
                <span сlass="aa"><?php echo "$nameIncorrect" ?></span>

                <input type="text" name="fam" placeholder="Фамилия" value="<?php echo htmlspecialchars($_POST['fam'] ?? '', ENT_QUOTES) ?>">
                <?php
                if (!empty($_POST))
                    if (empty($_POST['fam']))
                        $oldIncorrect = "Фамилия";
                ?>
                <span сlass="aa"><?php echo "$oldIncorrect" ?></span>

                <input type="password" name="pass" placeholder="Пароль" value="<?php echo htmlspecialchars($_POST['pass'] ?? '', ENT_QUOTES) ?>">
                <?php
                if (!empty($_POST))
                    if (empty($_POST['pass']))
                        $passIncorrect = "Заполните пароль";
                ?>
                <span сlass="aa"><?php echo "$passIncorrect" ?></span>

                <span style="font-size: 16px;">Ваш регион:</span>
                <select name="region">
                    <option value="Воронежская область">Воронежская область</option>
                    <option value="Липецкая область">Липецкая область</option>
                    <option value="Курская область">Курская область</option>
                </select>
                <br>

                <textarea name="tex" rows="5" placeholder="Не обязательно для заполнения"></textarea>
                <input type="hidden" name="id" value="<?= intval($_GET['id'] ?? 0); ?>">
                
                <label for="ch">
                    <input type="checkbox" name="check" id="ch" required checked>
                    <a href="/" style="color:white; font-size:18px;" target="_blank">Согласен с условиями</a>
                </label>

                <input type="file" name="file" required>
                <input type="submit" name="sub" value="Отправить">

            </form>
        </fieldset>

    </div>

<?php endif ?>