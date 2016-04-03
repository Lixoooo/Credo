<?php include ROOT . '/views/layouts/header.php'; ?>

<section align="center">
    <?php if ($result): ?>
        </br>
        </br>
        <h1>Вы зарегистрированы!</h1>
        </br>
        </br>
    <?php else: ?>
        <?php if (isset($errors) && is_array($errors)): ?>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li> - <?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <form method="post" class="form-a">
            <p><input type="text" name="name" placeholder="Name" value="<?php echo $name; ?>"/></p>
            <p><input type="email" name="email" placeholder="Enter your E-mail" value="<?php echo $email; ?>"/></p>
            <p><input type="password" name="password" placeholder="Enter your password" value="<?php echo $password; ?>"/></p>
            <p class="submit"><input type="submit" name="submit" value="Enter"></p>
            <p class="submit"><input type="reset" name="commit" value="Reset"></p>
        </form>
    <?php endif; ?>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>