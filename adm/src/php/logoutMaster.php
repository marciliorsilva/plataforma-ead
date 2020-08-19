<?php
echo' <script>
        $(window).on("beforeunload",function(){
            $.ajax({
                url:"../../model/atualizarSessao.php",
                type:"POST",
                data:{id:"'.unserialize($objLogin->getUser())->getId().'"},
                success: function(){

                }
                
            });
        });
                        
     
   </script>';
?>