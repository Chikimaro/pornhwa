<?php

/**
 * does not support Widgets Block Editor yet
 **/
function madara_theme_support() {
	remove_theme_support( 'widgets-block-editor' );
}
add_action( 'after_setup_theme', 'madara_theme_support' );

/* -------------------------------------------------------------------------------------------------- */

function dequeue() {
	// Deregister styles
	wp_deregister_style( 'bootstrap' );
	wp_deregister_style( 'slick' );
	wp_deregister_style( 'slick-theme' );
	wp_deregister_style( 'loaders' );
	wp_deregister_style( 'madara-css' );
	wp_deregister_style( 'ionicons' );
	wp_dequeue_style( 'wp-manga-slick-css' );
	wp_dequeue_style( 'wp-manga-slick-theme-css' );

	// Deregister scripts
	wp_deregister_script( 'madara-core' );
	wp_deregister_script( 'imagesloaded' );
	wp_deregister_script( 'aos' );
	wp_deregister_script( 'smoothscroll' );
	wp_deregister_script( 'lazysizes' );
	wp_deregister_script( 'bootstrap' );
	wp_deregister_script( 'shuffle' );
	wp_deregister_script( 'madara-ajax' );
	wp_dequeue_script( 'wp-manga-login-ajax' );
	wp_dequeue_script( 'wp-manga-slick-js' );
}
add_action( 'wp_print_scripts', 'dequeue', 100 );
add_action( 'wp_print_styles', 'dequeue', 100 );

add_filter( 'wp_enqueue_scripts', 'change_default_jquery', PHP_INT_MAX );
function change_default_jquery( ){
	wp_dequeue_script( 'jquery');
	wp_deregister_script( 'jquery');   
}

function enqueue() {

    $locale = get_locale();

    if ( strpos( $locale, 'ar' ) !== false ) {
        wp_enqueue_style( 'inter-font', 'https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap', false );
    } else {
        wp_enqueue_style('poppins-font', 'https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap', false );
    }

    $local_mode = true;

	if ( $local_mode ) {
        
		wp_enqueue_style( 'swiper-css', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.4/css/swiper.min.css', array(), null );
		wp_enqueue_style( 'tooltipster-css', 'https://cdnjs.cloudflare.com/ajax/libs/tooltipster/4.0.0/css/tooltipster.bundle.min.css', array(), null );
        wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@latest/swiper-bundle.min.css');
		wp_enqueue_style( 'fontawesome-brands-css', get_stylesheet_directory_uri() . '/assets/css/brands.min.css' );
		wp_enqueue_style( 'child-fontawesome', get_stylesheet_directory_uri() . '/assets/css/fontawesome.min.css' );
		wp_enqueue_style( 'child-regular', get_stylesheet_directory_uri() . '/assets/css/regular.min.css' );
		wp_enqueue_style( 'child-solid', get_stylesheet_directory_uri() . '/assets/css/solid.min.css' );
		// wp_enqueue_style( 'child-styles-fire', get_stylesheet_directory_uri() . '/assets/css/styles-bk.css' );
		wp_enqueue_style( 'child-styles-fire', get_stylesheet_directory_uri() . '/assets/css/styles.css' );

        wp_enqueue_script( 'jquery-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js', array(), null, true );
        wp_enqueue_script( 'bootstrap-js', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/js/bootstrap.bundle.min.js', array('jquery-js'), null, true );
		wp_enqueue_script( 'tooltipster-js', 'https://cdnjs.cloudflare.com/ajax/libs/tooltipster/4.2.0/js/tooltipster.bundle.min.js', array('jquery-js'), null, true );
		wp_enqueue_script( 'swiper-js-min', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.4/js/swiper.min.js', array('jquery-js'), null, true );
		wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@latest/swiper-bundle.min.js', array(), null, true);	
	
	} else {

		wp_enqueue_style( 'swiper-css', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.4/css/swiper.min.css', array(), null );
		wp_enqueue_style( 'tooltipster-css', 'https://cdnjs.cloudflare.com/ajax/libs/tooltipster/4.0.0/css/tooltipster.bundle.min.css', array(), null );
		wp_enqueue_style( 'fontawesome-css', 'https://mangafire.to/assets/fonts/awesome/css/fontawesome.min.css', array(), null );
		wp_enqueue_style( 'fontawesome-solid-css', 'https://mangafire.to/assets/fonts/awesome/css/solid.min.css', array(), null );
		wp_enqueue_style( 'fontawesome-regular-css', 'https://mangafire.to/assets/fonts/awesome/css/regular.min.css', array(), null );
		wp_enqueue_style( 'fontawesome-brands-css', 'https://mangafire.to/assets/fonts/awesome/css/brands.min.css', array(), null );
		wp_enqueue_style( 'custom-styles-css', 'https://mangafire.to/assets/t2/s1/min/styles.css', array(), null );
        wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@latest/swiper-bundle.min.css');

		wp_enqueue_script( 'jquery-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js', array(), null, true );
        wp_enqueue_script( 'bootstrap-js', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/js/bootstrap.bundle.min.js', array('jquery-js'), null, true );
		wp_enqueue_script( 'tooltipster-js', 'https://cdnjs.cloudflare.com/ajax/libs/tooltipster/4.2.0/js/tooltipster.bundle.min.js', array('jquery-js'), null, true );
		wp_enqueue_script( 'swiper-js-min', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.4/js/swiper.min.js', array('jquery-js'), null, true );
		wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@latest/swiper-bundle.min.js', array(), null, true);	
    }

    // timestamp versioning
    $style_version = filemtime( get_stylesheet_directory() . '/style.css' );
    // $script_version = filemtime( get_stylesheet_directory() . '/script.js' );

    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array(), $style_version );

    // wp_enqueue_script( 'fire-scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array('jquery-js'), null, true );	
    // wp_enqueue_script( 'shido-script', get_stylesheet_directory_uri() . '/script.js', array(), $script_version, true );
}
add_action( 'wp_enqueue_scripts', 'enqueue' );
/*--------------------------------------------------------------
>>> Some General Settings
----------------------------------------------------------------*/

$show_adult = isset($_COOKIE['show_adult']) && $_COOKIE['show_adult'] === '1';

function get_manga_status($post_id) {
    $status = get_post_meta($post_id, '_wp_manga_status', true);
    switch ($status) {
        case 'on-going':
            return __('Ongoing', 'child-mfire');
        case 'end':
            return __('Completed', 'child-mfire');
        case 'canceled':
            return __('Canceled', 'child-mfire');
        case 'on-hold':
            return __('On Hold', 'child-mfire');
        case 'upcoming':
            return __('Coming Soon', 'child-mfire');
        default:
            return esc_html($status);
    }
}

function get_manga_type($manga_id) {
    // Get the taxonomy terms
    $terms = get_the_terms($manga_id, 'wp-manga-type');
    
    if ($terms && !is_wp_error($terms)) {
        // Return the first term name if available
        return esc_html($terms[0]->name);
    } else {
        // Fallback to the meta key if no terms found
        $manga_type = get_post_meta($manga_id, '_wp_manga_type', true);
        return !empty($manga_type) ? esc_html($manga_type) : '';
    }
}

function get_chapter_link($chapter_id) {
    global $wpdb; // Access the WordPress database object

    // Get the database prefix
    $db_prefix = $wpdb->prefix;

    // Query to get the post ID and chapter slug from the {$wpdb->prefix}manga_chapters table
    $chapter_data = $wpdb->get_row(
        $wpdb->prepare(
            "SELECT post_id, chapter_slug FROM {$db_prefix}manga_chapters WHERE chapter_id = %d",
            $chapter_id
        )
    );

    // Check if chapter data is found
    if ($chapter_data) {
        // Get the post link using the post ID
        $post_link = get_permalink($chapter_data->post_id);

        // Generate the chapter link
        return esc_url($post_link . $chapter_data->chapter_slug);
    }

    return ''; // Return an empty string if no chapter is found
}

// Get latest chapters with caching
function get_latest_chapters($manga_id, $number_of_chapters = 3) {
    // Create a transient key based on parameters
    $transient_key = 'latest_chapters_' . $manga_id . '_' . $number_of_chapters;
    
    // Try to get cached result
    $cached_chapters = get_transient($transient_key);
    if ($cached_chapters !== false) {
        return $cached_chapters;
    }
    
    // If no cache, get from database
    global $wpdb;

    // Ensure that the manga ID is an integer
    $manga_id = intval($manga_id);
    $number_of_chapters = intval($number_of_chapters);

    // Fetch the latest chapters sorted properly, excluding chapters with status 3
    $chapters = $wpdb->get_results($wpdb->prepare(
        "SELECT chapter_name, chapter_slug, date 
        FROM {$wpdb->prefix}manga_chapters 
        WHERE post_id = %d AND chapter_status != 3  -- Exclude chapters with status 3
        ORDER BY CAST(chapter_name AS DECIMAL(10, 2)) DESC 
        LIMIT %d",
        $manga_id,
        $number_of_chapters
    ));
    
    // Cache the result for 12 hours (43200 seconds)
    set_transient($transient_key, $chapters, 12 * HOUR_IN_SECONDS);
    
    return $chapters;
}

function time_ago($timestamp) {
    // Convert the timestamp to a Unix time using strtotime.
    $time_ago = strtotime($timestamp);
    $current_time = current_time('timestamp');  // Gets current time based on WordPress timezone
    $time_difference = abs($current_time - $time_ago);  // Ensure non-negative difference

    $seconds = $time_difference;
    $minutes = floor($seconds / 60);
    $hours = floor($seconds / 3600);
    $days = floor($seconds / 86400);
    $months = floor($seconds / 2629440);
    $years = floor($seconds / 31553280);

    if ($seconds < 60) {
        return __('A l\'instant', 'child-mfire');
    } elseif ($minutes < 60) {
        return $minutes == 1 ? __('il y a 1min', 'child-mfire') : sprintf(__('il y a %dmins', 'child-mfire'), $minutes);
    } elseif ($hours < 24) {
        return $hours == 1 ? __('il y a 1h', 'child-mfire') : sprintf(__('il y a %dh', 'child-mfire'), $hours);
    } elseif ($days < 2) {
        return __('il y a 1j', 'child-mfire');
    } elseif ($days < 3) {
        return __('il y a 2j', 'child-mfire');
    } elseif ($days < 11) {
        return sprintf(__('il y a %dj', 'child-mfire'), $days);
    } elseif ($days < 30) {
        return sprintf(__('il y a %dj', 'child-mfire'), $days);
    } elseif ($months < 12) {
        return $months == 1 ? __('il y a 1 mois', 'child-mfire') : sprintf(__('il y a %dm', 'child-mfire'), $months);
    } else {
        return $years == 1 ? __('il y a 1 an', 'child-mfire') : sprintf(__('il y a %d ans', 'child-mfire'), $years);
    }
}


/*--------------------------------------------------------------
>>> AJAX JS
----------------------------------------------------------------*/

function ajax_scripts() {
    $script_path = get_stylesheet_directory() . '/js/ajax.js';
    $script_version = file_exists($script_path) ? filemtime($script_path) : null;

    wp_enqueue_script('ajax-sh', get_stylesheet_directory_uri() . '/js/ajax.js', array('jquery-js'), $script_version, true);
    
    wp_localize_script('ajax-sh', 'ajax_manga_params', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('load_manga_nonce'),
        'is_logged_in' => is_user_logged_in() ? 'true' : 'false',
        'site_url' => home_url(),
    ));
}
add_action('wp_enqueue_scripts', 'ajax_scripts');

/*--------------------------------------------------------------
>>> INCLUDE
----------------------------------------------------------------*/

// Fire Settings
require_once get_stylesheet_directory() . '/functions/rm-settings/menu.php';

// Register Columns : views + userId
require_once get_stylesheet_directory() . '/functions/register-columns.php';

// Recently Updated Load More
require_once get_stylesheet_directory() . '/functions/ajax-recently-updated.php';

// Login and register and remember coockies
require_once get_stylesheet_directory() . '/functions/register-login.php';

// Thumbnail Sizes
require_once get_stylesheet_directory() . '/functions/thumbnail-sizes.php';

// Manga Types Taxonomy
require_once get_stylesheet_directory() . '/functions/manga-types-taxonomy.php';

// Random Manga
require_once get_stylesheet_directory() . '/functions/random.php';

// Live Search
require_once get_stylesheet_directory() . '/functions/ajax-search.php';

// Alerts Custom Post
require_once get_stylesheet_directory() . '/functions/alerts-custom-post.php';

// Manga Volume
require get_stylesheet_directory() . '/functions/manga-volume/manga-volumes.php';

// Bookmark Manga
require_once get_stylesheet_directory() . '/functions/bookmark-manga.php';

// User Slug
require_once get_stylesheet_directory() . '/functions/user-profile.php';

// User Settings
require_once get_stylesheet_directory() . '/functions/user-settings.php';

// Add Manga
require_once get_stylesheet_directory() . '/functions/add-manga.php';

// Upload Chapter
require_once get_stylesheet_directory() . '/functions/upload-chapter.php';

/*--------------------------------------------------------------
>>> Quick
----------------------------------------------------------------*/


// Enqueue the rating script
function enqueue_manga_rating_scripts() {
    if (is_singular('wp-manga')) {
        wp_enqueue_script('manga-rating', get_stylesheet_directory_uri() . '/js/manga-rating.js', array(), '1.0.1', true);
        wp_localize_script('manga-rating', 'mangaRating', array(
            'ajaxurl' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('manga_rating_nonce')
        ));
        
        // Debug log only when WP_DEBUG is enabled
        if (defined('WP_DEBUG') && WP_DEBUG) {
            error_log('Manga rating scripts enqueued');
        }
    }
}
add_action('wp_enqueue_scripts', 'enqueue_manga_rating_scripts');

// Handle the AJAX request
function handle_manga_rating() {
    check_ajax_referer('manga_rating_nonce', 'nonce');

    $post_id = intval($_POST['post_id']);
    $rating = floatval($_POST['rating']);

    // Validate rating is within 2-10 range (10-point scale)
    if ($rating < 2 || $rating > 10) {
        wp_send_json_error(array('message' => 'Invalid rating'));
        return;
    }

    // Get current votes
    $user_votes = get_post_meta($post_id, '_manga_user_votes', true);
    if (empty($user_votes) || !is_array($user_votes)) {
        $user_votes = array();
    }

    // Generate a unique identifier for non-logged users using IP
    if (!is_user_logged_in()) {
        $user_identifier = 'anon_' . md5($_SERVER['REMOTE_ADDR']);
    } else {
        $user_identifier = 'user_' . get_current_user_id();
    }
    
    // Update vote
    $user_votes[$user_identifier] = $rating;
    update_post_meta($post_id, '_manga_user_votes', $user_votes);

    // Calculate new average (keeping the 10-point scale)
    $vote_count = count($user_votes);
    $new_rating = array_sum($user_votes) / $vote_count;
    update_post_meta($post_id, '_manga_total_votes', $new_rating);

    // Format the response data
    $response = array(
        'success' => true,
        'new_rating' => number_format($new_rating, 1),
        'vote_count' => $vote_count,
        'message' => 'Vote submitted successfully'
    );

    wp_send_json($response);
}

// Add both hooks to handle logged-in and non-logged-in users
add_action('wp_ajax_manga_submit_rating', 'handle_manga_rating');
add_action('wp_ajax_nopriv_manga_submit_rating', 'handle_manga_rating');

// Enqueue script and localize
function enqueue_reading_history_scripts() {
    // Check if user is logged in FIRST before anything else
    if (!is_user_logged_in()) {
        return; // Exit immediately if not logged in
    }
    
    // Then check if we're on the right page types
    if (is_page() || is_home()) {
        wp_enqueue_script(
            'reading-history', 
            get_stylesheet_directory_uri() . '/js/reading-history.js', 
            array('jquery-js'), 
            '1.0.3', 
            true
        );

        // Separate variables for reading history
        wp_localize_script('reading-history', 'readingHistoryVars', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('remove_reading_history_nonce')
        ));
    }
}
add_action('wp_enqueue_scripts', 'enqueue_reading_history_scripts', 20); // Higher priority

// Add this to verify script is enqueued
add_action('wp_footer', function() {
    if (defined('WP_DEBUG') && WP_DEBUG) {
        global $wp_scripts;
        error_log('Enqueued scripts: ' . print_r($wp_scripts->queue, true));
    }
});
// Custom debug function
function rm_debug_log($message) {
    // Early return if debugging is not enabled
    if (!(defined('WP_DEBUG') && WP_DEBUG)) {
        return;
    }
    
    $debug_file = WP_CONTENT_DIR . '/rm-debug.log';
    
    // Create the file if it doesn't exist
    if (!file_exists($debug_file)) {
        // Try to create the file
        $created = file_put_contents($debug_file, "=== Reading History Debug Log Started ===\n");
        if ($created === false) {
            error_log("Failed to create debug file at: " . $debug_file);
            return;
        }
        // Set file permissions
        chmod($debug_file, 0666);
    }
    
    // Check if file is writable
    if (!is_writable($debug_file)) {
        error_log("Debug file is not writable: " . $debug_file);
        return;
    }

    $timestamp = current_time('mysql');
    $formatted_message = "[{$timestamp}] {$message}\n";
    
    // Append the message to the file
    file_put_contents($debug_file, $formatted_message, FILE_APPEND);
}

// AJAX handler for removing from reading history
function remove_from_reading_history() {
    rm_debug_log('=== Remove Reading History Action Started ===');
    rm_debug_log('Remove reading history handler called');

    // Verify nonce
    if (!check_ajax_referer('remove_reading_history_nonce', 'nonce', false)) {
        rm_debug_log('Nonce verification failed');
        wp_send_json_error('Invalid nonce');
        return;
    }

    $manga_id = intval($_POST['manga_id']);
    $chapter_id = intval($_POST['chapter_id']);
    $user_id = get_current_user_id();

    rm_debug_log("Request Data - Manga ID: $manga_id, Chapter ID: $chapter_id, User ID: $user_id");

    if (!$user_id) {
        rm_debug_log('Error: User not logged in');
        wp_send_json_error('User not logged in');
        return;
    }

    // Get current reading history
    $reading_history = get_user_meta($user_id, 'reading_history', true);
    if (!is_array($reading_history)) {
        $reading_history = array();
    }

    rm_debug_log('Current reading history: ' . print_r($reading_history, true));

    // Remove the specific entry
    $reading_history = array_values(array_filter($reading_history, function($entry) use ($manga_id, $chapter_id) {
        return !($entry[0] == $manga_id && $entry[1] == $chapter_id);
    }));

    rm_debug_log('Updated reading history: ' . print_r($reading_history, true));

    // Update the reading history
    $updated = update_user_meta($user_id, 'reading_history', $reading_history);

    if ($updated) {
        rm_debug_log('Successfully updated reading history');
        wp_send_json_success(array('message' => 'Entry removed successfully'));
    } else {
        rm_debug_log('Failed to update reading history');
        wp_send_json_error('Failed to update reading history');
    }
    
    rm_debug_log('=== Remove Reading History Action Ended ===');
}
add_action('wp_ajax_remove_from_reading_history', 'remove_from_reading_history');

function update_manga_last_read($manga_id) {
    $timestamp = current_time('timestamp');
    
    // Debug output only when WP_DEBUG is enabled
    if (defined('WP_DEBUG') && WP_DEBUG) {
        error_log('Updating last read for manga ' . $manga_id . ' with timestamp: ' . $timestamp);
    }
    
    return update_post_meta($manga_id, 'last_read_date', $timestamp);
}

// Update both reading history and last read timestamp when a chapter is read
function update_manga_reading_history($manga_id, $chapter_id) {
    $user_id = get_current_user_id();
    if (!$user_id) return;

    // Store the date in MySQL format
    $timestamp = date('Y-m-d H:i:s');
    
    // Debug log only when WP_DEBUG is enabled
    if (defined('WP_DEBUG') && WP_DEBUG) {
        error_log("Storing new timestamp: " . $timestamp);
    }
    
    // Get current reading history
    $reading_history = get_user_meta($user_id, 'reading_history', true);
    if (!is_array($reading_history)) {
        $reading_history = array();
    }
    
    // Remove any existing entry for this manga/chapter
    $reading_history = array_values(array_filter($reading_history, function($entry) use ($manga_id, $chapter_id) {
        return !($entry[0] == $manga_id && $entry[1] == $chapter_id);
    }));
    
    // Add new entry with timestamp at the beginning
    array_unshift($reading_history, array($manga_id, $chapter_id, $timestamp));
    
    // Update reading history
    update_user_meta($user_id, 'reading_history', $reading_history);
}

// Hook into both possible reading triggers
add_action('wp_manga_after_reading', 'update_manga_reading_history', 10, 2);
add_action('wp_manga_update_chapter_views', 'update_manga_reading_history', 10, 2);

// Only add this new function for the AJAX handler
function handle_clear_reading_history() {
    // Add debugging only when WP_DEBUG is enabled
    if (defined('WP_DEBUG') && WP_DEBUG) {
        error_log('Clear reading history request received');
    }
    
    if (!is_user_logged_in()) {
        if (defined('WP_DEBUG') && WP_DEBUG) {
            error_log('User not logged in');
        }
        wp_send_json_error('Not logged in');
        return;
    }

    $user_id = get_current_user_id();
    
    if (defined('WP_DEBUG') && WP_DEBUG) {
        error_log('Attempting to clear history for user: ' . $user_id);
        $current_history = get_user_meta($user_id, 'reading_history', true);
        error_log('Current history: ' . print_r($current_history, true));
    }
    
    $deleted = delete_user_meta($user_id, 'reading_history');
    
    if (defined('WP_DEBUG') && WP_DEBUG) {
        error_log('Delete result: ' . ($deleted ? 'success' : 'failed'));
    }

    if ($deleted) {
        wp_send_json_success(array('message' => 'History cleared'));
    } else {
        wp_send_json_error(array('message' => 'Failed to clear history'));
    }
}
// add_filter('posts_request', 'debug_query');
function debug_query($input) {
    if (strpos($input, '_wp_manga_views') !== false) {
        error_log('Manga Query: ' . $input);
    }
    return $input;
}

// Add AJAX handler for clearing bookmarks
add_action('wp_ajax_clear_all_bookmarks', 'clear_all_bookmarks');
function clear_all_bookmarks() {
    // Verify nonce
    check_ajax_referer('clear_bookmarks_nonce', 'security');
    
    $user_id = get_current_user_id();
    
    if (!$user_id) {
        wp_send_json_error(['message' => 'User not logged in']);
        return;
    }

    $result = delete_user_meta($user_id, 'bookmarked_mangas');
    
    if ($result) {
        wp_send_json_success(['message' => 'Bookmarks cleared successfully']);
    } else {
        wp_send_json_error(['message' => 'Failed to clear bookmarks']);
    }
}

// Add AJAX handler for lazy loading chapter content
add_action('wp_ajax_load_chapter_content', 'load_chapter_content');
add_action('wp_ajax_nopriv_load_chapter_content', 'load_chapter_content');

function load_chapter_content() {
    check_ajax_referer('load_chapter_content', 'security');
    
    $manga_id = isset($_POST['manga_id']) ? intval($_POST['manga_id']) : 0;
    $chapter_id = isset($_POST['chapter_id']) ? intval($_POST['chapter_id']) : 0;
    
    // Load navigation controls
    ob_start();
    ?>
    <div class="chapter-control">
        <div class="number-nav rtl">
            <?php if (isset($prev_chap)): ?>
                <a class="prev dir-rtl" href="<?php echo esc_url($wp_manga_functions->build_chapter_url($manga_id, $prev_chap['chapter_slug'])); ?>">
                    <i class="ltr-icon fa-light fa-arrow-left mr-1"></i>
                    Previous
                </a>
            <?php endif; ?>
            
            <a href="<?php echo home_url(); ?>" class="jb-btn">
                <i class="fa-light fa-lg fa-house"></i>
                <span>Home</span>
            </a>
            
            <?php if (isset($next_chap)): ?>
                <a class="next dir-rtl" href="<?php echo esc_url($wp_manga_functions->build_chapter_url($manga_id, $next_chap['chapter_slug'])); ?>">
                    Next
                    <i class="ltr-icon fa-light fa-arrow-right ml-1"></i>
                </a>
            <?php endif; ?>
        </div>
    </div>

    <?php if (get_option('enable_chapter_reports', 1)): ?>
        <div class="container w-full mb-4">
            <?php do_action('wp_manga_discussion'); ?>
        </div>
    <?php endif; ?>
    <?php
    
    $content = ob_get_clean();
    echo $content;
    wp_die();
}

// Handle AJAX request for manga filtering
add_action('wp_ajax_filter_popular_manga', 'filter_popular_manga');
add_action('wp_ajax_nopriv_filter_popular_manga', 'filter_popular_manga');

// Add this temporarily at the top of your functions.php to clear the cache
// delete_transient('popular_manga_weekly');
// delete_transient('popular_manga_monthly');

function filter_popular_manga() {
    if (!wp_doing_ajax()) return;

    check_ajax_referer('filter_popular_manga_nonce', 'nonce');
    
    $period = $_POST['period'];
    $meta_key = ($period === 'monthly') ? '_wp_manga_views' : '_wp_manga_week_views';
    $transient_key = 'popular_manga_' . $period;
    
    // Try to get from cache first
    $cached_content = get_transient($transient_key);
    if ($cached_content !== false) {
        wp_send_json_success($cached_content);
        return;
    }
    
    $args = array(
        'post_type' => 'wp-manga',
        'posts_per_page' => 10,
        'meta_key' => $meta_key,
        'meta_type' => 'NUMERIC',
        'orderby' => 'meta_value_num',
        'order' => 'DESC',
        'no_found_rows' => true,
        'update_post_meta_cache' => true,
        'update_post_term_cache' => true
    );
    
    $query = new WP_Query($args);
    
    ob_start();
    
    if ($query->have_posts()) {
        echo '<div class="popular-series-wrapper">';
        $counter = 1;
        
        while ($query->have_posts()) {
            $query->the_post();
            $manga_id = get_the_ID();
            $title = get_the_title();
            $permalink = get_permalink();
            $thumbnail = get_the_post_thumbnail_url($manga_id, 'manga_cover');
            $genres = wp_get_post_terms($manga_id, 'wp-manga-genre', array('number' => 3));
            
            echo '<a href="' . esc_url($permalink) . '" class="popular-series-item">';
            echo '<span class="rank-number">' . $counter . '</span>';
            echo '<div class="series-thumbnail">';
            echo '<img src="' . esc_url($thumbnail) . '" alt="' . esc_attr($title) . '" loading="lazy"/>';
            echo '</div>';
            echo '<div class="series-info">';
            echo '<h3 class="series-title">' . esc_html($title) . '</h3>';
            
            if (!empty($genres) && !is_wp_error($genres)) {
                echo '<div class="series-genres">';
                foreach (array_slice($genres, 0, 3) as $genre) {
                    echo '<span class="genre-tag">' . esc_html($genre->name) . '</span>';
                }
                echo '</div>';
            }
            
            echo '</div>';
            echo '</a>';
            $counter++;
        }
        echo '</div>';
    } else {
        echo '<p>No manga found</p>';
    }
    
    wp_reset_postdata();
    
    $content = ob_get_clean();
    
    // Cache the content for 6 hours (21600 seconds)
    set_transient($transient_key, $content, 6 * HOUR_IN_SECONDS);
    
    wp_send_json_success($content);
}

// Add cache invalidation when a post is updated
function invalidate_manga_caches($post_id, $post) {
    // Only run for manga post type
    if ($post->post_type !== 'wp-manga') {
        return;
    }
    
    // Clear popular manga caches
    delete_transient('popular_manga_weekly');
    delete_transient('popular_manga_monthly');
    
    // Clear latest chapters cache for this manga
    delete_transient('latest_chapters_' . $post_id . '_3'); // Default is 3 chapters
}
add_action('save_post', 'invalidate_manga_caches', 10, 2);

// Add ajaxurl to head
add_action('wp_head', 'add_ajax_url');
function add_ajax_url() {
    ?>
    <script type="text/javascript">
        var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
    </script>
    <?php
}

// Make sure this only loads on the homepage
function should_load_popular_manga() {
    return is_front_page() || is_home();
}

// Modify how the template is included
function include_popular_manga_template() {
    if (should_load_popular_manga()) {
        get_template_part('template-parts/home/most-popular');
    }
}

// Hook it to the appropriate action for your theme
add_action('madara_before_content', 'include_popular_manga_template');

function load_more_manga_ajax() {
    check_ajax_referer('manga_ajax_nonce', 'nonce');
    
    $offset = isset($_POST['offset']) ? intval($_POST['offset']) : 0;
    
    // Your existing manga query logic here, but with offset
    // ... 
    
    $response = array(
        'success' => true,
        'html' => $html_content,
        'has_more' => $has_more_posts
    );
    
    wp_send_json($response);
}
add_action('wp_ajax_load_more_manga', 'load_more_manga_ajax');
add_action('wp_ajax_nopriv_load_more_manga', 'load_more_manga_ajax');

function custom_search_page_title($title) {
    if (isset($_GET['post_type']) && $_GET['post_type'] === 'wp-manga' && isset($_GET['s'])) {
        $sort = isset($_GET['sort']) ? $_GET['sort'] : '';
        
        switch ($sort) {
            case 'latest':
            case '':  // Default case when no sort parameter is set
                return 'Latest Chapters';
            case 'title_az':
                return 'Manga A-Z';
            case 'most_viewed':
                return 'Most Viewed';
            case 'recently_added':
                return 'Recently Added';
            default:
                return 'Latest Chapters';
        }
    }
    return $title;
}
add_filter('pre_get_document_title', 'custom_search_page_title', 999);
add_filter('wp_title', 'custom_search_page_title', 999);
