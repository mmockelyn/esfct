<?php
include ('../../inc/header.php');
include ('../../inc/headerbar.php');
include ('../../inc/nav.php');
?>
<div id="content">

		
	<div class="container">	
		<div class="clearfix" id="page-title">
				
				<h1>Gestion des Joueurs, Equipes et Clubs</h1>
				
				<ul class="breadcrumb">
				  <li>
				    <a href="<?php echo $rootsite; ?>">Accueil</a> <span class="divider">/</span>
				  </li>
				  <li class="active">Gestion des Joueurs, Equipes et Clubs</li>
				</ul>
				
			</div>	
		<div class="row">			
			<div class="span12">
	      		
	      		<div class="widget" id="big-stats-container">
	      			
	      			<div class="widget-content">
	      				
	      				<div class="cf" id="big_stats">

							<div class="stat">								
								<h4>Nombre de Joueur Inscrit</h4>
								<span class="value">120</span>								
							</div> <!-- .stat -->
						</div>
			      		
		      		</div> <!-- /widget-content -->
		      		
	      		</div> <!-- /widget -->
	      		
      		</div>
      		<div class="span12">
      			<div id="big-stats-container" class="widget">
	      			
	      			<div class="widget-content">
	      				
	      				<div id="big_stats" class="cf">

	      					<div class="stat">
		      					<a href="joueur/index.php"><button class="btn btn-primary btn-large">Joueur</button></a>
		      					<a href="equipe/index.php"><button class="btn btn-primary btn-large">Equipe</button></a>
		      					<a href="club/index.php"><button class="btn btn-primary btn-large">Club</button></a>
		      				</div>
						</div>
			      		
		      		</div> <!-- /widget-content -->
		      		
	      		</div>	
      		</div>				
			<div class="span12">				
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
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>N°</th>
									<th>Identité</th>
									<th>Pseudo</th>
									<th>Jeux</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr class="even gradeC">
									<td>100210</td>
									<td>MOCKELYN Maxime (FR)</td>
									<td>Syltheron</td>
									<td>Starcraft, CSGO</td>
									<td>
										<button class="btn btn-info">Information sur le Joueur</button>
									</td>
								</tr>												
							</tbody>
						</table>		
					</div> <!-- /.widget-content -->					
				</div> <!-- /.widget -->	


				<div class="widget widget-table">
					<div class="widget-header">
						<h3>
							<i class="icon-th-list"></i> 
							Les 10 Dernieres Equipes Inscrites							
						</h3>								
						<div class="widget-actions">
							<input type="text" name="table-search" id="table-search" class="input-medium" placeholder="Search...">
						</div> <!-- /.widget-actions -->		
					</div> <!-- /.widget-header -->					
					<div class="widget-content">						
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>N°</th>
									<th>Identité</th>
									<th>Jeux</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr class="even gradeC">
									<td>100210</td>
									<td>Slide Team</td>
									<td>Starcraft, CSGO</td>
									<td>
										<button class="btn btn-info">Information sur le l'equipe</button>
									</td>
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
include ('../../inc/footer.php');
?>
