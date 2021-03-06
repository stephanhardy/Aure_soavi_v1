<?php if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) : ?>  	
	<?php die('You can not access this page directly!'); ?>  
<?php endif; ?>

<?php if(!empty($post->post_password)) : ?>
  	<?php if($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) : ?>
		<p class="danger alert">This post is password protected. Enter the password to view comments.</p>
  	<?php endif; ?>
<?php endif; ?>

<?php if($comments) : ?>

	<div class="comments-list row twelve columns">	
  		<ol class="row">
    		<?php foreach($comments as $comment) : ?>
  				<li class="comment_list" id="comment-<?php comment_ID(); ?>">
  					<?php if ($comment->comment_approved == '0') : ?>
  						<p class="wide success alert">Il tuo commento è in attesa di approvazione.</p>
  					<?php endif; ?>
  						<article>
  							<p class="comment_article row"><?php comment_text(); ?></p>
								<div class="row comment_author">
  									<p class="meta"><i class="icon-pencil"></i><?php comment_type(); ?> di <?php comment_author_link(); ?> il <?php comment_date(); ?> alle <?php comment_time(); ?></p>
  								</div>
  					</article>
  				</li>
			<?php endforeach; ?>
		</ol>
	</div>
<?php else : ?>
	<!--<p>Now tell us what YOU think!</p>
	 -->
<?php endif; ?>

<?php if(comments_open()) : ?>
	<?php if(get_option('comment_registration') && !$user_ID) : ?>
		<p class="danger alert">Devi essere <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">loggato/a</a> per inviare un commento.</p><?php else : ?>
		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
			<?php if($user_ID) : ?>
				<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>
			<?php else : ?>
				<p class="row comment_reachout">LASCIARE UN COMMENTO</p>		
				<p class="row field"><input placeholder="Nome*" class="metro input" type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
				<label class="comment_form" for="author">Name <?php if($req) echo "(required)"; ?></label></p>
				<p class="row field"><input placeholder="Email* (non sarà pubblicato)" class="metro input" type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
				<label class="comment_form" for="email">Mail (non sarà pubblicato) <?php if($req) echo "(required)"; ?></label></p>
				<p class="row field"><input Placeholder="Sito web" class="metro input" type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
				<label class="comment_form" for="url">Sito web</label></p>
			<?php endif; ?>
			<p class="row field"><textarea placeholder="Commento*" class="wide input textarea" type="textarea" name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>
			<p class="row field"><input class="centered narrow medium default btn" name="submit" type="submit" id="submit" tabindex="5" value="INVIA" />
			<input class="metro" type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></p>
			<?php do_action('comment_form', $post->ID); ?>
		</form>
	<?php endif; ?>
<?php else : ?>
	<p>The comments are closed.</p>
<?php endif; ?>