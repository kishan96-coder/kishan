jQuery(document).ready(function(){
  console.log(test);
  // Argument passed from InvokeCommand.
  jQuery.fn.myAjaxCallback = function(username) {
    //username is get from form
    var user_name = username;
    jQuery.ajax({  
      url:  "https://api.woxo.tech/instagram?source="+user_name,  
      type: 'GET',  
      success: function(data) {  
         //data is get from instagram api
        var response = data;
        jQuery.each(response, function (index,value) {
          var count=0;
          var data_table = '';
          console.log(value);
          jQuery.each(value, function (index_val, val) {
                count++;
                data_table = '<div class="image_box box-'+count+' type-'+val.type+'"><a href='+val.link+' target=_blank><img src='+val.image+'></a>'+val.text5+val.text7+'</div>';  
                // jQuery('#node-instagram').append(data_table);
                jQuery('field_item').append(data_table);
            });
          });
         }  
    }); 
  }}
)(jQuery, Drupal);

  
