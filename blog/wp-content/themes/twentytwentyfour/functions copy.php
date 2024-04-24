<?php
/**
 * Twenty Twenty-Four functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Twenty Twenty-Four
 * @since Twenty Twenty-Four 1.0
 */

/**
 * Register block styles.
 */

if ( ! function_exists( 'twentytwentyfour_block_styles' ) ) :
	/**
	 * Register custom block styles
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_block_styles() {

		register_block_style(
			'core/details',
			array(
				'name'         => 'arrow-icon-details',
				'label'        => __( 'Arrow icon', 'twentytwentyfour' ),
				/*
				 * Styles for the custom Arrow icon style of the Details block
				 */
				'inline_style' => '
				.is-style-arrow-icon-details {
					padding-top: var(--wp--preset--spacing--10);
					padding-bottom: var(--wp--preset--spacing--10);
				}

				.is-style-arrow-icon-details summary {
					list-style-type: "\2193\00a0\00a0\00a0";
				}

				.is-style-arrow-icon-details[open]>summary {
					list-style-type: "\2192\00a0\00a0\00a0";
				}',
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'         => 'pill',
				'label'        => __( 'Pill', 'twentytwentyfour' ),
				/*
				 * Styles variation for post terms
				 * https://github.com/WordPress/gutenberg/issues/24956
				 */
				'inline_style' => '
				.is-style-pill a,
				.is-style-pill span:not([class], [data-rich-text-placeholder]) {
					display: inline-block;
					background-color: var(--wp--preset--color--base-2);
					padding: 0.375rem 0.875rem;
					border-radius: var(--wp--preset--spacing--20);
				}

				.is-style-pill a:hover {
					background-color: var(--wp--preset--color--contrast-3);
				}',
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'twentytwentyfour' ),
				/*
				 * Styles for the custom checkmark list block style
				 * https://github.com/WordPress/gutenberg/issues/51480
				 */
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
		register_block_style(
			'core/navigation-link',
			array(
				'name'         => 'arrow-link',
				'label'        => __( 'With arrow', 'twentytwentyfour' ),
				/*
				 * Styles for the custom arrow nav link block style
				 */
				'inline_style' => '
				.is-style-arrow-link .wp-block-navigation-item__label:after {
					content: "\2197";
					padding-inline-start: 0.25rem;
					vertical-align: middle;
					text-decoration: none;
					display: inline-block;
				}',
			)
		);
		register_block_style(
			'core/heading',
			array(
				'name'         => 'asterisk',
				'label'        => __( 'With asterisk', 'twentytwentyfour' ),
				'inline_style' => "
				.is-style-asterisk:before {
					content: '';
					width: 1.5rem;
					height: 3rem;
					background: var(--wp--preset--color--contrast-2, currentColor);
					clip-path: path('M11.93.684v8.039l5.633-5.633 1.216 1.23-5.66 5.66h8.04v1.737H13.2l5.701 5.701-1.23 1.23-5.742-5.742V21h-1.737v-8.094l-5.77 5.77-1.23-1.217 5.743-5.742H.842V9.98h8.162l-5.701-5.7 1.23-1.231 5.66 5.66V.684h1.737Z');
					display: block;
				}

				/* Hide the asterisk if the heading has no content, to avoid using empty headings to display the asterisk only, which is an A11Y issue */
				.is-style-asterisk:empty:before {
					content: none;
				}

				.is-style-asterisk:-moz-only-whitespace:before {
					content: none;
				}

				.is-style-asterisk.has-text-align-center:before {
					margin: 0 auto;
				}

				.is-style-asterisk.has-text-align-right:before {
					margin-left: auto;
				}

				.rtl .is-style-asterisk.has-text-align-left:before {
					margin-right: auto;
				}",
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_block_styles' );

/**
 * Enqueue block stylesheets.
 */

if ( ! function_exists( 'twentytwentyfour_block_stylesheets' ) ) :
	/**
	 * Enqueue custom block stylesheets
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_block_stylesheets() {
		/**
		 * The wp_enqueue_block_style() function allows us to enqueue a stylesheet
		 * for a specific block. These will only get loaded when the block is rendered
		 * (both in the editor and on the front end), improving performance
		 * and reducing the amount of data requested by visitors.
		 *
		 * See https://make.wordpress.org/core/2021/12/15/using-multiple-stylesheets-per-block/ for more info.
		 */
		wp_enqueue_block_style(
			'core/button',
			array(
				'handle' => 'twentytwentyfour-button-style-outline',
				'src'    => get_parent_theme_file_uri( 'assets/css/button-outline.css' ),
				'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
				'path'   => get_parent_theme_file_path( 'assets/css/button-outline.css' ),
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_block_stylesheets' );

/**
 * Register pattern categories.
 */

if ( ! function_exists( 'twentytwentyfour_pattern_categories' ) ) :
	/**
	 * Register pattern categories
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_pattern_categories() {

		register_block_pattern_category(
			'twentytwentyfour_page',
			array(
				'label'       => _x( 'Pages', 'Block pattern category', 'twentytwentyfour' ),
				'description' => __( 'A collection of full page layouts.', 'twentytwentyfour' ),
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_pattern_categories' );


function register_portfolio_post_type() {
    $labels = array(
        'name'               => 'Portfolios', // Plural name
        'singular_name'      => 'Portfolio', // Singular name
        'menu_name'          => 'Portfolios', // Menu name in the admin sidebar
        'name_admin_bar'     => 'Portfolio', // Name in the admin bar
        'add_new'            => 'Add New', // Text for adding new
        'add_new_item'       => 'Add New Portfolio', // Text when adding a new item
        'edit_item'          => 'Edit Portfolio', // Text when editing
        'new_item'           => 'New Portfolio', // Text for new item
        'view_item'          => 'View Portfolio', // Text to view
        'search_items'       => 'Search Portfolios', // Search text
        'not_found'          => 'No portfolios found.', // Not found text
        'not_found_in_trash' => 'No portfolios found in Trash.', // Not found in trash
        'all_items'          => 'All Portfolios', // All items text
    );

    $args = array(
        'labels'             => $labels, // Labels defined above
        'public'             => true,    // Make the post type public
        'has_archive'        => true,    // Allow archive page
        'rewrite'            => array('slug' => 'portfolio'), // Rewrite slug
        'show_in_menu'       => true,    // Show in admin menu
        'show_in_rest'       => true,    // Enable REST API support (for block editor)
        'supports'           => array('title', 'editor', 'thumbnail'), // Supported features
    );

    // Register the custom post type
    register_post_type('portfolio', $args);
}

// Hook into 'init' to register the post type when WordPress initializes
add_action('init', 'register_portfolio_post_type');

/////////////////Short code////////////
function display_portfolio_posts($atts) {
    // Define shortcode attributes and set default values
    $atts = shortcode_atts(
        array(
            'number' => 5,  // Number of posts to display
            'orderby' => 'date',  // Order posts by date
            'order' => 'DESC',  // Order in descending order
        ),
        $atts,
        'portfolio_posts'  // Shortcode tag
    );

    // Query arguments to fetch posts from the "portfolio" custom post type
    $args = array(
        'post_type' => 'portfolio',  // Custom post type
        'posts_per_page' => $atts['number'],  // Number of posts from shortcode attribute
        'orderby' => $atts['orderby'],  // Ordering criteria
        'order' => $atts['order'],  // Ordering direction
    );

    // Create a new WP_Query to fetch posts
    $query = new WP_Query($args);

    // Start capturing output
    ob_start();

    if ($query->have_posts()) {
        echo '<ul>';  // List to display the posts

        // Loop through the posts and display them
        while ($query->have_posts()) {
            $query->the_post();  // Set up post data

            // Display post title with a link to the single post
            echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
        }

        echo '</ul>';
    } else {
        // If no posts found
        echo '<p>No portfolio available.</p>';
    }

    // Clean up and restore original post data
    wp_reset_postdata();

    // Return the captured output
    return ob_get_clean();
}

// Register the shortcode
add_shortcode('portfolio_posts', 'display_portfolio_posts');

//////////////////////API Call/////////////////////////////
// Ensure the table is created when the theme is loaded
function create_custom_table_on_theme_load() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'custom_api_data';

    $charset_collate = $wpdb->get_charset_collate();

    $sql = "
    CREATE TABLE IF NOT EXISTS {$table_name} (
        id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
        title VARCHAR(255),
        body LONGTEXT,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id)
    ) $charset_collate;
    ";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql); // Create or update the table
}

// Hook to create the table when the theme is initialized
add_action('after_setup_theme', 'create_custom_table_on_theme_load');


// Add an admin page to the WordPress dashboard
function custom_api_admin_page() {
    add_menu_page(
        'API Data',
        'API Data',
        'manage_options',
        'custom-api-data',
        'custom_api_admin_page_content',
        'dashicons-admin-generic',
        100
    );
}

// Content for the admin page
function custom_api_admin_page_content() {
    ?>
    <div class="wrap">
        <h1>Custom API Data</h1>
        <button id="fetch-api-data" class="button button-primary">Fetch API Data</button>
        <div id="api-response"></div>
    </div>
    <script>
    document.getElementById("fetch-api-data").addEventListener("click", function() {
        fetch(ajaxurl, {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body: "action=fetch_custom_api_data"
        })
        .then(response => response.json())
        .then(data => {
            document.getElementById("api-response").innerText = data.message;
        })
        .catch(error => {
            document.getElementById("api-response").innerText = "Error: " + error.message;
        });
    });
    </script>
    <?php
}

// Hook to add the admin page
add_action('admin_menu', 'custom_api_admin_page');


// Function to fetch and store data from a third-party API
function fetch_and_store_custom_api_data() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'custom_api_data';

    // Example third-party API endpoint
    $api_url = 'https://jsonplaceholder.typicode.com/posts/5';

    // Call the API
    $response = wp_remote_get($api_url);

    if (is_wp_error($response)) {
        return false; // Handle errors appropriately
    }

    // Extract the response data
    $response_body = wp_remote_retrieve_body($response);
    $data = json_decode($response_body, true);

    if ($data && isset($data['title']) && isset($data['body'])) {
        // Store the API response in the custom table
        $wpdb->insert(
            $table_name,
            array(
                'title' => $data['title'],
                'body' => $data['body'],
            ),
            array('%s', '%s') // Data types for insertion
        );
        return true;
    }

    return false;
}

// AJAX handler to fetch and store API data
function ajax_fetch_custom_api_data() {
    if (fetch_and_store_custom_api_data()) { // Function that fetches and stores data
        // Send a JSON response indicating success
        wp_send_json_success(array("message" => "API data fetched and stored successfully."));
    } else {
        // Send a JSON response indicating failure
        wp_send_json_error(array("message" => "Failed to fetch and store API data."));
    }
}

// Register the AJAX handler for authenticated users
add_action('wp_ajax_fetch_custom_api_data', 'ajax_fetch_custom_api_data');

// Function to enqueue JavaScript for the custom admin page
function custom_api_enqueue_scripts($hook) {
    // Check if we're on the correct admin page
    if ($hook === 'toplevel_page_custom-api-data') { // 'toplevel_page_custom-api-data' is the admin page's hook name
        wp_enqueue_script(
            'custom-api-script', // Script handle
            get_template_directory_uri() . '/js/custom-api-script.js', // Script path (update as needed)
            array(), // Dependencies (if any)
            false, // Version (optional)
            true // Load in footer
        );

        // Localize the script to pass variables from PHP to JavaScript
        wp_localize_script(
            'custom-api-script', // Script handle
            'customApiAjax', // JavaScript object name
            array('ajaxurl' => admin_url('admin-ajax.php')) // Data to pass (like AJAX URL)
        );
    }
}

// Enqueue scripts on admin pages
add_action('admin_enqueue_scripts', 'custom_api_enqueue_scripts');

