<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>jQuery UI Spinner - Default functionality</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="/resources/demos/external/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script>
        $(function() {
            var spinner = $( "#spinner" ).spinner();
            $( "#disable" ).click(function() {
                if ( spinner.spinner( "option", "disabled" ) ) {
                    spinner.spinner( "enable" );
                } else {
                    spinner.spinner( "disable" );
                }
            });
            $( "#destroy" ).click(function() {
                if ( spinner.spinner( "instance" ) ) {
                    spinner.spinner( "destroy" );
                } else {
                    spinner.spinner();
                }
            });
            $( "#getvalue" ).click(function() {
                alert( spinner.spinner( "value" ) );
            });
            $( "#setvalue" ).click(function() {
                spinner.spinner( "value", 5 );
            });
            $( "button" ).button();
        });
    </script>
</head>
<body>
<p>
    <label for="spinner">Select a value:</label>
    <input id="spinner" name="value">
</p>
<p>
    <button id="disable">Toggle disable/enable</button>
    <button id="destroy">Toggle widget</button>
</p>
<p>
    <button id="getvalue">Get value</button>
    <button id="setvalue">Set value to 5</button>
</p>
</body>
</html>