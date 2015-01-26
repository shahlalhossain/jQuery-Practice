<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>jQuery UI Spinner - Currency</title>
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
            $( "#currency" ).change(function() {
                $( "#spinner" ).spinner( "option", "culture", $( this ).val() );
            });
            $( "#spinner" ).spinner({
                min: 5,
                max: 2500,
                step: 25,
                start: 1000,
                numberFormat: "C"
            });
        });
    </script>
</head>
<body>
<p>
    <label for="spinner">Amount to donate:</label>
    <input id="spinner" name="spinner" value="5">
</p>
<p>
    <label for="currency">Currency to donate</label>
    <select id="currency" name="currency">
        <option value="en-US">US $</option>
        <option value="de-DE">EUR €</option>
        <option value="ja-JP">YEN ¥</option>
    </select>
</p>
</body>
</html>