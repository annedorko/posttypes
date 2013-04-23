Custom Post Types Class
=========

Building out what I hope will be a simple, beautiful custom post types class. Starting from scratch on my own from the practice, sharing with you for the input and in hopes people will enjoy the resource.

Usage
----------

```
require_once('classes/class.types.php');

$args = array( 'label' => 'post-type-name', 'labels' => array( 'name' => 'Post Types', 'singular_name' => 'Post Type' ) );
$new_post_type = new PostType( $args );
$new_post_type->register();
```

Still a work in progress, but you have to start somewhere!