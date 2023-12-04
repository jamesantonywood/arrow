export default () => {
    jQuery(function() {
        jQuery('.c12-filter-sidebar .categories .cat').click(function() {
            jQuery('.c12-filter-sidebar .categories .cat').removeClass('active');
            jQuery(this).addClass('active');

            console.log(jQuery(this).attr('data-filter'));
            console.log(".c12-case-studies .case-study[data-sector *='" + jQuery(this).attr('data-filter') + "']");
            console.log(".c12-case-studies .case-study[data-support-type*='" + jQuery(this).attr('data-filter') + "']");
            

            jQuery('.c12-case-studies .case-study').hide();
            jQuery(".c12-case-studies .case-study[data-sector*='" + jQuery(this).attr('data-filter') + "']").show();
            jQuery(".c12-case-studies .case-study[data-support-type*='" + jQuery(this).attr('data-filter') + "']").show();
        });

        jQuery('.c12-filter-sidebar .categories .cat').addClass('active');
        jQuery('.c12-case-studies .categories .cat').addClass('active');
        jQuery('.c12-case-study-header .categories .cat').addClass('active');
    })
}
