<!DOCTYPE html>
<html>
    <head>
        <title>{{ Lang::get('titles.app') }}</title>

        {!! HTML::style('//fonts.googleapis.com/css?family=Lato:100', array('type' => 'text/css', 'rel' => 'stylesheet')) !!}

        <style>
            html, body {
                height: 100%;
            }
            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
				height: 100%;
				color: #828A8E;
            }
            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }
            .content {
                text-align: center;
                display: inline-block;
            }
			.title {
				font-size: 6em;

			}
			.quote {
				font-size: 1.5em;
			}

        </style>
    </head>
    <body>
		<div class="container">
			<div class="content">
				<div class="title">{{ Lang::get('titles.app2') }}</div>
				<div class="quote">{{ Inspiring::quote() }}</div>
			</div>
		</div>
    </body>
</html>