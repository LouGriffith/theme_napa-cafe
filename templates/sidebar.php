<?php if( is_post_type_archive('sfwd-courses'))
{
    dynamic_sidebar('sidebar-courses');
} elseif( is_singular( 'sfwd-lessons' ) || is_post_type_archive('sfwd-lessons') || is_post_type_archive('sfwd-quiz') || is_post_type_archive('sfwd-topic') ) {
    dynamic_sidebar('sidebar-course');
} else {
    dynamic_sidebar('sidebar-primary');
} ?>