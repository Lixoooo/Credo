<?php include ROOT . '/views/layouts/header.php'; ?>


</br>
</br>

<section align="center">

    <h4>Удалить товар #<?php echo $id; ?></h4>
    <p>Вы действительно хотите удалить этот товар?</p>

<form method="post" class="form-a">
    <p class="submit"><input type="submit" name="submit" value="Delete"></p>
</form>
</section>


<?php include ROOT . '/views/layouts/footer.php'; ?>
