function go(){



    $('#get').click(function(){

        $.get("php/app.php", { towns: "all" })
            .done(function(data){
                $("body").append(data);
                console.log("php return: " + data);
            });

     /*
    $.ajax({
        type: "GET",
        url: "php/get.php",
        data: { getThis: "456"}

    });
    */
});

}

