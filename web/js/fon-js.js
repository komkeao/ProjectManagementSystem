$(document).ready(function(){
    $("#btn2").click(function(){
        $("#box").append("" +
            "<div class='row'>"+
            "   <div class='col-md-10 col-xs-10' style='margin-top: 5px;padding-right: 0px'>" +
            "       <input type='text' value='' class='form-control required'>" +
            "   </div>" +
            "   <div class='col-md-2 col-xs-2' style='margin-top: 5px;padding: 0px;'>" +
            "       <button class='btn btn-danger' style='width: 80%'><i class='glyphicon glyphicon-trash' style='padding: 0px;'></i></button>" +
            "   </div>"+"</div>");
    });
});