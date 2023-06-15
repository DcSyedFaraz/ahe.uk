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
                                    style="border-collapse:collapse;border:0;margin:0;padding:0;color:#555559;font-family:Arial,sans-serif;font-size:16px;line-height:26px;background-color:#fff;border-bottom:4px solid #1e7a89;text-align:center">
                                    <a href="{{route('home')}}" target="_blank">
                                        <img  src="{{ asset('images/logo.png') }}" alt="{{env('APP_NAME', config('app.name'))}}" style=" width:100px;">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" style="border-collapse:collapse;border:0;margin:0;padding:20px;color:#555559;font-family:Arial,sans-serif;font-size:16px;line-height:26px;vertical-align:top;background-color:white;border-top:none">
                                    <table style="font-weight:normal;border-collapse:collapse;border:0;margin:0;padding:0;font-family:Arial,sans-serif">
                                        <tbody>
                                            <tr>
                                                <td style="border-collapse:collapse;border:0;margin:0;padding:0;color:#555559;font-family:Arial,sans-serif;font-size:16px;line-height:26px">
                                                    <div>
                                                        Greetings from {{ config('app.app_name') }},
                                                        <br>
                                                        <br>
                                                        Thank you for reaching out! We have successfully received your query. Please make sure the following details are correct.
                                                        <br>
                                                        <br>
                                                        <strong>Client’s Information:</strong>
                                                        <hr>
                                                        <strong>First Name :  {{$query->fname}}</strong>
                                                        <br>
                                                        <strong>Email :  {{$query->email}}</strong>
                                                        <br>
                                                        <strong>Number :  {{$query->phone}}</strong>
                                                        <br>
                                                        <strong>Subject :  {{$query->subject}}</strong>
                                                        <br>
                                                        <strong>Deadline :  {{$query->deadlineName->name}}</strong>
                                                        <br>
                                                        <strong>University :  {{$query->university}}</strong>
                                                        <br>
                                                        <strong>Word Count :  {{$query->wcount}}</strong>
                                                        <br>
                                                        <strong>Country :  {{$query->country}}</strong>
                                                        <br>
                                                        <br>Thank you for choosing {{ config('app.app_name') }},
                                                        <br>
                                                        <br>Team <strong>{{ config('app.app_name') }}</strong>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr bgcolor="#fff" style="border-top:4px solid #1e7a89">
                                <td valign="top" style="border-collapse:collapse;border:0;margin:0;padding:0;color:#555559;font-family:Arial,sans-serif;font-size:16px;line-height:26px;background:#fff;text-align:center">
                                    <table style="font-weight:normal;border-collapse:collapse;border:0;margin:0;padding:0;font-family:Arial,sans-serif">
                                        <tbody>
                                            <tr>
                                                <td align="center" valign="middle"
                                                    style="border-collapse:collapse;border:0;margin:0;padding:20px;color:#555559;font-family:Arial,sans-serif;font-size:12px;line-height:16px;vertical-align:middle;text-align:center;width:580px">
                                                    <div>
                                                        <b>{{ config('app.app_name') }}</b>
                                                        <br> © 2022
                                                        <br>
                                                    </div>
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

