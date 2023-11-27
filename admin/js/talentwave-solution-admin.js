(function ($) {
    'use strict';

    $(document).on('click', '.sub-content-block .secondary-button', function () {
        let type = $(this).data('type');
        let userId = $('#currentUserId').val();
        let el = $(this);
        el.parent().addClass('inactive');

        $.ajax({
            method: "POST",
            url: "/wp-json/talentwave/get-information",
            data: {type: type, userId: userId, key: 'wNzBnWtkGF'}
        }).done(function () {
            el.parent().removeClass('inactive');
            el.parent().find('p').html('<span class="success">Aanvraag is verstuurd en op goede wijze ontvangen!</span>');
            el.parent().find('.secondary-button').remove();
            alert('Bedankt voor je aanvraag, wij komen er zo spoedig mogelijk op terug!');
        });

    })

})(jQuery);
