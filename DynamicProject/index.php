<html>
    <head>
        <title>Dynamic Report</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Pimp your tables with CSS3" />
        <meta name="keywords" content="table, css3, style, beautiful, fancy, css"/>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
    </head>
    <style>
        *{
            margin:0;
            padding:0;
        }
        body{
            font-family: Georgia, serif;
            font-size: 15px;
            font-style: italic;
            font-weight: normal;
            letter-spacing: normal;
            background: #f0f0f0;
        }
        #content{
            background-color:#fff;            
            padding:40px;
            margin:0 auto;
            border-left:5px solid #1D81B6;
            border-right:1px solid #ddd;
            -moz-box-shadow:0px 0px 16px #aaa;
        }
        .head{
            font-family:Helvetica,Arial,Verdana;
            text-transform:uppercase;
            font-weight:bold;
            font-size:12px;
            font-style:normal;
            letter-spacing:3px;
            color:#888;
            border-bottom:3px solid #f0f0f0;
            padding-bottom:10px;
            margin-bottom:10px;
        }
		.head a{
            color:#1D81B6;
            text-decoration:none;
            float:right;
            text-shadow:1px 1px 1px #888;
        }
        .head a:hover{
            color:#f0f0f0;
        }
        #content h1{
            font-family:"Trebuchet MS",sans-serif;
            color:#1D81B6;
            font-weight:normal;
            font-style:normal;
            font-size:56px;
            text-shadow:1px 1px 1px #aaa;
        }
        #content h2{
            font-family:"Trebuchet MS",sans-serif;
            font-size:34px;
            font-style:normal;
            background-color:#f0f0f0;
            margin:40px 0px 30px -40px;
            padding:0px 40px;
            clear:both;
            float:left;
            width:100%;
            color:#aaa;
            text-shadow:1px 1px 1px #fff;
        }

    </style>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="update.js"></script>
	<script id="source" language="javascript" type="text/javascript">
		var updateRec = new Update();		
	</script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js" type="text/javascript"></script>

	<script type="text/javascript" src="update.js"></script>

	<script id="source" language="javascript" type="text/javascript">

		var updateRec = new Update();
		//updateRec.init();
	</script>


    <body>
        <div id="content">
            <a class="back" href=""></a>
            <span class="scroll"></span>
            <p class="head">
                <a href="http://agileccenter.com">Title</a>
            </p>
            <h1></h1>

            <h2></h2>

            <table class="table1" id ="table1">
                <thead>
                    <tr>
                        <th scope="col" abbr="Starter">FIELD1</th>
                        <th scope="col" abbr="Starter">FIELD2</th>
                        <th scope="col" abbr="Starter">FIELD3</th>
                        <th scope="col" abbr="Medium">FIELD4</th>
                        <th scope="col" abbr="Deluxe">FIELD5</th>
                        <th scope="col" abbr="Business">FIELD6</th>

                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </body>
</html>


