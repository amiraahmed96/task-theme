<?php
wp_list_comments();
foreach($comments as $comment)
{
    comment_author(array(
        'type' => 'comment',
        'avatar_size' =>64,
        'max_depth'   => 2,
    ));
}
?>