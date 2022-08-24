$(document).ready(function() {
    $(document).on('click', '.category_checkbox', function() {
        var ids = [];

        var counter = 0;

        $('#catFilters').empty();
        $('.category_checkbox').each(function() {
            if ($(this).is(":checked")) {
                ids.push($(this).attr('id'));
                $('#catFilters').append(`<div role="alert">${$(this).attr('attr-name')}
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">x</span></button></div>`);
                counter++;
            }
        });

        $('._t-item').text('(' + ids.length + ' items)');

        if (counter == 0) {
            $('.causes_div').empty();
            $('.causes_div').append('Not found')
        } else {
            fetchCauseAgainstCategory(ids);
        }
    });
});

function fetchCauseAgainstCategory(id) {
    $('.causes_div').empty();

    $.ajax({
        type: 'GET',
        url: '' + id,
        success: function(response) {
            var response = JSON.parse(response);
            console.log(response);

            if (response.length == 0) {
                $('.causes_div').append('Not found');
            } else {
                response.array.forEach(element => {
                    $('.causes_div').append(``)
                });
            }
        }
    });
}