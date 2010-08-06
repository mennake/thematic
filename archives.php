<?php
/*
Template Name: Archives Page
*/
?>
<?php

    // calling the header.php
    get_header();

    // action hook for placing content above #container
    thematic_abovecontainer();

?>	
		<div id="container">
		
			<?php thematic_abovecontent(); ?>
		
			<div id="content">
	
	            <?php 
	            
	            the_post();
	            
	            thematic_abovepost();
	            
	            ?>
	
				<div id="post-<?php the_ID() ?>" class="<?php thematic_post_class() ?>">
	            
	    			<?php 
	                
	                // creating the post header
	                thematic_postheader();
	                
	                ?>
	                
					<div class="entry-content">
	                
	                    <?php 
	                    
	                    the_content();
	
	                    // action hook for the 404 content
	                    thematic_archives();
	
	                    edit_post_link(__('Edit', 'thematic'),'<span class="edit-link">','</span>');
	                    
	                    ?>
	
					</div><!-- .entry-content -->
				</div><!-- #post -->
	
	        <?php
	        
	        thematic_belowpost();
	        
	        // calling the comments template
	        thematic_comments_template();
	        
	        ?>
	
			</div><!-- #content -->
			
			<?php thematic_belowcontent(); ?> 
			
		</div><!-- #container -->

<?php 

    // action hook for placing content below #container
    thematic_belowcontainer();

    // calling the standard sidebar 
    thematic_sidebar();
    
    // calling footer.php
    get_footer();

?>