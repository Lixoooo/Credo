<?php include ROOT . '/views/layouts/header.php'; ?>

    <article id="content">


    <h2>List of products</h2>
        <p class="link-c"><a href="/admin/product/create"><i class="fa fa-plus"></i> + Добавить товар</a></p>
        <form action="./" method="post" class="cart-a">
            <fieldset>
                <table class="table-a">
                    <tr>
                        <th class="a">ID</th>
                        <th class="b">Article</th>
                        <th class="c">Product name</th>
                        <th class="d">Unit Price</th>
                        <th class="a">Edit</th>
                        <th class="c">Delete</th>
                    </tr>
                    <?php foreach ($productList as $product): ?>
                    <tr>
                        <td> <?php echo $product['id']; ?> <td>
                        <?php echo $product['code']; ?>
                        <td><?php echo $product['name']; ?></td>
                        <td><?php echo $product['price']; ?>$</td>
                        <td><a class="icon-a" href="/admin/product/update/<?php echo $product['id']; ?>" title="Редактировать"></a></td>
                        <td><a class="icon-a" href="/admin/product/delete/<?php echo $product['id']; ?>" title="Удалить"></a></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </fieldset>
        </form>
    </article>
<?php include ROOT . '/views/layouts/footer.php'; ?>