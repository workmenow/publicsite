$(document).ready(function(){
    $("#navbarCollapse").click(function(){
        $(".collapse").collapse('toggle');
    });
    
    $("#navbarCollapse a").click(function(e){
        e.preventDefault();
    });
});