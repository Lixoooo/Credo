<?php include ROOT . '/views/layouts/header.php'; ?>

    <section align="center">
        <?php if (isset($errors) && is_array($errors)): ?>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li> - <?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <form method="post" class="form-a">
            <p><input type="email" name="email" value="<?php echo $email; ?>" placeholder="Enter your email"></p>
            <p><input type="password" name="password" value="<?php echo $password; ?>" placeholder="Enter your password"></p>
            <p class="submit"><input type="submit" name="submit" value="Enter"></p>
            <p class="submit"><input type="reset" name="commit" value="Reset"></p>
        </form>
    </section>


<?php include ROOT . '/views/layouts/footer.php'; ?>