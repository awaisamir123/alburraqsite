<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 25px;
            margin: 0;
        }

        .full-height {
            height: 25px;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 22px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 10px;
        }
    </style>
</head>
<body style="padding: 50px">

<div class="content">
    <div style="background:whitesmoke ;padding: 10px" class="title m-b-md  ">
        <img style="width: 200px" src="https://burraq.zongo.io/al-logo-s.png" alt="">

    </div>

    <div style="background: white;/*border: black;border-radius: 1px;*/padding: 30px;font-size: 15px;color: black/*;border-style: solid;border-top:none*/ ">
        <div class="row">
            {!! $response !!}
        </div>

    </div>
    <div style="color: black;font-weight: bold;text-align: left;padding: 20px">

        {{--HR Manager
        Al-Burraq Technologies	Logo

        49-C Commercial Area Cavalry Ground
        Lahore,Cantt
        t: +92-42-36610328
        m: +92(313)335-9533

        www.al-burraq.com	Facebook icon   LinkedIn icon   Twitter icon   Google Plus icon   Instagram icon

        The content of this email is confidential and intended for the recipient specified in message only. It is strictly forbidden to share any part of this message with any third party, without a written consent of the sender. If you received this message by mistake, please reply to this message and follow with its deletion, so that we can ensure such a mistake does not occur in the future.--}}


        <p> <strong style="font-size: 18px"><a href="https://www.al-burraq.com/">Al-Burraq Technologies</a></strong> <br>
        <p> <strong style="font-size: 15px"> Contact : +1 (301) 887 5877</strong> <br>
        <p> <strong style="font-size: 15px"> Address : 1st Floor 49-C Commercial Area Cavalry Ground Lahore Cantt.</strong> <br>
            <br>

            <br>
        </p>
    </div>
</div>

</body>
</html>
