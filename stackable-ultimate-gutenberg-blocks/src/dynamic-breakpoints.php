<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'stackable_get_responsive_css' ) ) {
	/**
	 * This function returns the CSS contained in
	 * dist/frontend_blocks_responsive.css
	 *
	 * @return void
	 */
	function stackable_get_responsive_css() {
		// NOTE: THE VALUE BELOW IS AUTOMATICALLY GENERATED BY THE BUILD PROCESS.
		return <<<STK_RESPONSIVE_CSS
#start-resizable-editor-section{display:none}@media only screen and (min-width:1024px){:where(.has-text-align-left) .stk-block-divider{--stk-dots-margin-left:0;--stk-dots-margin-right:auto}:where(.has-text-align-right) .stk-block-divider{--stk-dots-margin-right:0;--stk-dots-margin-left:auto}:where(.has-text-align-center) .stk-block-divider{--stk-dots-margin-right:auto;--stk-dots-margin-left:auto}.stk-block.stk-block-divider.has-text-align-center{--stk-dots-margin-right:auto;--stk-dots-margin-left:auto}.stk-block.stk-block-divider.has-text-align-right{--stk-dots-margin-right:0;--stk-dots-margin-left:auto}.stk-block.stk-block-divider.has-text-align-left{--stk-dots-margin-left:0;--stk-dots-margin-right:auto}.stk-block-feature>*>.stk-row{flex-wrap:var(--stk-feature-flex-wrap,nowrap)}.stk-row{flex-wrap:nowrap}.stk--hide-desktop,.stk--hide-desktop.stk-block{display:none!important}}@media only screen and (min-width:768px){:where(body:not(.wp-admin) .stk-block-column:first-child:nth-last-child(2)){flex:1 1 calc(50% - var(--stk-column-gap, 0px)*1/2)!important}:where(body:not(.wp-admin) .stk-block-column:nth-child(2):last-child){flex:1 1 calc(50% - var(--stk-column-gap, 0px)*1/2)!important}:where(body:not(.wp-admin) .stk-block-column:first-child:nth-last-child(3)){flex:1 1 calc(33.33333% - var(--stk-column-gap, 0px)*2/3)!important}:where(body:not(.wp-admin) .stk-block-column:nth-child(2):nth-last-child(2)){flex:1 1 calc(33.33333% - var(--stk-column-gap, 0px)*2/3)!important}:where(body:not(.wp-admin) .stk-block-column:nth-child(3):last-child){flex:1 1 calc(33.33333% - var(--stk-column-gap, 0px)*2/3)!important}:where(body:not(.wp-admin) .stk-block-column:first-child:nth-last-child(4)){flex:1 1 calc(25% - var(--stk-column-gap, 0px)*3/4)!important}:where(body:not(.wp-admin) .stk-block-column:nth-child(2):nth-last-child(3)){flex:1 1 calc(25% - var(--stk-column-gap, 0px)*3/4)!important}:where(body:not(.wp-admin) .stk-block-column:nth-child(3):nth-last-child(2)){flex:1 1 calc(25% - var(--stk-column-gap, 0px)*3/4)!important}:where(body:not(.wp-admin) .stk-block-column:nth-child(4):last-child){flex:1 1 calc(25% - var(--stk-column-gap, 0px)*3/4)!important}:where(body:not(.wp-admin) .stk-block-column:first-child:nth-last-child(5)){flex:1 1 calc(20% - var(--stk-column-gap, 0px)*4/5)!important}:where(body:not(.wp-admin) .stk-block-column:nth-child(2):nth-last-child(4)){flex:1 1 calc(20% - var(--stk-column-gap, 0px)*4/5)!important}:where(body:not(.wp-admin) .stk-block-column:nth-child(3):nth-last-child(3)){flex:1 1 calc(20% - var(--stk-column-gap, 0px)*4/5)!important}:where(body:not(.wp-admin) .stk-block-column:nth-child(4):nth-last-child(2)){flex:1 1 calc(20% - var(--stk-column-gap, 0px)*4/5)!important}:where(body:not(.wp-admin) .stk-block-column:nth-child(5):last-child){flex:1 1 calc(20% - var(--stk-column-gap, 0px)*4/5)!important}:where(body:not(.wp-admin) .stk-block-column:first-child:nth-last-child(6)){flex:1 1 calc(16.66667% - var(--stk-column-gap, 0px)*5/6)!important}:where(body:not(.wp-admin) .stk-block-column:nth-child(2):nth-last-child(5)){flex:1 1 calc(16.66667% - var(--stk-column-gap, 0px)*5/6)!important}:where(body:not(.wp-admin) .stk-block-column:nth-child(3):nth-last-child(4)){flex:1 1 calc(16.66667% - var(--stk-column-gap, 0px)*5/6)!important}:where(body:not(.wp-admin) .stk-block-column:nth-child(4):nth-last-child(3)){flex:1 1 calc(16.66667% - var(--stk-column-gap, 0px)*5/6)!important}:where(body:not(.wp-admin) .stk-block-column:nth-child(5):nth-last-child(2)){flex:1 1 calc(16.66667% - var(--stk-column-gap, 0px)*5/6)!important}:where(body:not(.wp-admin) .stk-block-column:nth-child(6):last-child){flex:1 1 calc(16.66667% - var(--stk-column-gap, 0px)*5/6)!important}.stk-block-tabs>.stk-inner-blocks.stk-block-tabs--vertical{grid-template-columns:auto 1fr auto}.stk-block-tabs>.stk-inner-blocks.stk-block-tabs--vertical>.stk-block-tab-labels:first-child{grid-column:1/2}.stk-block-tabs>.stk-inner-blocks.stk-block-tabs--vertical>.stk-block-tab-content:last-child{grid-column:2/4}.stk-block-tabs>.stk-inner-blocks.stk-block-tabs--vertical>.stk-block-tab-content:first-child{grid-column:1/3}.stk-block-tabs>.stk-inner-blocks.stk-block-tabs--vertical>.stk-block-tab-labels:last-child{grid-column:3/4}.stk-block .stk-block.aligncenter,.stk-block:is(.aligncenter,.alignwide,.alignfull)>.stk-content-align:not(.alignwide):not(.alignfull){margin-left:auto;margin-right:auto;max-width:var(--stk-block-default-width,var(--stk-block-width-default-detected,900px));width:100%}.stk-block .stk-block.alignwide,.stk-block:is(.aligncenter,.alignwide,.alignfull)>.stk-content-align.alignwide{margin-left:auto;margin-right:auto;max-width:var(--stk-block-wide-width,var(--stk-block-width-wide-detected,80vw));width:100%}.stk-row.stk-columns-2>.stk-column{flex:1 1 50%;max-width:50%}.stk-row.stk-columns-3>.stk-column{flex:1 1 33.3333333333%;max-width:33.3333333333%}.stk-row.stk-columns-4>.stk-column{flex:1 1 25%;max-width:25%}.stk-row.stk-columns-5>.stk-column{flex:1 1 20%;max-width:20%}.stk-row.stk-columns-6>.stk-column{flex:1 1 16.6666666667%;max-width:16.6666666667%}.stk-row.stk-columns-7>.stk-column{flex:1 1 14.2857142857%;max-width:14.2857142857%}.stk-row.stk-columns-8>.stk-column{flex:1 1 12.5%;max-width:12.5%}.stk-row.stk-columns-9>.stk-column{flex:1 1 11.1111111111%;max-width:11.1111111111%}.stk-row.stk-columns-10>.stk-column{flex:1 1 10%;max-width:10%}}@media only screen and (min-width:768px) and (max-width:1023px){.stk-button-group:is(.stk--collapse-on-tablet)>.block-editor-inner-blocks>.block-editor-block-list__layout>[data-block]{margin-inline-end:var(--stk-alignment-margin-right);margin-inline-start:var(--stk-alignment-margin-left)}:where(.has-text-align-left-tablet) .stk-block-divider{--stk-dots-margin-left:0;--stk-dots-margin-right:auto}:where(.has-text-align-right-tablet) .stk-block-divider{--stk-dots-margin-right:0;--stk-dots-margin-left:auto}:where(.has-text-align-center-tablet) .stk-block-divider{--stk-dots-margin-right:auto;--stk-dots-margin-left:auto}.stk--hide-tablet,.stk--hide-tablet.stk-block{display:none!important}.stk-button-group:is(.stk--collapse-on-tablet) .stk-block:is(.stk-block-button,.stk-block-icon-button){margin-inline-end:var(--stk-alignment-margin-right);margin-inline-start:var(--stk-alignment-margin-left)}}@media only screen and (max-width:1023px){.stk-block-button{min-width:-moz-fit-content;min-width:fit-content}.stk-block.stk-block-divider.has-text-align-center-tablet{--stk-dots-margin-right:auto;--stk-dots-margin-left:auto}.stk-block.stk-block-divider.has-text-align-right-tablet{--stk-dots-margin-right:0;--stk-dots-margin-left:auto}.stk-block.stk-block-divider.has-text-align-left-tablet{--stk-dots-margin-left:0;--stk-dots-margin-right:auto}.stk-block-timeline.stk-block-timeline__ios-polyfill{--fixed-bg:linear-gradient(to bottom,var(--line-accent-bg-color,#000) 0,var(--line-accent-bg-color-2,#000) var(--line-accent-bg-location,50%))}.has-text-align-center-tablet{--stk-alignment-padding-left:0;--stk-alignment-justify-content:center;--stk-alignment-text-align:center;--stk-alignment-margin-left:auto;--stk-alignment-margin-right:auto;text-align:var(--stk-alignment-text-align,start)}.has-text-align-left-tablet{--stk-alignment-justify-content:flex-start;--stk-alignment-text-align:start;--stk-alignment-margin-left:0;--stk-alignment-margin-right:auto;text-align:var(--stk-alignment-text-align,start)}.has-text-align-right-tablet{--stk-alignment-justify-content:flex-end;--stk-alignment-text-align:end;--stk-alignment-margin-left:auto;--stk-alignment-margin-right:0;text-align:var(--stk-alignment-text-align,start)}.has-text-align-justify-tablet{--stk-alignment-text-align:justify}.has-text-align-space-between-tablet{--stk-alignment-justify-content:space-between}.has-text-align-space-around-tablet{--stk-alignment-justify-content:space-around}.has-text-align-space-evenly-tablet{--stk-alignment-justify-content:space-evenly}}@media only screen and (max-width:767px){.stk-button-group:is(.stk--collapse-on-mobile)>.block-editor-inner-blocks>.block-editor-block-list__layout>[data-block],.stk-button-group:is(.stk--collapse-on-tablet)>.block-editor-inner-blocks>.block-editor-block-list__layout>[data-block]{margin-inline-end:var(--stk-alignment-margin-right);margin-inline-start:var(--stk-alignment-margin-left)}:where(.has-text-align-left-mobile) .stk-block-divider{--stk-dots-margin-left:0;--stk-dots-margin-right:auto}:where(.has-text-align-right-mobile) .stk-block-divider{--stk-dots-margin-right:0;--stk-dots-margin-left:auto}:where(.has-text-align-center-mobile) .stk-block-divider{--stk-dots-margin-right:auto;--stk-dots-margin-left:auto}.stk-block.stk-block-divider.has-text-align-center-mobile{--stk-dots-margin-right:auto;--stk-dots-margin-left:auto}.stk-block.stk-block-divider.has-text-align-right-mobile{--stk-dots-margin-right:0;--stk-dots-margin-left:auto}.stk-block.stk-block-divider.has-text-align-left-mobile{--stk-dots-margin-left:0;--stk-dots-margin-right:auto}.stk-block-carousel.stk--hide-mobile-arrows>.stk-block-carousel__content-wrapper>*>.stk-block-carousel__buttons,.stk-block-carousel.stk--hide-mobile-dots>.stk-block-carousel__content-wrapper>.stk-block-carousel__dots{display:none}.stk-block.stk-block-feature:is(.is-style-default,.is-style-horizontal)>.stk-container>.stk-inner-blocks.stk-block-content{flex-direction:column-reverse}.stk-block-posts{--stk-columns:1}.stk-block-tab-labels:not(.stk-block-tab-labels--wrap-mobile){overflow-x:auto!important;width:100%}.stk-block-tab-labels:not(.stk-block-tab-labels--wrap-mobile)::-webkit-scrollbar{height:0!important}.stk-block-tab-labels:not(.stk-block-tab-labels--wrap-mobile) .stk-block-tab-labels__wrapper{flex-wrap:nowrap;min-width:-webkit-fill-available;min-width:fill-available;width:max-content}.stk-block-tabs>.stk-inner-blocks{grid-template-columns:1fr}.stk-block-tabs>.stk-inner-blocks>.stk-block-tab-labels:last-child{grid-row:1/2}.stk-block.stk-block-timeline{--content-line:0!important;padding-top:0}.stk-block-timeline>.stk-inner-blocks{align-items:flex-start;grid-template-columns:var(--line-dot-size,16px) 1fr;grid-template-rows:auto 1fr;padding-left:16px}.stk-block-timeline>.stk-inner-blocks:after{inset-inline-start:calc(var(--line-dot-size, 16px)/2 - var(--line-bg-width, 3px)/2 + 16px)}.stk-block-timeline .stk-block-timeline__middle{inset-block-start:8px;inset-inline-start:16px;position:absolute}.stk-block-timeline .stk-block-timeline__content{grid-column:2/3;grid-row:2/3;text-align:start}.stk-block-timeline .stk-block-timeline__date{grid-column:2/3;grid-row:1/2;text-align:start}.stk-block-timeline>.stk-inner-blocks:after{bottom:calc(100% - var(--line-dot-size, 16px)/2 - .5em);top:calc(var(--line-dot-size, 16px)/2 + .5em)}.stk-block-timeline+.stk-block-timeline>.stk-inner-blocks:after{top:-16px}:root{--stk-block-margin-bottom:16px;--stk-column-margin:8px;--stk-container-padding:24px;--stk-container-padding-large:32px 24px;--stk-container-padding-small:8px 24px;--stk-block-background-padding:16px}.stk-block .stk-block:is(.aligncenter,.alignwide),.stk-block:is(.aligncenter,.alignwide,.alignfull)>.stk-content-align.alignwide,.stk-block:is(.aligncenter,.alignwide,.alignfull)>.stk-content-align:not(.alignwide):not(.alignfull){width:100%}.stk-column{flex:1 1 100%;max-width:100%}.stk--hide-mobile,.stk--hide-mobile.stk-block{display:none!important}.stk-button-group:is(.stk--collapse-on-mobile) .stk-block:is(.stk-block-button,.stk-block-icon-button),.stk-button-group:is(.stk--collapse-on-tablet) .stk-block:is(.stk-block-button,.stk-block-icon-button){margin-inline-end:var(--stk-alignment-margin-right);margin-inline-start:var(--stk-alignment-margin-left)}.has-text-align-center-mobile{--stk-alignment-padding-left:0;--stk-alignment-justify-content:center;--stk-alignment-text-align:center;--stk-alignment-margin-left:auto;--stk-alignment-margin-right:auto;text-align:var(--stk-alignment-text-align,start)}.has-text-align-left-mobile{--stk-alignment-justify-content:flex-start;--stk-alignment-text-align:start;--stk-alignment-margin-left:0;--stk-alignment-margin-right:auto;text-align:var(--stk-alignment-text-align,start)}.has-text-align-right-mobile{--stk-alignment-justify-content:flex-end;--stk-alignment-text-align:end;--stk-alignment-margin-left:auto;--stk-alignment-margin-right:0;text-align:var(--stk-alignment-text-align,start)}.has-text-align-justify-mobile{--stk-alignment-text-align:justify}.has-text-align-space-between-mobile{--stk-alignment-justify-content:space-between}.has-text-align-space-around-mobile{--stk-alignment-justify-content:space-around}.has-text-align-space-evenly-mobile{--stk-alignment-justify-content:space-evenly}.entry-content .stk-block.stk-has-top-separator{padding-top:23vw}.entry-content .stk-block.stk-has-bottom-separator{padding-bottom:23vw}.entry-content .stk-block .stk-separator__wrapper{height:23vw}}#end-resizable-editor-section{display:none}
STK_RESPONSIVE_CSS;
	}
}

if ( ! class_exists( 'Stackable_Dynamic_Breakpoints' ) ) {
	class Stackable_Dynamic_Breakpoints {

		// Holds the value of the saved or default breakpoints
		private $dynamic_breakpoints = false;

		/**
		 * Add our hooks.
		 */
		function __construct() {
			// Register breakpoint settings.
			add_action( 'admin_init', array( $this, 'register_settings' ) );
			add_action( 'rest_api_init', array( $this, 'register_settings' ) );

			if ( is_frontend() ) {
				// Add a filter for replacing shortcut media queries before the breakpoint adjustment.
				add_filter( 'stackable_frontend_css', array( $this, 'replace_shortcut_media_queries' ), 9 );

				// Add our filter that adjusts all CSS that we print out.
				add_filter( 'stackable_frontend_css', array( $this, 'adjust_breakpoints' ) );

				// If there are adjusted breakpoints, enqueue our adjusted responsive css.
				add_action( 'stackable_block_enqueue_frontend_assets', array( $this, 'enqueue_adjusted_responsive_css' ) );

				// Adjust the styles outputted by Stackable blocks.
				// 11 Priority, do this last because changing style can affect inline css optimization.
				add_filter( 'render_block', array( $this, 'adjust_block_styles' ), 11, 2 );
			}

			// Add the default breakpoints to the localized settings.
			add_filter( 'stackable_localize_settings_script', array( $this, 'add_default_breakpoints' ) );
		}

		/**
		 * Get the dynamic breakpoints saved by the user.
		 *
		 * @return Array
		 */
		public function get_dynamic_breakpoints() {
			// Allow others to set default breakpoints.
			$breakpoints = apply_filters( 'stackable_responsive_breakpoints', array(
				'tablet' => '',
				'mobile' => '',
			) );

			// Check if there are saved custom breakpoints from our settings.
			$saved_breakpoints = get_option( 'stackable_dynamic_breakpoints' );
			if ( ! empty( $saved_breakpoints ) ) {
				// Set breakpoints for tablet and mobile if they are set.
				if ( ! empty( $saved_breakpoints['tablet'] ) ) {
					$breakpoints['tablet'] = $saved_breakpoints['tablet'];
				}
				if ( ! empty( $saved_breakpoints['mobile'] ) ) {
					$breakpoints['mobile'] = $saved_breakpoints['mobile'];
				}
			}

			$this->dynamic_breakpoints = $breakpoints;
			return $this->dynamic_breakpoints;
		}

		/**
		 * Add the default breakpoints to the localized settings to be used for
		 * the default placeholder in the settings.
		 *
		 * @param Array $args
		 * @return Array
		 */
		public function add_default_breakpoints( $args ) {
			$args['defaultBreakpoints'] = apply_filters( 'stackable_responsive_breakpoints', array(
				'tablet' => '1024',
				'mobile' => '768',
			) );
			return $args;
		}

		/**
		 * Register the setting where the user's dynamic breakpoints will be
		 * saved.
		 *
		 * @return void
		 */
		public function register_settings() {
			register_setting(
				'stackable_dynamic_breakpoints',
				'stackable_dynamic_breakpoints',
				array(
					'type' => 'object',
					'description' => __( 'Custom dynamic breakpoints', STACKABLE_I18N ),
					'sanitize_callback' => array( $this, 'sanitize_array_setting' ),
					'show_in_rest' => array(
						'schema' => array(
							'type' => 'object',
							'properties' => array(
								'tablet' => array(
									'type' => 'string',
								),
								'mobile' => array(
									'type' => 'string',
								),
							)
						)
					),
					'default' => array(
						'tablet' => '',
						'mobile' => '',
					),
				)
			);
		}

		public function sanitize_array_setting( $input ) {
			return ! is_array( $input ) ? array( array() ) : $input;
		}

		/**
		 * True if there are any custom breakpoints assigned by the user.
		 *
		 * @return boolean
		 */
		public function has_custom_breakpoints() {
			$breakpoints = $this->dynamic_breakpoints;
			if ( $breakpoints == false ) {
				$breakpoints = $this->get_dynamic_breakpoints();
			}
			return ! empty( $breakpoints['tablet'] ) || ! empty( $breakpoints['mobile'] );
		}

		/**
		 * Replace shortcut media queries in the given CSS.
		 *
		 * @param String $css
		 * @return String adjusted CSS
		 */
		public function replace_shortcut_media_queries( $css ) {
			$css = str_replace( '@media tablet', '@media only screen and (max-width: 1024px)', $css );
			$css = str_replace( '@media mobile', '@media only screen and (max-width: 768px)', $css );

			return $css;
		}

		/**
		 * Adjust media query breakpoints in the given CSS.
		 *
		 * @param String $css
		 * @return String adjusted CSS
		 */
		public function adjust_breakpoints( $css ) {
			if ( ! $this->has_custom_breakpoints() ) {
				return $css;
			}

			$breakpoints = $this->dynamic_breakpoints;
			$new_tablet = $breakpoints['tablet'];
			$new_mobile = $breakpoints['mobile'];


			if ( $new_tablet === '1024' && $new_mobile === '768' ) {
				return $css;
			}

			// Handle CSS optimized values where there are no spaces between the
			// colon and the value and if there is a space between the colon and
			// the value.
			if ( ! empty( $new_tablet ) ) {
				// Check if the style generated contains old breakpoints that we need to replace.
				$has_old_tablet = strpos( $css, 'width: 1024px)' ) !== false ||
				                  strpos( $css, 'width:1024px)' ) !== false;
				$has_old_tablet_minus_1 = strpos( $css, 'width: 1023px)' ) !== false ||
				                          strpos( $css, 'width:1023px)' ) !== false;

				if ( $has_old_tablet ) {
					$css = preg_replace( "/(@media[^{]+)width:\s*1024px/m", "$1width:" . $new_tablet . "px", $css );
				}
				if ( $has_old_tablet_minus_1 ) {
					$css = preg_replace( "/(@media[^{]+)width:\s*1023px/m", "$1width:" . ( $new_tablet - 1 ) . "px", $css );
				}
			}

			// Mobile version
			if ( ! empty( $new_mobile ) ) {

				// Check if the style generated contains old breakpoints that we need to replace.
				$has_old_mobile = strpos( $css, 'width: 768px)' ) !== false ||
				                  strpos( $css, 'width:768px)' ) !== false;
				$has_old_mobile_minus_1 = strpos( $css, 'width: 767px)' ) !== false ||
				                          strpos( $css, 'width:767px)' ) !== false;

				if ( $has_old_mobile ) {
					$css = preg_replace( "/(@media[^{]+)width:\s*768px/m", "$1width:" . $new_mobile . "px", $css );
				}
				if ( $has_old_mobile_minus_1 ) {
					$css = preg_replace( "/(@media[^{]+)width:\s*767px/m", "$1width:" . ( $new_mobile - 1 ) . "px", $css );
				}
			}

			return $css;
		}

		/**
		 * Dequeue the responsive css, and load them inline and run them on our css
		 * filter.
		 *
		 * @return void
		 */
		public function enqueue_adjusted_responsive_css() {
			if ( ! $this->has_custom_breakpoints() ) {
				return;
			}

			$css = stackable_get_responsive_css();
			$css = apply_filters( 'stackable_frontend_css', $css );
			wp_add_inline_style( 'ugb-style-css', $css );

			wp_dequeue_style( 'ugb-style-css-responsive' );
		}

		/**
		 * Run our block output on the css filter.
		 *
		 * @param String $block_content
		 * @param Array $block
		 * @return void
		 */
		public function adjust_block_styles( $block_content, $block ) {
			if ( ! $this->has_custom_breakpoints() ) {
				return $block_content;
			}

			if ( $block_content === null ) {
				return $block_content;
			}

			if ( ! isset( $block['blockName'] ) || strpos( $block['blockName'], 'stackable/' ) === false ) {
				return $block_content;
			}

			return apply_filters( 'stackable_frontend_css', $block_content );
		}
	}

	new Stackable_Dynamic_Breakpoints();
}
