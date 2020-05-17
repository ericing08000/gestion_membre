//------------------------------
//----------S'incrire-----------
//------------------------------
    
    //Cacher la fenêtre "S'incrire" au démarrage
    $(document).ready(function(){
        $("#signup").hide();  
    });

    //Afficher la fenêtre "S'incrire"
    $(document).ready(function(){
        $(".btn_signup").click(function(){
            $("#signup").show();
        });  
    });

    
    
