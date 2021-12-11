/**
 * Simple (ugly) code to handle the comment vote up/down
 */

// Find the js-vote-arrows element
var $container = $('.js-vote-arrows');

// Find any a tags inside and register a click listner on that
$container.find('a').on('click', function(e) {
    e.preventDefault();
    var $link = $(e.currentTarget);

    // Create the ajax request to path + read the direction of the ankertag from the link (data-direction="down" or data-direction="up")
    $.ajax({
        url: '/comments/10/vote/'+$link.data('direction'),
        method: 'POST'
    }).then(function(data) {
        // Then use the vote field from that data to update the vote total
        $container.find('.js-vote-total').text(data.votes);
    });
});