export default () => {
    jQuery(function() {
        jQuery('.c12-filter-sidebar .categories .cat').click(function() {
            jQuery('.c12-filter-sidebar .categories .cat').removeClass('active');
            jQuery(this).addClass('active');
        });

        jQuery('.c12-filter-sidebar .categories .cat').addClass('active');
        jQuery('.c12-case-studies .categories .cat').addClass('active');
        jQuery('.c12-case-study-header .categories .cat').addClass('active');
    })
}
