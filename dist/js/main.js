// https://flynn.boolean.careers/exercises/api/array/music

$(document).ready(function () {
    var source = $("#card-template").html();
    var cardTemplate = Handlebars.compile(source);

    $.ajax({
        url: "server.php",
        method: "GET",
        success: function (data) {
            console.log(data);
            var arrayCanzoni = data;
            for (var i = 0; i < arrayCanzoni.length; i++) {
                var sorgenteAlbum = arrayCanzoni[i].poster;
                var titolo = arrayCanzoni[i].title;
                var autore = arrayCanzoni[i].author;
                var year = arrayCanzoni[i].year;
                var template = {
                    sourceAlbum: sorgenteAlbum,
                    album: titolo,
                    artista: autore,
                    anno: year
                }

                var cardAlbum = cardTemplate(template);
                $('.card-container').append(cardAlbum);
        }

        },
        error: function () {
            alert("ERRORE GENERICO");
        }
    })
});
