
$(document).ready(function(){

    // Remove spaces from input
    $("input[name='nominals']").on('change, keyup', function() {
        var currentInput = $(this).val();
        var fixedInput = currentInput.replace(/[\s]/g, '');
        $(this).val(fixedInput);
        console.log(fixedInput);
    });

    // On form submit
    $('#ajax_form').submit(function(){

        // Prevent default event
        event.preventDefault();

        //Create AJAX-request
        $.ajax({
            url:     "action_ajax_form.php", 
            type:     "POST",
            dataType: "json",
            data: $("#ajax_form").serialize(),
            success: function(response) { 
                
                if (response.error != null) {
                    // Output an error
                    $('#result_form').html("<tr><td>"+response.error+"</td><tr>")
                }
                else{
                    // Response output
                    $('#result_form').html("") 
                    $('#result_form').append("<tr><td>Номинал</td><td>Количество</td><tr>") 
                    $.each(response, function(name, value){
                        $('#result_form').append("<tr><td>"+name+"</td><td> "+value+"</td><tr>")
                    });
                }
                
            },
            error: function(response) {
                $('#result_form').html('<tr><td>Ошибка. Данные не отправлены.</td><tr>');
            }
        });
    });

});

