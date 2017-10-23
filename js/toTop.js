var scrollDistance = 300;	//Scroll distance that button moves to screen at
var scrollDuration = 100;	//Speed at which button and scroll happen

document.getElementById('toTop').onclick = function() {scrollToTop()};
document.onscroll = function() {checkScroll()};

function scrollToTop()
{
	var scrollStep = -window.scrollY / (scrollDuration / 15),
		scrollInterval = setInterval(function()
		{
			if (window.scrollY != 0)
			{
				window.scrollBy(0, scrollStep);
			}
			
			else clearInterval(scrollInterval);
		}, 15);
}

function checkScroll()
{
	var scrollTop = (window.pageYOffset !== undefined) ?
		window.pageYOffset : (document.documentElement ||
		document.body.parentNode || document.body).scrollTop;
	
	if(scrollTop > scrollDistance)
	{
		document.getElementById('toTop').style.visibility = 'visible';
		document.getElementById('toTop').style.opacity = 0.5;
	}
	
	else
	{
		document.getElementById('toTop').style.visibility = 'hidden';
		document.getElementById('toTop').style.opacity = 0;
	}
}
	
	
	
	
	
	
	