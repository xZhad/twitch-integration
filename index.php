<?php

include_once('http.php');

$result = get_url_contents("https://api.twitch.tv/kraken/games/top?limit=20");
$data = json_decode($result);

?>

<table>

<?php

foreach($data->top AS $key => $val) {
	print "<tr><td>";
	print($val->viewers);
	print "</td><td>";
	print($val->game->name);
	print "</td><td><img src=\"";
	print($val->game->logo->small);
	print "\"></td></tr>";
}

?>

</table>