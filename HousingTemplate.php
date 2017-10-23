<!-- HEADER ==================================================================================-->
<?php include '_header.php' ?>

<!-- SLIDESHOW ===============================================================================-->
	<div class = "leftCol">
		<div id = "slideshow">
			<a><img id = "slide" src = "images/house1.png"></a>
		</div>
		
		<div id = "buttons">
			<!--<a id = "buttonLeft"  onclick = "buttonClick(1)"></a>
			<a id = "buttonRight" onclick = "buttonClick(2)"></a>-->
			<img id = "buttonLeft" src = "images/leftArrow.png" onclick = "buttonClick(1)">
			<img id = "buttonRight" src = "images/rightArrow.png" onclick = "buttonClick(2)">
		</div>
	</div>
	
<!-- HOUSE DETAILS ===============================================================================-->
	<div class = "rightCol">
		<h3> Details </h3>
		<div class = "leftText">
			<p> Rent </p>
			<p> Address </p>
			<p> Bedrooms </p>
			<p> Bathrooms </p>
			<p> Pets </p>
		</div>
		
		<div class = "rightText">
			<p> $600 </p>
			<p> 1234 NS Street Blvd. </p>
			<p> 4 </p>
			<p> 2 </p>
			<p> Allowed </p>
		</div>
		
		<div class = "clearfix"></div>
		<div class = "break"> </div>
	
<!-- OCCUPANT LIST ===============================================================================-->
		<h3> Occupants </h3>
		<div class = "centerText">
			<p><a href = "wallace.php"> Wallace McCircus </a></p>
			<p><a href = "alice.php"> Alice Ninnymuggins </a></p>
			<p><a href = "schmidt.php"> Schmidt Waterwater </a></p>
		</div>
	</div>
	
	<div class = "clearfix"></div>

	
<!-- DESCRIPTION =============================================================================-->
	<div class = "blockOfText">
		<h3> House Description </h3>
		<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rhoncus at nunc a pharetra. Proin tincidunt mi eget blandit efficitur. Suspendisse a odio efficitur, faucibus purus vitae, mollis nisi. Duis quis sem consectetur, scelerisque nisl at, fringilla mauris. Nullam porttitor posuere sollicitudin. Morbi in blandit dolor. Etiam ut pretium risus. </p>
		<p> Praesent et nibh facilisis, vulputate quam eu, euismod ipsum. Nulla fringilla risus sed ante dapibus rhoncus. Quisque nec pretium est, vitae blandit tortor. Nulla placerat dolor sit amet suscipit interdum. Praesent varius vehicula ante vitae rutrum. Nulla dolor velit, molestie quis nulla ac, laoreet suscipit nisl. Suspendisse arcu tortor, tempus congue velit at, tincidunt laoreet justo. Suspendisse vitae tortor euismod, elementum nulla quis, lobortis nulla. Nulla blandit elit ac est lacinia elementum. Quisque laoreet risus a tortor finibus sollicitudin. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse quis lacinia nibh. Nam eget aliquam justo. Cras pellentesque felis vitae ultrices porta. Praesent ac orci dui. Phasellus nulla lorem, tristique ornare commodo sed, laoreet consectetur nunc. </p>
		<p> Mauris diam nisi, gravida non porttitor vulputate, volutpat sed odio. Quisque hendrerit, dui eu mattis pharetra, nisi enim tincidunt elit, id dictum justo arcu in lacus. Proin blandit vehicula purus vitae iaculis. In nec velit nec lectus imperdiet hendrerit. Donec malesuada nisi augue, id cursus metus tristique ut. Fusce leo ante, convallis id lorem facilisis, luctus lacinia tortor. Praesent pulvinar condimentum massa, in iaculis risus fermentum eget. Integer auctor massa in ultrices ullamcorper. Integer eget porttitor orci. Praesent at est ante. Integer et nibh ex. Suspendisse vehicula diam nec ex laoreet consectetur. Curabitur et tempus odio, at laoreet velit. Morbi in feugiat neque. In eget euismod arcu, at lobortis nisl. Ut ut rutrum elit, ac tristique eros. </p>
		<p> Mauris diam nisi, gravida non porttitor vulputate, volutpat sed odio. Quisque hendrerit, dui eu mattis pharetra, nisi enim tincidunt elit, id dictum justo arcu in lacus. Proin blandit vehicula purus vitae iaculis. In nec velit nec lectus imperdiet hendrerit. Donec malesuada nisi augue, id cursus metus tristique ut. Fusce leo ante, convallis id lorem facilisis, luctus lacinia tortor. Praesent pulvinar condimentum massa, in iaculis risus fermentum eget. Integer auctor massa in ultrices ullamcorper. Integer eget porttitor orci. Praesent at est ante. Integer et nibh ex. Suspendisse vehicula diam nec ex laoreet consectetur. Curabitur et tempus odio, at laoreet velit. Morbi in feugiat neque. In eget euismod arcu, at lobortis nisl. Ut ut rutrum elit, ac tristique eros. </p>
		<p> Mauris diam nisi, gravida non porttitor vulputate, volutpat sed odio. Quisque hendrerit, dui eu mattis pharetra, nisi enim tincidunt elit, id dictum justo arcu in lacus. Proin blandit vehicula purus vitae iaculis. In nec velit nec lectus imperdiet hendrerit. Donec malesuada nisi augue, id cursus metus tristique ut. Fusce leo ante, convallis id lorem facilisis, luctus lacinia tortor. Praesent pulvinar condimentum massa, in iaculis risus fermentum eget. Integer auctor massa in ultrices ullamcorper. Integer eget porttitor orci. Praesent at est ante. Integer et nibh ex. Suspendisse vehicula diam nec ex laoreet consectetur. Curabitur et tempus odio, at laoreet velit. Morbi in feugiat neque. In eget euismod arcu, at lobortis nisl. Ut ut rutrum elit, ac tristique eros. </p>
	</div>
	
</div> 

<!-- FOOTER ==========================================================================================-->
<?php include '_footer.php' ?>
<script src = "js/slideshow.js"></script>



