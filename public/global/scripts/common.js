        var BaseURL = 'http://localhost/property/';
        jQuery(document).ready(function(){
            
            jQuery(document).on('change', "#city_id", function(){
                
                var CityID = jQuery("#city_id").val();
                jQuery.ajax({
                    type: "GET",
                    cache: false,
                    url: BaseURL + 'ajax/get_locations/' + CityID,
                    dataType: "JSON",
                    success: function(res) {
                        if( jQuery("#location_id").length > 0 ) {
                            var HTMLResult = '<option> -- Select -- </option>';
                            for(i = 0; i < res.length; i++) {
                                HTMLResult += '<option value="'+res[i].location_id+'">'+res[i].name+'</option>';                                
                            }
                            jQuery("#location_id").html(HTMLResult);
                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        console.log(xhr, ajaxOptions, thrownError);
                    }
                });
            });
            
            jQuery(document).on('change', "#is_client_property", function(){
                
                var IsChecked = jQuery("#is_client_property").prop('checked');
                if(IsChecked) {
                    jQuery("#client_block").removeClass('display-none');
                } else {
                    jQuery("#client_block").addClass('display-none');
                }
            });
            
            jQuery(document).on('change', "input[name=is_new_client]", function(){
                
                if(jQuery(this).val() == 'true') {
                    jQuery("#search_client").addClass('display-none');
                    jQuery("#add_new_client").removeClass('display-none');
                } else {
                    jQuery("#search_client").removeClass('display-none');
                    jQuery("#add_new_client").addClass('display-none');
                }
            });
            
            // Populate price ranges according to Property Purpose
            jQuery(document).on('change', "#property_purpose_id", function(){
                
                var PropertyPurpose = jQuery("#property_purpose_id").val();
                if( PropertyPurpose == 1 ) { // Sale
                    var HTMLResult = '<option> -- Select -- </option>';
                    HTMLResult += '<option value="100000-500000"> 100,000 - 500,000 </option>';
                    HTMLResult += '<option value="600000-1000000"> 600,000 - 1,000,000 </option>';
                    HTMLResult += '<option value="1100000-1500000"> 1,100,000 - 1,500,000 </option>';
                    HTMLResult += '<option value="1600000-2000000"> 1,600,000 - 2,000,000 </option>';
                    jQuery("#price_range").html(HTMLResult);
                } else if ( PropertyPurpose == 2 ) { // Rent
                    var HTMLResult = '<option> -- Select -- </option>';
                    HTMLResult += '<option value="1000-5000"> 1,000 - 5,000 </option>';
                    HTMLResult += '<option value="6000-10000"> 6,000 - 10,000 </option>';
                    HTMLResult += '<option value="11000-15000"> 11,000 - 15,000 </option>';
                    HTMLResult += '<option value="16000-20000"> 16,000 - 20,000 </option>';
                    jQuery("#price_range").html(HTMLResult);
                } else if ( PropertyPurpose == 3 ) { // Wanted
                    var HTMLResult = '<option> -- Select -- </option>';
                    HTMLResult += '<option value="100000-500000"> 100,000 - 500,000 </option>';
                    HTMLResult += '<option value="600000-1000000"> 600,000 - 1,000,000 </option>';
                    HTMLResult += '<option value="1100000-1500000"> 1,100,000 - 1,500,000 </option>';
                    HTMLResult += '<option value="1600000-2000000"> 1,600,000 - 2,000,000 </option>';
                    HTMLResult += '<option value="1000-5000"> 1,000 - 5,000 </option>';
                    HTMLResult += '<option value="6000-10000"> 6,000 - 10,000 </option>';
                    HTMLResult += '<option value="11000-15000"> 11,000 - 15,000 </option>';
                    HTMLResult += '<option value="16000-20000"> 16,000 - 20,000 </option>';
                    jQuery("#price_range").html(HTMLResult);
                } else {
                    var HTMLResult = '<option> -- Select -- </option>';
                    jQuery("#price_range").html(HTMLResult);
                }
 
            });
            
            // Pages defaut requests
            if ( jQuery('#e_price_range').length > 0 ) {
                jQuery("#property_purpose_id").trigger('change');
                jQuery("#price_range").val( jQuery('#e_price_range').val() );
                jQuery("#city_id").trigger('change');
                jQuery("#location_id").val( jQuery('#e_location_id').val() );
            }
            
            jQuery(document).on('click', '.mdlFeaturedPropertiesBtn', function(){
                console.log('hsadf ksdkfs');
                jQuery("#from_date").val('');
                jQuery("#to_date").val('');
                console.log(jQuery(this).data('prop-id'));
                jQuery("#property_id").val( jQuery(this).data('prop-id') );
            });
            
            jQuery(document).on('click', '#btnFeaturedProperty', function(){
                var data = jQuery("#frmFeatureProperty").serialize();
                console.log(data);
                jQuery.ajax({
                    type: "POST",
                    cache: false,
                    data: data,
                    url: BaseURL + 'ajax/featured_property',
                    dataType: "JSON",
                    success: function(res) {
                        console.log(res);
//                        if( jQuery("#location_id").length > 0 ) {
//                            var HTMLResult = '<option> -- Select -- </option>';
//                            for(i = 0; i < res.length; i++) {
//                                HTMLResult += '<option value="'+res[i].location_id+'">'+res[i].name+'</option>';                                
//                            }
//                            jQuery("#location_id").html(HTMLResult);
//                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        console.log(xhr, ajaxOptions, thrownError);
                    }
                });
            });
            
        });