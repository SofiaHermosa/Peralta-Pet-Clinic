(function() {

  $('.toggle-menu').on('click', function(){
  	    var menu 		   = $(this).data('toggle');
  	    var menuTarget 	   = $(menu); 
	  	menuTarget.toggleClass('hidden', 1000);
	    $(this).toggleClass('ring-2');
	    $(this).toggleClass('ring-offset-0');
	   	$(this).toggleClass('ring-white');
  });
})();