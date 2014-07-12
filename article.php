<?php
include ('inc/header.php');
include ('inc/nav.php');
$idnews = $_GET['idnews'];
$sql_news = mysql_query("SELECT * FROM news WHERE idnews=".$idnews);
$donnee_news = mysql_fetch_array($sql_news);
$sql_count_comm = mysql_query("SELECT * FROM commentaire_news WHERE idnews=".$idnews);
$sql_comm = mysql_query("SELECT * FROM commentaire_news, joueur WHERE commentaire_news.idmembre = joueur.idmembre AND idnews=".$idnews);
$count_comm = mysql_num_rows($sql_count_comm);
?>
			<div class="container">
				<div class="row">
					<div class="title_wrapper">
						<div class="span6">
							<h1><?php echo $donnee_news['title']; ?></h1>
						</div>
						<div class="breadcrumbs">
							<strong><a href="#">Accueil</a> / <a href="#">Article</a>  / <?php echo $donnee_news['title']; ?></strong>
						</div>
					</div>
				</div>
			</div>
			<div class="container blog blog-ind">
				<div class="row">
					<div class="span8">
						<div class="blog-post">
							<div class="blog-image">
								<a href="#"><img src="./img/defaults/<?php echo $donnee_news['images']; ?>817x320.jpg" class="attachment-817x320 wp-post-image" alt="2" height="320" width="817"></a>
								<div class="blog-date">
									<span class="date"><?php echo $donnee_news['date']; ?></span>
									<div class="plove"><a href="#" class="heart-love" id="heart-love-499" title="Love this"><span class="heart-love-count"><span class="icon-heart"></span><?php echo $count_comm; ?></span></a></div>
								</div>
								<!-- blog-rating -->
							</div>
							<!-- blog-image -->
							<div class="">
								<h2><?php echo $donnee_news['title']; ?></h2>
							</div>
							<!-- blog-content -->
							<div class="blog-info">
								<div class="post-pinfo">
									<span class="icon-user"></span> <a data-original-title="View all posts by admin" data-toggle="tooltip" href="#"><?php echo $donnee_news['author']; ?></a> &nbsp;
									<span class="icon-comment"></span>  <a data-original-title="3 Comments" href="#" data-toggle="tooltip">
									<?php echo $count_comm; ?> Commentaires</a> &nbsp;
									<span class="icon-tags"></span><?php echo $donnee_news['tag']; ?>
								</div>
								<div class="clear"></div>
							</div>
							<!-- /.blog-info -->
							<div class="blog-content">
								<p><?php echo $donnee_news['desc_long']; ?></p>
							</div>
							<!-- /.blog-content -->
							<div class="clear"></div>
						</div>
						<!-- /.blog-post -->
						<div class="clear"></div>
						<div class="block-divider"></div>
						<div class="author-block wcontainer">
							<img alt="" src="<?php echo $donnee_news['images']; ?>.jpg" class="avatar avatar-250 photo" height="250" width="250">                
							<div class="author-content">
								<h3>En Savoir plus sur <?php echo $donnee_news['author']; ?></h3>
							</div>
							<div class="clear"></div>
						</div>
						<!-- /author-block -->
						<div id="comments" class="block-divider"></div>
						<div class="comment-form">
							<h2><?php echo $count_comm; ?> Commentaire</h2>
							<ul class="comment-list">
							<?php
							while($donnee_comm = mysql_fetch_array($sql_comm))
							{
							?>
								<li class="comment">
									<div class="wcontainer">
										<img alt="" src="http://1.gravatar.com/avatar/7a7f488cf2256a017a637d15eee0cd70?s=80&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D80&amp;r=G" class="photo avatar avatar-80 photo" height="80" width="80">            
										<div class="comment-body">
											<div class="comment-author"> <span class="comment-info"><?php echo $donnee_comm['pseudo']; ?></span></div>
											<i><small><?php echo $donnee_comm['date']; ?> @ <?php echo $donnee_comm['heure']; ?></small> </i><br>
											<p><?php echo $donnee_comm['commentaire']; ?></p>       
										</div>
										<div class="clear"></div>
									</div>
								</li>
								<?php } ?>
							</ul>
							<div class="navigation">
								<div class="alignleft"></div>
								<div class="alignright"></div>
							</div>
							<div id="respond">
								<h2>Leave a comment</h2>
								<div class="formcontainer">
									<form id="commentform" action="article.php" method="post" class="contact comment-form">
										<div id="comment-status"></div>
										<div id="form-section-author" class="form-section input-prepend">
											<span class="add-on"><i class="icon-user"></i></span>
											<input id="author" name="author" placeholder="Name*" value="" size="30" maxlength="20" tabindex="3" type="text">
										</div>
										<!-- #form-section-author .form-section -->
										<div id="form-section-email" class="form-section input-prepend">
											<span class="add-on"><i class="icon-envelope"></i></span>
											<input placeholder="Email*" id="email" name="email" value="" size="30" maxlength="50" tabindex="4" type="text">
										</div>
										<!-- #form-section-email .form-section -->
										<!-- #form-section-url .form-section -->
										<div id="form-section-comment" class="form-section input-prepend">
											<span class="add-on"><i class="icon-comment"></i></span>
											<textarea placeholder="Your message*" id="comment" name="comment" cols="45" rows="8" tabindex="6"></textarea>
										</div>
										<!-- #form-section-comment .form-section -->
										<div class="form-submit">
											<input id="submit" name="submit" class="button-small button-green" value="Submit comment" tabindex="7" type="submit">
										</div>
									</form>
									<!-- #commentform -->
								</div>
								<!-- .formcontainer -->
							</div>
							<!-- #respond -->
						</div>
						<!-- #comments -->
					</div>
					<!-- /.span8 -->
					<div class="span4 ">
						<div class="first widget">
							<form role="search" method="get" id="searchform" class="searchform" action="http://skywarriorthemes.com/gameaddict/">
								<div>
									<input value="" name="s" id="s" type="text">
									<input value="post" name="post_type" type="hidden">
								</div>
							</form>
						</div>
						<div class="widget">
							<div class="title-wrapper">
								<h3 class="widget-title"> Popular posts</h3>
								<div class="clear"></div>
							</div>
							<div class="wcontainer">
								<ul class="review">
									<li>
										<div class="img">
											<a rel="bookmark" href="#">
											<img src="./img/defaults/57x57.jpg">
											<span class="overlay-link"></span>
											</a>
										</div>
										<div class="info">
											<a href="#">
											Eget ultrices mauris rhoncus non          </a><br>
											<small>
											<i class="icon-calendar"></i> May 4, 2013 - <i class="icon-comment"></i> 5 Comments</small><br>
											<div class="overall-score">
												<div class="rating r-4"></div>
											</div>
										</div>
										<div class="clear"></div>
									</li>
									<li>
										<div class="img">
											<a rel="bookmark" href="#">
											<img src="./img/defaults/57x57.jpg">
											<span class="overlay-link"></span>
											</a>
										</div>
										<div class="info">
											<a href="#">
											Etiam massa mauris fermentum a congue id          </a><br>
											<small>
											<i class="icon-calendar"></i> June 17, 2013 - <i class="icon-comment"></i> 3 Comments</small><br>
											<div class="overall-score">
												<div class="rating r-45"></div>
											</div>
										</div>
										<div class="clear"></div>
									</li>
									<li>
										<div class="img">
											<a rel="bookmark" href="#">
											<img src="./img/defaults/57x57.jpg">
											<span class="overlay-link"></span>
											</a>
										</div>
										<div class="info">
											<a href="#">
											Mauris risus augue fermentum sit amet congue sit amet          </a><br>
											<small>
											<i class="icon-calendar"></i> January 4, 2013 - <i class="icon-comment"></i> 2 Comments</small><br>
											<div class="overall-score">
												<div class="rating r-45"></div>
											</div>
										</div>
										<div class="clear"></div>
									</li>
									<li>
										<div class="img">
											<a rel="bookmark" href="#">
											<img src="./img/defaults/57x57.jpg">
											<span class="overlay-link"></span>
											</a>
										</div>
										<div class="info">
											<a href="#">
											Duis lacinia nisi vel lorem scelerisque interdum          </a><br>
											<small>
											<i class="icon-calendar"></i> May 4, 2013 - <i class="icon-comment"></i> 2 Comments</small><br>
											<div class="overall-score">
												<div class="rating r-4"></div>
											</div>
										</div>
										<div class="clear"></div>
									</li>
									<li>
										<div class="img">
											<a rel="bookmark" href="#">
											<img src="./img/defaults/57x57.jpg">
											<span class="overlay-link"></span>
											</a>
										</div>
										<div class="info">
											<a href="#">
											Morbi vel ipsum vel augue mattis ultricies non et mauris          </a><br>
											<small>
											<i class="icon-calendar"></i> June 17, 2013 - <i class="icon-comment"></i> 2 Comments</small><br>
											<div class="overall-score">
												<div class="rating r-35"></div>
											</div>
										</div>
										<div class="clear"></div>
									</li>
								</ul>
							</div>
						</div>
						<div class="widget">
							<div class="title-wrapper">
								<h3 class="widget-title">Recent Posts</h3>
								<div class="clear"></div>
							</div>
							<div class="wcontainer">
								<ul>
									<li><a href="#">Fermentum sit amet congue sit amet</a></li>
									<li><a href="#">Etiam massa mauris fermentum a congue id</a></li>
									<li><a href="#">Curabitur lorem mauris dictum et tempus</a></li>
									<li><a href="#">Morbi vel ipsum vel augue mattis ultricies non et mauris</a></li>
									<li><a href="#">Duis lacinia nisi vel lorem scelerisque interdum</a></li>
								</ul>
							</div>
						</div>
						<div class="widget">
							<div class="title-wrapper">
								<h3 class="widget-title">Tags</h3>
								<div class="clear"></div>
							</div>
							<div class="wcontainer">
								<div class="tagcloud">
									<a href="#">Adventure</a>
									<a href="#">Classics</a>
									<a href="#">Fantasy</a>
									<a href="#">Machine motion</a>
									<a href="#">Online</a>
									<a href="#">Photography</a>
									<a href="#">Prints 3D</a>
									<a href="#">RPG</a>
									<a href="#">Shooter</a>
									<a href="#">Strategy</a>
								</div>
							</div>
						</div>
						<div class="widget-5 last widget">
							<div class="title-wrapper">
								<h3 class="widget-title">Latest work</h3>
								<div class="clear"></div>
							</div>
							<div class="wcontainer">
								<div class="wcontent wprojects">
									<a href="#" data-toggle="tooltip" data-original-title="The swamp lord">
										<img src="./img/defaults/305x305.jpg" class="wp-post-image">
									</a>
									<a href="#" data-toggle="tooltip" data-original-title="Call of the dragon">
										<img src="./img/defaults/305x305.jpg" class="wp-post-image">
									</a>
									<a href="#" data-toggle="tooltip" data-original-title="Evil intentions">
										<img src="./img/defaults/305x305.jpg" class="wp-post-image">
									</a>
									<a href="#" data-toggle="tooltip" data-original-title="Under the water">
										<img src="./img/defaults/305x305.jpg" class="wp-post-image">
									</a>
									<a href="#" data-toggle="tooltip" data-original-title="The boss">
										<img src="./img/defaults/305x305.jpg" class="wp-post-image">
									</a>
									<a href="h#" data-toggle="tooltip" data-original-title="The god">
										<img src="./img/defaults/305x305.jpg" class="wp-post-image">
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- /.span4 -->
					<!-- /container -->
				</div>
			</div>
			
			<footer class="container">
			<div class="span12">
						<div class="first footer_widget span3">
						<div class="title-wrapper">
							<h3 class="widget-title">Follow us on twitter!</h3>
							<div class="clear"></div>
						</div>
						<div class="latest-twitter-tweet"><i class="icon-twitter"></i> "@wdchomestager If you re-download the file from your Downloads area, it will be the most updated version :) Thanks! ^TK"</div>
						<div class="latest-twitter-tweet"><i class="icon-twitter"></i> "@alextintea Looking good! Congrats :D ^TK"</div>
						<div class="latest-twitter-tweet"><i class="icon-twitter"></i> "@NickCairl Thanks Nick! Glad you enjoy the site :D ^TK"</div>
						<div class="latest-twitter-tweet"><i class="icon-twitter"></i> "Hi everyone, site is up again! :) ^CA"</div>
						<div class="latest-twitter-tweet"><i class="icon-twitter"></i> "Awesome looking forward to new themes! Skywarriors are very cool!"</div>
						<div id="latest-twitter-follow-link"><a href="http://twitter.com/envato">follow @envato on twitter</a></div>
					</div>

				<div class="footer_widget span3">
					<div class="title-wrapper">
						<h3 class="widget-title"> Latest posts</h3>
						<div class="clear"></div>
					</div>
					<ul class="review">
						<li>
							<div class="img">
								<a rel="bookmark" href="#">
									<img src="./img/defaults/57x57.jpg">
									<span class="overlay-link"></span>
								</a>
							</div>
							<div class="info">
								<a href="#">Eget ultrices mauris rhoncus non</a><br>
								<small><i class="icon-calendar"></i> May 4, 2013 - <i class="icon-comment"></i> 5 Comments</small><br>
								<div class="overall-score">
									<div class="rating r-4"></div>
								</div>
							</div>
							<div class="clear"></div>
						</li>
						<li>
							<div class="img">
								<a rel="bookmark" href="#">
									<img src="./img/defaults/57x57.jpg">
									<span class="overlay-link"></span>
								</a>
							</div>
							<div class="info">
								<a href="#">Etiam massa mauris fermentum a congue id</a><br>
								<small><i class="icon-calendar"></i> June 17, 2013 - <i class="icon-comment"></i> 3 Comments</small><br>
								<div class="overall-score">
									<div class="rating r-45"></div>
								</div>
							</div>
							<div class="clear"></div>
						</li>
						<li>
							<div class="img">
								<a rel="bookmark" href="#">
									<img src="./img/defaults/57x57.jpg">
									<span class="overlay-link"></span>
								</a>
							</div>
							<div class="info">
								<a href="#">Mauris risus augue fermentum sit amet congue sit amet</a><br>
								<small><i class="icon-calendar"></i> January 4, 2013 - <i class="icon-comment"></i> 2 Comments</small><br>
								<div class="overall-score">
									<div class="rating r-45"></div>
								</div>
							</div>
							<div class="clear"></div>
						</li>
						<li>
							<div class="img">
								<a rel="bookmark" href="#">
									<img src="./img/defaults/57x57.jpg">
									<span class="overlay-link"></span>
								</a>
							</div>
							<div class="info">
								<a href="#">Duis lacinia nisi vel lorem scelerisque interdum</a><br>
								<small><i class="icon-calendar"></i> May 4, 2013 - <i class="icon-comment"></i> 2 Comments</small><br>
								<div class="overall-score">
									<div class="rating r-4"></div>
								</div>
							</div>
							<div class="clear"></div>
						</li>
					</ul>
				</div>
				<div class="footer_widget span3">
					<div class="title-wrapper">
						<h3 class="widget-title">From the forum</h3>
						<div class="clear"></div>
					</div>
					<ul>
						<li><a class="bbp-forum-title" href="#"><i class="icon-comment"></i>Pellentesque aliquam nibh eget nisi hendreri</a></li>
						<li><a class="bbp-forum-title" href="#"><i class="icon-comment"></i>Curabitur sollicitudin mi vel auctor auctor</a></li>
						<li><a class="bbp-forum-title" href="#"><i class="icon-comment"></i>Integer vitae neque ipsum</a></li>
						<li><a class="bbp-forum-title" href="#"><i class="icon-comment"></i>Pellentesque placerat tincidunt magna quis condimentum</a></li>
						<li><a class="bbp-forum-title" href="#"><i class="icon-comment"></i>Closed topic</a></li>
					</ul>
				</div>
				<div class="widget-4 last footer_widget span3">
					<div class="title-wrapper">
						<h3 class="widget-title">latest works</h3>
						<div class="clear"></div>
					</div>
					<div class="wcontent wprojects">
						<a href="#" data-toggle="tooltip" data-original-title="The swamp lord">
							<img src="./img/defaults/305x305.jpg" class="attachment-post-thumbnail wp-post-image" alt="7">
						</a>
						<a href="#" data-toggle="tooltip" data-original-title="Call of the dragon">
							<img width="305" height="305" src="./img/defaults/305x305.jpg" class="attachment-post-thumbnail wp-post-image" alt="6">
						</a>
						<a href="#" data-toggle="tooltip" data-original-title="Evil intentions">
							<img width="305" height="305" src="./img/defaults/305x305.jpg" class="attachment-post-thumbnail wp-post-image" alt="5">
							</a>
						<a href="#" data-toggle="tooltip" data-original-title="Under the water">
							<img width="305" height="305" src="./img/defaults/305x305.jpg" class="attachment-post-thumbnail wp-post-image" alt="4">
						</a>
						<a href="#" data-toggle="tooltip" data-original-title="The boss">
							<img width="305" height="305" src="./img/defaults/305x305.jpg" class="attachment-post-thumbnail wp-post-image" alt="3">
						</a>
						<a href="#" data-toggle="tooltip" data-original-title="The god">
							<img width="305" height="305" src="./img/defaults/305x305.jpg" class="attachment-post-thumbnail wp-post-image" alt="2">
						</a>
					</div>
				</div>
			</div>
			<div class="copyright span12">
				<p>© &nbsp;Made by Skywarrior Themes.&nbsp;</p>
				<div class="social">
					<a data-original-title="Rss" data-toggle="tooltip" class="rss" target="_blank" href="#"><i class="fa fa-rss"></i></a>
					<a data-original-title="Dribbble" data-toggle="tooltip" class="dribbble" target="_blank" href="#"><i class="fa fa-dribbble"></i> </a>
					<a data-original-title="Vimeo" data-toggle="tooltip" class="vimeo" target="_blank" href="#"><i class="fa fa-vimeo-square"></i> </a>
					<a data-original-title="Youtube" data-toggle="tooltip" class="youtube" target="_blank" href=""><i class="fa fa-youtube"></i> </a>
					<a data-original-title="Twitch" data-toggle="tooltip" class="twitch" target="_blank" href=""><i class="fa fa-gamepad"></i></a>
					<a data-original-title="Linked in" data-toggle="tooltip" class="linked-in" target="_blank" href="#"><i class="fa fa-linkedin"></i> </a>
					<a data-original-title="Google plus" data-toggle="tooltip" class="google-plus" target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
					<a data-original-title="Twitter" data-toggle="tooltip" class="twitter" target="_blank" href="#"><i class="fa fa-twitter"></i></a>
					<a data-original-title="Facebook" data-toggle="tooltip" class="facebook" target="_blank" href="#"><i class="fa fa-facebook"></i></a>
				</div>
			</div>
		</footer>
		</div>
		<!-- JavaScript -->
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery-migrate.min.js"></script>
		<script type="text/javascript" src="js/jquery.fancybox.js"></script>
		<script type="text/javascript" src="js/jquery.elastic.source.js"></script>
		<script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.10.3.custom.min.js"></script>
		<script type="text/javascript" src="js/jquery.ui.totop.js"></script>
		<script type="text/javascript" src="js/jquery.validate.min.js"></script>
		<script type="text/javascript" src="js/ticker.js"></script>
		<script type="text/javascript" src="js/login-with-ajax.js"></script>
		<script type="text/javascript" src="js/bootstrap-button.js"></script>
		<script type="text/javascript" src="js/bootstrap-carousel.js"></script>
		<script type="text/javascript" src="js/bootstrap-collapse.js"></script>
		<script type="text/javascript" src="js/bootstrap-modal.js"></script>
		<script type="text/javascript" src="js/bootstrap-tab.js"></script>
		<script type="text/javascript" src="js/bootstrap-tooltip.js"></script>
		<script type="text/javascript" src="js/bootstrap-transition.js"></script>
		<script type="text/javascript" src="js/ckeditor.js"></script>
		<script type="text/javascript" src="js/bootstrap-popover.js"></script>
		<script type="text/javascript" src="js/ajaxcomments.js"></script>
		<script type="text/javascript" src="js/appear.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript" src="js/global.js"></script>
		<script type="text/javascript" src="js/imagescale.js"></script>
		<script type="text/javascript" src="js/isotope.js"></script>
		<script type="text/javascript" src="js/login-with-ajax.source.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<!-- <script type="text/javascript" src="js/nouislider.jquery.json"></script> -->
		<script type="text/javascript" src="js/parallax.js"></script>
		<script type="text/javascript" src="js/simple-slider.js"></script>
		<script type="text/javascript" src="js/theme.min.js"></script>
		<script type="text/javascript" src="js/tinymce.min.js"></script>
		<script type="text/javascript" src="js/transit.js"></script>
		<script type="text/javascript" src="js/admin.js"></script>
		<script type="text/javascript" src="js/greensock.js"></script>
		<script type="text/javascript" src="js/layerslider.transitions.js"></script>
		<script type="text/javascript" src="js/layerslider.kreaturamedia.jquery.js"></script>
		<!-- End JavaScript -->
		<!-- Slider Initialization -->
		<script type="text/javascript">
			// Running the code when the document is ready
			$(document).ready(function() {
			
			    // Calling LayerSlider on the target element
			    $('#layerslider').layerSlider({
			        responsive: false
			    });
			});
		</script>
	</body>
</html>