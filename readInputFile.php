<!DOCTYPE html>
<html>
<head>
<?php
// Read data from input file and establish some local variables
// $movie could be tmnt, tmnt2, mortalkombat, princessbride (see the folders
// in this project), or a new one.
//
// These PHP variables can be used anywhere below in a PHP block.
//

$movie = $_GET["film"];
$imageFileName = $movie . "/overview.png";
$overviewTextFileName = $movie . "/overview.txt";
list ( $name, $year, $percentage ) = file ( $movie . "/info.txt" );

$images = "images";
$rotten = $images . "/rottenlarge.png";
$fresh = $images . "/freshlarge.png";

$array = file ( $overviewTextFileName );

?>
<title><?php echo $name?></title>
<link href="movies.css" type="text/css" rel="stylesheet" />
<meta charset="utf-8" />
</head>

<body>
	<div class="Top">
		<img src="images/rancidbanner.png" alt="Rancid Tomatoes">
	</div>

	<h1><?php echo $name?> (<?php echo $year?>)</h1>
	<div class="main">
		<div class="review">
			<div class="rotten">
				<img
					src="	<?php
					if ($percentage < 60) {
						echo $rotten;
					} else {
						echo $fresh;
					}
					?>"
					alt="Rancid Tomatoes"> <span class="percentage"><?php echo $percentage?>%</span>
			</div>

			<div class="reviewLeft">

<!-- 				<div class="comments"> -->

<!-- 					<img src="images/rotten.gif" alt="Rotten" /><q>Ditching the cheeky, -->
<!-- 						self-aware wink that helped to excuse the concept's inherent -->
<!-- 						corniness, the movie attempts to look polished and 'cool,' but the -->
<!-- 						been-there animation can't compete with the then-cutting-edge -->
<!-- 						puppetry of the 1990 live-action movie.</q> -->

<!-- 				</div> -->

<!-- 				<div class="author"> -->
<!-- 					<img src="images/critic.gif" alt="Critic" /> Peter Debruge <br /> -->
<!-- 					Variety -->
<!-- 				</div> -->

<!-- 				<div class="comments"> -->

<!-- 					<img src="images/fresh.gif" alt="Fresh" /> <q>TMNT is a fun, -->
<!-- 						action-filled adventure that will satisfy longtime fans and -->
<!-- 						generate a legion of new ones.</q> -->

<!-- 				</div> -->

<!-- 				<div class="author"> -->

<!-- 					<img src="images/critic.gif" alt="Critic" /> Todd Gilchrist <br /> -->
<!-- 					IGN Movies -->

<!-- 				</div> -->

<!-- 				<div class="comments"> -->

<!-- 					<img src="images/rotten.gif" alt="Rotten" /> "It stinks!"<br /> <br /> -->

<!-- 				</div> -->
<!-- 				<div class="author"> -->

<!-- 					<img src="images/critic.gif" alt="Critic" /> Jay Sherman -->
<!-- 					(unemployed) -->

<!-- 				</div> -->

<!-- 				<div class="comments"> -->

<!-- 					<img src="images/rotten.gif" alt="Rotten" /> <q>The rubber suits -->
<!-- 						are gone and they've been redone with fancy computer technology, -->
<!-- 						but that hasn't stopped them from becoming dull.</q> -->

<!-- 				</div> -->
<!-- 				<div class="author"> -->

<!-- 					<img src="images/critic.gif" alt="Critic" /> Joshua Tyler <br /> -->
<!-- 					CinemaBlend.com -->

<!-- 				</div> -->

<!-- 				<div class="comments"> -->

<!-- 					<img src="images/rotten.gif" alt="Rotten" /> <q>Turtle is ugly </q><br /> -->
<!-- 					<br /> -->

<!-- 				</div> -->
<!-- 				<div class="author"> -->

<!-- 					<img src="images/critic.gif" alt="Critic" /> Benlong Huang <br /> U -->
<!-- 					of A -->

<!-- 				</div> -->
 			</div> 

			<div class="reviewRight">
<!-- 				<div class="comments"> -->

<!-- 					<img src="images/rotten.gif" alt="Rotten" /> <q>The turtles -->
<!-- 						themselves may look prettier, but are no smarter; torn irreparably -->
<!-- 						from their countercultural roots, our superheroes on the half -->
<!-- 						shell have been firmly co-opted by the industry their creators -->
<!-- 						once sought to spoof.</q> -->

<!-- 				</div> -->
<!-- 				<div class="author"> -->

<!-- 					<img src="images/critic.gif" alt="Critic" /> Jeannette Catsoulis <br /> -->
<!-- 					New York Times -->

<!-- 				</div> -->

<!-- 				<div class="comments"> -->

<!-- 					<img src="images/rotten.gif" alt="Rotten" /> <q>Impersonally -->
<!-- 						animated and arbitrarily plotted, the story appears to have been -->
<!-- 						made up as the filmmakers went along.</q> -->

<!-- 				</div> -->
<!-- 				<div class="author"> -->

<!-- 					<img src="images/critic.gif" alt="Critic" /> Ed Gonzalez <br /> -->
<!-- 					Slant Magazine -->

<!-- 				</div> -->

<!-- 				<div class="comments"> -->

<!-- 					<img src="images/fresh.gif" alt="Fresh" /> <q>The striking use of -->
<!-- 						image and motion allows each sequence to leave an impression. It's -->
<!-- 						an accomplished restart to this franchise.</q> -->

<!-- 				</div> -->

<!-- 				<div class="author"> -->

<!-- 					<img src="images/critic.gif" alt="Critic" /> Mark Palermo <br /> -->
<!-- 					Coast (Halifax, Nova Scotia) -->

<!-- 				</div> -->

<!-- 				<div class="comments"> -->

<!-- 					<img src="images/rotten.gif" alt="Rotten" /> <q>The script feels -->
<!-- 						like it was computer generated. This mechanical presentation lacks -->
<!-- 						the cheesy charm of the three live action films.</q> -->

<!-- 				</div> -->

<!-- 				<div class="author"> -->

<!-- 					<img src="images/critic.gif" alt="Critic" /> Steve Rhodes <br /> -->
<!-- 					Internet Reviews -->

<!-- 				</div> -->

<!-- 				<div class="comments"> -->

<!-- 					<img src="images/fresh.gif" alt="Rotten" /> <q>I think it's great </q><br /> -->
<!-- 					<br /> -->

<!-- 				</div> -->

<!-- 				<div class="author"> -->

<!-- 					<img src="images/critic.gif" alt="Critic" /> Benlong Huang <br /> U -->
<!-- 					of A -->

<!-- 				</div> -->
			</div>
		</div>

		<div class="overview">
			<img id = "benlong" src="<?php echo $imageFileName ?>" alt="general overview" />
		</div>
		<dl>
		<?php
		for($line = 0; $line < count ( $array ); $line ++) {
			$content = explode ( ":", $array [$line] );
			echo "<dt>$content[0]</dt>";
			echo "<dd>$content[1]</dd>";
		}
		?>
		</dl>
<!-- 		<div class="pageNumber">(1-10) of 88</div> -->
	</div>
</body>
</html>