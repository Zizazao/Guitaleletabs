@include file=('header')
<div class="container marketing">
	<div class="top-buffer">
		<h1>Making Your Own Tablature</h1>
		
		<form action="save_song_info.php" method="POST">
			<tr>
				<div class="col-md-6">
					<td>Song name:</td>
					<td><input type="text" class="form-control" name="song" </td>
					<td>Artist:</td>
					<td><td><input type="text" class="form-control" name="artist" </td>
					<td>Album:</td>
					<td><td><input type="text" class="form-control" name="album" </td>
					<td>Difficulty:</td>
					<td><td><select type="text" class="form-control" name="difficulty" >
					  <option>Novice</option>
					  <option>Medium</option>
					  <option>Hard</option>
					</select>

				</div>	
			</tr>
			<div class="col-md-12">
			<td>Tablature:</td>
			<textarea  class="form-control" name="view" rows="15" >Instructions: copy and paste the segment below as much as you need to write a fingerpicking part.
Example:         ¡¡¡¡WARNING!!!-------> ((note that everytime you write a numer in the fingerpicking part, you have to delete a dash.))
e|--------------------------------------------------------------------------|
B|-----------5-------------7-------------5----8----7----5/7--7---------|
G|--------5-------------7-------------5-------9----7----5/7--7---------|
D|-----5-------------7-------------5--------------------------------------|
A|----------------5--------------------------------------------------------|
E|--5---------------------------5------------------------------------------|

"Insert lyrics here with the timing you think is better."

If you want to write some part with chords, just put it over the lyrics, like this:
-G-     -B-     -Em-             -F-       -F#-
bla bla.... blablablaa... bla...........yeah

Put the chords between "-" and "-" without cuotes for a correct display.

So you are ready now! Try it!</textarea>
				<button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit Song Info</button>
				<button type="reset" class="btn btn-primary" name="reset">Reset</button>
			</div>
		</form>
	</div>		
			<div class="container"></div>
</div>			
@include file=('footer')
