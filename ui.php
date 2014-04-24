<?php

/*
Plugin Name: WordPress UI
Description: WordPress UI
Version: 1.0
Author: avryl
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

if ( ! class_exists( 'WP_UI' ) ) {

	class WP_UI {

		private $headers = array(
			'title' => 'UI Page',
			'scripts' => 'Scripts',
			'styles' => 'Styles'
		);

		private $templates = array();

		public function __construct() {

			add_action( 'admin_menu', array( $this, 'admin_menu' ) );
			add_action( 'admin_enqueue_scripts', array( $this, 'admin_enqueue_scripts' ) );

			$templates = glob( plugin_dir_path( __FILE__ ) . 'templates/wp-ui-*.php' );

			foreach ( $templates as $template ) {

				$data = get_file_data( $template, $this->headers );

				if ( ! empty( $data['title'] ) ) {

					$data['template'] = $template;
					$data['slug'] = str_replace( '.php', '', basename( $template ) );

					if ( ! empty( $data['scripts'] ) ) {

						$data['scripts'] = explode( ',', $data['scripts'] );
						$data['scripts'] = array_map( 'trim', $data['scripts'] );
						$data['scripts'] = array_map( 'strtolower', $data['scripts'] );
						$data['scripts'] = array_filter( $data['scripts'] );
						$data['scripts'] = array_unique( $data['scripts'] );

					} else {

						unset( $data['scripts'] );

					}

					if ( ! empty( $data['styles'] ) ) {

						$data['styles'] = explode( ',', $data['styles'] );
						$data['styles'] = array_map( 'trim', $data['styles'] );
						$data['styles'] = array_map( 'strtolower', $data['styles'] );
						$data['styles'] = array_filter( $data['styles'] );
						$data['styles'] = array_unique( $data['styles'] );

					} else {

						unset( $data['styles'] );

					}

					$this->templates[$data['slug']] = $data;

				}

			}

		}

		public function admin_menu() {

			add_menu_page( 'UI', 'UI', 'read', 'wp-ui', array( $this, 'contents' ), 'dashicons-art' );

			foreach ( $this->templates as $template => $data ) {

				add_submenu_page( 'wp-ui', $data['title'], $data['title'], 'read', $data['slug'], array( $this, 'load_template' ) );

			}

		}

		public function contents() {

			?>
			<div class="wrap">
				<h2><?php _e( 'WordPress UI' ); ?></h2>
				<ul class="ul-disc">
				<?php foreach( $this->templates as $template => $data ) { ?>
					<li>
						<a href="<?php echo esc_url( admin_url( 'admin.php?page=' . $data['slug'] ) ); ?>"><?php echo esc_html( $data['title'] ); ?></a>
					</li>
				<?php } ?>
				</ul>
			</div>
			<?php

		}
		public function load_template() {

			if ( ! empty( $_GET['page'] ) && is_array( $this->templates[$_GET['page']] ) ) {

				?>
				<div class="wrap">
					<h2><?php echo $this->templates[$_GET['page']]['title']; ?></h2>
					<?php include( $this->templates[$_GET['page']]['template'] ); ?>
				</div>
				<?php

			}

		}

		public function admin_enqueue_scripts() {

			wp_register_style( 'jquery-ui-all', plugins_url( 'css/jquery-ui/all.css', __FILE__ ) );

			if ( ! empty( $_GET['page'] ) &&
				isset( $this->templates[$_GET['page']] ) &&
				is_array( $this->templates[$_GET['page']] ) &&
				isset( $this->templates[$_GET['page']]['scripts'] ) &&
				is_array( $this->templates[$_GET['page']]['scripts'] ) ) {

				foreach ( $this->templates[$_GET['page']]['scripts'] as $script ) {

					wp_enqueue_script( $script );

				}

			}

			if ( ! empty( $_GET['page'] ) &&
				isset( $this->templates[$_GET['page']] ) &&
				is_array( $this->templates[$_GET['page']] ) &&
				isset( $this->templates[$_GET['page']]['styles'] ) &&
				is_array( $this->templates[$_GET['page']]['styles'] ) ) {

				foreach ( $this->templates[$_GET['page']]['styles'] as $style ) {

					wp_enqueue_style( $style );

				}

			}

		}

	}

	new WP_UI;

}
