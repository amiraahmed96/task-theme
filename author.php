<?php get_header(); ?>
<!-- information about author -->
<div class="container">
    <div class="row">
        <div class="author_block">
            <div class="col-md-4">
                <?php echo get_avatar(get_the_author_meta('ID'),'100%','','author',array('class' => 'img-thumbnail img-responsive')); ?>
            </div>
            <div class="col-md-6">
                <a href="<?php the_permalink(); ?>">
                    <h3><?php the_author_meta('first_name'); echo " "; the_author_meta('Last_name');  ?></h3></a>
                <a href="<?php the_permalink(); ?>"><h3><?php the_author_meta('email'); ?></h3></a>
                <a href="<?php the_permalink(); ?>">
                <h5><?php echo count_user_posts(get_the_author_meta('ID')); ?> Posts</h5>
                </a>
                <hr>
                <div class="discription">
                    <p class="lead">
                        <?php the_author_meta('discription'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <!--return the first 6 posts of the author -->
        <?php
        $author_posts = new WP_Query(array(
            'author' => get_the_author_meta('ID'),
            'post_per_page' => 6
        ));
        
        if($author_posts->have_posts())
        {
            while($author_posts->have_posts())
            {
                $author_posts->the_post();
                ?>
                <div class="author-posts">
                <div class="row">
                     <div class="col-md-4">
                         <?php the_post_thumbnail('',['class' => 'img-thumbnail img-responsive']); ?>
                     </div>
                     <div class="col-md-6">
                         <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                         <?php the_excerpt(); ?>
                     </div>
                </div>
                </div>
            <?php
            }
        }
        ?>
</div>

<?php get_footer(); ?>