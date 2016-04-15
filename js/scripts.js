/*
$(document).ready(function() {
    $.ajax({
        url: 'data/movie.txt',
        type: 'GET',
        success: function() {
            $.get('data/movie.txt', function(data){
                var array = data.split('\n');
                console.log(array);
                $('#poster').attr('src', array[5]);
                $('#title').html(array[1]);
                $('#release').html(array[2]);
                $('#genres').html(array[3]);
                $('#plot').html(array[4]);
            });
        }
    });
});
*/
