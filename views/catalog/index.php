<?php include ROOT . '/views/layouts/header.php'; ?>

<nav id="breadcrumbs">
	<ol>
		<li><a href="./">Home</a></li>
		<li><a href="./">Woman</a></li>
		<li>Product map</li>
	</ol>
</nav>
<section id="content" class="cols-a">
	<article>
		<figure class="image-c"><figcaption><span>new product from paris 2013</span> <span>new product from paris</span> <a href="./">Show Now</a></figcaption> <img src="/template/temp/944x357.jpg" alt="Placeholder" width="944" height="357"></figure>
		<div class="news-b">

			<?php foreach ($latestProducts as $product): ?>
			<div>
				<div>
					<h3>
						<a href="/product/<?php echo $product['id'];?>"  style="color: white">
							<?php echo $product['name'];?>
						</a>
					</h3>
					<p>Lorem ipsum dolor sit amet, consecteturs.</p>
					<p class="price"><?php echo $product['price'];?>$</p>
					<ul class="icons-a">
						<li class="a"><a href="./">Add to Wishlist</a></li>
						<li class="b"><a href="./">Do something else</a></li>
					</ul>
					<p class="link-b"> <a class="add-to-cart" data-id="<?php echo $product['id'];?>"> Add to cart</a></p>
				</div>
				<figure><img src="<?php echo Product::getImage($product['id']); ?>" alt="Placeholder" width="312" height="241"></figure>
			</div>
			<?php endforeach; ?>
		</div>
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
		<figure class="image-a"><span>%30 <span>sale</span></span> <img src="/template/temp/294x331.jpg" alt="Placeholder" width="294" height="331"> <a href="./">Show Now</a></figure>
	</aside>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>
