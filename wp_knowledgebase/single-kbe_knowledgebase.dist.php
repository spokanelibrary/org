Article page

<div id="kbe_container">

        
    <!--content-->
    <div id="kbe_content" <?php echo $kbe_content_class; ?>>
        <!--Content Body-->
        <div class="kbe_leftcol" >
        <?php
            while(have_posts()) :
                the_post();

                //  Never ever delete it !!!
                kbe_set_post_views(get_the_ID());
        ?>
                <h1><?php the_title(); ?></h1>
            <?php 
                the_content();
            ?>

        <?php
            endwhile;

            //  Never ever delete it !!!
            kbe_get_post_views(get_the_ID());
        ?>
        </div>
        <!--/Content Body-->

    </div>
	
    
</div>