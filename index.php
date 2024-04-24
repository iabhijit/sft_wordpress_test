<?php
// Load the WordPress environment
$wp_path = __DIR__ . '/blog/wp-load.php';
if (file_exists($wp_path)) {
    require_once($wp_path);
} else {
    die('Error: Unable to load WordPress.');
}

$query = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'ASC'
));

if ($query->have_posts()) {
    echo '<h1 style="text-align:center;">Last 3 Blog Posts</h1><hr>';
    echo '<div>';
    
    while ($query->have_posts()) {
        $query->the_post();
        echo '<h3>' . get_the_title() . '</h3>';
        the_excerpt();
        echo '<a href="' . get_permalink() . '">Read more</a>';

    }
    
    echo '</div>';
} else {
    echo '<p>No post available.</p>';
}

wp_reset_postdata(); // Clean up the post data
?>