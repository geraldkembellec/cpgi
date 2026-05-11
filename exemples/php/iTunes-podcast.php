<?php
header("Content-Type: application/rss+xml; charset=UTF-8");
$conn = new mysqli("localhost","root","root","PodcastCrepac");

echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<rss version="2.0" xmlns:itunes="http://www.itunes.com/dtds/podcast-1.0.dtd">';
echo '<channel>';
echo '<title><![CDATA[Podcast du Crépac – INTD-Cnam]]></title>';
echo '<link>http://portaildoc-intd.cnam.fr/</link>';
echo '<description><![CDATA[Flux des podcasts audio et vidéo du Crépac]]></description>';
echo '<language>fr-fr</language>';
echo '<itunes:author><![CDATA[Crépac – INTD-Cnam]]></itunes:author>';
echo '<itunes:summary><![CDATA[Flux des podcasts audio et vidéo du Crépac]]></itunes:summary>';
echo '<itunes:explicit>no</itunes:explicit>';
echo '<itunes:image href="https://intd.cnam.fr/medias/photo/portail-doc_1466686002308-jpg" />';
$resultat = $conn->query("SELECT Titre, Résumé, Date_publication, Url_diffusion, mime_type, taille FROM podcast ORDER BY Date_publication DESC");
foreach ($resultat as $item)
{
	echo '<item>';
	echo '<title><![CDATA['.$item["Titre"].']]></title>';
	echo '<description><![CDATA['.$item["Résumé"].']]></description>';
	echo '<link><![CDATA['.$item["Url_diffusion"].']]></link>';
	echo '<guid isPermaLink="true"><![CDATA['.$item["Url_diffusion"].']]></guid>';
	echo '<pubDate>'.date(DATE_RSS, strtotime($item["Date_publication"])).'</pubDate>';
	echo '<enclosure url="'.htmlspecialchars($item["Url_diffusion"], ENT_QUOTES, "UTF-8").'" length="'.$item["taille"].'" type="'.$item["mime_type"].'" />';
	echo '<itunes:explicit>no</itunes:explicit>';
	echo '</item>';
}
echo '</channel>';
echo '</rss>';

$conn->close();
?>
