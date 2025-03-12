<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ env('APP_NAME') }} - Verification Code</title>
    @include('layouts.meta')
    @include('layouts.css')

    <style type="text/css">
        body {
            width: 650px;
            font-family: work-Sans, sans-serif;
            background-color: #f6f7fb;
            display: block;
        }

        a {
            text-decoration: none;
        }

        span {
            font-size: 14px;
        }

        p {
            font-size: 13px;
            line-height: 1.7;
            letter-spacing: 0.7px;
            margin-top: 0;
        }

        .text-center {
            text-align: center
        }

        h6 {
            text-align: center;
            font-weight: 600;
            font-size: 16px;
            margin: 0 0 18px 0;
        }

        .bg-code {
            background-color: lightgray
        }
    </style>
</head>

<body style="margin: 30px auto;">
    <table style="width: 100%">
        <tbody>
            <tr>
                <td>
                    <table style="background-color: #f6f7fb; width: 100%">
                        <tbody>
                            <tr>
                                <td>
                                    <table style="width: 650px; margin: 0 auto; margin-bottom: 30px">
                                        <tbody>
                                            <tr>
                                                <td><img src="{{ asset('assets/images/logo/login.png') }}" alt="">
                                                </td>
                                                <td style="text-align: right; color:#999">
                                                    <span>{{ env('APP_NAME') }}</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="width: 650px; margin: 0 auto; background-color: #fff; border-radius: 8px">
                        <tbody>
                            <tr>
                                <td style="padding: 30px">
                                    <h6 style="font-weight: 600">{{ $details['title'] }}</h6>
                                    <p>{{ $details['body'] }}</p>
                                    <h6 class="p-5 bg-code">{{ $details['verification_code'] }}</h6>
                                    <p>Please make sure you never share this code with anyone.</p>
                                    <p style="text-align: center"><a href="{{ $details['url'] }}"
                                            style="padding: 10px; background-color: #5AA89A; color: #fff; display: inline-block; border-radius: 4px">Unlock</a>
                                    </p>
                                    <p>Good luck! Hope it works.</p>
                                    <p style="margin-bottom: 0">
                                        Regards,
                                        <br>
                                        {{ env('APP_NAME') }}
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div style="border-top: 1px solid #ddd; margin: 20px auto 0;"></div>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 30px">
                                    <p style="line-height: 1.5em; margin-top: 0; text-align: left; font-size: 14px;">
                                        If you're having trouble clicking the "Unlock" button, copy and paste the URL
                                        below into your web browser: <a
                                            href="{{ $details['url'] }}">{{ $details['url'] }}</a>
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="width: 650px; margin: 0 auto; margin-top: 30px">
                        <tbody>
                            <tr style="text-align: center">
                                <td>
                                    <p style="color: #999; margin-bottom: 0">© {{ date('Y') }}
                                        {{ env('APP_NAME') }}. All rights reserved</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>
