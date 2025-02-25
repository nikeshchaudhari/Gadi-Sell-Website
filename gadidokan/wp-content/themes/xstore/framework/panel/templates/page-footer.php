<?php if ( ! defined( 'ABSPATH' ) ) exit( 'No direct script access allowed' );
/**
 * Template "Footer" for 8theme dashboard.
 *
 * @since   6.0.2
 * @version 1.0.1
 */

$xstore_branding_settings = get_option( 'xstore_white_label_branding_settings', array() );

$settings                 = array();
$settings['hide_footer'] = false;
$settings['brand_logo'] = ETHEME_CODE_IMAGES . 'wp-icon.svg';
$settings['author_uri'] = 'https://www.8theme.com/';

if ( count($xstore_branding_settings) ) {
    if (isset($xstore_branding_settings['control_panel'])) {
        if ($xstore_branding_settings['control_panel']['icon']) {
            $settings['brand_logo'] = $xstore_branding_settings['control_panel']['icon'];
        }
        if ( isset($xstore_branding_settings['control_panel']['hide_footer']) && $xstore_branding_settings['control_panel']['hide_footer'] ) {
            $settings['hide_footer'] = true;
        }
    }
    if (isset($xstore_branding_settings['plugins_data'])) {
        if (isset($xstore_branding_settings['plugins_data']['author_uri']) && !empty($xstore_branding_settings['plugins_data']['author_uri'])) {
            $settings['author_uri'] = $xstore_branding_settings['plugins_data']['author_uri'];
        }
    }
}

    if ( !$settings['hide_footer'] ) : ?>
	<div class="etheme-page-footer">
        <a href="<?php echo esc_url($settings['author_uri']); ?>" rel="nofollow" target="_blank" class="logo">
            <svg width="84" height="18" viewBox="0 0 84 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="1" y="1" width="16" height="16" rx="2" fill="var(--et_admin_white2dark-color, #fff)" stroke="currentColor" stroke-width="2"/>
            <circle cx="11.5715" cy="9.00001" r="2.28571" stroke="var(--et_admin_dark2white-color, #222)" stroke-width="2"/>
            <circle cx="6.4286" cy="9.00001" r="2.28571" stroke="var(--et_admin_dark2white-color, #222)" stroke-width="2"/>
            <path d="M26.7146 16.0568C26.0108 16.0568 25.659 15.8669 25.659 15.487V4.46385H22.2731C21.9145 4.46385 21.7353 4.18219 21.7353 3.61893V3.10806C21.7353 2.5448 21.9145 2.26314 22.2731 2.26314H31.654C32.0125 2.26314 32.1918 2.5448 32.1918 3.10806V3.61893C32.1918 4.18219 32.0125 4.46385 31.654 4.46385H28.288V15.487C28.288 15.8669 27.9361 16.0568 27.2324 16.0568H26.7146ZM34.9568 16.0568C34.2531 16.0568 33.9012 15.8669 33.9012 15.487V2.79367C33.9012 2.41377 34.2531 2.22385 34.9568 2.22385H35.4746C36.1784 2.22385 36.5302 2.41377 36.5302 2.79367V7.88279H42.5452V2.79367C42.5452 2.41377 42.8969 2.22385 43.6008 2.22385H44.1187C44.8226 2.22385 45.1743 2.41377 45.1743 2.79367V15.487C45.1743 15.8669 44.8226 16.0568 44.1187 16.0568H43.6008C42.8969 16.0568 42.5452 15.8669 42.5452 15.487V10.1031H36.5302V15.487C36.5302 15.8669 36.1784 16.0568 35.4746 16.0568H34.9568ZM49.0462 16.0175C48.5551 16.0175 48.3092 15.7752 48.3092 15.2905V2.99016C48.3092 2.5055 48.5551 2.26314 49.0462 2.26314H56.0172C56.3757 2.26314 56.5549 2.5448 56.5549 3.10806V3.61893C56.5549 4.18219 56.3757 4.46385 56.0172 4.46385H50.9184V7.88279H55.4595C55.818 7.88279 55.9972 8.16445 55.9972 8.72771V9.23858C55.9972 9.80184 55.818 10.0835 55.4595 10.0835H50.9184V13.8168H56.0371C56.3956 13.8168 56.5748 14.0985 56.5748 14.6617V15.1726C56.5748 15.7359 56.3956 16.0175 56.0371 16.0175H49.0462ZM65.3959 12.5396C65.0908 12.5396 64.8649 12.4283 64.7187 12.2056L61.8904 7.27367C61.7977 7.1427 61.7112 7.01166 61.6315 6.88069C61.5655 6.74971 61.4989 6.61217 61.4323 6.46806L61.3527 6.48771C61.3663 6.65798 61.3726 6.82831 61.3726 6.99858C61.3726 7.15578 61.3726 7.31954 61.3726 7.48981V15.487C61.3726 15.8669 61.0209 16.0568 60.317 16.0568H59.8788C59.1754 16.0568 58.8232 15.8669 58.8232 15.487V2.79367C58.8232 2.41377 59.1754 2.22385 59.8788 2.22385H60.8149C61.0938 2.22385 61.3265 2.26314 61.512 2.34174C61.7112 2.40726 61.8506 2.52515 61.9303 2.69543L65.3959 8.72771C65.4493 8.81938 65.5023 8.9242 65.5552 9.04209C65.6218 9.14691 65.6747 9.25823 65.7145 9.37613C65.7544 9.25823 65.8079 9.14034 65.8739 9.02244C65.9404 8.90455 65.9934 8.79973 66.0332 8.70806L69.4988 2.69543C69.5921 2.52515 69.7315 2.40726 69.917 2.34174C70.1162 2.26314 70.349 2.22385 70.6141 2.22385H71.5303C72.2343 2.22385 72.5859 2.41377 72.5859 2.79367V15.487C72.5859 15.8669 72.2343 16.0568 71.5303 16.0568H71.0922C70.3888 16.0568 70.0365 15.8669 70.0365 15.487V7.52911C70.0365 7.35884 70.0365 7.19507 70.0365 7.03788C70.0502 6.86761 70.0565 6.69728 70.0565 6.527L69.9768 6.50736C69.9108 6.65147 69.8374 6.78901 69.7577 6.91999C69.6917 7.05096 69.612 7.18199 69.5187 7.31297L66.7104 12.2056C66.5647 12.4283 66.3388 12.5396 66.0332 12.5396H65.3959ZM76.3065 16.0175C75.8148 16.0175 75.5695 15.7752 75.5695 15.2905V2.99016C75.5695 2.5055 75.8148 2.26314 76.3065 2.26314H83.2775C83.636 2.26314 83.8152 2.5448 83.8152 3.10806V3.61893C83.8152 4.18219 83.636 4.46385 83.2775 4.46385H78.1787V7.88279H82.7198C83.0783 7.88279 83.2575 8.16445 83.2575 8.72771V9.23858C83.2575 9.80184 83.0783 10.0835 82.7198 10.0835H78.1787V13.8168H83.2974C83.6559 13.8168 83.8351 14.0985 83.8351 14.6617V15.1726C83.8351 15.7359 83.6559 16.0175 83.2974 16.0175H76.3065Z" fill="currentColor"/>
        </svg>
        </a>

        <?php
        $footer_links = array(
            array(
                'title' => esc_html__('Documentation', 'xstore'),
                'link' => etheme_documentation_url(false, false),
            ),
            array(
                'title' => esc_html__('Support Forum', 'xstore'),
                'link' => etheme_support_forum_url(),
            ),
            array(
                'title' => esc_html__('Video Tutorials', 'xstore'),
                'link' => 'https://www.youtube.com/watch?v=i7STFGZapx8&list=PLMqMSqDgPNmCCyem_z9l2ZJ1owQUaFCE3&index=1',
            ),
            array(
                'title' => esc_html__('Contacts', 'xstore'),
                'link' => etheme_contact_us_url(),
            ),
            array(
                'title' => esc_html__('FAQ', 'xstore'),
                'link' => has_filter('etheme_support_forum_url') ? etheme_support_forum_url() : 'https://www.8theme.com/faq/',
            ),
        );
        ?>
        <ul class="etheme-page-footer-main-menu">
            <?php
            foreach ($footer_links as $footer_link) { ?>
                <li>
                    <a href="<?php echo esc_url($footer_link['link']); ?>" rel="nofollow" target="_blank">
                        <?php echo esc_html($footer_link['title']); ?>
                    </a>
                </li>
            <?php } ?>
        </ul>

        <?php
        $footer_socials = array(
            array(
                'title' => esc_html__('Facebook', 'xstore'),
                'link' => 'https://www.facebook.com/8theme/',
                'icon' => '<svg width="9" height="17" viewBox="0 0 9 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.616 5.848V3.723C5.616 3.128 6.12 2.669 6.732 2.669H7.848V0H5.616C3.762 0 2.25 1.428 2.25 3.196V5.848H0V8.5H2.25V17H5.634V8.5H7.884L9 5.848H5.616Z" fill="currentColor"/>
                </svg>'
            ),
            array(
                'title' => esc_html__('Instagram', 'xstore'),
                'link' => 'https://www.instagram.com/8theme/',
                'icon' => '<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_2684_2586)">
<path d="M11.696 0H5.304C2.38 0 0 2.38 0 5.304V11.679C0 14.62 2.38 17 5.304 17H11.679C14.62 17 17 14.62 17 11.696V5.304C17 2.38 14.62 0 11.696 0ZM15.402 11.696C15.402 13.753 13.736 15.419 11.679 15.419H5.304C3.247 15.419 1.581 13.753 1.581 11.696V5.304C1.581 3.247 3.247 1.581 5.304 1.581H11.679C13.736 1.581 15.402 3.247 15.402 5.304V11.696ZM8.5 4.25C6.154 4.25 4.25 6.154 4.25 8.5C4.25 10.846 6.154 12.75 8.5 12.75C10.846 12.75 12.75 10.846 12.75 8.5C12.75 6.154 10.846 4.25 8.5 4.25ZM8.5 11.152C7.038 11.152 5.848 9.962 5.848 8.5C5.848 7.038 7.038 5.848 8.5 5.848C9.962 5.848 11.152 7.038 11.152 8.5C11.152 9.962 9.962 11.152 8.5 11.152ZM13.634 3.927C13.634 4.23654 13.3825 4.488 13.073 4.488C12.7635 4.488 12.512 4.23654 12.512 3.927C12.512 3.61746 12.7635 3.366 13.073 3.366C13.3825 3.366 13.634 3.61746 13.634 3.927Z" fill="currentColor"/>
</g>
<defs>
<clipPath id="clip0_2684_2586">
<rect width="17" height="17" fill="var(--et_admin_white2dark-color, #fff)"/>
</clipPath>
</defs>
</svg>'
            ),
            array(
                'title' => esc_html__('Telegram', 'xstore'),
                'link' => 'https://t.me/etheme',
                'icon' => '<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0.282679 7.19685L3.96935 8.65885L5.39601 13.535C5.48735 13.8474 5.84668 13.9628 6.08535 13.7553L8.14068 11.9753C8.35601 11.789 8.66268 11.7798 8.88801 11.9533L12.5947 14.8128C12.85 15.0098 13.2113 14.861 13.2753 14.5338L15.9907 0.656807C16.0607 0.299099 15.7293 0.000181913 15.4087 0.131932L0.278013 6.33339C-0.0953207 6.48639 -0.0913207 7.0481 0.282679 7.19685ZM5.16668 7.88039L12.372 3.16502C12.5013 3.08072 12.6347 3.26631 12.5233 3.3761L6.57668 9.24889C6.36735 9.45572 6.23268 9.73197 6.19468 10.0323L5.99201 11.6275C5.96535 11.8407 5.68335 11.8612 5.62801 11.6558L4.84868 8.74739C4.75935 8.41589 4.88935 8.06101 5.16535 7.88039H5.16668Z" fill="currentColor"/>
</svg>'
            ),
            array(
                'title' => esc_html__('Youtube', 'xstore'),
                'link' => 'https://www.youtube.com/watch?v=Eq16hs-1PUs&list=PLMqMSqDgPNmCCyem_z9l2ZJ1owQUaFCE3',
                'icon' => '<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.419 8.602C15.249 7.837 14.62 7.276 13.872 7.191C12.087 6.987 10.285 6.987 8.49999 6.987C6.71499 6.987 4.91299 6.987 3.12799 7.191C2.37999 7.276 1.75099 7.837 1.58099 8.602C1.32599 9.69 1.32599 10.88 1.32599 12.002C1.32599 13.124 1.32599 14.314 1.58099 15.402C1.75099 16.167 2.37999 16.728 3.12799 16.813C4.91299 17 6.69799 17 8.49999 17C10.285 17 12.087 17 13.872 16.796C14.62 16.711 15.249 16.15 15.419 15.385C15.674 14.297 15.674 13.107 15.674 11.985C15.674 10.88 15.674 9.69 15.419 8.602ZM5.42299 9.452H4.38599V14.96H3.41699V9.452H2.39699V8.551H5.42299V9.452ZM8.04099 14.96H7.17399V14.45C6.83399 14.841 6.49399 15.045 6.18799 15.045C5.91599 15.045 5.71199 14.926 5.62699 14.688C5.57599 14.535 5.55899 14.314 5.55899 13.974V10.183H6.42599V13.702C6.42599 13.906 6.42599 14.008 6.42599 14.042C6.44299 14.178 6.51099 14.246 6.62999 14.246C6.79999 14.246 6.98699 14.11 7.17399 13.838V10.183H8.04099V14.96ZM11.339 13.532C11.339 13.974 11.305 14.297 11.254 14.501C11.135 14.858 10.914 15.045 10.557 15.045C10.251 15.045 9.94499 14.875 9.65599 14.518V14.96H8.78899V8.551H9.65599V10.642C9.92799 10.302 10.234 10.115 10.557 10.115C10.897 10.115 11.135 10.302 11.254 10.659C11.305 10.846 11.339 11.169 11.339 11.628V13.532ZM14.603 12.733H12.869V13.583C12.869 14.025 13.022 14.246 13.311 14.246C13.532 14.246 13.651 14.127 13.702 13.906C13.702 13.855 13.719 13.668 13.719 13.311H14.603V13.43C14.603 13.702 14.586 13.906 14.586 13.991C14.552 14.178 14.484 14.365 14.382 14.518C14.144 14.858 13.787 15.045 13.328 15.045C12.869 15.045 12.529 14.875 12.274 14.552C12.087 14.314 12.002 13.94 12.002 13.43V11.747C12.002 11.237 12.087 10.863 12.274 10.625C12.529 10.302 12.869 10.132 13.311 10.132C13.753 10.132 14.093 10.302 14.331 10.625C14.518 10.863 14.603 11.237 14.603 11.747V12.733ZM13.311 10.897C13.022 10.897 12.869 11.118 12.869 11.56V12.002H13.736V11.56C13.736 11.118 13.6 10.897 13.311 10.897ZM10.081 10.897C9.94499 10.897 9.79199 10.965 9.65599 11.101V14.025C9.80899 14.178 9.94499 14.246 10.081 14.246C10.336 14.246 10.455 14.025 10.455 13.6V11.56C10.472 11.118 10.336 10.897 10.081 10.897ZM10.574 6.562C10.897 6.562 11.22 6.375 11.577 5.967V6.494H12.461V1.649H11.577V5.338C11.39 5.61 11.203 5.746 11.016 5.746C10.897 5.746 10.829 5.678 10.812 5.542C10.795 5.508 10.795 5.406 10.795 5.202V1.649H9.92799V5.474C9.92799 5.814 9.96199 6.052 10.013 6.188C10.098 6.443 10.285 6.562 10.574 6.562ZM4.47099 3.859V6.494H5.43999V3.859L6.61299 0H5.62699L4.96399 2.55L4.28399 0H3.26399C3.46799 0.595 3.68899 1.207 3.89299 1.802C4.18199 2.72 4.38599 3.4 4.47099 3.859ZM7.92199 6.562C8.36399 6.562 8.70399 6.392 8.94199 6.069C9.12899 5.831 9.21399 5.44 9.21399 4.93V3.23C9.21399 2.72 9.12899 2.329 8.94199 2.091C8.70399 1.768 8.36399 1.598 7.92199 1.598C7.47999 1.598 7.13999 1.768 6.90199 2.091C6.71499 2.329 6.62999 2.72 6.62999 3.23V4.93C6.62999 5.44 6.71499 5.831 6.90199 6.069C7.13999 6.392 7.47999 6.562 7.92199 6.562ZM7.49699 3.06C7.49699 2.618 7.63299 2.397 7.92199 2.397C8.21099 2.397 8.34699 2.618 8.34699 3.06V5.1C8.34699 5.542 8.21099 5.763 7.92199 5.763C7.63299 5.763 7.49699 5.542 7.49699 5.1V3.06Z" fill="currentColor"/>
</svg>'
            ),
        );
        ?>
        <ul class="socials">
            <?php
            foreach ($footer_socials as $footer_social) { ?>
                <li>
                    <a href="<?php echo esc_url($footer_social['link']); ?>" rel="nofollow" target="_blank" class="mtips mtips-top">
                        <?php if ( $footer_social['icon'] ) : ?>
                            <?php echo '<span>'.$footer_social['icon'].'</span>'; ?>
                        <?php endif; ?>
                        <span class="mt-mes"><?php echo esc_html($footer_social['title']); ?></span>
                    </a>
                </li>
            <?php } ?>
        </ul>

        <div class="etheme-page-copyrights">
            <p>
                <?php
                    echo sprintf(esc_html__('We appreciate your choice of the %s Theme. Your flawless experience is our privilege.', 'xstore'), apply_filters('etheme_theme_label', 'XStore'));
                ?>
            </p>
            <p>
                <a href="https://1.envato.market/2rXmmA" target="_blank" rel="nofollow">
                    <?php
                        echo sprintf(esc_html__('Buy %s License', 'xstore'), apply_filters('etheme_theme_label', 'XStore'));
                    ?>
                </a>
            </p>
        </div>
    </div>
        <input type="hidden" name="nonce_etheme-installation_video" value="<?php echo wp_create_nonce( 'etheme_installation_video' ); ?>">
    <?php endif; ?>
</div>