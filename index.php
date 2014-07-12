<?php
include ('inc/header.php');
include ('inc/nav.php');
?>
		<div class="container normal-page sliderhome">
			<div class="row block">
				<div class="span12">
					<div class="template-wrapper">
						<ul id="js-news" class="js-hidden">
						<?php
						$sql_ticket_news = mysql_query("SELECT * FROM ticket_news LIMIT 0, 3");
						while($donnee_ticket_news = mysql_fetch_array($sql_ticket_news))
							{
						?>
                                <li class="news-item"><?php echo $donnee_ticket_news['desc']; ?></li>
                            <?php
                            }
                            ?>
                        </ul>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="row">
				<div class="span12">
					<div class="template-wrapper">
						<div class="block span8 first cf">
							<div id="block-2" class="block block-news_blog_style_block span8 first cf">
							<?php
							$sql_news = mysql_query("SELECT * FROM news ORDER BY date DESC LIMIT 0, 5");
							while($donnee_news = mysql_fetch_array($sql_news))
								{
								$sql_count_comm = mysql_query("SELECT * FROM commentaire_news WHERE idnews=".$donnee_news['idnews']);
								$count_comm = mysql_num_rows($sql_count_comm);
							?>
								<div class="blog-post">
									<div class="blog-image">
										<a href="article.php?idnews=<?php echo $donnee_news['idnews']; ?>"><img src="./img/defaults/<?php echo $donnee_news['images']; ?>817x320.jpg"></a>
										<div class="blog-date">
											<span class="date"><?php echo $donnee_news['date']; ?></span>
											<div class="plove"><a href="#" class="heart-love" id="heart-love-499" title="Love this"><span class="heart-love-count"><span class="icon-heart"></span><?php echo $count_comm; ?></span></a></div>
										</div>
									</div>
									<!-- blog-image -->
									<div class="blog-content">
										<h2><a href="article.php?idnews=<?php echo $donnee_news['idnews']; ?>"> <?php echo $donnee_news['title']; ?></a></h2>
										<p><?php echo $donnee_news['desc_court']; ?> […]</p>
									</div>
									<!-- blog-content -->
									<div class="blog-info">
										<div class="post-pinfo">
											<span class="icon-user"></span> <a data-original-title="View" all="" posts="" by="" admin="" data-toggle="tooltip" href="<?php echo $rootsite; ?>core/joueur/index.php?pseudo=<?php echo $donnee_news['author']; ?>"><?php echo $donnee_news['author']; ?></a> &nbsp;
											<span class="icon-comment"></span>  <a data-original-title="<?php echo $count_comm; ?> Commentaire" href="#" data-toggle="tooltip"><?php echo $count_comm; ?> Commentaire</a> &nbsp;
											<span class="icon-tags"></span>    <?php echo $donnee_news['tag']; ?>
										</div>
										<!-- post-pinfo -->
										<a href="article.php?idnews=<?php echo $donnee_news['idnews']; ?>" class="button-small">En savoir plus...</a>
										<div class="clear"></div>
									</div>
									<!-- blog-info -->
								</div>
								<?php
								}
								?>
								<!-- /.blog-post -->
								<div class="block-divider"></div>
								<div class="pagination">
									<ul>
										<li class="active"><a href="#">1</a></li>
										<li><a href="#" class="inactive">2</a></li>
										<li><a class="page-selector" href="#">»</a></li>
									</ul>
								</div>
								<div class="clear"></div>
							</div>
						</div>
						<!-- Sidebar -->
						<div class="block span4 cf">
							<div>
								<div class="widget">
									<div class="nextmatch_widget">
										<div class="title-wrapper">
											<h3 class="widget-title">Prochain Match</h3>
											<div class="clear"></div>
										</div>
										<div class="wcontainer">
											<a href="#" title="Game Addict vs Fnatic - Friendly">
												<div class="nextmatch_wrap">
													<img src="./img/defaults/140x102.jpg" class="clan1">
													<img src="./img/defaults/140x102.jpg" class="clan2">
													<div class="clear"></div>
													<div class="nm-clans navbar-inverse">
														<div class="r-home-team">
															<span>Game Addict</span>
														</div>
														<div class="versus">VS</div>
														<div class="r-opponent-team">
															<span>SK Gaming</span>
														</div>
														<div class="clear"></div>
													</div>
													<div class="nm-date">
														BF4 - February 20, 2014, <span>9:12pm</span>
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>
								<div class="widget">
									<div class="nextmatch_widget">
										<div class="title-wrapper">
											<h3 class="widget-title">Prochain Tournoi</h3>
											<div class="clear"></div>
										</div>
										<div class="wcontainer">
											<a href="#" title="Game Addict vs Fnatic - Friendly">
												<div class="nextmatch_wrap">
													<img src="./img/defaults/140x102.jpg" class="clan1">
													<img src="./img/defaults/140x102.jpg" class="clan2">
													<div class="clear"></div>
													<div class="nm-clans navbar-inverse">
														<div class="r-home-team">
															<span>Game Addict</span>
														</div>
														<div class="versus">VS</div>
														<div class="r-opponent-team">
															<span>SK Gaming</span>
														</div>
														<div class="clear"></div>
													</div>
													<div class="nm-date">
														BF4 - February 20, 2014, <span>9:12pm</span>
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>
								<div class="widget">
									<div class="title-wrapper">
										<h3 class="widget-title">Les Derniers Matches</h3>
										<div class="clear"></div>
									</div>
									<div class="wcontainer">
										<ul class="clanwar-list">
											<li>
												<ul class="tabs">
													<li class="selected">
														<a href="#all" title="All">All</a>
														<div class="clear"></div>
													</li>
													<li>
														<a href="#game-2" title="Battlefield 4">BF4</a>
														<div class="clear"></div>
													</li>
													<li>
														<a href="#game-1" title="Counter Strike: Global Offensive">CS:GO</a>
														<div class="clear"></div>
													</li>
													<li>
														<a href="#game-3" title="Dota 2">Dota 2</a>
														<div class="clear"></div>
													</li>
													<li>
														<a href="#game-4" title="League of Legends">LoL</a>
														<div class="clear"></div>
													</li>
												</ul>
												<div class="clear"></div>
											</li>
											<li class="clanwar-item">
												<a href="#" title="Pro league semifinal">
													<div class="wrap">
														<div class="upcoming">Upcoming</div>
														<div class="match-wrap">
															<img src="./img/defaults/25x25.jpg" class="clan1img">
															<!--<div class="home-team"></div>-->
															<span class="vs">vs.</span>
															<div class="opponent-team">
																Aliance
															</div>
															<div class="clear"></div>
														</div>
														<div class="date">CS:GO - March 1, 2015, 9:12 pm</div>
														<div class="clear"></div>
													</div>
												</a>
											</li>
											<li class="clanwar-item">
												<a href="#" title="Junior League">
													<div class="wrap">
														<div class="upcoming">Upcoming</div>
														<div class="match-wrap">
															<img src="./img/defaults/25x25.jpg" class="clan1img">
															<!--<div class="home-team"></div>-->
															<span class="vs">vs.</span>
															<div class="opponent-team">
																Aliance
															</div>
															<div class="clear"></div>
														</div>
														<div class="date">CS:GO - May 30, 2014, 9:55 pm</div>
														<div class="clear"></div>
													</div>
												</a>
											</li>
											<li class="clanwar-item">
												<a href="#" title="Game Addict vs Fnatic - Friendly">
													<div class="wrap">
														<div class="upcoming">Upcoming</div>
														<div class="match-wrap">
															<img src="./img/defaults/25x25.jpg" class="clan1img">
															<!--<div class="home-team"></div>-->
															<span class="vs">vs.</span>
															<div class="opponent-team">
																SK Gaming
															</div>
															<div class="clear"></div>
														</div>
														<div class="date">BF4 - February 20, 2014, 9:12 pm</div>
														<div class="clear"></div>
													</div>
												</a>
											</li>
											<li class="clanwar-item alt game-2">
												<a href="#" title="Snipers only 5v5">
													<div class="wrap">
														<div class="scores draw">0:0</div>
														<div class="match-wrap">
															<img src="./img/defaults/25x25.jpg" class="clan1img">
															<!--<div class="home-team"></div>-->
															<span class="vs">vs.</span>
															<div class="opponent-team">
																SK Gaming
															</div>
															<div class="clear"></div>
														</div>
														<div class="date">BF4 - February 15, 2014, 11:10 pm</div>
														<div class="clear"></div>
													</div>
												</a>
											</li>
											<li class="clanwar-item game-4">
												<a href="#" title="League of Legends - Sunday fun">
													<div class="wrap">
														<div class="scores win">82:52</div>
														<div class="match-wrap">
															<img src="./img/defaults/25x25.png" class="clan1img">
															<!--<div class="home-team"></div>-->
															<span class="vs">vs.</span>
															<div class="opponent-team">
																mYm
															</div>
															<div class="clear"></div>
														</div>
														<div class="date">LoL - February 10, 2014, 6:23 pm</div>
														<div class="clear"></div>
													</div>
												</a>
											</li>
											<li class="clanwar-item alt game-2">
												<a href="#" title="Close quarters match">
													<div class="wrap">
														<div class="scores win">200:171</div>
														<div class="match-wrap">
															<img src="./img/defaults/25x25.jpg" class="clan1img">
															<!--<div class="home-team"></div>-->
															<span class="vs">vs.</span>
															<div class="opponent-team">
																Aliance
															</div>
															<div class="clear"></div>
														</div>
														<div class="date">BF4 - January 20, 2014, 10:57 pm</div>
														<div class="clear"></div>
													</div>
												</a>
											</li>
											<li class="clanwar-item game-3">
												<a href="#" title="Dota 2 friendly">
													<div class="wrap">
														<div class="scores loose">41:45</div>
														<div class="match-wrap">
															<img src="./img/defaults/25x25.jpg" class="clan1img">
															<!--<div class="home-team"></div>-->
															<span class="vs">vs.</span>
															<div class="opponent-team">
																SK Gaming
															</div>
															<div class="clear"></div>
														</div>
														<div class="date">Dota 2 - January 20, 2014, 10:56 pm</div>
														<div class="clear"></div>
													</div>
												</a>
											</li>
											<li class="clanwar-item alt game-3">
												<a href="#" title="Dota final">
													<div class="wrap">
														<div class="scores loose">28:34</div>
														<div class="match-wrap">
															<img src="./img/defaults/25x25.jpg" class="clan1img">
															<!--<div class="home-team"></div>-->
															<span class="vs">vs.</span>
															<div class="opponent-team">
																Fnatic
															</div>
															<div class="clear"></div>
														</div>
														<div class="date">Dota 2 - January 10, 2014, 6:07 pm</div>
														<div class="clear"></div>
													</div>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="widget">
									<div class="title-wrapper">
										<h3 class="widget-title">Suivez nous sur Facebook !</h3>
										<div class="clear"></div>
									</div>
									<div class="wcontainer">
										<div class="textwidget">
											<iframe src="https://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fesfct&width=330&height=290&colorscheme=light&show_faces=true&header=true&stream=false&show_border=true&appId=178829182171244" style="border:none; overflow:hidden; width:100%; height:290px;" allowtransparency="true" frameborder="0" scrolling="no"></iframe>
										</div>
									</div>
								</div>
								<div class="widget">
									<div class="title-wrapper">
										<h3 class="widget-title">Poste Populaire</h3>
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
													<a href="#">Estiam massa mauris fermentum a congue id</a><br>
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
											<li>
												<div class="img">
													<a rel="bookmark" href="#">
													<img src="./img/defaults/57x57.jpg">
													<span class="overlay-link"></span>
													</a>
												</div>
												<div class="info">
													<a href="#">Morbi vel ipsum vel augue mattis ultricies non et mauris</a><br>
													<small><i class="icon-calendar"></i> June 17, 2013 - <i class="icon-comment"></i> 2 Comments</small><br>
													<div class="overall-score">
														<div class="rating r-35"></div>
													</div>
												</div>
												<div class="clear"></div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- Sidebar -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include ('inc/footer.php'); ?>
		<!-- JavaScript -->
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery.cookie.pack.js"></script>
		<script type="text/javascript" src="js/jquery-migrate.min.js"></script>
		<script type="text/javascript" src="js/jquery.fancybox.js"></script>
		<script type="text/javascript" src="js/jquery.elastic.source.js"></script>
		<script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.10.3.custom.min.js"></script>
		<script type="text/javascript" src="js/jquery.ui.totop.js"></script>
		<script type="text/javascript" src="js/login-with-ajax.js"></script>
		<script type="text/javascript" src="js/bootstrap-button.js"></script>
		<script type="text/javascript" src="js/bootstrap-carousel.js"></script>
		<script type="text/javascript" src="js/bootstrap-collapse.js"></script>
		<script type="text/javascript" src="js/bootstrap-modal.js"></script>
		<script type="text/javascript" src="js/bootstrap-tab.js"></script>
		<script type="text/javascript" src="js/bootstrap-tooltip.js"></script>
		<script type="text/javascript" src="js/bootstrap-transition.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript" src="js/global.js"></script>
		<script type="text/javascript" src="js/imagescale.js"></script>
		<script type="text/javascript" src="js/login-with-ajax.source.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript" src="js/parallax.js"></script>
		<script type="text/javascript" src="js/theme.min.js"></script>
        <script type="text/javascript" src="js/tabs.js"></script>
		<script type="text/javascript" src="js/ticker.js"></script>
		<script type="text/javascript">
            jQuery(function () {
                jQuery('#js-news').ticker();
            });
        </script>
		<!-- End JavaScript -->

	</body>
</html>