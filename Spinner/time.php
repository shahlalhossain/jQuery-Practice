<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>jQuery UI Spinner - Time</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="/resources/demos/external/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="/resources/demos/external/globalize/globalize.js"></script>
    <script src="/resources/demos/external/globalize/globalize.culture.de-DE.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script>
        $.widget( "ui.timespinner", $.ui.spinner, {
            options: {
// seconds
                step: 60 * 1000,
// hours
                page: 60
            },
            _parse: function( value ) {
                if ( typeof value === "string" ) {
// already a timestamp
                    if ( Number( value ) == value ) {
                        return Number( value );
                    }
                    return +Globalize.parseDate( value );
                }
                return value;
            },
            _format: function( value ) {
                return Globalize.format( new Date(value), "t" );
            }
        });
        $(function() {
            $( "#spinner" ).timespinner();
            $( "#culture" ).change(function() {
                var current = $( "#spinner" ).timespinner( "value" );
                Globalize.culture( $(this).val() );
                $( "#spinner" ).timespinner( "value", current );
            });
        });
    </script>
</head>
<body>
<p>
    <label for="spinner">Time spinner:</label>
    <input id="spinner" name="spinner" value="08:30 PM">
</p>
<p>
    <label for="culture">Select a culture to use for formatting:</label>
    <select id="culture">
        <option value="en-EN" selected="selected">English</option>
        <option value="de-DE">German</option>
    </select>
</p>
</body>
</html>