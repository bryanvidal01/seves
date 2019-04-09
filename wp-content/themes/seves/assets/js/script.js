jQuery(document).ready(function(){
	jQuery(window).scroll(function(){

		//Plusieur elements
		multipleAnim(jQuery('.block'), "fadeIn", 600, false);

		//Simple element
		singleAnim(jQuery('.block'), "fadeIn", 650, true);
		
	});
});