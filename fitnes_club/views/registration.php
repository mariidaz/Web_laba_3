<h2>Реєстрація</h2>

<?php if (!empty($errors)): ?>
    <div style="
        max-width: 600px; 
        margin: 0 auto 20px auto; 
        padding: 15px 25px; 
        background-color: #fff5f8; 
        border: 2px solid #ff0099; 
        border-radius: 10px; 
        box-shadow: 0 4px 15px rgba(255, 0, 153, 0.1);
        font-family: 'Segoe UI', sans-serif;
    ">
        <h3 style="color: #ff0099; margin-top: 0; margin-bottom: 10px; font-size: 18px;">
            Виправте наступні помилки:
        </h3>
        <ul style="
            color: #d63384; 
            margin: 0; 
            padding-left: 20px; 
            list-style-type: square;
        ">
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<form action="index.php?action=register" method="post">
    
    <div>
        <label for="login">Логін:</label>
        <input type="text" id="login" name="login" required>
    </div>

    <div>
        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required>
    </div>

    <div>
        <label for="confirm_password">Повторіть пароль:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
    </div>

    <div>
        <label for="email">Електронна пошта:</label>
        <input type="email" id="email" name="email" required>
    </div>

    <label>Skype:</label>
    <input type="text" name="skype" value="<?= $_POST['skype'] ?? '' ?>"><br>

    <div>
        <button type="submit">Зареєструватися</button>
    </div>

</form>