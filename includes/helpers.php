<?php
//shows which page the user is viewing presently
add_action('wp_footer', 'show_template');
function show_template() {
    global $template;
    if(is_user_logged_in()) {
    echo '<div class"template-name" style="position:fixed; left: 30px; bottom: 30px; padding:2px; background: coral; color:#fff; font-size: 13px;">'.basename($template).'</div>';
    }
}
?>