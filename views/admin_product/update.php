<?php include ROOT . '/views/layouts/header.php'; ?>

    <br/>

        <?php if (isset($errors) && is_array($errors)): ?>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li> - <?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

<section align="center">
    <h4>Редактировать товар #<?php echo $id; ?></h4>

            <form action="#" method="post" class="form-a" enctype="multipart/form-data">

                <p>Название товара</p>
                <input type="text" name="name" placeholder="" value="<?php echo $product['name'] ?>">

                <p>Артикул</p>
                <input type="text" name="code" placeholder="" value="<?php echo $product['code'] ?>">

                <p>Стоимость, $</p>
                <input type="text" name="price" placeholder="" value="<?php echo $product['price'] ?>">

                <p>Категория</p>
                <select name="category_id">
                    <?php if (is_array($categoriesList)): ?>
                        <?php foreach ($categoriesList as $category): ?>
                            <option value="<?php echo $category['id']; ?>">
                                <?php if ($product['category_id'] == $category['id']) echo ' selected="selected"'; ?>>
                                <?php echo $category['name']; ?>
                            </option>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </select>

                <br/><br/>

                <p>Производитель</p>
                <input type="text" name="brand" placeholder="" value="<?php echo $product['brand']; ?>">

                <br/><br/>
                <br/><br/>

                <img src="<?php echo Product::getImage($product['id']); ?>"  alt="" />
                <input type="file" name="image" placeholder="" value="<?php echo $product['image']; ?>">

                <br/><br/>

                <p>Детальное описание</p>
                <textarea name="description"><?php echo $product['description']; ?></textarea>

                <br/><br/>

                <p>Наличие на складе</p>
                <select name="availability">
                    <option value="1" <?php if ($product['availability'] == 1) echo ' selected="selected"'; ?>>Да</option>
                    <option value="0" <?php if ($product['availability'] == 0) echo ' selected="selected"'; ?>>Нет</option>
                </select>

                <br/><br/>

                <p>Новинка</p>
                <select name="is_new">
                    <option value="1" <?php if ($product['is_new'] == 1) echo ' selected="selected"'; ?>>Да</option>
                    <option value="0" <?php if ($product['is_new'] == 0) echo ' selected="selected"'; ?>>Нет</option>
                </select>

                <br/><br/>

                <p>Рекомендуемые</p>
                <select name="is_recommended">
                    <option value="1" <?php if ($product['is_recommended'] == 1) echo ' selected="selected"'; ?>>Да</option>
                    <option value="0" <?php if ($product['is_recommended'] == 0) echo ' selected="selected"'; ?>>Нет</option>
                </select>

                <br/><br/>

                <p>Статус</p>
                <select name="status">
                    <option value="1" <?php if ($product['status'] == 1) echo ' selected="selected"'; ?>>Отображается</option>
                    <option value="0" <?php if ($product['status'] == 0) echo ' selected="selected"'; ?>>Скрыт</option>
                </select>

                <br/><br/>

                <input type="submit" name="submit" class="btn btn-default" value="Сохранить">

                <br/><br/>

            </form>

</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>