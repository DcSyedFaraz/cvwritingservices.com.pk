<div>
    <table align="center" style="font-weight:normal;border-collapse:collapse;border:0;margin-left:auto;margin-right:auto;padding:0;font-family:Arial,sans-serif;color:#555559;background-color:white;font-size:16px;line-height:26px;width:600px">
        <tbody>
            <tr>
                <td
                    style="border-collapse:collapse;border:1px solid #eeeff0;margin:0;padding:0;color:#555559;font-family:Arial,sans-serif;font-size:16px;line-height:26px">
                    <table
                        style="font-weight:normal;border-collapse:collapse;border:0;margin:0;padding:0;font-family:Arial,sans-serif">
                        <tbody>
                            <tr>
                                <td colspan="4" valign="top"
                                    style="border-collapse:collapse;border:0;margin:0;padding:0;color:#555559;font-family:Arial,sans-serif;font-size:16px;line-height:26px;background-color:#D1F1F1;border-bottom:4px solid #19bcbd;text-align:center">
                                    <a href="{{route('home')}}" target="_blank">
                                        <img  src="{{ asset('imgs/logo.png') }}" alt="{{config('app.name')}}" style="width:150px; margin-top:10px;">
                                    </a>
                                </td>
                            </tr>

                            @yield('content')

                            <tr bgcolor="#fff" style="border-top:4px solid #19bcbd">
                                <td valign="top" style="border-collapse:collapse;border:0;margin:0;padding:0;color:#555559;font-family:Arial,sans-serif;font-size:16px;line-height:26px;background:#fff;text-align:center">
                                    <table style="font-weight:normal;border-collapse:collapse;border:0;margin:0;padding:0;font-family:Arial,sans-serif">
                                        <tbody>
                                            <tr>
                                                <td align="center" valign="middle" style="border-collapse:collapse;border:0;margin:0;padding:20px;color:#555559;font-family:Arial,sans-serif;font-size:12px;line-height:16px;vertical-align:middle;text-align:center;width:580px">
                                                    <div>
                                                        <b>© {{ now()->year .' '. config('app.name') }}  All Rights Reserved.</b>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" valign="middle" style="border-collapse:collapse;border:0;margin:0;padding:20px;color:#555559;font-family:Arial,sans-serif;font-size:12px;line-height:16px;vertical-align:middle;text-align:center;width:580px">
                                                    <table cellpadding="0"
                                                    cellspacing="0"
                                                    width="100%"
                                                    class="es-menu">
                                                    <tbody>
                                                        <tr class="links">
                                                            <td align="center"
                                                                valign="top"
                                                                width="33.33%"
                                                                class="es-p10t es-p10b es-p5r es-p5l"
                                                                style="padding-top: 5px; padding-bottom: 5px;">
                                                                <a target="_blank"
                                                                    href="{{ route('home') }}"
                                                                    style="color: #999999;">Visit
                                                                    Us </a>
                                                            </td>
                                                            <td align="center"
                                                                valign="top"
                                                                width="33.33%"
                                                                class="es-p10t es-p10b es-p5r es-p5l"
                                                                style="padding-top: 5px; padding-bottom: 5px; border-left: 1px solid #cccccc;">
                                                                <a target="_blank"
                                                                    href="{{ route('privacy') }}"
                                                                    style="color: #999999;">Privacy
                                                                    & Refund
                                                                    Policy</a>
                                                            </td>
                                                            <td align="center"
                                                                valign="top"
                                                                width="33.33%"
                                                                class="es-p10t es-p10b es-p5r es-p5l"
                                                                style="padding-top: 5px; padding-bottom: 5px; border-left: 1px solid #cccccc;">
                                                                <a target="_blank"
                                                                    href="{{ route('terms') }}"
                                                                    style="color: #999999;">Terms
                                                                    of Use</a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</div>
