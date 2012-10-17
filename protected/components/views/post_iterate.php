<?php 
	$post = $this->post;
	for($i = 0; $i < count($post); $i++)
	{
		echo '<div class="post">';
			echo '<h2 class="title"><a href="#">'.$post[$i]['post_title'].'</a></h2>';
			echo '<p class="meta"><span class="date">'.$post[$i]['create_date'].'</span><span class="posted">Posted by <a href="#">William</a></span></p>';
			echo '<div style="clear: both;">&nbsp;</div>';
			echo '<div class="entry">';
				echo $post[$i]['post_content'];
			echo '</div>';
		echo '</div>';
	}
?>
