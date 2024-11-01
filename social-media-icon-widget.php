<?php

/*
Plugin Name: Social Media Icon Widget
Plugin URI: https://riotweb.nl
Description: A  simple Wordpress widget that shows social media icons.
Author: Riotweb.nl
Version: 1.0
Author URI: https://riotweb.nl/plugins
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

if ( !defined('ABSPATH') )
  die('-1');

//enqueues our external font awesome stylesheet
function enqueue_social_widget_stylesheet(){
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'); 
}
add_action('wp_enqueue_scripts','enqueue_social_widget_stylesheet');


//Social Media Icon Widget
 
class social_widget extends WP_Widget {
 
   /** constructor */
   function __construct() {
    parent::__construct(
      'social_widget', 
      __('Social Media', 'text_domain'),
      array( 'description' => __( 'Share your social media!', 'text_domain' ), )
    );
  }
 
    /** @see WP_Widget::widget */
    function widget($args, $instance) { 
        extract( $args );
        $title    = apply_filters('widget_title', $instance['title']);
        $facebook  = $instance['facebook'];
        $twitter  = $instance['twitter'];
        $googleplus  = $instance['googleplus'];
        $whatsapp   = $instance['whatsapp'];
        $youtube   = $instance['youtube'];
        $reddit  = $instance['reddit'];
        $pinterest   = $instance['pinterest'];
        $skype   = $instance['skype'];
        $snapchat   = $instance['snapchat'];
        $github   = $instance['github'];
        $instagram   = $instance['instagram'];
        $linkedin   = $instance['linkedin'];
        $vine   = $instance['vine'];
        $tumblr   = $instance['tumblr'];
        $soundcloud   = $instance['soundcloud'];
        $steam   = $instance['steam'];
        $vk   = $instance['vk'];
        $vimeo   = $instance['vimeo'];
        
        echo $before_widget; 


        ?>  <ul class="fa-ul"><?php
          if ( $title )
            echo $before_title . $title . $after_title; ?>
          


<?php

if (!empty($facebook))
      echo '<li><i class="fa fa-facebook"></i>&nbsp&nbsp<a href="https://www.facebook.com/'. $facebook .'" target="_blank">'. $facebook .'</a></li>';
if (!empty($twitter))
      echo '<li><i class="fa fa-twitter"></i>&nbsp&nbsp<a href="https://twitter.com/'. $twitter .'" target="_blank">'. $twitter .'</a></li>';
if (!empty($googleplus))
      echo '<li><i class="fa fa-google-plus"></i>&nbsp&nbsp<a href="https://plus.google.com/'. $googleplus .'" target="_blank">'. $googleplus .'</a></li>';    
if (!empty($whatsapp))
      echo '<li><i class="fa fa-whatsapp"></i>&nbsp&nbsp'. $whatsapp .'</li>';
if (!empty($youtube))
      echo '<li><i class="fa fa-youtube-play"></i>&nbsp&nbsp<a href="https://www.youtube.com/user/'. $youtube .'" target="_blank">'. $youtube .'</a></li>';
if (!empty($reddit))
      echo '<li><i class="fa fa-reddit-alien"></i>&nbsp&nbsp<a href="https://www.reddit.com/user/'. $reddit .'" target="_blank">'. $reddit .'</a></li>';
if (!empty($pinterest))
      echo '<li><i class="fa fa-pinterest-p"></i>&nbsp&nbsp<a href="https://pinterest.com/'. $pinterest .'" target="_blank">'. $pinterest .'</a></li>';
if (!empty($skype))
      echo '<li><i class="fa fa-skype"></i>&nbsp&nbsp<a href="skype:'. $skype .'?userinfo" target="_blank">'. $skype .'</a></li>';    
if (!empty($snapchat))
      echo '<li><i class="fa fa-snapchat-ghost"></i>&nbsp&nbsp<a href="https://www.snapchat.com/add/'. $snapchat .'" target="_blank">'. $snapchat .'</a></li>';
if (!empty($github))
      echo '<li><i class="fa fa-github-alt"></i>&nbsp&nbsp<a href="https://www.github.com/'. $github .'" target="_blank">'. $github .'</a></li>';
if (!empty($instagram))
      echo '<li><i class="fa fa-instagram"></i>&nbsp&nbsp<a href="https://www.instagram.com/'. $instagram .'" target="_blank">'. $instagram .'</a></li>';
if (!empty($linkedin))
      echo '<li><i class="fa fa-linkedin"></i>&nbsp&nbsp<a href="https://linkedin.com/'. $linkedin .'" target="_blank">'. $linkedin .'</a></li>';
if (!empty($vine))
      echo '<li><i class="fa fa-vine"></i>&nbsp&nbsp<a href="https://vine.co/'. $vine .'" target="_blank">'. $vine .'</a></li>';    
if (!empty($tumblr))
      echo '<li><i class="fa fa-tumblr"></i>&nbsp&nbsp<a href="https://'. $tumblr .'.tumblr.com" target="_blank">'. $tumblr .'</a></li>';
if (!empty($soundcloud))
      echo '<li><i class="fa fa-soundcloud"></i>&nbsp&nbsp<a href="https://soundcloud.com/'. $soundcloud .'" target="_blank">'. $soundcloud .'</a></li>';
if (!empty($steam))
      echo '<li><i class="fa fa-steam"></i>&nbsp&nbsp<a href="http://steamcommunity.com/profiles/'. $steam .'" target="_blank">'. $steam .'</a></li>';
if (!empty($vk))
      echo '<li><i class="fa fa-vk"></i>&nbsp&nbsp<a href="https://vk.com/'. $vk .'" target="_blank">'. $vk .'</a></li>';
if (!empty($vimeo))
      echo '<li><i class="fa fa-vimeo"></i>&nbsp&nbsp<a href="https://vimeo.com/'. $vimeo .'" target="_blank">'. $vimeo .'</a></li>';
?>
  </ul>
              
              <?php echo $after_widget; ?>
        <?php
    }
 
    /** @see WP_Widget::update  */
    function update($new_instance, $old_instance) {   
    $instance = $old_instance;
    $instance['title'] = strip_tags($new_instance['title']);
    $instance['facebook'] = strip_tags($new_instance['facebook']);
    $instance['twitter'] = strip_tags($new_instance['twitter']);
    $instance['googleplus'] = strip_tags($new_instance['googleplus']);
    $instance['whatsapp'] = strip_tags($new_instance['whatsapp']);
    $instance['youtube'] = strip_tags($new_instance['youtube']);
    $instance['reddit'] = strip_tags($new_instance['reddit']);
    $instance['pinterest'] = strip_tags($new_instance['pinterest']);
    $instance['skype'] = strip_tags($new_instance['skype']);
    $instance['snapchat'] = strip_tags($new_instance['snapchat']);
    $instance['github'] = strip_tags($new_instance['github']);
    $instance['instagram'] = strip_tags($new_instance['instagram']);
    $instance['linkedin'] = strip_tags($new_instance['linkedin']);
    $instance['vine'] = strip_tags($new_instance['vine']);
    $instance['tumblr'] = strip_tags($new_instance['tumblr']);
    $instance['soundcloud'] = strip_tags($new_instance['soundcloud']);
    $instance['steam'] = strip_tags($new_instance['steam']);
    $instance['vk'] = strip_tags($new_instance['vk']);
    $instance['vimeo'] = strip_tags($new_instance['vimeo']);
        return $instance;
    }
 
    /** @see WP_Widget::form */
    function form($instance) {  
 
        $title    = esc_attr($instance['title']);
        $facebook  = esc_attr($instance['facebook']);
        $twitter  = esc_attr($instance['twitter']);
        $googleplus  = esc_attr($instance['googleplus']);
        $whatsapp = esc_attr($instance['whatsapp']);
        $youtube = esc_attr($instance['youtube']);
        $reddit    = esc_attr($instance['reddit']);
        $pinterest  = esc_attr($instance['pinterest']);
        $skype  = esc_attr($instance['skype']);
        $snapchat  = esc_attr($instance['snapchat']);
        $github = esc_attr($instance['github']);
        $instagram = esc_attr($instance['instagram']);
        $linkedin    = esc_attr($instance['linkedin']);
        $vine  = esc_attr($instance['vine']);
        $tumblr  = esc_attr($instance['tumblr']);
        $soundcloud  = esc_attr($instance['soundcloud']);
        $steam = esc_attr($instance['steam']);
        $vk = esc_attr($instance['vk']);
        $vimeo = esc_attr($instance['vimeo']);
        ?>

         <p>
          <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
        </p>
        <p>
          <label for="<?php echo $this->get_field_id('facebook'); ?>"><?php _e('Facebook Username:'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" type="url" value="<?php echo $facebook; ?>" />
        </p>
        <p>
          <label for="<?php echo $this->get_field_id('twitter'); ?>"><?php _e('Twitter Username:'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" type="url" value="<?php echo $twitter; ?>" />
        </p>
        <p>
          <label for="<?php echo $this->get_field_id('googleplus'); ?>"><?php _e('Google+ ID:'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('googleplus'); ?>" name="<?php echo $this->get_field_name('googleplus'); ?>" type="url" value="<?php echo $googleplus; ?>" />
        </p>
        <p>
          <label for="<?php echo $this->get_field_id('whatsapp'); ?>"><?php _e('Whatsapp:'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('whatsapp'); ?>" name="<?php echo $this->get_field_name('whatsapp'); ?>" type="tel" value="<?php echo $whatsapp; ?>" />
        </p>
        <p>
          <label for="<?php echo $this->get_field_id('youtube'); ?>"><?php _e('Youtube Username:'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('youtube'); ?>" name="<?php echo $this->get_field_name('youtube'); ?>" type="url" value="<?php echo $youtube; ?>" />
        </p>
        <p>
          <label for="<?php echo $this->get_field_id('reddit'); ?>"><?php _e('Reddit Username:'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('reddit'); ?>" name="<?php echo $this->get_field_name('reddit'); ?>" type="url" value="<?php echo $reddit; ?>" />
        </p>
        <p>
          <label for="<?php echo $this->get_field_id('pinterest'); ?>"><?php _e('Pinterest Username:'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('pinterest'); ?>" name="<?php echo $this->get_field_name('pinterest'); ?>" type="url" value="<?php echo $pinterest; ?>" />
        </p>
        <p>
          <label for="<?php echo $this->get_field_id('skype'); ?>"><?php _e('Skype Username:'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('skype'); ?>" name="<?php echo $this->get_field_name('skype'); ?>" type="url" value="<?php echo $skype; ?>" />
        </p>
        <p>
          <label for="<?php echo $this->get_field_id('snapchat'); ?>"><?php _e('Snapchat Username:'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('snapchat'); ?>" name="<?php echo $this->get_field_name('snapchat'); ?>" type="url" value="<?php echo $snapchat; ?>" />
        </p>
        <p>
          <label for="<?php echo $this->get_field_id('github'); ?>"><?php _e('Github Username:'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('github'); ?>" name="<?php echo $this->get_field_name('github'); ?>" type="url" value="<?php echo $github; ?>" />
        </p>
        <p>
          <label for="<?php echo $this->get_field_id('instagram'); ?>"><?php _e('Instagram Username:'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('instagram'); ?>" name="<?php echo $this->get_field_name('instagram'); ?>" type="url" value="<?php echo $instagram; ?>" />
        </p>
        <p>
          <label for="<?php echo $this->get_field_id('linkedin'); ?>"><?php _e('Linkedin Username:'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('linkedin'); ?>" name="<?php echo $this->get_field_name('linkedin'); ?>" type="url" value="<?php echo $linkedin; ?>" />
        </p>
        <p>
          <label for="<?php echo $this->get_field_id('vine'); ?>"><?php _e('Vine Username:'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('vine'); ?>" name="<?php echo $this->get_field_name('vine'); ?>" type="url" value="<?php echo $vine; ?>" />
        </p>
        <p>
          <label for="<?php echo $this->get_field_id('tumblr'); ?>"><?php _e('Tumblr Username:'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('tumblr'); ?>" name="<?php echo $this->get_field_name('tumblr'); ?>" type="url" value="<?php echo $tumblr; ?>" />
        </p>
        <p>
          <label for="<?php echo $this->get_field_id('soundcloud'); ?>"><?php _e('Soundcloud Username:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('soundcloud'); ?>" name="<?php echo $this->get_field_name('soundcloud'); ?>" type="url" value="<?php echo $soundcloud; ?>" />
        </p>
        <p>
          <label for="<?php echo $this->get_field_id('steam'); ?>"><?php _e('Steam ID:'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('steam'); ?>" name="<?php echo $this->get_field_name('steam'); ?>" type="url" value="<?php echo $steam; ?>" />
        </p>
        <p>
          <label for="<?php echo $this->get_field_id('vk'); ?>"><?php _e('Vk Username:'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('vk'); ?>" name="<?php echo $this->get_field_name('vk'); ?>" type="url" value="<?php echo $vk; ?>" />
        </p>
        <p>
          <label for="<?php echo $this->get_field_id('vimeo'); ?>"><?php _e('Vimeo Username:'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('vimeo'); ?>" name="<?php echo $this->get_field_name('vimeo'); ?>" type="url" value="<?php echo $vimeo; ?>" />
        </p>

        <?php 
    }
 
 
} // end class
add_action('widgets_init', create_function('', 'return register_widget("social_widget");'));
?>