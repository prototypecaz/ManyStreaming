
var hash = document.location.hash.slice(1);
var title = document.querySelector('#titre');
var description = document.querySelector('#description');
var movie = document.querySelector('#video');
var private = document.querySelector('#prive');
var videoId= document.querySelector('#videoId');
var imageId= document.querySelector('#imageId');

 fetch('./update/select-movie.php?videoid='+hash) 
// Quand on recoit une réponse
.then(function(response) {
    response.json().then( // Renvoie un tableau associatif manipulable par javascript (format json)
        function(themes) {
            title.value=themes[0].title;
            description.value=themes[0].description;
            movie.value=themes[0].link;
            videoId.value=hash;
            /* private.value=themes[0].private; */
            imageId.value=hash;
        })
    }) 


    

    