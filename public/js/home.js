$(window).on('load', function() {
    eventBinder();
});

function eventBinder() {
        const headers = {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    $('.book-button').off('click').on('click', function(e) {
        e.preventDefault();
        let userData = {
            arrival_date: '',
            departure_date: '',
            phone: '',
            email: ''
        }

        if ($('.arrival-input').val()) {
            userData.arrival_date = $('.arrival-input').val();
        } else {
            alert("Введіть всі необхідні данні");
            return;
        }
        if ($('.departure-input').val()) {
            userData.departure_date = $('.departure-input').val();
        } else {
            alert("Введіть всі необхідні данні");
            return;
        }
        if ($('.phone-input').val()) {
            userData.phone = $('.phone-input').val();
        } else {
            alert("Введіть всі необхідні данні");
            return;
        }
        if ($('.email-input').val()) {
            userData.email = $('.email-input').val();
        } else {
            alert("Введіть всі необхідні данні");
            return;
        }

        $.ajax({
            url: '/create_book/',
            type: 'post',
            headers: headers,
            data: userData,
            success() {
                window.location.reload();
            }
        });
    });
    $('td.remove svg').off('click').on('click', function(e) {
        const id = $(e.currentTarget).data('id');
        $.ajax({
            url: `/delete/`,
            type: 'post',
            headers: headers,
            data: {id: id},
            success() {
                window.location.reload();
            }
        })
    });
    $('.save-btn').off('click').on('click', function(e) {
        const id = $(e.currentTarget).data('id'),
            status = $(e.currentTarget).closest('td').siblings('.status').find('input').val();
        $.ajax({
            url: `/update/`,
            type: 'post',
            headers: headers,
            data: {
                id: id,
                status: status
            },
            success() {
                window.location.reload();
            }
        })
    });
}