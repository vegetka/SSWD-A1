function go(){

    console.log("hi there");

    $('#get').click(function(){
        console.log("clicky");
        $.get("php/app.php", { getThis: "some text" })
            .done(function(data){
                $("body").append(data);
                console.log("php return: " + data);
            });
        console.log("after get");
     /*
    $.ajax({
        type: "GET",
        url: "php/get.php",
        data: { getThis: "456"}

    });
    */
});

}

