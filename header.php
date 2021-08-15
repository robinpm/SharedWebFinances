<head>

    <meta charset="UTF-8">
    <title> Shared Expenses Input | <?php echo date('F Y'); ?> </title>
    <link rel="stylesheet" href="assets/style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" href="images/zilent.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <script>
        var field = document.querySelector('#today');
        var date = new Date();

        // Set the date
        field.value = date.getFullYear().toString() + '-' + (date.getMonth() + 1).toString().padStart(2, 0) +
            '-' + date.getDate().toString().padStart(2, 0);

        $(document).on('keydown', 'input[pattern]', function(e) {
            var input = $(this);
            var oldVal = input.val();
            var regex = new RegExp(input.attr('pattern'), 'g');

            setTimeout(function() {
                var newVal = input.val();
                if (!regex.test(newVal)) {
                    input.val(oldVal);
                }
            }, 1);
        });
    </script>
</head>