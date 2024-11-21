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

$name = get_field("team_member_name");
$role = get_field("team_member_role");
$image = get_field('team_member_image');

// Get WP-provided classes and atts based on those switched on inside the block json
$classes = get_block_wrapper_attributes();

// Then print out HTML as required.
echo '<div ' . $classes . '>';
echo '<div class="team-member-inner">';
echo '<div class="team-member-image">';
echo '<img src="' .  $image  . '">';
echo '</div>';
echo '<div class="team-member-texts">';
echo '<h4>' . esc_html($name) . '</h4>';
echo '<h6>' . esc_html($role);
echo '</div>'; // End member texts
echo '</div>'; // End team-member-inner
echo '</div>'; // end team-member-block