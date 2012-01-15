<?php
/**
 * Attachments Template
 *
 * Displays singular WordPress Media Library items.
 *
 * @package Thematic
 * @subpackage Templates
 *
 * @link http://codex.wordpress.org/Using_Image_and_File_Attachments Codex:Using Attachments
 */

    // calling the header.php
    get_header();

    // action hook for placing content above #container
    thematic_abovecontainer();
?>
		<div id="container">
		
			<?php
				// action hook for placing content above #content
				thematic_abovecontent();

				// filter for manipulating the element that wraps the content 
				echo apply_filters( 'thematic_open_id_content', '<div id="content">' . "\n" );
			
				the_post();
	            
	            // displays the page title
				thematic_page_title();
				
				// action hook for placing content above #post
				thematic_abovepost();
			?>
	            
				<div id="post-<?php the_ID();
					echo '" ';
					// Checking for defined constant to enable Thematic's post classes
					if (!(THEMATIC_COMPATIBLE_POST_CLASS)) {
						post_class();
						echo '>';
					} else {
						echo 'class="';
						thematic_post_class();
						echo '">';
					}
	                
	                // creating the post header
	                thematic_postheader();
	                
	                ?>
	                
					<div class="entry-content">
						<div class="entry-attachment"><?php the_attachment_link($post->post_ID, true) ?></div>
	                    
	                        <?php 
	                        	the_content(more_text());
	
	                        	wp_link_pages('before=<div class="page-link">' .__('Pages:', 'thematic') . '&after=</div>');
	                        ?>
	                        
					</div><!-- .entry-content -->
	                
					<?php
	                	// creating the post footer
	                	thematic_postfooter();
	                ?>
	                
				</div><!-- #post -->
	
	            <?php
	       			// action hook for placing contentbelow #post
	            	thematic_belowpost();
	            	// calls the comments template
	            	comments_template();
	            ?>
	
			</div><!-- #content -->
			
			<?php 
				// action hook for placing content below #content
				thematic_belowcontent();
			?> 			
		</div><!-- #container -->

<?php 
    // action hook for placing content below #container
    thematic_belowcontainer();

    // calling the standard sidebar 
    thematic_sidebar();

    // calling footer.php
    get_footer();
?>