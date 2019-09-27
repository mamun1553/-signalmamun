<html>
<head>
    <title>X, Y Coordinates using jQuery</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
</head>
<body>
    <div style="width:300px;">
        <div><img src="sprite.png" alt="" /></div>
        <div style="padding-top:20px;">
            <div id="coord"></div>
        </div>
    </div>


    <script>
    $(document).ready(function() {
        $('img').on("mousemove", function(e) {
            var offset = $(this).offset();
            var X = (e.pageX - offset.left);
            var Y = (e.pageY - offset.top);
            $('#coord').text('X: ' + X + ', Y: ' + Y);
        });
    });
</script>
</body>
</html>

