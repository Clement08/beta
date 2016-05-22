
<?php
include('header.php');
?>


<section id="portfolio">
	<div class="portfolio-intro">
		<div class="portfolio-intro-contenu">
			<h2>Mes travaux</h2>
			<p>
				Voici des travaux
			</p>
			<a href="#0" class='portfolio-btn' data-action="show-projects">Show projects</a>
		</div>
	</div> <!-- .cd-intro-block -->

	<div class="project-apercu">
		<ul class="portfolio-slider">
			<li class="current">
				<a href="#project-1">
					<img src="img/design.png" alt="project image">
					<div class="project-info">
						<h3>Project 1</h3>
						<p>Lorem ipsum dolor sit amet.</p>
					</div>
				</a>
			</li>

			<li>
				<a href="#project-2">
					<img src="img/img.png" alt="project image">
					<div class="project-info">
						<h3>Project 2</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, dicta.</p>
					</div>
				</a>
			</li>

			<li>
				<a href="#0">
					<img src="img/img.png" alt="project image">
					<div class="project-info">
						<h3>Project 3</h3>
						<p>Lorem ipsum dolor sit amet.</p>
					</div>
				</a>
			</li>

			<li>
				<a href="#0">
					<img src="img/img.png" alt="project image">
					<div class="project-info">
						<h3>Project 4</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
					</div>
				</a>
			</li>

			<li>
				<a href="#0">
					<img src="img/img.png" alt="project image">
					<div class="project-info">
						<h3>Project 5</h3>
						<p>Lorem ipsum dolor sit amet, consectetur.</p>
					</div>
				</a>
			</li>
		</ul>

		<ul class="portfolio-slider-navigation cd-img-replace">
			<li><a href="#0" class="prev inactive">Prev</a></li>
			<li><a href="#0" class="next">Next</a></li>
		</ul> <!-- .cd-slider-navigation -->
	</div> <!-- .cd-projects-wrapper -->

	<div class="project-content" id="project-1">
		<div>
			<h3>LE 111111</h3>
			<em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, ullam.</em>
			<p>couille</p>
		</div>
		<a href="#0" class="close cd-img-replace">Close</a>
	</div> <!-- .cd-project-content -->

	<div class="project-content" id="project-2">
		<div>
			<h3>LE PROJET 2</h3>
			<em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, ullam.</em>
			<p>couille</p>
		</div>
		<a href="#0" class="close cd-img-replace">Close</a>
	</div> <!-- .cd-project-content -->
</section>

<?php
include('footer.php');
?>
