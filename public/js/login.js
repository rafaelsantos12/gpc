$(function(){
        $("#login_form").submit(function(){
              $.ajax({
                type: "post",
                url: BASE_URL + "restrict/ajax_login",
                dataType: "json ",
                data: $(this).serialize(),
                beforeSend: function(){
                    clearErrors();
                    $("#bn_login").parent().siblings(".help-block").html(loadingImg("Verifiando..."));
                },
                sucess: function(json){
                    if(json["status"] == 1){
                        $("#bn_login").parent().siblings(".help-block").html(loadingImg("Logando..."));
                        window.location = BASE_URL + "home";   
                     }else{
                         showErrors(json["erro_list"]);
                     }
               },
               error: function(response){
                   console.log(response);
               }      

              })

              return false;
        })


})