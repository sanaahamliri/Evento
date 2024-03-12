<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        .container {
            margin-top: 20px;
        }

        .title h4 {
            margin: 0;
        }

        .title span {
            color: #888;
        }

        .time span,
        .place span {
            display: block;
            margin-bottom: 10px;
        }

        .place b {
            color: #333;
        }

        form {
            margin-top: 10px;
        }
    </style>
    <title>Event Ticket</title>
</head>

<body>

    <div class="container">
        <div class="row">
            @foreach($reservation as $res)
            <div class="col-lg-12">
                <ul>
                    <li>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="title">
                                    <h4>{{$res->events->title}}</h4>
                                    <span>{{$res->events->place_number}} Tickets Available</span>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="time"><span><i class="fa fa-clock-o"></i> {{$res->events->date}}</span></div>
                                <div class="place"><span><i class="fa fa-map-marker"></i>{{$res->events->place}}</span></div>
                            </div>
                            <div class="col-lg-3">
                                <div class="place"><span> event Category : <b>{{$res->events->categories->categorieName}}</b></span></div>
                            </div>
                            <div class="col-lg-3">
                                <div class="place"><span>event Organizer : <b>{{$res->clients->users->name}}</b></span></div>

                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            @endforeach
        </div>

    </div>

</body>

</html>