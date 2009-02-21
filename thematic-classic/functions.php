<?php

// Filter away the default scripts loaded with Thematic
function childtheme_head_scripts() {
    // Abscence makes the heart grow fonder.
}
add_filter('thematic_head_scripts','childtheme_head_scripts');


?>