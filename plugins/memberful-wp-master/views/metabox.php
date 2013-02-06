<?php if ( ! empty( $subscriptions ) || ! empty( $products ) ) : ?>
	<p><?php _e( 'Restrict access by selecting from the list of products or subscriptions below.', 'memberful' ); ?></p>
<?php else: ?>
	<div>
		<p><em><?php _e( "We couldn't find any products or subscriptions in your Memberful account. You'll need to add some before you can restrict access.", 'memberful' ); ?></em></p>
	</div>
<?php endif; ?>

<?php if ( ! empty( $subscriptions ) ) : ?>
	<div id="memberful-subscriptions">
		<h4 style="margin-bottom: 0;"><?php _e( 'Subscriptions', 'memberful' ); ?></h4>
		<ul>
		<?php foreach($subscriptions as $id => $subscription): ?>
			<li>
				<label>
					<input type="checkbox" name="memberful_subscription_acl[]" value="<?php echo $id; ?>" <?php checked( $subscription['checked'] ); ?>>
					<?php echo esc_html( $subscription['name'] ); ?>
				</label>
			</li>
		<?php endforeach; ?>
		</ul>
	</div>
<?php endif; ?>
<?php if ( ! empty( $products ) ) : ?>
	<div id="memberful-products">
		<h4 style="margin-bottom: 0;"><?php _e( 'Products', 'memberful' ); ?></h4>
		<ul>
		<?php foreach($products as $id => $product): ?>
			<li>
				<label>
					<input type="checkbox" name="memberful_product_acl[]" value="<?php echo $id; ?>" <?php checked( $product['checked'] ); ?>>
					<?php echo esc_html( $product['name'] ); ?>
				</label>
			</li>
		<?php endforeach; ?>
		</ul>
	</div>
<?php endif; ?>
