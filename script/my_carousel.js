// JavaScript Document

var mycarousel_tags = '';
function mycarousel_initCallback(carousel, state)
{
    // Do nothing of state is 'reset'
    if (state == 'reset')
        return;
    jQuery('form', carousel.container)
    .bind('submit', function(e) {
        mycarousel_tags = jQuery('input[type=text]', carousel.container).val();
        carousel.reset();
        return false;
    });
};

function mycarousel_itemLoadCallback(carousel, state)
{
    // Only load items if they don't already exist
    if (carousel.has(carousel.first, carousel.last)) {
        return;
    }
    jQuery.get(
        'dynamic_flickr_feed.php',
        {
            tags: mycarousel_tags
        },
        function(data) {
            mycarousel_itemAddCallback(carousel, carousel.first, carousel.last, data.items);
        },
        'json'
    );
};

function mycarousel_itemAddCallback(carousel, first, last, items)
{
    if (first == 1) {
        var plural = items.length == 1 ? '' : 's';
        jQuery('.results', carousel.container).html(items.length + ' photo' + plural + ' found');

        // Set size
        if (items.length == 0) {
            // Add a "no results" feedback as first item if items is empty
            carousel.size(1);
            carousel.add(1, '<p>No results</p>');
            return;
        } else {
            carousel.size(items.length);
        }
    }

    for (var i = first; i <= last; i++) {
        if (items[i - 1] == undefined) {
            break;
        }

        carousel.add(i, mycarousel_decodeEntities(items[i - 1].description));
    }
};

/**
 * Decodes entites.
 */
function mycarousel_decodeEntities(s)
{
    return s.replace(/&amp;/g,  "&")
            .replace(/&quot;/g, '"')
            .replace(/&#039;/g, "'")
            .replace(/&lt;/g,   "<")
            .replace(/&gt;/g,   ">");
};

jQuery(document).ready(function() {
    jQuery('#mycarousel').jcarousel({
        scroll: 1,
		auto: 6,
    	wrap: 'circular',
        initCallback: mycarousel_initCallback,
        itemLoadCallback: mycarousel_itemLoadCallback
    });
});