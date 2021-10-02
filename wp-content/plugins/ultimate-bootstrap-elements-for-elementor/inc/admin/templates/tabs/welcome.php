<?php
if (!defined('ABSPATH')) {
    exit;
}
/**
 * @var $tab string
 */
?>
<div class="ube-admin-tab-<?php echo esc_attr($tab) ?>">
	<div class="ube-admin-row">
		<div class="ube-admin-col ube-admin-col-6">
			<div class="ube-admin-box">
				<img src="<?php echo esc_url(ube_get_asset_url('assets/images/ube-preview.png')) ?>" alt="<?php echo esc_attr__('Ultimate Bootstrap Elements', 'ube') ?>">
			</div>
		</div>

		<div class="ube-admin-col ube-admin-col-6 ube-admin-d-flex">
			<div class="ube-admin-box">
				<div class="ube-admin-box-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M1 2.828v9.923c.918-.35 2.107-.692 3.287-.81 1.094-.111 2.278-.039 3.213.492V2.687c-.654-.689-1.782-.886-3.112-.752-1.234.124-2.503.523-3.388.893zm7.5-.141v9.746c.935-.53 2.12-.603 3.213-.493 1.18.12 2.37.461 3.287.811V2.828c-.885-.37-2.154-.769-3.388-.893-1.33-.134-2.458.063-3.112.752zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
					</svg>
				</div>
				<div class="ube-admin-box-content">
					<h4><?php echo esc_html__('Documentation', 'ube') ?></h4>
					<p>
						<?php echo esc_html__('Get started by spending some time with the documentation to get familiar with Bootstrap Elements for Elementor. Build awesome websites for you or your clients with ease.', 'ube') ?>
					</p>
					<p>
						<a href="<?php echo esc_url(UBE_DEMO_LINK) ?>" class="button button-primary">
							<?php esc_html_e('Documentation','ube')?>
						</a>
					</p>
				</div>
			</div>

			<div class="ube-admin-box">
				<div class="ube-admin-box-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play-circle" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
						<path fill-rule="evenodd" d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z"/>
					</svg>
				</div>
				<div class="ube-admin-box-content">
					<h4><?php echo esc_html__('Video Tutorial', 'ube') ?></h4>
					<p>
						<?php esc_html_e('Get started by spending some time with the documentation to get familiar with Bootstrap Elements for Elementor.','ube')?>
					</p>
					<p>
						<a href="<?php echo esc_url(UBE_DEMO_LINK) ?>" class="button button-primary">
							<?php esc_html_e('View Videos','ube')?>
						</a>
					</p>
				</div>
			</div>
		</div>

		<div class="ube-admin-col ube-admin-col-12 ube-admin-d-flex">
			<div class="ube-admin-box">
				<div class="ube-admin-box-content">
					<div class="ube-admin-box-theme">
						<a target="_blank" href="https://themeforest.net/item/furnitor-minimalism-furniture-store-wordpress-theme/33029939&utm_source=wp&utm_medium=ube_welcome&utm_content=click_logo">
							<img src="<?php echo esc_url(ube_get_plugin_url('assets/images/furnitor-logo.png')) ?>" alt="<?php echo esc_attr__('Furnitor – Minimalism Furniture Store WordPress Theme', 'ube') ?>">
						</a>
						<div>
							<h5>
								<a target="_blank" href="https://themeforest.net/item/furnitor-minimalism-furniture-store-wordpress-theme/33029939&utm_source=wp&utm_medium=ube_welcome&utm_content=click_title"><?php echo esc_html__('Furnitor – Minimalism Furniture Store WordPress Theme', 'ube') ?></a>
							</h5>
							<p><?php echo esc_html__('Furnitor is a modern and flexible WooCommerce WordPress theme. This theme is suited for furnitures store, shop and accessories store. Our theme is based on WordPress platform, so we assume that you have already WordPress installed and ready to go.', 'ube') ?></p>
							<p>
								<a target="_blank" href="https://furnitor-elementor.g5plus.net/" class="button button-small button-secondary"><?php echo esc_html__('View Demo', 'ube') ?></a>
								<a target="_blank" href="https://themeforest.net/item/furnitor-minimalism-furniture-store-wordpress-theme/33029939&utm_source=wp&utm_medium=ube_welcome&utm_content=buy_now_furnitor" class="button button-small button-primary"><?php echo esc_html__('Buy Now', 'ube') ?></a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
