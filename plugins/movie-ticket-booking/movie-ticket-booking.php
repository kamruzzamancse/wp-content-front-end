<?php
/*
Plugin Name: Movie Ticket Booking
Description: Movie Ticket Booking system with WooCommerce integration.
Version: 1.0
Author: Your Name
*/

// Register custom product type for movie tickets
function register_movie_ticket_product_type() {
    if (class_exists('WC_Product')) {
        class WC_Product_Movie_Ticket extends WC_Product {
            public function __construct($product) {
                $this->product_type = 'movie_ticket';  // Set product type
                parent::__construct($product); // Call parent constructor
            }
        }
    }
}
add_action('init', 'register_movie_ticket_product_type');


/**
 * Add Custom Tab for Movie Details
 */
add_filter( 'woocommerce_product_data_tabs', function( $tabs ) {
    $tabs['movie_tab'] = array(
        'label'    => __( 'Movie Details', 'movie-showtime' ),
        'target'   => 'movie_options',
        'class'    => array( 'show_if_movie' ),
    );
    return $tabs;
});

/**
 * Add fields for Show Start Time and Show End Time in the movie tab
 */
add_action( 'woocommerce_product_data_panels', function() {
    global $post;
    
    // Get existing movie showtimes if they exist
    $showtimes = get_post_meta( $post->ID, '_movie_showtimes', true );
    $showtimes = ! empty( $showtimes ) ? $showtimes : array();

    echo '<div id="movie_options" class="panel woocommerce_options_panel">';
    
    echo '<div id="movie_showtimes_container">';
    // Display existing showtimes
    if ( ! empty( $showtimes ) ) {
        foreach ( $showtimes as $index => $showtime ) {
            echo '<div class="movie_showtime" style="margin-bottom: 10px;">';
            woocommerce_wp_text_input( array(
                'id'          => "_movie_showtime_start_{$index}",
                'label'       => __( 'Show Start Time', 'movie-showtime' ),
                'type'        => 'datetime-local',
                'value'       => esc_attr( $showtime['start'] ),
                'description' => __( 'Enter the show start time.', 'movie-showtime' ),
                'desc_tip'    => true,
            ));
            woocommerce_wp_text_input( array(
                'id'          => "_movie_showtime_end_{$index}",
                'label'       => __( 'Show End Time', 'movie-showtime' ),
                'type'        => 'datetime-local',
                'value'       => esc_attr( $showtime['end'] ),
                'description' => __( 'Enter the show end time.', 'movie-showtime' ),
                'desc_tip'    => true,
            ));
            echo '<button type="button" class="button remove_showtime_button" style="margin-top: 5px;">Remove Showtime</button>';
            echo '</div>';
        }
    }
    echo '</div>';

    // Add button to add more showtimes
    echo '<button type="button" class="button" id="add_new_showtime_button">Add New Showtime</button>';
    echo '</div>';
});

// Enqueue Scripts for Dynamic Showtime Addition
add_action( 'admin_footer', function() {
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function($){
            var showtimeIndex = <?php echo !empty($showtimes) ? count($showtimes) : 0; ?>;
            
            // Add new showtime input fields
            $('#add_new_showtime_button').on('click', function(){
                showtimeIndex++;
                var newShowtimeHTML = `
                    <div class="movie_showtime" style="margin-bottom: 10px;">
                        <input type="datetime-local" name="movie_showtime_start_${showtimeIndex}" value="" placeholder="Show Start Time" />
                        <input type="datetime-local" name="movie_showtime_end_${showtimeIndex}" value="" placeholder="Show End Time" />
                        <button type="button" class="button remove_showtime_button" style="margin-top: 5px;">Remove Showtime</button>
                    </div>
                `;
                $('#movie_showtimes_container').append(newShowtimeHTML);
            });

            // Remove showtime field
            $(document).on('click', '.remove_showtime_button', function(){
                $(this).closest('.movie_showtime').remove();
            });
        });
    </script>
    <?php
});

/**
 * Save the custom fields (multiple showtimes) when the product is saved
 */
add_action( 'woocommerce_admin_process_product_object', function( $product ) {
    if ( isset( $_POST ) ) {
        // Initialize the array of showtimes
        $showtimes = array();

        // Loop through the incoming $_POST data to capture each showtime start and end time
        foreach ( $_POST as $key => $value ) {
            // We're looking for keys that start with 'movie_showtime_start_'
            if ( strpos( $key, 'movie_showtime_start_' ) === 0 ) {
                // Extract the index from the key (e.g., '1' from 'movie_showtime_start_1')
                $index = str_replace( 'movie_showtime_start_', '', $key );

                // Check if the corresponding end time exists
                if ( isset( $_POST["movie_showtime_end_{$index}"] ) ) {
                    // Save both start and end times in the array
                    $showtimes[] = array(
                        'start' => sanitize_text_field( $_POST["movie_showtime_start_{$index}"] ),
                        'end'   => sanitize_text_field( $_POST["movie_showtime_end_{$index}"] ),
                    );
                }
            }
        }

        // Update the product's metadata with the showtimes array
        if ( ! empty( $showtimes ) ) {
            $product->update_meta_data( '_movie_showtimes', $showtimes );
        }
    }
});

/**
 * Display Show Start Time and Show End Time on the product page
 */
// add_action( 'woocommerce_single_product_summary', function() {
//     global $product;
    
//     if ( $product->get_type() === 'movie' ) {
//         // Retrieve the saved showtimes from product metadata
//         $showtimes = $product->get_meta( '_movie_showtimes' );

//         // Check if there are any showtimes saved
//         if ( ! empty( $showtimes ) ) {
//             echo '<div class="movie-showtimes">';
            
//             // Loop through each showtime and display it
//             foreach ( $showtimes as $showtime ) {
//                 // Make sure the dates are valid
//                 if ( ! empty( $showtime['start'] ) && ! empty( $showtime['end'] ) ) {
//                     // Format start and end times
//                     $start_time = date( 'l, F j, Y \a\t g:i A', strtotime( $showtime['start'] ) );
//                     $end_time   = date( 'g:i A', strtotime( $showtime['end'] ) );

//                     // Output showtime details
//                     echo "<p><strong>Showtime:</strong> {$start_time}</p>";
//                 }
//             }
            
//             echo '</div>';
//         } else {
//             // If no showtimes are saved, show a message
//             echo '<p><strong>No showtimes available for this movie.</strong></p>';
//         }
//     }
// }, 25);
