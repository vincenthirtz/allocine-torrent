<?php

require_once('./allocine.class.php');

define('ALLOCINE_PARTNER_KEY', '100043982026');
define('ALLOCINE_SECRET_KEY', '29d185d98c984a359e6e6f26a0474269');

$allocine = new Allocine(ALLOCINE_PARTNER_KEY, ALLOCINE_SECRET_KEY);
?>
 <!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Films</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<div id="wrapper">
<h1><small>Hall Of Movies</small></h1>
	<div id="content">
<p class="info">Pré-requis: <a href="http://dev.deluge-torrent.org/wiki/Download" target="blank_">Deluge</a>, <a href="http://www.t411.in/users/signup/" target="blank_">compte t411</a> et accès internet rapide</p>
		<ul id="movieposters">
			<li>
			<?php
			$result = $allocine->get(25744);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>	
			
						<li>
			<?php
			$result = $allocine->get(10126);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>	
			
			<li>
			<?php
			$result = $allocine->get(29700);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>	
	<li>
			<?php
			$result = $allocine->get(230045);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>	
		<li>
			<?php
			$result = $allocine->get(182120);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 
<li>
			<?php
			$result = $allocine->get(19776);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>	
			<li>
			<?php
			$result = $allocine->get(2749);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>	
			<li>
			<?php
			$result = $allocine->get(135082);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>	
				<li>
			<?php
			$result = $allocine->get(29221);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
				<li>
			<?php
			$result = $allocine->get(26602);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
						<li>
			<?php
			$result = $allocine->get(114782);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
						<li>
			<?php
			$result = $allocine->get(12475);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
				<li>
			<?php
			$result = $allocine->get(27061);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
				<li>
			<?php
			$result = $allocine->get(134316);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
			<li>
			<?php
			$result = $allocine->get(18671);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
					<li>
			<?php
			$result = $allocine->get(14788);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
							<li>
			<?php
			$result = $allocine->get(18457);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
									<li>
			<?php
			$result = $allocine->get(2749);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
											<li>
			<?php
			$result = $allocine->get(9432);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
													<li>
			<?php
			$result = $allocine->get(14784);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
														<li>
			<?php
			$result = $allocine->get(9393);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
															<li>
			<?php
			$result = $allocine->get(52715);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
															<li>
			<?php
			$result = $allocine->get(178);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
																	<li>
			<?php
			$result = $allocine->get(27624);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
																			<li>
			<?php
			$result = $allocine->get(20172);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
					</li>
																			<li>
			<?php
			$result = $allocine->get(57826);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
																				<li>
			<?php
			$result = $allocine->get(111643);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
<li>
			<?php
			$result = $allocine->get(181893);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
			<li>
			<?php
			$result = $allocine->get(4572);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
			<li>
			<?php
			$result = $allocine->get(29714);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
					<li>
			<?php
			$result = $allocine->get(233913);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
						<li>
			<?php
			$result = $allocine->get(193927);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
					<li>
			<?php
			$result = $allocine->get(1832);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
						<li>
			<?php
			$result = $allocine->get(120682);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
								<li>
			<?php
			$result = $allocine->get(190918);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
	<li>
			<?php
			$result = $allocine->get(222967);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
			<li>
			<?php
			$result = $allocine->get(10568);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
					<li>
			<?php
			$result = $allocine->get(225953);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
						<li>
			<?php
			$result = $allocine->get(28359);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
						<li>
			<?php
			$result = $allocine->get(22779);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
						<li>
			<?php
			$result = $allocine->get(216955);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
							<li>
			<?php
			$result = $allocine->get(61099);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
						<li>
			<?php
			$result = $allocine->get(64439);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
							<li>
			<?php
			$result = $allocine->get(115621);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
							<li>
			<?php
			$result = $allocine->get(448);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
								<li>
			<?php
			$result = $allocine->get(198371);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
									<li>
			<?php
			$result = $allocine->get(137097);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
									<li>
			<?php
			$result = $allocine->get(21189);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
								<li>
			<?php
			$result = $allocine->get(134741);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
								<li>
			<?php
			$result = $allocine->get(27633);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
									<li>
			<?php
			$result = $allocine->get(176673);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
<li>
			<?php
			$result = $allocine->get(110101);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
			<li>
			<?php
			$result = $allocine->get(192554);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
				<li>
			<?php
			$result = $allocine->get(207825);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
				<li>
			<?php
			$result = $allocine->get(196885);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
						<li>
			<?php
			$result = $allocine->get(132039);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
							<li>
			<?php
			$result = $allocine->get(52933);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
								<li>
			<?php
			$result = $allocine->get(243);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
							<li>
			<?php
			$result = $allocine->get(4307);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
							<li>
			<?php
			$result = $allocine->get(55666);

$decode = json_decode($result);

foreach($decode as $movie) {
echo '<img src="'.$movie->poster->href.'" alt="'.$movie->title.'"/>';
echo '<div class="movieinfo">';
	echo '<h3>'.$movie->title.' ('.$movie->productionYear.')'.'</h3>';
	echo '<p>'.$movie->synopsisShort.'</p>';
echo '<a href="http://www.t411.in/torrents/search/?name='.$movie->title.'&description=&file=&user=&cat=210&subcat=631&search=%40name+'.$movie->title.'+&submit=Recherche" title="'.$movie->title.'">Torrent</a></div>';
   
}?> 

			</li>
		</ul>
	</div>
</div>
</body>
</html>