<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tax
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required()) {
    return;
}
?>

<div class="comment">

    <?php
    // You can start editing here -- including this comment!
    if (have_comments()) : ?>

        <div class="comment-title"><?php the_field('comments_title', 1436)?> <span>(<?= get_comments_number(); ?>)</span></div>
        <!-- .comments-title -->

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : // Are there comments to navigate through? ?>
            <nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
                <h2 class="screen-reader-text"><?php esc_html_e('Comment navigation', 'tax'); ?></h2>
                <div class="nav-links">

                    <div class="nav-previous"><?php previous_comments_link(esc_html__('Older Comments', 'tax')); ?></div>
                    <div class="nav-next"><?php next_comments_link(esc_html__('Newer Comments', 'tax')); ?></div>

                </div><!-- .nav-links -->
            </nav><!-- #comment-nav-above -->
        <?php endif; // Check for comment navigation. ?>

        <?php
        wp_list_comments(array(
//                'style' => 'ol',
            'short_ping' => true,
            'avatar_size' => 75,
            'reply_text' => 'Ответить',
            'callback' => 'mytheme_comment',
        ));
        ?>

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : // Are there comments to navigate through? ?>
            <nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
                <h2 class="screen-reader-text"><?php esc_html_e('Comment navigation', 'tax'); ?></h2>
                <div class="nav-links">
                    <div class="nav-previous"><?php previous_comments_link(esc_html__('Older Comments', 'tax')); ?></div>
                    <div class="nav-next"><?php next_comments_link(esc_html__('Newer Comments', 'tax')); ?></div>
                </div><!-- .nav-links -->
            </nav><!-- #comment-nav-below -->
            <?php
        endif; // Check for comment navigation.

    endif; // Check for have_comments().


    // If comments are closed and there are comments, let's leave a little note, shall we?
    if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) : ?>

        <p class="no-comments"><?php esc_html_e('Comments are closed.', 'tax'); ?></p>
        <?php
    endif;


    $fields = array(
        'author' => '
                
        <input required placeholder="Имя" id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30"' . $aria_req . ' />',
        'email' => '<input required placeholder="Email" id="email" name="email" type="email" value="' . esc_attr($commenter['comment_author_email']) . '" size="30"' . $aria_req . ' /></div></div>',
//        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x('Comment', 'noun') . '</label> <textarea placeholder="Текст" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p></div></div></div>'
    );

    $comments_args = array(
        'fields' => $fields,
        'comment_notes_before' => '<div class="leave-comment">
        <div class="comment-title">' . get_field('comments_form_title', 1436) . ' </div>
        <div class="form-wrap">',
        'title_reply' => '',
        'comment_notes_after' => '',
    );

    comment_form($comments_args);
    ?>
    <style>
        .comment .answer-link {
            position: absolute;
            right: 0;
            top: 0;
        }
        #reply-title {
            text-align: right;
            margin-bottom: 10px;
        }
    </style>
</div><!-- #comments -->
