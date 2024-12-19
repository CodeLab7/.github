<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="color-scheme" content="light">
    <meta name="supported-color-schemes" content="light">
    <title>@yield('title')</title>
</head>

@php
    $body = "background-color: #f6f6f6;font-family: -apple-system, BlinkMacSystemFont,   'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';font-size: 16px;line-height: 1.4;margin: 0;padding: 0;-webkit-text-size-adjust: none;-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;";

    $wrapper = 'box-sizing: border-box;padding: 20px;';

    $table_td = "font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';font-size: 16px;";

@endphp

<body style="{{ $body }}  position: relative; font-size: 8px;">

    <table width="100%" cellpadding="0" cellspacing="0"
        style="{{ $wrapper }} background-color: #edf2f7; margin: 0; padding: 0; width: 100%;">
        <tr>
            <td align="center" style="{{ $table_td }}">

                <table class="content" width="100%" cellpadding="0" cellspacing="0"
                    style="margin: 0; padding: 0; width: 100%;">

                    <tr>
                        <td class="header" style=" {{ $table_td }}  padding: 25px 0; text-align: center;">
                            <a href="{{ env('FRONT_SITE') }}" target="_blank"
                                style="display: inline-block; color: #3d4852; font-size: 19px; font-weight: bold; text-decoration: none;">
                                <img src="<PROJECT LOGO>" width="50"
                                    alt="logo">
                            </a>
                        </td>
                    </tr>

                    <!-- Email Body -->
                    <tr>
                        <td class="body" width="100%" cellpadding="0" cellspacing="0"
                            style="{{ $table_td }} border: hidden !important; background-color: #edf2f7; border-bottom: 1px solid #edf2f7; border-top: 1px solid #edf2f7; margin: 0; padding: 0; width: 100%;">

                            <table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0"
                                style="background-color: #ffffff; border-color: #e8e5ef; border-radius: 2px; border-width: 1px; box-shadow: 0 2px 0 rgba(0, 0, 150, 0.025), 2px 4px 0 rgba(0, 0, 150, 0.015); margin: 0 auto; padding: 0; width: 570px;">
                                <!-- Body content -->
                                <tr>
                                    <td class="content-cell"
                                        style="{{ $table_td }} max-width: 100vw; padding: 32px;">
                                        @yield('content')
                                    </td>
                                </tr>

                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td style="{{ $table_td }}">

                            <table class="footer" align="center" width="570" cellpadding="0" cellspacing="0"
                                role="presentation"
                                style="margin: 0 auto; padding: 0; text-align: center; width: 570px;">
                                <tr>
                                    <td class="content-cell" align="center"
                                        style="{{ $table_td }} max-width: 100vw;padding: 32px;">
                                        <p style="color: #b0adc5;font-size: 12px;text-align: center;">© {{ now()->year }} <PROJECT NAME>. All rights reserved.</p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
