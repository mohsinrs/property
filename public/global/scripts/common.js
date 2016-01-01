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
        });