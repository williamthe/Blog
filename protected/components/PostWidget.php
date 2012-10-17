<?php
class PostWidget extends CWidget {
 
	public $post;

 
    public function run() {
        $this->render('post_iterate');
    }
}
?>