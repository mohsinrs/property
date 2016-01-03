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
                    
//                console.log($(this).val());
//                var IsChecked = jQuery("#is_client_property").prop('checked');
                if(jQuery(this).val() == 'true') {
                    jQuery("#search_client").addClass('display-none');
                    jQuery("#add_new_client").removeClass('display-none');
                } else {
                    jQuery("#search_client").removeClass('display-none');
                    jQuery("#add_new_client").addClass('display-none');
                }
            });
            
        });