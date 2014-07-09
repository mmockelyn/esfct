<?php
include ('inc/header.php');
include ('inc/headerbar.php');
include ('inc/nav.php');

$nb_joueur = mysql_query("SELECT count(*) AS somme FROM joueur");
$nb_joueur_result = mysql_result($nb_joueur, 0);
?>
<div id="content">

		
	<div class="container">		
		<div class="row">			
			<div class="span12">
	      		
	      		<div class="widget" id="big-stats-container">
	      			
	      			<div class="widget-content">
	      				
	      				<div class="cf" id="big_stats">
							<div class="stat">								
								<h4>Nombre de Joueur Inscrit</h4>
								<span class="value"><?php echo $nb_joueur_result; ?></span>								
							</div> <!-- .stat -->
							
							<div class="stat">								
								<h4>Nombre d'equipe</h4>
								<span class="value">23</span>								
							</div> <!-- .stat -->

							<div class="stat">								
								<h4>Nombre de Club</h4>
								<span class="value">120</span>								
							</div> <!-- .stat -->
						</div>
			      		
		      		</div> <!-- /widget-content -->
		      		
	      		</div> <!-- /widget -->
	      		
      		</div>	
      		<div class="span4">			
				<div class="widget widget-accordion">
					
					<div class="widget-header">
						
						<h3>
							<i class="icon-sort"></i> 
							News Administrateur
							
						</h3>					
					</div> <!-- /.widget-header -->
					<?php
					$query_news_admin = mysql_query("SELECT * FROM news_admin");
					?>
					<div class="widget-content">
						<?php
								while($donnee_news_admin = mysql_fetch_array($query_news_admin))
								{
						?>
						<div class="accordion" id="sample-accordion">
				            <div class="accordion-group">
				              <div class="accordion-heading">
				                <a class="accordion-toggle" data-toggle="collapse" data-parent="#sample-accordion" href="#collapseOne">
				                  <?php echo $donnee_news_admin['title']; ?>, le <?php echo $donnee_news_admin['date']; ?> 
				                </a>
				                
				                <i class="icon-plus toggle-icon"></i>
				              </div>
				              <div id="collapseOne" class="accordion-body in collapse">
				                <div class="accordion-inner">
				                  <?php echo $donnee_news_admin['desc_cours']; ?>
				                </div>
				              </div>
				            </div>
				          </div>
				          <?php }?>				
						
					</div> <!-- /.widget-content -->
					
				</div> <!-- /.widget -->
				
				
				
			</div> <!-- /.span4 -->
			
			<div class="span8">				
				<div class="widget widget-table">
					<div class="widget-header">
						<h3>
							<i class="icon-th-list"></i> 
							Les 10 Derniers Joueurs Inscrit							
						</h3>								
						<div class="widget-actions">
							<input type="text" name="table-search" id="table-search" class="input-medium" placeholder="Search...">
						</div> <!-- /.widget-actions -->		
					</div> <!-- /.widget-header -->					
					<div class="widget-content">	
					<?php
					$query_joueur = mysql_query("SELECT * FROM joueur DESC LIMIT 0, 10");
					?>
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>N°</th>
									<th>Identité</th>
									<th>Pseudo</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr class="even gradeC">
								<?php
									while($donnee_joueur = mysql_fetch_array($query_joueur))
									{
										$idmembre = $donnee_joueur['idmembre'];
									?>
										<td>JCPT0000<?php echo $donnee_joueur['idmembre']; ?></td>
										<td><?php echo $donnee_joueur['nom']; ?> <?php echo $donnee_joueur['prenom']; ?></td>
										<td><?php echo $donnee_joueur['pseudo']; ?></td>
										<td>
											<button class="btn btn-info">Information sur le Joueur</button>
										</td>
									<?php } ?>

								</tr>												
							</tbody>
							</table>		
						
					</div> <!-- /.widget-content -->					
				</div> <!-- /.widget -->	



				<div class="widget widget-table">
					<div class="widget-header">
						<h3>
							<i class="icon-th-list"></i> 
							Les Prochains Tournois						
						</h3>								
						<div class="widget-actions">
							<input type="text" name="table-search" id="table-search" class="input-medium" placeholder="Search...">
						</div> <!-- /.widget-actions -->		
					</div> <!-- /.widget-header -->					
					<div class="widget-content">						
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>Date & Heure</th>
									<th>Lieu</th>
									<th>Libellé</th>
									<th>Jeux</th>
									<th>Nb Participant</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr class="even gradeC">
									<td>25 Juil. 2014 à 14H00</td>
									<td>EASYTECH CENTER</td>
									<td>ESFCT - PRO SERIES</td>
									<td>Starcraft II</td>
									<td>0</td>
									<td><button class="btn btn-info">Information sur le tournoi</button></td>
								</tr>												
							</tbody>
							</table>		
						
					</div> <!-- /.widget-content -->					
				</div> <!-- /.widget -->	


				<div class="widget widget-table">
					<div class="widget-header">
						<h3>
							<i class="icon-th-list"></i> 
							Les Prochains Matches						
						</h3>								
						<div class="widget-actions">
							<input type="text" name="table-search" id="table-search" class="input-medium" placeholder="Search...">
						</div> <!-- /.widget-actions -->		
					</div> <!-- /.widget-header -->					
					<div class="widget-content">						
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>Date & Heure</th>
									<th>Lieu</th>
									<th>Versus</th>
									<th>Jeux</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr class="even gradeC">
									<td>25 Juil. 2014 à 14H00</td>
									<td>EASYTECH CENTER</td>
									<td>Syltheron VS Martym</td>
									<td>Starcraft II</td>
									<td><button class="btn btn-info">Information sur le Match</button></td>
								</tr>												
							</tbody>
							</table>		
						
					</div> <!-- /.widget-content -->					
				</div> <!-- /.widget -->		
			</div> <!-- /.span8 -->			
		</div> <!-- /.row -->		
	</div> <!-- /.container -->	
</div> <!-- /#content -->
<link rel="stylesheet" href="<?php echo $rootsite; ?>/css/pages/reports.css">
<?php
include ('inc/footer.php');
?>
