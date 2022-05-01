jQuery.noConflict();

jQuery(document).ready(function() {
    const btnOpenVideoEl = jQuery("#btn-open-video");
    const btnCloseVideoEl = jQuery("#btn-close-video");
    const lightBoxEl = jQuery("#video-lightbox");
    const videoTargetEl = jQuery(".video-target");

    btnOpenVideoEl.click(function(e) {
        e.preventDefault();
        openLightBox(jQuery(this).attr('data-video-id'));
    });

    btnCloseVideoEl.click(function(e) {
        e.preventDefault();
        closeLightBox()
    });

    function openLightBox(videoId) {
        videoTargetEl.append('<iframe width="100%" height="100%" src="https://www.youtube.com/embed/' + videoId + '" title="YouTube video player" frameBorder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowFullScreen></iframe>');
        lightBoxEl.show();
    }

    function closeLightBox() {
        lightBoxEl.hide();
        videoTargetEl.html('');
    }
});