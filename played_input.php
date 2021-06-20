<?php

$artist = new App\Artist();
$rows = $artist->tampil();

?>
<?php

$album = new App\Album();
$rows = $album->tampil();
?>
<?php

$track = new App\Track();
$rows = $track->tampil();

?>
<h2>Tambah Data Played</h2>
<form action="played_proses.php" method="POST">
<table>
    <tr>
		<td>PLAYED</td>
		<td>:</td>
		<td><input type="text" name="i_played"/></td>
		</tr>
	<tr>
	<tr>
		<td>NAMA ARTIST</td>
        <td>:</td>
		<td>
		<select name="i_id_artist">
		<?php foreach($rows as $row){ ?>
			<option value="<?php echo $row['artist_id']; ?>"><?php echo $row['artist_name']; ?></option>
		<?php } ?>
		</select>
    <tr>
	<tr>
        <td>NAMA ALBUM</td>
        <td>:</td>
		<td>
		<select name="i_id_album">
		<?php foreach($rows as $row){ ?>
			<option value="<?php echo $row['album_id']; ?>"><?php echo $row['album_name']; ?></option>
		<?php } ?>
		</select>
		</td>
	</tr>
    <tr>
		<td>NAMA TRACK</td>
        <td>:</td>
		<td>
		<select name="i_id_track">
		<?php foreach($rows as $row){ ?>
			<option value="<?php echo $row['track_id']; ?>"><?php echo $row['track_name']; ?></option>
		<?php } ?>
		</select>
    <tr>
    <tr>
		<td></td>
        <td></td>
		<td><input type="submit" name="b_input" value="SIMPAN"/></td>
	</tr>
</table>
</form>