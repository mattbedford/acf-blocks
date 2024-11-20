<?php
/**
 * Team member block
 *
 * @param array $block The block settings and attributes.
 * @param string $content Inner blocks content if jsx is enabled
 * @param boolean $is_preview True during preview render
 * @param array $context any context variables from parent blocks if applicable
 */


// Load values and assign defaults as you would with normal ACF fields.
// Gotcha: the $block var has a nested "data" array which holds block variables but they are NOT always available.
// Best practice instead is to use the get_field() functions from ACF instead.


echo "<div>";
echo "<h3>" . __("Hi, I am a test custom block. Now go build your own!", 'devteam') . "</h3>";
echo "</div>";
