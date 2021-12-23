jQuery.noConflict();

jQuery(document).ready(function() {
    const toogleMenuEl = jQuery(".toogle-menu");
    const navigationEl = jQuery("nav.menu");

    toogleMenuEl.click(function(e) {
        e.preventDefault();

        tootleMenu();
    });

    function tootleMenu() {
        if (navigationEl.is(":visible")) {
            navigationEl.hide();
        } else {
            navigationEl.show();
        }
    }
});