<html>
<h1>Here's what you submitted...</h1>

<div class="inform">
<ul>
<li><label>Housing Type:</label> <?php print(htmlspecialchars($_REQUEST["mychk[]"]))?>
<li><label>Your zip code: </label> <?php print(htmlspecialchars($_REQUEST["yourzip"]))?>
<li><label>Your Comment: </label> <?php print(htmlspecialchars($_REQUEST["mytextarea"]))?>
 </ul>
</div>
</html>
