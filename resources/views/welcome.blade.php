<!DOCTYPE html>
<html>
    <head>
        <title>Laravel 5.1 and S3 Amazon AWS</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

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
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5 and S3 Amazon AWS</div>
                <div class="row">
                  {!! Form::open(['url' => 'welcome/upload', 'method'=>'POST', 'files'=>'true']) !!}
                    <div class="form-group col-md-12">
                      {!! Form::label('Upload an image') !!}
                      {!! Form::file('file') !!}
                    </div><br/><hr/>
                    <div class="form-group col-md-12">
                      {!! Form::submit('Create Information', ['class' => 'btn btn-success form-control']) !!}
                    </div>

                  {!! Form::close() !!}
                </div>

            </div>
        </div>
    </body>
</html>
