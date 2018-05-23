<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RPL_Libraria
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>


<div class="comments-area" id="comments">
	<!-- <div class="container dashed-black"></div> -->
	<div class="comment-bg container">
		<h4 class="comments-title">User Comments</h4>
		<span class="underline left"></span>
		<ol class="comment-list">
				<li class="comment even thread-even depth-1 parent">
						<div class="comment-body">
								<div class="comment-author vcard">
										<img class="avatar avatar-32 photo avatar-default" src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/64x64.jpg" alt="Comment Author">
										<b class="fn">
												<a class="url" rel="external nofollow" href="#">Emma</a>
										</b>
								</div>
								<footer class="comment-meta">
										<div class="left-arrow"></div>
										<div class="reply">
												<a href="#" class="comment-reply-link">
														<i class="fa fa-reply"></i> Reply
												</a>
										</div>
										<div class="comment-metadata">
												<a href="#">
														<time datetime="2016-01-17">
																<b>Mar 17, 2016 / </b>  45 Minutes Ago
														</time>
												</a>
										</div>
										<div class="comment-content">
												<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.
												</p>
										</div>
								</footer>
						</div>
						<ol class="children">
								<li class="comment odd alt depth-2">
										<div class="comment-body">
												<div class="comment-author vcard">
														<img class="avatar photo" src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/64x64.jpg" alt="Comment Avatar">
														<b class="fn">
																<a class="url" rel="external nofollow" href="#">Peter</a>
														</b>
												</div>
												<footer class="comment-meta">
														<div class="left-arrow"></div>
														<div class="reply">
																<a href="#" class="comment-reply-link">
																		<i class="fa fa-reply"></i> Reply
																</a>
														</div>
														<div class="comment-metadata">
																<a href="#">
																		<time datetime="2016-01-17">
																				<b>Mar 17, 2016 / </b>  45 Minutes Ago
																		</time>
																</a>
														</div>
														<div class="comment-content">
																<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
														</div>
												</footer>
										</div>
								</li>
						</ol>
						<div class="comment-body">
								<div class="comment-author vcard">
										<img class="avatar avatar-32 photo avatar-default" src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/64x64.jpg" alt="Comment Author">
										<b class="fn">
												<a class="url" rel="external nofollow" href="#">Mathew</a>
										</b>
								</div>
								<footer class="comment-meta">
										<div class="left-arrow"></div>
										<div class="reply">
												<a href="#" class="comment-reply-link">
														<i class="fa fa-reply"></i> Reply
												</a>
										</div>
										<div class="comment-metadata">
												<a href="#">
														<time datetime="2016-01-17">
																<b>Mar 17, 2016 / </b>  45 Minutes Ago
														</time>
												</a>
										</div>
										<div class="comment-content">
												<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.
												</p>
										</div>
								</footer>
						</div>
				</li>
		</ol>
	</div>


	<div class="comment-respond container" id="respond">
		<h4 class="comment-reply-title" id="reply-title">Write your comment:</h4>
		<span class="underline left"></span>
		<form class="comment-form" id="commentform" method="post" action="blog-detail.html">
				<div class="row" style="display: inline;">
						<p class="comment-form-author input-required">
								<label>
										<span class="first-letter">Name</span>
										<span class="second-letter">*</span>
								</label>
								<input name="author" id="author" type="text">
						</p>
						<p class="comment-form-email input-required">
								<label>
										<span class="first-letter">Email</span>
										<span class="second-letter">*</span>
								</label>
								<input name="email" id="email" type="email">
						</p>
						<p class="comment-form-subject input-required">
								<label>
										<span class="first-letter">Subject</span>
								</label>
								<input name="subject" id="subject" type="text">
						</p>
						<p class="comment-form-comment">
								<textarea name="comment" id="comment" placeholder="Blog Detail"></textarea>
						</p>
				</div>
				<div class="clearfix"></div>
				<p class="form-submit">
						<input value="Submit" class="submit" id="submit" name="submit" type="submit">
				</p>
		</form>
	</div>
</div><!--comments-area-->
