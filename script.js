$(document).ready(function() {
    $('#demoForm').submit(function(event) {
        event.preventDefault();
        
        $.ajax({
            type: 'POST',
            url: 'submit.php',
            data: $(this).serialize(),
            success: function(response) {
                console.log('Form submitted successfully!');
            },
            error: function(xhr, status, error) {
                console.error('Error submitting form:', error);
            }
        });
    });
});
