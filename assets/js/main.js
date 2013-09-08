
// Broadcast Status Change 

$(document).ready(function () {
    $('.broadcaststatus').on('click', '.broadcaststatuson', function(event) {
        event.preventDefault();
        var owner_id = $(this).parent().attr('id');
        $(this).addClass('broadcaststatusoff');
        $(this).removeClass('broadcaststatuson');
        $.ajax({
            type: 'POST',
            url: '/account/update_broadcast',
            dataType: 'json',
            data: 'ajax=1&owner_id='+owner_id,
            success: function(){
            }
        });
    });

    $('.broadcaststatus').on('click', '.broadcaststatusoff', function(event) {
        event.preventDefault();
        var owner_id = $(this).parent().attr('id');       
        $(this).addClass('broadcaststatuson');
        $(this).removeClass('broadcaststatusoff');
        $.ajax({
            type: 'POST',
            url: '/account/update_broadcast',
            dataType: 'json',
            data: 'ajax=1&owner_id='+owner_id,
            success: function(){              
            }
        });
    });
});


// Unique Username Checker

$(document).ready(function () {
    $('#display_name').change(function() {
        var display_name = $(this).val();
        $('.spinnerLoaderName').show();
        $('#signup_form button').prop('disabled', true);
        $.ajax({
            type: 'POST',
            url: '/signup/unique_display_name',
            dataType: 'json',
            data: 'ajax=1&display_name='+display_name,
            success: function(data){
                if (data == '1') {
                    $('.spinnerLoaderName').hide(); 
                    $('.messageName').show().html('The Display Name is unavailable at this time, Please choose another.');    
                } else if (data == '0'){
                    $('.spinnerLoaderName').hide(); 
                    $('.messageName').show().html('The Display Name is available.'); 
                    $('#signup_form button').prop('disabled', false);
                }        
            }
        });
    });
});


// Unique Email Address Checker

$(document).ready(function () {
    $('#email_address').change(function() {
        var email_address = $(this).val();
        $('.spinnerLoaderEmail').show();
        $('#signup_form button').prop('disabled', true);
        $.ajax({
            type: 'POST',
            url: '/signup/unique_email_address',
            dataType: 'json',
            data: 'ajax=1&email_address='+email_address,
            success: function(data){
                if (data == '1') {
                    $('.spinnerLoaderEmail').hide(); 
                    $('.messageEmail').show().html('The Email Address is unavailable at this time, Please choose another.');    
                } else if (data == '0'){
                    $('.spinnerLoaderEmail').hide(); 
                    $('.messageEmail').show().html('The Email Address is available.'); 
                    $('#signup_form button').prop('disabled', false);
                }        
            }
        });
    });
});












