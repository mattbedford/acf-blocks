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


// Then print out HTML as required.
echo '<article id="" class="team-member-block" ' . get_block_wrapper_attributes() . '>';
echo '<div class="team-member-inner">';
echo '<div class="team-member-image">';
echo '<img src="' .  $image  . '">';
echo '</div>';
echo '<div class="team-member-texts">';
echo '<h4>' . esc_html($name) . '</h4>';
echo '<h6>' . esc_html($role);
echo '</div>';
echo '</div>';
echo '</article>';