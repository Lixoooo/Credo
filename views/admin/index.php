<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <h4 style="color: black">Добрый день, администратор!</h4>

            <br/>

            <p> <h1 style="color: black">Вам доступны такие возможности: </h1> </p>

            <br/>

            <ul>
                <li><h4><a href="/admin/product" style="color: dodgerblue">Управление товарами</a></h4></li>
                <li><h4><a href="/admin/category" style="color: dodgerblue">Управление категориями</a></h4></li>
                <li><h4><a href="/admin/order" style="color: dodgerblue">Управление заказами</a></h4></li>
            </ul>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>