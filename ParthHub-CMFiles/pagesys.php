<script src="/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script>
$.fn.pageMe = function(opts){
    var $this = this,
        defaults = {
            perPage: 10,
            showPrevNext: false,
            hidePageNumbers: false
        },
        settings = $.extend(defaults, opts);
    
    var listElement = $this;
    var perPage = settings.perPage; 
    var children = listElement.children();
    var pager = $('.pager');
    
    if (typeof settings.childSelector!="undefined") {
        children = listElement.find(settings.childSelector);
    }
    
    if (typeof settings.pagerSelector!="undefined") {
        pager = $(settings.pagerSelector);
    }
    
    var numItems = children.size();
    var numPages = Math.ceil(numItems/perPage);

    pager.data("curr",0);
    
    if (settings.showPrevNext){
        $('<li><a href="#" class="prev_link">« Prev</a></li>').appendTo(pager);
    }
    
    var curr = 0;
    while(numPages > curr && (settings.hidePageNumbers==false)){
        $('<li><a href="#" class="page_link">'+(curr+1)+'</a></li>').appendTo(pager);
        curr++;
    }
    
    if (settings.showPrevNext){
        $('<li><a href="#" class="next_link">Next »</a></li>').appendTo(pager);
    }
    
    
    
    
    pager.find('li:nth-child(2)').addClass("active");
    
    children.hide();
    children.slice(0, perPage).show();
    
    pager.find('li .page_link').click(function(){
        var clickedPage = $(this).html().valueOf()-1;
        goTo(clickedPage,perPage);
		$('html, body').animate({scrollTop: $(".decpart").offset().top}, 500);
        return false;
    });
    pager.find('li .prev_link').click(function(){
        previous();
		$('html, body').animate({scrollTop: $(".decpart").offset().top}, 500);
        return false;
    });
    pager.find('li .next_link').click(function(){
        next();
		$('html, body').animate({scrollTop: $(".decpart").offset().top}, 500);
        return false;
    });
    
    function previous(){
        var goToPage = parseInt(pager.data("curr")) - 1;
		if(goToPage >= 0){
			goTo(goToPage);
		}
		else
			return false;
    }
     
    function next(){
		
        goToPage = parseInt(pager.data("curr")) + 1;
		if(goToPage<(numPages)){
			goTo(goToPage);
		}
		else
			return false;
    }
    
    function goTo(page){
        var startAt = page * perPage,
            endOn = startAt + perPage;
        
        children.css('display','none').slice(startAt, endOn).show();
        
        
        
        pager.data("curr",page);
      	pager.children().removeClass("active");
        var z = "li:nth-child(".concat(page+2,")");
		pager.find(z).addClass("active");
		
    
    }
};

</script>