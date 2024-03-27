<?php
function getBooksData() 
{
    global $wpdb;

    $query = "SELECT 
            `wp_posts`.*,
            `wp_terms`.`name` 
            FROM `wp_term_relationships`
            INNER JOIN `wp_posts` ON `wp_posts`.`ID` = `wp_term_relationships`.`object_id`
            INNER JOIN `wp_terms` ON `wp_terms`.`term_id` = `wp_term_relationships`.`term_taxonomy_id`
            WHERE `wp_posts`.`post_type` = 'post'
            AND `wp_posts`.`post_status` = 'publish'
            AND `wp_terms`.`term_id` = '2';";

    if (count($wpdb->get_results($query)) > 0) 
    {
        $result = $wpdb->get_results($query);
    }
    else 
    {
        $result = '';
    }
    
    return $result;
}


?>