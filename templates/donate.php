<?php
/*
Template Name: Donate
*/
?>


<?php get_header(); ?>

<h1>Donate</h1>

<p>We here at Penny4NASA.org love what we do, and we love NASA. We want to see that our goals become a reality, and with your help that is absolutely what we are going to make happen. Our purpose is to organize people across the U.S. to call for the increase of NASA’s annual budget to one penny on the taxpayer dollar and support legislation that helps NASA achieve its priorities.</p>

<div class="row">
	<div class="columns large-6">
		<div id="paypal">
			<h2>via Paypal</h2>
			<div class="row" data-match-height>
				<div class="columns large-6">
					<div class="once" data-height-watch>
						<h3>Once</h3>
						<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
							<input type="hidden" name="cmd" value="_s-xclick" />
							<input type="hidden" name="hosted_button_id" value="FZ9RY42U8D4A2" />
							<input type="image" alt="PayPal - The safer, easier way to pay online!" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" />
							<img alt="" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="0" height="0" border="0" />
						</form>
					</div>
				</div>
				<div class="columns large-6">
					<div class="recurring" data-height-watch>
						<h3>Recurring Donations</h3>
						<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
							<select name="os0">
								<option value="$1 Monthly">$1.00 USD - Monthly</option>
								<option value="$5 Monthly">$5.00 USD - Monthly</option>
								<option value="$20 Monthly">$20.00 USD - Monthly</option>
								<option value="$30 Monthly">$30.00 USD - Monthly</option>
								<option value="$50 Monthly">$50.00 USD - Monthly</option>
								<option value="$100 Monthly">$100.00 USD - Monthly</option>
							</select>
							<input type="hidden" name="cmd" value="_s-xclick" />
							<input type="image" alt="PayPal - The safer, easier way to pay online!" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" />
							<img alt="" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="0" height="0" border="0" />
							<input type="hidden" name="hosted_button_id" value="FCDZZFAR57F4N" />
							<input type="hidden" name="currency_code" value="USD" />
							<input type="hidden" name="on0" value="" />
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="columns large-6">
		<div id="mail">
			<h2>via Snail Mail</h2>
			<p>We can also accept a check or money order made payable to <strong>Advocates for Space Exploration</strong>. Please mail your donations to:</p>
			<p class="mail">Penny4NASA<br/>PO Box 2035<br/>Corvallis, Oregon 97339-2035</p>
		</div>
	</div>
</div>

<p>Your donation will be made to the Penny4NASA initiative. All donations are processed through the registered nonprofit, Advocates for Space Exploration, which is owned and operated by Penny4NASA.org. <strong>All proceeds go towards the Penny4NASA effort and will not be used for other purposes.</strong> Help us make sure that NASA receives the funding they deserve!</p>

<?php get_footer(); ?>