<?php include ROOT . '/views/layouts/header.php'; ?>

<section id="content" class="cols-a">
	<article class="product-a">
		<div>
			<header>
				<h2><span><?php echo $product['name'];?></span> Women's</h2>
				<h2>Code: <?php echo $product['code'];?></h2>
				<ul>
					<li><span class="rating-b e">4/5</span> 5 Review (s)</li>
					<li><a href="./">Add Your Review</a></li>
				</ul>
			</header>
			<p><?php echo $product['description'];?></p>
			<form action="./" method="post">
				<fieldset>
					<ul>
						<li>
							<span>
								Availability:  <span>In Stock </span>
							</span>
							<span>
								<label for="qa">Quantity:</label>
								<select id="qa" name="qa">
									<option>01</option>
									<option>02</option>
									<option>03</option>
									<option>04</option>
									<option>05</option>
								</select>
							</span>
						</li>
						<li class="submit">
							<span><?php echo $product['price'];?><span>$200.00</span></span>
							<p class="link-a"><a class="add-to-cart" data-id="<?php echo $product['id'];?>">Add to cart</a></p>
						</li>
					</ul>
				</fieldset>
			</form>
			<ul class="list-a">
				<li class="a"><a href="./">Add To Wishlist</a></li>
				<li class="b"><a href="./">Add To compare</a></li>
				<li class="c"><a href="./">Email To a Friend</a></li>
			</ul>
			<p class="addthis_toolbox addthis_default_style ">
				<a class="addthis_button_preferred_1"></a>
				<a class="addthis_button_preferred_2"></a>
				<a class="addthis_button_preferred_3"></a>
				<a class="addthis_button_preferred_4"></a>
				<a class="addthis_button_compact"></a>
				<a class="addthis_counter addthis_bubble_style"></a>
			</p>
		</div>
		<aside>
			<figure>
				<a href="<?php echo Product::getImage($product['id']); ?>"><img src="<?php echo Product::getImage($product['id']); ?>" alt="Placeholder" width="474" height="381"></a>
				<a href="<?php echo Product::getImage($product['id']); ?>"><img src="<?php echo Product::getImage($product['id']); ?>" alt="Placeholder" width="474" height="381"></a>
				<a href="<?php echo Product::getImage($product['id']); ?>"><img src="<?php echo Product::getImage($product['id']); ?>" alt="Placeholder" width="474" height="381"></a>
				<a href="<?php echo Product::getImage($product['id']); ?>"><img src="<?php echo Product::getImage($product['id']); ?>" alt="Placeholder" width="474" height="381"></a>
			</figure>
		</aside>
		<footer class="tabs-a">
			<ul>
				<li>Decription</li>
				<li>Tags</li>
				<li>Reviews</li>
				<li>Custum tabs</li>
			</ul>
			<div>
				<div>
					<p>Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultri ces posuere cubilia curae Aenean eleifend laoreet congue. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestib ulum ante ipsum primis in faucibus orci luctus et ultri ces posuere cubilia curae Aenean eleifend laoreet congue. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. </p>
				</div>
				<div>
					<form action="./" method="post" class="form-c">
						<fieldset>
							<p>
								<label for="fac">Add Your Tags:</label>
								<input type="text" id="fac" name="fac" required>
								<button type="submit">Add Tags</button>
							</p>
							<p>Use spaces to separate tags. Use single quotes (') for phrases.</p>
						</fieldset>
					</form>
				</div>
				<div class="double-b">
					<div>
						<h3>Customer reviews</h3>
						<ul class="review-a scroller-a">
							<li>Michael <span class="rating-c a">06 / March / 2013</span> <q>Lorem ipsum dolor sit amet, consectetur adipis cing elit.  Aliquam suscipit nisl in adipiscin</q></li>
							<li>Doremon  <span class="rating-c b">06 / March / 2013</span> <q>Lorem ipsum dolor sit amet, consectetur adipis cing elit.  Aliquam suscipit nisl in adipiscin</q></li>
							<li>Maria Lisa <span class="rating-c c">06 / March / 2013</span> <q>Lorem ipsum dolor sit amet, consectetur adipis cing elit.  Aliquam suscipit nisl in adipiscin</q></li>
							<li>Michael <span class="rating-c a">06 / March / 2013</span> <q>Lorem ipsum dolor sit amet, consectetur adipis cing elit.  Aliquam suscipit nisl in adipiscin</q></li>
							<li>Doremon  <span class="rating-c b">06 / March / 2013</span> <q>Lorem ipsum dolor sit amet, consectetur adipis cing elit.  Aliquam suscipit nisl in adipiscin</q></li>
							<li>Maria Lisa <span class="rating-c c">06 / March / 2013</span> <q>Lorem ipsum dolor sit amet, consectetur adipis cing elit.  Aliquam suscipit nisl in adipiscin</q></li>
						</ul>
					</div>
					<form action="./" method="post" class="form-d">
						<fieldset>
							<legend>Write your own review</legend>
							<p>
								<label for="fda">Your name</label>
								<input type="text" id="fda" name="fda" required>
							</p>
							<p>
								<label for="fdb">Summary</label>
								<input type="text" id="fdb" name="fdb" required>
							</p>
							<p>
								<label for="fdc">Review</label>
								<textarea id="fdc" name="fdc" required></textarea>
							</p>
							<p><button type="submit">Submit</button></p>
						</fieldset>
					</form>
				</div>
				<div>
					<p>Another section...</p>
				</div>
			</div>
		</footer>
	</article>
	<aside>
		<nav class="module-a a">
			<h3>Categories</h3>
			<ul>
				<?php foreach ($categories as $categoryItem): ?>
					<li><a href="/category/<?php echo $categoryItem['id'];?>"> <?php echo $categoryItem['name'];?> </a></li>
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
