<?php

class WP_Shortcode {

    public function get_post($attributes = []){
        extract(shortcode_atts(array(
            'category' => 'all',
            'return' => 'title',
        ), $attributes));

        $return_string = "";
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 1, // we need only the latest post, so get that post only
        );
        if($category != "all"){
            $args["category_name"] = $category;
        }

        $str = "";
        $posts = get_posts($args);

        foreach ($posts as $post){
            if($return == "title"){
                $return_string = apply_filters('the_title', $post->post_title);
            }
            else if($return == "content"){
                $return_string = apply_filters('the_content', $post->post_content);
            }
            else if($return == "excerpt"){
                $return_string = apply_filters('the_excerpt', $post->post_content);
            }
        }

        return $return_string;
    }

    public function register(){
        add_shortcode('post', [$this, "get_post"]);
    }

}