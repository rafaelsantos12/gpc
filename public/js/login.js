$(function(){

        $("#login_form").submit(function(){
            
              $.ajax({
                type: "POST",
                url: BASE_URL + "restrict/ajax_login",
                dataType: "json",
                data: $(this).serialize(),
                beforeSend: function(){
                   
                    clearErrors();
                    $("#btn_login").parent().siblings(".help-block").html(loadingImg("Verificando..."));  
                },
                success: function(json){

                    if(json["status"] == 1) {
                        clearErrors();
                        $("#btn_login").parent().siblings(".help-block").html(loadingImg("Logando..."));
                        window.location = BASE_URL + "home"; 
                     }else{
                         showErrors(json["error_list"]);
                     }
               },
               error: function(response){
                   console.log(response);
               }      

              })

              return false;
        })
})