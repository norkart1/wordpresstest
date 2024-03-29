<?php
	$marin_cta_hs            = get_theme_mod( 'cta_hs', '1' );
	$marin_cta_call_icon     = get_theme_mod( 'cta_call_icon', 'fa-user' );
	$marin_cta_call_title    = get_theme_mod( 'cta_call_title', 'Call Us:' );
	$marin_cta_call_text     = get_theme_mod( 'cta_call_text', '<a href="#">+(01) 246 2365</a>' );
	$marin_cta_right_icon    = get_theme_mod( 'cta_right_icon', 'fa-phone' );
	$marin_cta_title         = get_theme_mod( 'cta_title', 'Professional and Dedicated Consulting Services' );
	$marin_cta_description   = get_theme_mod( 'cta_description', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.' );
	$marin_cta_btn_icon      = get_theme_mod( 'cta_btn_icon', 'fa-arrow-right' );
	$marin_cta_btn_lbl       = get_theme_mod( 'cta_btn_lbl', 'Apply Now' );
	$marin_cta_btn_link      = get_theme_mod( 'cta_btn_link' );
	$marin_cta_effect_enable = get_theme_mod( 'cta_effect_enable', '1' );
if ( '1' === $marin_cta_hs ) {
	?>
<section id="cta-section" class="cta-section home-cta
	<?php
	if ( '1' === $marin_cta_effect_enable ) :
		echo esc_attr_e( 'cta-effect-active', 'marin' );
endif;
	?>
">
	<div class="cta-overlay">
		<div class="av-container">
			<div class="av-columns-area">
				<div class="av-column-5 my-auto">
					<div class="call-wrapper">
					<?php if ( ! empty( $marin_cta_call_icon ) ) : ?>
							<div class="call-icon-box"><i class="fa <?php echo esc_attr( $marin_cta_call_icon ); ?>"></i></div>
						<?php endif; ?>
					<?php if ( ! empty( $marin_cta_call_title ) || ! empty( $marin_cta_call_text ) ) : ?>
							<div class="cta-info">
								<div class="call-title"><?php echo wp_kses_post( $marin_cta_call_title ); ?></div>
								<div class="call-phone"><?php echo wp_kses_post( $marin_cta_call_text ); ?></div>
							</div>
						<?php endif; ?>
					</div>
				</div>
				<div class="av-column-7 my-auto">
					<div class="cta-content-wrap">
						<div class="cta-content">
						<?php if ( ! empty( $marin_cta_right_icon ) ) : ?>
								<span class="cta-icon-wrap"><i class="fa <?php echo esc_attr( $marin_cta_right_icon ); ?>"></i></span>
							<?php endif; ?>
						<?php if ( ! empty( $marin_cta_title ) ) : ?>
								<h4><?php echo wp_kses_post( $marin_cta_title ); ?></h4>
							<?php endif; ?>
						<?php if ( ! empty( $marin_cta_description ) ) : ?>
								<p><?php echo wp_kses_post( $marin_cta_description ); ?></p>
							<?php endif; ?>
						</div>

					<?php if ( ! empty( $marin_cta_btn_lbl ) || ! empty( $marin_cta_btn_icon ) ) : ?>
							<div class="cta-btn">
								<a href="<?php echo esc_url( $marin_cta_btn_link ); ?>" class="av-btn av-btn-primary av-btn-bubble"><?php echo esc_html( $marin_cta_btn_lbl ); ?> <i class="fa <?php echo esc_attr( $marin_cta_btn_icon ); ?>"></i> <span class="bubble_effect"><span class="circle top-left"></span> <span class="circle top-left"></span> <span class="circle top-left"></span> <span class="button effect-button"></span> <span class="circle bottom-right"></span> <span class="circle bottom-right"></span> <span class="circle bottom-right"></span></span></a>
							</div>
						<?php endif; ?>	
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php } ?>
