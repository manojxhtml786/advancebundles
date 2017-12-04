require(['jquery'],function($){
    $(document).ready(function() {        
        $(".options-list img").hover(function(e){
            $(".large").css("top",(e.pageY+2)+"px")
                             .css("left",(e.pageX+2)+"px")                    
                             .html("<img src="+ $(this).attr("alt") +" alt='Large Image'/><br/>")
                             .fadeIn("slow");
        }, function(){
            $(".large").fadeOut("fast");
        });        
        
    });

    $(document).ready(function() {        
        $(".product-info-price img").hover(function(e){
            $(".large").css("top",(e.pageY+2)+"px")
                             .css("left",(e.pageX+2)+"px")                    
                             .html("<img src="+ $(this).attr("alt") +" alt='Large Image'/><br/>")
                             .fadeIn("slow");
        }, function(){
            $(".large").fadeOut("fast");
        });        
        
    });
});