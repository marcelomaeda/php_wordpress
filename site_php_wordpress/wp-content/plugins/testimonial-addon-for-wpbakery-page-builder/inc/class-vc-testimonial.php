<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Class_VC_Testimonial {

	/**
	 * Construct method
	 */
	public function __construct() {
		add_shortcode( 'vcat_testimonial', array( $this, 'shortcode_func' ) );
		add_action( 'init', array( $this, 'map_vc_element' ) );
	}

	public function shortcode_func( $atts, $content = null, $tag ) {
		$args = shortcode_atts( array(
			'style'        => '1',
			'image_id'     => '',
			'client_name'  => 'James Smith',
			'client_title' => 'Developer',
			'link'         => '',
			'rating'       => '',
		), $atts );

		//parse link
		$link     = ( '||' === $args['link'] ) ? '' : $args['link'];
		$link     = vc_build_link( $link );
		$a_href   = $link['url'];
		$a_title  = $link['title'];
		$a_target = $link['target'];

		$rating = (float) $args['rating'];

		// image URL
		if ( $args['image_id'] != '' ) {
			$image_url = wp_get_attachment_image_url( $args['image_id'] );
		}

		$content = wpb_js_remove_wpautop( $content, true );

		ob_start();

		?>

        <div class="tc-testimonial-style<?php echo esc_attr( $args['style'] ); ?>">
            <div class="testi-desc">
				<?php echo $content; ?>
            </div>

            <div class="testi-footer">
				<?php if ( $args['image_id'] !== '' ) : ?>
                    <div class="testi-photo">
                        <img src="<?php echo esc_url( $image_url ); ?>"
                             alt="<?php echo esc_attr( $args['client_name'] ); ?>">
                    </div>
				<?php endif ?>

                <div class="testi-info">
                    <span class="name"><?php echo esc_html( $args['client_name'] ); ?></span>
                    <div class="position">
                        <span class="meta"><?php echo esc_html( $args['client_title'] ) ?></span> - <a
                                href="<?php echo esc_url( $a_href ); ?>" title="<?php echo esc_attr( $a_title ); ?>"
                                target="<?php echo esc_attr( $a_target ); ?>"><?php echo esc_html( $a_title ); ?></a>
                    </div>

					<?php if ( ! empty( $rating ) ) : ?>
                        <div class="testi-ratings">
							<?php
							for ( $index = 1; $index <= 5; $index ++ ) {
								if ( $rating != 0 && $index <= $rating ) {
									echo wp_kses_post( '<i class="fa fa-star"></i>' );
								} else if ( abs( $rating - $index ) === 0.5 ) {
									echo wp_kses_post( '<i class="fa fa-star-half-o"></i>' );
								} else {
									echo wp_kses_post( '<i class="fa fa-star-o"></i>' );
								}
							}
							?>
                        </div>
					<?php endif; ?>
                </div>
            </div>

        </div>

		<?php

		return ob_get_clean();
	}

	function map_vc_element() {
		if ( function_exists( "vc_map" ) ) {
			vc_map( array(
				"name"            => esc_html__( 'Testimonial', 'vcat-testimonial' ),
				"base"            => "vcat_testimonial",
				"content_element" => true,
				"category"        => esc_html__( 'by Thecodude', 'vcat-testimonial' ),
				'description'     => esc_html__( 'Insert your testimonial', 'vcat-testimonial' ),
				"icon"            => VCAT_PLUGIN_URL
				                     . 'assets/icons/testimonial.png',
				"params"          => array(
					array(
						'type'        => 'dropdown',
						'param_name'  => 'style',
						'heading'     => esc_html__( "Style", 'vcat-testimonial' ),
						'value'       => array(
							esc_html__( 'Style 1', 'vcat-testimonial' )  => '1',
							esc_html__( 'Style 2', 'vcat-testimonial' )  => '2',
							esc_html__( 'Style 3', 'vcat-testimonial' )  => '3',
							esc_html__( 'Style 4', 'vcat-testimonial' )  => '4',
							esc_html__( 'Style 5', 'vcat-testimonial' )  => '5',
							esc_html__( 'Style 6', 'vcat-testimonial' )  => '6',
							esc_html__( 'Style 7', 'vcat-testimonial' )  => '7',
							esc_html__( 'Style 8', 'vcat-testimonial' )  => '8',
							esc_html__( 'Style 9', 'vcat-testimonial' )  => '9',
							esc_html__( 'Style 10', 'vcat-testimonial' ) => '10',
							esc_html__( 'Style 11', 'vcat-testimonial' ) => '11',
							esc_html__( 'Style 12', 'vcat-testimonial' ) => '12',
							esc_html__( 'Style 13', 'vcat-testimonial' ) => '13',
							esc_html__( 'Style 14', 'vcat-testimonial' ) => '14',
						),
						'admin_label' => true,
					),
					array(
						"type"       => "attach_image",
						'heading'    => esc_html__( "Client Image", 'vcat-testimonial' ),
						"param_name" => "image_id",
					),
					array(
						'type'        => 'textfield',
						'param_name'  => 'client_name',
						'admin_label' => true,
						'heading'     => esc_html__( "Name", 'vcat-testimonial' ),
					),
					array(
						'type'        => 'textfield',
						'param_name'  => 'client_title',
						'admin_label' => true,
						'heading'     => esc_html__( "Designation", 'vcat-testimonial' ),
					),
					array(
						'type'        => 'vc_link',
						'heading'     => esc_html__( "Client Web URL(s)", 'vcat-testimonial' ),
						'param_name'  => 'link',
						'description' => esc_html__( 'Add link for client web address', 'vcat-testimonial' ),
					),
					array(
						'type'       => 'dropdown',
						'heading'    => esc_html__( 'Rating', 'vcat-testimonial' ),
						'param_name' => 'rating',
						'value'      => array(
							esc_html__( 'No Rating', 'vcat-testimonial' ) => '0',
							esc_html__( '1', 'vcat-testimonial' )         => '1',
							esc_html__( '1.5', 'vcat-testimonial' )       => '1.5',
							esc_html__( '2', 'vcat-testimonial' )         => '2',
							esc_html__( '2.5', 'vcat-testimonial' )       => '2.5',
							esc_html__( '3', 'vcat-testimonial' )         => '3',
							esc_html__( '3.5', 'vcat-testimonial' )       => '3.5',
							esc_html__( '4', 'vcat-testimonial' )         => '4',
							esc_html__( '4.5', 'vcat-testimonial' )       => '4.5',
							esc_html__( '5', 'vcat-testimonial' )         => '5',
						),
					),
					array(
						"type"       => "textarea_html",
						"heading"    => esc_html__( "Review Text", 'vcat-testimonial' ),
						"param_name" => "content",
					),
				),
			) );
		}
	}
}

if ( class_exists( 'WPBakeryShortCode' ) ) {
	class WPBakeryShortCode_vcat_testimonial extends WPBakeryShortCode {
	}
}

// Initialize Element Class
if ( class_exists( 'Class_VC_Testimonial' ) ) {
	new Class_VC_Testimonial();
}
