<?php
$visits=1;
if(isset($_COOKIE["visits"])){
    $visits=(int)$_COOKIE["visits"];
}       
setcookie("visits", $visits+1, time()+60*60*24*30);
?>



<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
        <title>Romania Gallery- About</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Sidebar -->
			<section id="sidebar">
				<div class="inner">
					<nav>
						<ul>
                        <li><a href="index.php">Hi!</a></li>
							<li><a href="pg.php">Photo gallery</a></li>
							<li><a href="add.php">Add your photo</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</nav>
				</div>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Two -->
					<section id="two" class="wrapper style3 fade-up">
						<div class="inner">
							<canvas id="myCanvas" width="200" height="100" style="border:1px solid #fcfafa;">
							Your browser does not support the HTML canvas tag.</canvas>
							<script>
								var c = document.getElementById("myCanvas");
								var ctx = c.getContext("2d");
								ctx.font = "50px Arial";
								ctx.strokeText("About",30,70);
							</script>
							<div class="features">
							<section>
									<?php
									class Reprezentant{
										public $nume, $varsta;
    									public function setNume($var){
        									$this->nume=$var;
    									}
    									public function getNume(){
        								echo "This is ".$this->nume;
   										}
										public function setVarsta($var){
        									$this->varsta=$var;
    									}
    									public function getVarsta(){
        								echo "Age: ".$this->varsta;
   										}
									}
									class Poza{
										public $poza;
    									public function setPoza($var){
        									$this->poza=$var;
    									}
    									public function getPoza(){
											echo $this->poza;
										
   										}
									}?>
									<span class="icon solid major fa-desktop"></span>
									<h3>Creator</h3>
									<?php
									$c1=new Reprezentant();
									$p1=new Poza();
									$p1->setPoza("./images/elia.jpg");?>
									<img src="<?php $p1->getPoza();?>" width="300" height="300">
									<br>
									<?php
									$c1->setNume("Bisoc Elia");
									$c1->setVarsta("21");
									$c1->getNume();
									echo "<br>";
									$c1->getVarsta();
									?>
								</section>
								<section>
									<span class="icon solid major fa-code"></span>
									<h3>MP4 Player</h3>
									<video width="320" height="240" controls>
    								<source src="multimedia/movie.mp4" type="video/mp4">
    								</video>
								</section>
								<section>
									<span class="icon solid major fa-lock"></span>
									<h3>Harta</h3>
									<div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5424.399096399443!2d27.56483866167099!3d47.173529489997804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40cafb61af5ef507%3A0x95f1e37c73c23e74!2sAlexandru%20Ioan%20Cuza%20University!5e0!3m2!1sen!2sro!4v1715848275215!5m2!1sen!2sro" width="400" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                                    <script src="https://maps.googleapis.com/maps/api/js?key=??????????????????????????????&callback=myMap"></script>
								</section>
								<section>
									<span class="icon solid major fa-cog"></span>
									<h3>MP3 Player</h3>
                                    <br>
                                    <p>Red Hot Chili Peppers - Californication</p>
                                    <audio controls>
                                        <source src="multimedia/rhcp.mp3" type="audio/mpeg">
                                        Your browser does not support the audio element.
                                </audio> 
								</section>
								<section>
									<span class="icon solid major fa-desktop"></span>
									<h3>Youtube</h3>
									<iframe width="420" height="345" src="https://www.youtube.com/embed/Tm8LGxTLtQk"></iframe>
								</section>
								<section>
									<span class="icon solid major fa-link"></span>
									<h3>Controale social media</h3>
									<span class="likebtn-wrapper" data-theme="squarespace" data-ef_voting="heartbeat" data-show_dislike_label="true" data-share_size="large" data-loader_show="true"></span>
									<script>
									(function(d,e,s)
									{if(d.getElementById("likebtn_wjs"))return;
									a=d.createElement(e);
									m=d.getElementsByTagName(e)[0];
									a.async=1;a.id="likebtn_wjs";
									a.src=s;
									m.parentNode.insertBefore(a, m)})
									(document,"script","//w.likebtn.com/js/w/widget.js");
									</script>
									<br><br>
									<span class="icon major fa-gem"></span>
									<h3>Numar vizite</h3>
                                    <?php
                                    echo "Ati vizitat aceasta pagina de ".$visits." ori!";
                                    ?>
								</section>
							</div>
						</div>
					</section>

			</div>

		<!-- Footer -->
			<footer id="footer" class="wrapper style1-alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>