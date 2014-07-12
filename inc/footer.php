<footer class="container">
			<div class="span12">
						<div class="first footer_widget span3">
						<div class="title-wrapper">
							<h3 class="widget-title">Suivez nous sur Twitter</h3>
							<div class="clear"></div>
						</div>
						<a class="twitter-timeline"  href="https://twitter.com/ESFCT"  data-widget-id="365847183787958274">Tweets de @ESFCT</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


						<div id="latest-twitter-follow-link"><a href="http://twitter.com/envato">follow @esfct on twitter</a></div>
					</div>

				<div class="footer_widget span3">
					<div class="title-wrapper">
						<h3 class="widget-title"> Derniers Article</h3>
						<div class="clear"></div>
					</div>
					<ul class="review">
						<li>
						<?php
						$sql_news = mysql_query("SELECT * FROM news ORDER BY date DESC LIMIT 0, 3");
							while($donnee_news = mysql_fetch_array($sql_news))
								{
									$sql_count_comm = mysql_query("SELECT * FROM commentaire_news WHERE idnews=".$donnee_news['idnews']);
								$count_comm = mysql_num_rows($sql_count_comm);
						?>
							<div class="img">
								<a rel="bookmark" href="#">
									<img src="./img/defaults/<?php echo $donnee_news['images']; ?>57x57.jpg">
									<span class="overlay-link"></span>
								</a>
							</div>
							<div class="info">
								<a href="article.php?idnews=<?php echo $donnee_news['idnews']; ?>"><?php echo $donnee_news['title']; ?></a><br>
								<small><i class="icon-calendar"></i> <?php echo $donnee_news['date_long']; ?> - <i class="icon-comment"></i> <?php echo $count_comm; ?> Commentaire</small><br>
							</div>
							<div class="clear"></div>
						</li>
						<?php } ?>
					</ul>
				</div>
				<div class="footer_widget span3">
					<div class="title-wrapper">
						<h3 class="widget-title">En Direct du Forum</h3>
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
			</div>
			<div class="copyright span12">
				<p>©2014 &nbsp;Made by ESFCT.&nbsp;</p>
				<div class="social">
					<a data-original-title="Vimeo" data-toggle="tooltip" class="vimeo" target="_blank" href="https://vimeo.com/user29979695"><i class="fa fa-vimeo-square"></i> </a>
					<a data-original-title="Youtube" data-toggle="tooltip" class="youtube" target="_blank" href="https://www.youtube.com/channel/UCAQDLIFam3V9JQbkURiiNmQ"><i class="fa fa-youtube"></i> </a>
					<a data-original-title="Twitch" data-toggle="tooltip" class="twitch" target="_blank" href="http://www.twitch.tv/esfct2014"><i class="fa fa-gamepad"></i></a>
					<a data-original-title="Linked in" data-toggle="tooltip" class="linked-in" target="_blank" href="#"><i class="fa fa-linkedin"></i> </a>
					<a data-original-title="Google plus" data-toggle="tooltip" class="google-plus" target="_blank" href="https://plus.google.com/u/2/b/106245998354877028356/106245998354877028356/posts"><i class="fa fa-google-plus"></i></a>
					<a data-original-title="Twitter" data-toggle="tooltip" class="twitter" target="_blank" href="https://twitter.com/ESFCT"><i class="fa fa-twitter"></i></a>
					<a data-original-title="Facebook" data-toggle="tooltip" class="facebook" target="_blank" href="#"><i class="fa fa-facebook"></i></a>
				</div>
			</div>
		</footer>