<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>jQuery UI Spinner - Decimal</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="/resources/demos/external/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="/resources/demos/external/globalize/globalize.js"></script>
    <script src="/resources/demos/external/globalize/globalize.culture.de-DE.js"></script>
    <script src="/resources/demos/external/globalize/globalize.culture.ja-JP.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script>
        $(function() {
            $( "#spinner" ).spinner({
                step: 0.01,
                numberFormat: "n"
            });
            $( "#culture" ).change(function() {
                var current = $( "#spinner" ).spinner( "value" );
                Globalize.culture( $(this).val() );
                $( "#spinner" ).spinner( "value", current );
            });
        });
    </script>
</head>
<body>
<p>
    <label for="spinner">Decimal spinner:</label>
    <input id="spinner" name="spinner" value="5.06">
</p>
<p>
    <label for="culture">Select a culture to use for formatting:</label>
    <select id="culture">
        <option value="en-EN" selected="selected">English</option>
        <option value="de-DE">German</option>
        <option value="ja-JP">Japanese</option>
    </select>
</p>
</body>
</html>