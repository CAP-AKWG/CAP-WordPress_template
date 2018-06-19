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
					<div class="footerLinks">
						<?php
							wp_nav_menu( array(
								'container' => false,
								'theme_location' => 'footer-links'
							) );
						?>
					</div>
                                        <div class="copyright">
                                                <p>&copy; <?php print date( 'Y' ); ?> <?php bloginfo( 'name' ); ?> Civil Air Patrol. All rights reserved.<br>
                                                LINKS OR REFERENCES TO INDIVIDUALS OR COMPANIES DOES NOT CONSTITUTE AN ENDORSEMENT OF ANY INFORMATION, PRODUCT OR SERVICE YOU MAY RECEIVE FROM SUCH SOURCES.
                                        </div>
				</div>
			</div>
		</div>

		<div id="printFooter">
			&copy; <?php print date( 'Y' ); ?> <?php bloginfo( 'name' ); ?> Civil Air Patrol. All rights reserved.<br>
			LINKS OR REFERENCES TO INDIVIDUALS OR COMPANIES DOES NOT CONSTITUTE AN ENDORSEMENT OF ANY INFORMATION, PRODUCT OR SERVICE YOU MAY RECEIVE FROM SUCH SOURCES.
		</div>

		<?php wp_footer(); ?>

	</body>

</html>
