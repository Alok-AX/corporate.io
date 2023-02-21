
<?php
function features_post(){
  register_post_type('features_post',array(
    'supports'=> array('title','thumbnail','editor'),
    'public'=>true,
    'labels'=>array(
    'name'=>'Features Posts',
    'add_new_item'=>'Add New Post',
    'edit_item'=>'Edit Post',
    'all_items'=>'All Post',
    'singular_name'=>'Features Posts'                
  ),
  ));
}
add_action('init','features_post');
?>