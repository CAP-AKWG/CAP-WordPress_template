								</div>
							</div>
						</div>
						<div class="mainContentBottom"></div>
					</div>
					<div class="contentBorder"></div>
				</div>

			</div>

		</div>

		<div id="footer">
			<div class="page">
				<?php dynamic_sidebar( 'footer-content' ); ?>
				<div class="footerBox5">
					<div class="copyright">
						<p>&copy; <?php print date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
					</div>
					<div class="footerLinks">
						<?php
							wp_nav_menu( array(
								'container' => false,
								'theme_location' => 'footer-links'
							) );
						?>
					</div>
				</div>
			</div>
		</div>

		<div id="printFooter">
			&copy; <?php print date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.
		</div>

		<?php wp_footer(); ?>

	</body>

</html>
