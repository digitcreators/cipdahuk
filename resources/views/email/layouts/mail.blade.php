<style>
    .table-one {
        align-items: center;
        justify-items: center;
        text-align: center;
        width: 80%;
        margin-left: auto;
        margin-right: auto;
    }

    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        margin-left: auto;
        margin-right: auto;

    }


    img {
        width: 150px;

    }

    .div-2 {
        background-color: #F26962;
    }

    p {
        text-align: left;
        color: black;
        margin-left: 8px;
        margin-right: 8px
    }

    button {
        padding: 10px;
        padding-left: 20px;
        padding-right: 20px;
        border-radius: 10px;
        color: white;
        background-color: #be8672;
        margin-top: 20px;
        border: 4px solid #be8672;
        font-weight: bold;
        margin-bottom: 20px;
        font-size: 20px;
        margin-left: auto;
        margin-right: auto;

    }

    .email {
            max-width: 480px;
            margin: 1rem auto;
            border-radius: 10px;
            border-top: #be8672 2px solid;
            border-bottom: #be8672 2px solid;
            box-shadow: 0 2px 18px rgba(0, 0, 0, 0.2);
            padding: 1.5rem;
            font-family: Arial, Helvetica, sans-serif;
        }

        .email .email-head {
            background-color: hsla(193, 83%, 36%, 87);
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
            color: #fff;
        }

        .email-body .body-table table .item {
            border-radius: 8px;
            color: #000000;
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

</style>

<div style="background-color:lightgrey ">
    <div class="table-one">

        <table align="center"
            style="font-weight:normal;border-collapse:collapse;border:0;margin-left:auto;margin-right:auto;padding:0;font-family:Arial,sans-serif;color:#555559;background-color:lightgrey;font-size:16px;line-height:26px;width:600px;">
            <tbody>
                <tr>
                    <td
                        style="border-collapse:collapse;padding:0;border:0;color:#555559;font-family:Arial,sans-serif;font-size:16px;line-height:26px">
                        <table
                            style="font-weight:normal;border-collapse:collapse;border:0;padding:0;font-family:Arial,sans-serif">
                            <tbody>
                                <tr>
                                    <td colspan="4" valign="top"
                                        style="border-collapse:collapse;border:0;margin:0;padding:0;color:#555559;font-family:Arial,sans-serif;font-size:16px;line-height:40px;background-color:#3d151e;border-bottom:4px solid #be8672;text-align:center ; padding:10px;">
                                        <a href="{{ url('/') }}" target="_blank">
                                            <img src="{{ asset('images/logo-cipd-2.webp') }}" alt="{{ config('app.name', '') . ' Logo' }}" width="176px" height="85px" />
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border-collapse:collapse;border:0;background-color:white ;padding:10px;" >
                                    <div class="email-body">
                                        @yield('content')
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="text-align:center; border-collapse:collapse;border:0;padding: 10px;background-color: #3d151e ; border-top:4px solid #be8672">


                                        <span>

                                            <a
                                                href="https://www.facebook.com/cipdassignmenthelpuk.co.uk/"><img
                                                    src="{{ asset('imgs/email-footer/5a22b43e909176.0984090415122238065922.png') }}"
                                                    style="width:20px" alt="Facebook"></a>


                                            <a href="https://www.instagram.com/cipdassignmenthelpuk.co.uk/"><img
                                                    src="{{ asset('imgs/email-footer/5a355496a61e55.7452819615134445026804.png') }}"
                                                    style="width:20px" alt="instagram"></a>



                                            <a href="https://api.whatsapp.com/send?phone=447403663991"><img
                                                    src="{{ asset('imgs/email-footer/whatsapp-icon.png') }}"
                                                    style="width:20px" alt="whatsapp"></a>

                                        </span>
                                        <p style="text-align: center; color:white;">© {{ now()->year }} All rights reserved <a
                                                href="{{ url('/') }}" style="color:white">{{ config('app.name') }}</a>
                                        </p>

                                    </td>

                                </tr>
                            </tbody>
                        </table>

                    </td>
                </tr>
            </tbody>
        </table>

    </div>

</div>
