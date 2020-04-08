const BASE_URL = "http://localhost/gpc/";



function clearErrors(){
    $(".has-error").removeClass("has-error");
    $(".has-block").html("");

}

function showErrors(error_list){
    clearErrors();
    $.each(error_list, function(id, message) {
        $(id).parent().parent().addClass("has-error");
        $(id).parent().siblings(".help-block").html(message);
     });
}

function loadingImg(message=""){
    return "<i class='fa fa-cicle-o-notch fa-spin'></i> " + message
}