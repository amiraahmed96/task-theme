$(document).ready(function(){
    

    
    
    /**************** check the category of news *******************/
    $('.post-categories li').each(function(){
        if($(this).text() == "Local")
            {
                $(this).css({backgroundColor:'#cf1414'});
            }
        else if($(this).text() == "World")
            {
                $(this).css({backgroundColor:'#337ab7'});
            }
        else if($(this).text() == "Culture")
            {
                $(this).css({backgroundColor:'green'});
            }
        else
            {
                $(this).css({backgroundColor:'#cf1414'});
            }
    });
    
   
  
   
    
    
    
});