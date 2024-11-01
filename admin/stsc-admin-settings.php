<?php
if ( ! function_exists( 'stsc_register_settings' ) ) {
  function stsc_register_settings() {
    add_option( 'stsc_Elements', '');
    add_option( 'stsc_min_screen', '480');
    register_setting( 'stsc_options_group', 'stsc_Elements', 'stsc_Settings_callback' );
    register_setting( 'stsc_options_group', 'stsc_min_screen', 'stsc_Settings_callback' );
  }
  add_action( 'admin_init', 'stsc_register_settings' );
}

if ( ! function_exists( 'stsc_register_options_page' ) ) {
  function stsc_register_options_page() {
    add_options_page(__('Sticky on Scroll', 'sticky-scroll'), __('Sticky on Scroll', 'sticky-scroll'), 'manage_options', 'stsc_register_options_page', 'stsc_options_page');
  }
  add_action('admin_menu', 'stsc_register_options_page');
}

if ( ! function_exists( 'stsc_options_page' ) ) {
  function stsc_options_page(){ ?>
    <div class="stsc-form"> 
      <form method="post" action="options.php">
        <?php settings_fields( 'stsc_options_group' ); ?>
        <h2><?php echo __('Sticky on Scroll', 'sticky-scroll'); ?></h2>
        <p><?php echo __('You can pick any element that you want to stick on top of the page when you scroll down. It can be used for navigation menus or any element that you want as sticky.', 'sticky-scroll'); ?></p>
        <table>
          <tr valign="top">
            <th scope="row"><label for="stsc_Elements"><?php echo __('Sticky Element (ID or Class)','sticky-scroll'); ?></label></th>
            <td><input type="text" id="stsc_Elements" name="stsc_Elements" value="<?php echo get_option('stsc_Elements'); ?>" /> <br /><?php echo __('(eg. #navigation, header, section, .sticky-section)', 'sticky-scroll'); ?></td>
          </tr>
          <tr><td colspan="2">&nbsp;</td></tr>
          <tr valign="top">
            <th scope="row"><label for="stsc_min_screen"><?php echo __('Minimum screen size to set elements sticky.','sticky-scroll'); ?></label></th>
            <td><input type="text" id="stsc_min_screen" name="stsc_min_screen" value="<?php echo get_option('stsc_min_screen'); ?>" /> <?php echo __('pixels','sticky-scroll'); ?></td>
          </tr>
        </table>
        <?php  submit_button(); ?>
      </form>
    </div>
  <?php
  }
}