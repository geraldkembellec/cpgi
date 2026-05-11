<?php
/* On définit que c'est du XML */
header("Content-Type: application/rss+xml; charset=UTF-8");
/* Connecteur de BDD */
$conn = new mysqli("localhost","root","root","PodcastCrepac");

echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<rss version="2.0">';
/* on commnence le canal */
echo '<channel>';
echo '<title><![CDATA[Podcast du Crépac – INTD-Cnam]]></title>';
echo '<link>http://portaildoc-intd.cnam.fr/</link>';
echo '<description><![CDATA[Flux des podcasts du Crépac]]></description>';

$result = $conn->query("SELECT Titre, Résumé, Date_publication, Url_diffusion FROM podcast ORDER BY Date_publication DESC");
foreach ($result as $row)
/* on itère les items */
{
	echo '<item>';
	echo '<title><![CDATA['.$row["Titre"].']]></title>';
	echo '<description><![CDATA['.$row["Résumé"].']]></description>';
	echo '<link><![CDATA['.$row["Url_diffusion"].']]></link>';
	echo '<guid><![CDATA['.$row["Url_diffusion"].']]></guid>';
	echo '<pubDate>'.date(DATE_RSS, strtotime($row["Date_publication"])).'</pubDate>';
	echo '</item>';
}
echo '</channel>';
echo '</rss>';
$conn->close();
?>
