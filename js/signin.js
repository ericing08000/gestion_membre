//---------------------------------
//----------Se connecter-----------
//---------------------------------
    
    //Cacher la fenêtre "S'incrire" au démarrage
    $(document).ready(function(){
        $("#signin").hide();  
    });

    //Afficher la fenêtre "S'incrire"
    $(document).ready(function(){
        $(".btn_signin").click(function(){
            $("#signin").show();
        });  
    });

    
    
