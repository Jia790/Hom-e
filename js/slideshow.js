slideCur = 1;
slideNext = 2;
slideTime = 5000;
animSpeed = 500;
fadeSpeed = 500;
numSlides = 3;

//ON CLICK AND MOUSE EVENTS
document.getElementById('slideshow').addEventListener("mouseover", stopSlideshow);
document.getElementById('slideshow').addEventListener("mouseout", startSlideshow);

document.addEventListener( 'DOMContentLoaded', function()
{
	startSlideshow();
}, false);

function startSlideshow()
{	
	//Every X seconds, move to next slide
	loop = setInterval(function()
	{
		if(slideNext > numSlides) slideNext = 1;
		
		//Hide current slide hide, show next slide
		hideSlide('slide' + slideCur);
		changeSlide(slideNext);
	
		slideCur = slideNext;
		slideNext = slideNext + 1;
	}, slideTime);
}

function stopSlideshow()
{
	window.clearInterval(loop);
}

function changeSlide(id)
{
	stopSlideshow();
	if(id > numSlides) id = 1;
	if(id < 1) id = numSlides;
	
	document.getElementById("slide").src = "images/house" + id + ".png";
	slideCur = id;
	slideNext = id + 1;
	startSlideshow();
}

function buttonClick(num)
{
	if (num == 1) changeSlide(slideCur - 1);
	else if (num == 2) changeSlide(slideCur + 1);
}























