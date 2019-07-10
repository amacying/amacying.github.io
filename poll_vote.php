<?php
$vote = $_REQUEST['vote'];

//get content of textfile
$filename = "poll_result.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$croissants = $array[0];
$baguettes = $array[1];
$painauchocolat = $array[2];

if ($vote == 0) {
  $croissants = $croissants + 1;
}
if ($vote == 1) {
  $baguettes = $baguettes + 1;
}

<h2>Result:</h2>
<table>
<tr>
<td>Yes:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($croissants/($baguettes+$croissants),2)); ?>'
height='20'>
<?php echo(100*round($croissants/($baguettes+$croissants),2)); ?>%
</td>
</tr>
<tr>
<td>No:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($baguettes/($baguettes+$croissants),2)); ?>'
height='20'>
<?php echo(100*round($baguettes/($baguettes+$croissants),2)); ?>%
</td>
</tr>
</table>
