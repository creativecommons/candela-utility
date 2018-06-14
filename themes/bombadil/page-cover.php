<?php
// From pressbooks-book
$book_structure = pb_get_book_structure();
$book_information = pb_get_book_information();

get_header();
$metadata = pb_get_book_information();
if (get_option('blog_public') == '1'
    || (get_option('blog_public') == '0'
        && current_user_can_for_blog($blog_id, 'read'))) {

    if (have_posts()) { the_post(); }

    include( locate_template( 'partials/content-cover-book-header.php' ) );

    /*get_template_part('page-cover', 'top-block');*/
    /* get_template_part('page-cover', 'second-block'); */
    get_template_part('page-cover', 'third-block');

} else {

    get_template_part('page-cover', 'private-block');

}

/*do_action( 'pb_book_cover_before_footer' );
  get_footer();*/
