<?php include ROOT . '/views/layouts/header.php'; ?>

    <section align="center">
        <?php if ($result): ?>
          <p>Данные отредактированы!</p>
        <?php else: ?>
            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                    <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <form method="post" class="form-a">
                <p><input type="text" name="name" placeholder="Enter your name" value=""<?php echo $name; ?>"></p>
                <p><input type="password" name="password" placeholder="Enter your password" value="<?php echo $password; ?>" ></p>
                <p class="submit"><input type="submit" name="submit" value="Enter"></p>
                <p class="submit"><input type="reset" name="commit" value="Reset"></p>
            </form>
        <?php endif; ?>

    </section>

<?php include ROOT . '/views/layouts/footer.php'; ?>