$('#product-search').on('input', function () { 
    let search = $(this).val(); 
    $.ajax({ 
        url: '/search', 
        type: 'GET', 
        data: { 
            search: search 
        }, 
        success: function (data) { 
            $('#products-list').html(data); 
        } 
    }); 
});

$(document).on('click', '.page-item a', function (e) {

    e.preventDefault();

    let url = $(this).attr('href');

    $.ajax({
        url: url,
        type: 'GET',

        success: function (data) {
            $('#products-list').html(data);
        },

        error: function (xhr) {
            console.log(xhr.responseText);
        }
    });

});