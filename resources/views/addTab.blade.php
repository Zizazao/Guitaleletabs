@if(Auth::check())
  @include('headerLogged')
@else
  @include('header')
@endif
<div class="container marketing">
	<div class="top-buffer">
		<h1>Making Your Own Tablature</h1>
		<div class="alert alert-danger col-md-9" role="alert">
		<p>This file must represents your own interpretation of the song

		<p>Official transcriptions are strictly forbidden
		
		<p>Remember to submit only Guitalele tabs and (or) chords
		</div>
		<form action="{{$url}}" method="POST">
			<tr>
				<div class="col-md-6">
          <td><b>Song name:</b></td>
					<td><input type="text" class="form-control" name="song" </td>
					<td><b>Artist:</b></td>
					<td><td><input type="text" class="form-control" name="artist" </td>
					<td><b>Album:</b></td>
					<td><td><input type="text" class="form-control" name="album" </td>
					<td><b>Difficulty:</b></td>
					<td><td><select type="text" class="form-control" name="difficulty" >
					  <option>Novice</option>
					  <option>Medium</option>
					  <option>Hard</option>
					</select>

				</div>	
			</tr>
			<div class="col-md-10">
			<td><b>Tablature:</b></td>
			<textarea  class="form-control" name="view" rows="15" >Specify the tuning, example:
Tuning: Standard(ADGCEA)
Instructions: copy and paste the segment below as much as you need to write a fingerpicking part.
Example:         
e|--------------------------------------------------------------------------|
B|-----------5-------------7-------------5----8----7----5/7--7---------|
G|--------5-------------7-------------5-------9----7----5/7--7---------|
D|-----5-------------7-------------5--------------------------------------|
A|----------------5--------------------------------------------------------|
E|--5---------------------------5------------------------------------------|

"Insert some lyrics here."

If you want to write some part with chords, just put it over the lyrics, like this:
-G-     -B-     -Em-             -F-       -F#-
bla bla.... blablablaa... bla...........yeah

Put the chords between "-" and "-" without cuotes for a correct display.

So you are ready now! Try it!</textarea>
				<button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit Song Info</button>
				<button type="reset" class="btn btn-primary" name="reset">Reset</button>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
			</div>
		</form>
	</div>		
	<div class="container"></div>
</div>			
@include('footer')