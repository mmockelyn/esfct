		<!-- NAVBAR -->
		<div class="navbar navbar-inverse container">
				<div class="navbar-inner">
					<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<div class="nav-collapse collapse">
						<div class="menu-main-container">
							<ul class="nav">
								<li><a href="<?php echo $rootsite; ?>">Accueil</a></li>
								<li class="dropdown">
									<a href="matches.html">Tous Nos Jeux</a>
									<ul class="sub-menu dropdown-menu">
										<li><a href="<?php echo $rootsite; ?>/core/hearthstone/">Hearthstone</a></li>
										<li><a href="<?php echo $rootsite; ?>/core/fifa/">Fifa 14</a></li>
										<li><a href="<?php echo $rootsite; ?>/core/shootmania/">Shootmania</a></li>
										<li><a href="<?php echo $rootsite; ?>/core/titanfall/">TitanFall</a></li>
										<li><a href="<?php echo $rootsite; ?>/core/lol/">League Of Legend</a></li>
										<li><a href="<?php echo $rootsite; ?>/core/csgo/">CS:GO</a></li>
										<li><a href="<?php echo $rootsite; ?>/core/starcraft/">Starcraft II</a></li>
									</ul>
								</li>
								<li><a href="clan-members.html">Joueur </a></li>
								<li><a href="clan-members.html">Equipe </a></li>
								<li><a href="gallery.html">Tournois</a></li>
								<li><a href="clan-members.html">TV </a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</div>
						<a href="#myModalL" role="button" data-toggle="modal" class="account"><i class="fa fa-user"></i></a>
						<form method="get" id="header-searchform" action="http://skywarriorthemes.com/gameaddict/">
							<input autocomplete="off" value="" name="s" id="header-s" type="text">
							<input id="header-searchsubmit" value="Search" type="submit">
							
						</form>
					</div>
					<!--/.nav-collapse -->
				</div>
				<!-- /.navbar-inner -->
			</div>
		<div id="myModalL" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>Login</h3>
			</div>
			<div class="modal-body">
				<div id="LoginWithAjax" class="default">
					<span id="LoginWithAjax_Status"></span>
					<form name="LoginWithAjax_Form" id="LoginWithAjax_Form" action="http://skywarriorthemes.com/gameaddict/wp-login.php?callback=?&amp;template=" method="post">
						<table cellpadding="0" cellspacing="0" width="100%">
							<tbody>
								<tr id="LoginWithAjax_Username">
									<td class="username_input">
										<input name="log" placeholder="Nom d'utilisateur" id="lwa_user_login" class="input" value="" type="text">
									</td>
								</tr>
								<tr id="LoginWithAjax_Password">
									<td class="password_input">
										<input placeholder="Mot de Passe" name="pwd" id="lwa_user_pass" class="input" value="" type="password">
									</td>
								</tr>
								<tr>
									<td colspan="2"></td>
								</tr>
								<tr id="LoginWithAjax_Submit">
									<td id="LoginWithAjax_SubmitButton">
										<input name="rememberme" id="lwa_rememberme" value="forever" type="checkbox"> <label>Se rappeller de moi</label>
										<a href="#" title="Password Lost and Found">Mot de Passe Perdu ?</a>
										<br><br>
										<input class="button-small"value="Log In" type="submit">
										<a class="reg-btn button-small" href="#">Enregistrer vous</a>
										<input name="redirect_to" value="#" type="hidden">
										<input name="testcookie" value="1" type="hidden">
										<input name="lwa_profile_link" value="" type="hidden">
									</td>
								</tr>
							</tbody>
						</table>
					</form>
				</div>
			</div>
		</div>