<footer class="content-info" role="contentinfo">
	<div class="container">
		<div class="row">
			
			<div class="col-sm-4 col-footer">
				<?php wp_nav_menu( array('menu' => 'Footer Menu' )); ?>
			</div>

			<div class="col-sm-4  col-footer">
				<h3>Product Types</h3>
				<?php
					$terms = get_terms("product-type");
					 if ( !empty( $terms ) && !is_wp_error( $terms ) ){
					     echo "<ul>";
					     foreach ( $terms as $term ) {
					       //echo "<li>" . $term->name . "</li>";
					       ?>
					       	<li>
					       		<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Products' ) ) ); ?>?product_type=<?php echo $term->slug;?>"><?php echo $term->name;?></a></li>
					       <?php
					        
					     }
					     echo "</ul>";
					 }
				?>
			</div>

			<div class="col-sm-4 col-footer">
				<h3>Contact</h3>
				<ul>
					<li>Close to Home</li>
					<li>220 2nd Ave S. Suite 220</li>
					<li>Seattle, WA  98104</li>
				</ul>
				<ul>
					<li>info@c2hh.com</li>
					<li>p. 206-123-4567</li>
				</ul>
			</div>
			<div class="col-sm-4 col-footer">
				<h3>Follow Us</h3>
				<ul class="social">
					<li class="twitter"><a href="#">Twitter</a></li>
					<li class="facebook"><a href="#">Facebook</a></li>
				</ul>
			</div>

		</div>
		<div class="row">
			<hr>
		</div>
		<p class="copy">&copy; Close to Home Housing, <?php echo date('Y');?></p>
	</div>
</footer>

<?php wp_footer(); ?>