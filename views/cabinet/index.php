<?php include ROOT . '/views/layouts/header.php'; ?>

    <article id="content">
        <h3>Привет, <?php echo $user['name'];?>!</h3>
        <form action="./" method="post" class="cart-a">
            <fieldset>
                <table class="table">
                    <tr>
                        <td>
                            <div>
                                <h3><a href="/cabinet/edit" style="color: orange">Редактировать данные</a></h3>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>
                                <h3><a href="/cart" style="color: orange">Список покупок</a></h3>
                            </div>
                        </td>
                    </tr>
                </table>

            </fieldset>
        </form>
    </article>




<?php include ROOT . '/views/layouts/footer.php'; ?>