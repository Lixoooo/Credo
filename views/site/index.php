<?php include ROOT . '/views/layouts/header.php'; ?>

    <section id="featured">
        <article>
            <h2 class="a">Hot Products For april 2013</h2>
            <h3 class="b">New Gallery From L&amp;V</h3>
            <p class="c">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
            <p class="link-d"><a href="./">Read More</a></p>
            <figure><img src="/template/temp/1260x425.jpg" alt="Placeholder" width="1260" height="425"></figure>
        </article>
        <article class="a">
            <h2 class="a">New collection of 2015</h2>
            <h3 class="c">Lorem Isput Sit Met</h3>
            <h3 class="b">Verry Nice And Clean Web</h3>
            <p class="link-d"><a href="./">Read More</a></p>
            <figure><img src="/template/temp/1260x425(1).jpg" alt="Placeholder" width="1260" height="425"></figure>
        </article>
        <article class="b">
            <h2 class="a">Hot Products For april 2013</h2>
            <h3 class="b">New Gallery From L&amp;V</h3>
            <p class="c">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
            <p class="link-d"><a href="./">Read More</a></p>
            <figure><img src="/template/temp/1260x425(2).jpg" alt="Placeholder" width="1260" height="425"></figure>
        </article>
    </section>
    <section id="content">
        <h2 class="header-a">Hot products</h2>
         <div class="news-b">
            <?php foreach ($latestProducts as $product): ?>
                <div class="a">
                    <div>
                        <a href="/product/<?php echo $product['id'];?>">
                            <h3><?php echo $product['name'];?></h3>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consecteturs.</p>
                        <p class="price"> <?php echo $product['price'];?>$ </p>
                        <ul class="icons-a">
                            <li class="a"><a href="./">Add to Wishlist</a></li>
                            <li class="b"><a href="./">Do something else</a></li>
                        </ul>
                        <p class="link-b"><a class="add-to-cart" data-id="<?php echo $product['id'];?>">Add to cart</a></p>
                    </div>
                    <figure><img src="<?php echo Product::getImage($product['id']); ?>" alt="Placeholder" width="300" height="225"></figure>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

<?php include ROOT . '/views/layouts/footer.php'; ?>