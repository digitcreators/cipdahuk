<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>@yield('title', config('app.name'))</title>

    <style>
        .email {
            max-width: 480px;
            margin: 1rem auto;
            border-radius: 10px;
            border-top: #d300c5 2px solid;
            border-bottom: #d300c5; 2px solid;
            box-shadow: 0 2px 18px rgba(0, 0, 0, 0.2);
            padding: 1.5rem;
            font-family: Arial, Helvetica, sans-serif;
        }

        .email .email-head {
            background-color: #3d151e;
            border-radius: 10px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.2);
            padding: 0.5rem 0px;
        }

        .email .email-head .head-img {
            max-width: 240px;
            padding: 0 0.5rem;
            display: block;
            margin: 0 auto;
        }

        .email .email-head .head-img img {
            width: 100%;
        }

        .email-body .invoice-icon {
            max-width: 80px;
            margin: 1rem auto;
        }

        .email-body .invoice-icon img {
            width: 100%;
        }

        .email-body .body-text {
            padding: 2rem 0 1rem;
            text-align: center;
            font-size: 1.15rem;
        }

        .email-body .body-text.bottom-text {
            padding: 2rem 0 1rem;
            text-align: center;
            font-size: 0.8rem;
        }

        .email-body .body-text .body-greeting {
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .email-body .body-table {
            text-align: left;
        }

        .email-body .body-table table {
            width: 100%;
            font-size: 1.1rem;
        }

        .email-body .body-table table .total {
            background-color: #be8672;
            border-radius: 8px;
            color: #ffffff;;
        }

        .email-body .body-table table .item {
            border-radius: 8px;
            color: #192E49;;
        }

        .email-body .body-table table th,
        .email-body .body-table table td {
            padding: 10px;
        }

        .email-body .body-table table tr:first-child th {
            border-bottom: 1px solid rgba(0, 0, 0, 0.2);
        }

        .email-body .body-table table tr td:last-child {
            text-align: right;
        }

        .email-body .body-table table tr th:last-child {
            text-align: right;
        }

        .email-body .body-table table tr:last-child th:first-child {
            border-radius: 8px 0 0 8px;
        }

        .email-body .body-table table tr:last-child th:last-child {
            border-radius: 0 8px 8px 0;
        }

        .email-footer {
            border-top: 1px solid rgba(0, 0, 0, 0.2);
        }

        .email-footer .footer-text {
            font-size: 0.8rem;
            text-align: center;
            padding-top: 1rem;
        }

        .email-footer .footer-text a {
            color: #2E5A88;
        }
    </style>
</head>

<body>
    <div class="email">
        <div class="email-head">
            <div class="head-img">
                <img src="{{ asset('images/logo-cipd-2.webp') }}" alt="{{ config('app.name', '') . ' Logo' }}" width="176px" height="85px" />
                <br />
            </div>
        </div>
        <div class="email-body">

            @yield('content')

        </div>
        <div class="email-footer">
            <div class="footer-text">
                The <a href="{{ url('/') }}" target="_blank"> {{ config('app.name') }} </a> Team.
            </div>
            <div class="footer-text">
                &copy;  {{ now()->year }}
                <a rel="noopener noreferrer" href="{{ url('/') }}" target="_blank">{{ config('app.name') }}</a>
            </div>
        </div>
    </div>
</body>

</html>
