
$("body").mouseleave(function(){
    $.ajax({
        url:"../cursor.php",
        type:"POST",
        data:{id:"0"},
        success: function(data){
            
        }
        
    });
                
});

$("body").mouseenter(function(){
    $.ajax({
        url:"../cursor.php",
        type:"POST",
        data:{id:"1"},
        success: function(data){
            
        }
        
    });
                
});
        
