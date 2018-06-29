<section class="book-header">
<div class="book-header__inner">
<h1 class="section__title book-header__title"><?php bloginfo( 'name' ); ?></h1>
<p class="book-header__author">
<span class="fn"><?php echo $book_information['pb_authors']; ?></span>
</p>
<div class="book-header__cover">
<?php if ( ! empty( $book_information['pb_cover_image'] ) ): ?>
	 <div class="book-header__cover__image">
<?php /* translators: %s: title of book */ ?>
               <img src="<?php echo $book_information['pb_cover_image']; ?>" alt="<?php printf( __( 'Cover image for %s', 'pressbooks-book' ), get_bloginfo( 'name' ) ); ?>" />
               </div>
<?php endif; ?>
</div>
<!--<div class="book-header__license">
<?php $license = ( isset( $book_information['pb_book_license'] ) ) ? $book_information['pb_book_license'] : 'all-rights-reserved'; ?>
              <div class="book-header__license__icons license-icons"><?php echo \Pressbooks\Book\Helpers\license_to_icons( $license ); ?></div>
                  <span class="book-header__license__text license-text"><?php echo \Pressbooks\Book\Helpers\license_to_text( $license ); ?></span>
</div>-->
<div class="book-header__cta">
<a class="call-to-action" href="<?php echo pb_get_first(); ?>">
Read Book </a> </div>
</div>
</section>