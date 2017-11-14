function go(){

    console.log("hi there");

    $('#get').click(function(){
        console.log("clicky");
    $.ajax({
        type: "GET",
        url: "php/app.php",
        data: {123: "456"}
    });
});

}

