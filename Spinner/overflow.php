<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>jQuery UI Spinner - Overflow</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="/resources/demos/external/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script>
        $(function() {
            $( "#spinner" ).spinner({
                spin: function( event, ui ) {
                    if ( ui.value > 10 ) {
                        $( this ).spinner( "value", -10 );
                        return false;
                    } else if ( ui.value < -10 ) {
                        $( this ).spinner( "value", 10 );
                        return false;
                    }
                }
            });
        });
    </script>
</head>
<body>
<p>
    <label for="spinner">Select a value:</label>
    <input id="spinner" name="value">
</p>
</body>
</html>