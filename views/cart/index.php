<?php include ROOT . '/views/layouts/header.php'; ?>

<article id="content">
	<h2>Shopping cart</h2>
	<?php if ($productsInCart): ?>
		<form action="./" method="post" class="cart-a">
			<fieldset>
				<table class="table-a">
					<tr>
						<th class="a">Product Name</th>
						<th class="b">Delete</th>
						<th class="c">Amount</th>
						<th class="d">Unit Price</th>
					</tr>
					<?php foreach ($products as $product): ?>
						<tr>
							<td>
								<div>
									<h3>
										<a href="/product/<?php echo $product['id'];?>" style="color: black">
											<?php echo $product['name'];?>
										</a>
									</h3>
									<figure><img src="/template/temp/232x167.jpg" alt="Placeholder" width="232" height="167"></figure>
									<p><span class="rating-d a">4/5</span> 12 Review (s)</p>
									<ul>
										<li><span>Product Code<span>:</span></span> <?php echo $product['code'];?></li>
									</ul>
								</div>
							</td>
							<td>
								<a class="icon-a" href="/cart/delete/<?php echo $product['id'];?>"></a>
							</td>
							<td><?php echo $productsInCart[$product['id']];?></td>
							<td><?php echo $product['price'];?>$</td>
						</tr>
					<?php endforeach; ?>
				</table>
				<div align="right">
					<ul class="list-b">
						<li class="a"><span>Total :</span> <?php echo $totalPrice;?> $</li>
					</ul>
				</div>
				<p class="link-c"><a href="./">Continue Shopping</a> <button type="submit">Confirm Order</button></p>
			</fieldset>
		</form>
	<?php else: ?>
		<H1 align="center">Корзина пуста</H1>
	<?php endif; ?>
</article>

<?php include ROOT . '/views/layouts/footer.php'; ?>
