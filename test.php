<html>
<head>
    <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="//raw.github.com/botmonster/jquery-bootpag/master/lib/jquery.bootpag.min.js"></script>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
    <div id="content">Dynamic Content goes here</div>
    <div id="page-selection">Pagination goes here</div>
    <script>
        // init bootpag
        $('#page-selection').bootpag({
            total: 10
        }).on("page", function(event, /* page number here */ num){
             $("#content").html("Insert content"); // some ajax content loading...
        });
    </script>
	
	<div class="bs-docs-example">
                        <p class="well demo content1">Page 10</p>
                        <p class="demo demo1"><ul class="pagination bootpag"><li data-lp="9" class="prev"><a href="javascript:void(0);">«</a></li><li data-lp="1"><a href="javascript:void(0);">1</a></li><li data-lp="2"><a href="javascript:void(0);">2</a></li><li data-lp="3"><a href="javascript:void(0);">3</a></li><li data-lp="4"><a href="javascript:void(0);">4</a></li><li data-lp="5"><a href="javascript:void(0);">5</a></li><li data-lp="6"><a href="javascript:void(0);">6</a></li><li data-lp="7"><a href="javascript:void(0);">7</a></li><li data-lp="8"><a href="javascript:void(0);">8</a></li><li data-lp="9"><a href="javascript:void(0);">9</a></li><li data-lp="10" class="active"><a href="javascript:void(0);">10</a></li><li data-lp="10" class="next disabled"><a href="javascript:void(0);">»</a></li></ul></p>
                    </div>
</body>
</html>