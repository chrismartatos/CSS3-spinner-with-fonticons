/**  
	There is many ways to fadeOut the preloader/spinner with Javascript when the window is fully loaded.
	I prefer to apply classes and use CSS transitions. (light & fast)
	However here is a very simple way to fade out the preloader with jQuery:
**/	

$(function()
{
	/*Dom ready - trigger function*/
	//hide_preloader_on_load();
});
	
	
//Hide preloader when window is fully loaded
function hide_preloader_on_load()
{
	$(window).load(function()
	{
		fade_out_preloader();
	});
}

//Fade out
function fade_out_preloader()
{
	$(".site-preloader").fadeOut('slow',function()
	{
		//Do something after the prelader is fadeout for example animate #page or add a class, or whatever.
	});
}