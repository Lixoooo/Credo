<?php include ROOT . '/views/layouts/header.php'; ?>

<section id="content" class="cols-b" xmlns="http://www.w3.org/1999/html">
	<article>
		<h2>Contact Info</h2>
			<p>Here you can leave your own review</p>
				<ul class="vcard a">
					<li class="fn org">The Fashion Boutique</li>
					<li class="adr"><span class="street-address">Kyibisheva str.91-58</span>, <span class="locality">Minsk City</span></li>
					<li><a class="email">Credo.net@gmail.com</a> <a class="email">Savenko.kv@gmail.com</a></li>
					<li><span class="tel">+375 (44) 799 7887</span> <span class="tel"> +375 225 550542</span></li>
				</ul>
			<div id="alert">
				  <div class="message"></div>
			</div>

		<section>
			<form onSubmit="return submitForm();" action="" method="post" class="form-a" name="homefrm1" id="homefrm1">
				<fieldset>
					<legend>Leave a Comment</legend>
					<?php if ($result): ?>
						<p>Message sent. We will contact you.</p>
					<?php else: ?>
						<?php if (isset($errors) && is_array($errors)): ?>
							<ul>
								<?php foreach ($errors as $error): ?>
									<li> - <?php echo $error; ?></li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>

						<div class="signup-form"><!--sign up form-->
							<br/>
							<form action="#" method="post">
								<p><label for="fab">Your Email</label>
								<input type="email" name="userEmail" placeholder="E-mail" value="<?php echo $userEmail; ?>"/>
								</p>
								<p>
								<label for="faac">Message</label>
								<textarea name="userText" placeholder="Message" value="<?php echo $userText; ?>"></textarea>
								</p>
								<br/>
								<button type="submit" name="submit" class="btn btn-default" value="Отправить" >Submit </button>
							</form>
						</div><!--/sign up form-->
					<?php endif; ?>
				</fieldset>
			</form>
		</section>
	</article>
	<aside>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2349.3341726744125!2d27.580417715954855!3d53.925806738849765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dbcf752f874335%3A0xcacf4712925e04ee!2z0YPQuy4g0JrRg9C50LHRi9GI0LXQstCwIDkxLCDQnNC40L3RgdC6!5e0!3m2!1sru!2sby!4v1457610665477" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</aside>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>