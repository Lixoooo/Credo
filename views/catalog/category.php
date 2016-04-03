<?php include ROOT . '/views/layouts/header.php'; ?>

<section id="content" class="cols-a">
	<article>
		<figure class="image-b"><figcaption><span>Praesent dui augue, imperdiet vitae ornare.</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</figcaption> <img src="/template/temp/944x357(1).jpg" alt="Placeholder" width="944" height="357"> <span class="dots"><span class="a">30%</span> <span class="b">Off</span> <span class="c">Salle</span></span></figure>

		<nav class="pagination-a">
			<ol>
				<?php echo $pagination->get(); ?>
			</ol>
		</nav>

		<div class="news-a">
			<?php foreach ($categoryProducts as $product): ?>
			<div>
				<h3>
					<a href="/product/<?php echo $product['id']; ?>">
						<?php echo $product['name']; ?>
					</a>
					<?php if ($product['is_new']): ?>
						<span class="new">New</span>
					<?php endif; ?>
				</h3>
				<figure><img src="<?php echo Product::getImage($product['id']); ?>" alt="Placeholder" width="307" height="226"></figure>
				<p class="price"><?php echo $product['price']; ?>$<span class="old">$250.00</span></p>
				<ul class="icons-a">
					<li class="a"><a href="./">Add to Wishlist</a></li>
					<li class="b"><a href="./">Do something else</a></li>
				</ul>
				<p class="link-a"><a class="add-to-cart" data-id="<?php echo $product['id'];?>">Add to cart</a></p>
			</div>
			<?php endforeach; ?>
	</article>
	<aside>
		<nav class="module-a a">
			<h3>Categories</h3>
			<ul>
				<?php foreach ($categories as $categoryItem): ?>
				<li><a href="/category/<?php echo $categoryItem['id']; ?>"
					   class="<?php if ($categoryId == $categoryItem['id']) echo 'active'; ?>"
					>
					<?php echo $categoryItem['name']; ?></li>
				<?php endforeach; ?>
			</ul>
		</nav>
		<nav class="module-a b">
			<h3>Price</h3>
			<ul>
				<li><a href="./">$50.00 - $100.00</a></li>
				<li><a href="./">$100.00 - $200.00</a></li>
				<li><a href="./">$200.00 - $500.00</a></li>
				<li><a href="./">$500.00 - $1000.00</a></li>
				<li><a href="./">$1000.00 - $2000.00</a></li>
				<li><a href="./">$2000.00 - $5000.00</a></li>
				<li><a href="./">$5000.00 +</a></li>
			</ul>
		</nav>
		<div class="module-a c">
			<h3>Best seller</h3>
			<ul class="gallery-a">
				<li><a href="./"><img src="/template/temp/83x72.jpg" alt="Placeholder" width="83" height="72"> Michael Kro <span class="rating-a a">0/5</span> <span>$120.00</span></a></li>
				<li><a href="./"><img src="/template/temp/83x72(1).jpg" alt="Placeholder" width="83" height="72"> Michael Kro <span class="rating-a b">1/5</span> <span>$120.00</span></a></li>
				<li><a href="./"><img src="/template/temp/83x72(2).jpg" alt="Placeholder" width="83" height="72"> Michael Kro <span class="rating-a c">2/5</span> <span>$120.00</span></a></li>
				<li><a href="./"><img src="/template/temp/83x72(3).jpg" alt="Placeholder" width="83" height="72"> Michael Kro <span class="rating-a d">3/5</span> <span>$120.00</span></a></li>
				<li><a href="./"><img src="/template/temp/83x72(4).jpg" alt="Placeholder" width="83" height="72"> Michael Kro <span class="rating-a e">4/5</span> <span>$120.00</span></a></li>
				<li><a href="./"><img src="/template/temp/83x72(5).jpg" alt="Placeholder" width="83" height="72"> Michael Kro <span class="rating-a f">5/5</span> <span>$120.00</span></a></li>
			</ul>
		</div>
		<figure class="image-a"><span>%30 <span>sale</span></span> <img src="/template/temp/294x331(1).jpg" alt="Placeholder" width="294" height="331"> <a href="./">Show Now</a></figure>
	</aside>
</section>





<?php include ROOT . '/views/layouts/footer.php'; ?>
