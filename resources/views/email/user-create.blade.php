


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
                                    style="border-collapse:collapse;border:0;margin:0;padding:0;color:#555559;font-family:Arial,sans-serif;font-size:16px;line-height:26px;background-color:#fff;border-bottom:4px solid #F68800;text-align:center">
                                    <a href="{{route('home')}}" target="_blank">
                                        <img  src="{{ asset('images/logo.png') }}"  alt="{{env('APP_NAME', config('app.name'))}}" style="width:30%;" >
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
                                                        Greetings from asignmenthelpexpert.com,
                                                        <br>
                                                        <br>
                                                        Account Details
                                                        <br>
                                                        <br>
                                                        {{-- <strong>Client’s Information:</strong> --}}
                                                        <hr>
                                                        <strong>Email :  {{$user->email}}</strong>
                                                        <br>
                                                        <strong>Password :  {{$password}}</strong>
                                                        {{-- <br>
                                                        <strong>Number :  {{$contact->phone}}</strong>
                                                        <br>
                                                        <strong>Subject :  {{$contact->subject}}</strong>
                                                        <br>
                                                        <strong>Detail :  {{$contact->detail}}</strong>
                                                        <br>
                                                        <br>Thank you for choosing cheapresumewriter.com, --}}
                                                        <br>
                                                        <br>Team <strong>asignmenthelpexpert.com</strong>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr bgcolor="#fff" style="border-top:4px solid #F68800">
                                <td valign="top" style="border-collapse:collapse;border:0;margin:0;padding:0;color:#555559;font-family:Arial,sans-serif;font-size:16px;line-height:26px;background:#fff;text-align:center">
                                    <table style="font-weight:normal;border-collapse:collapse;border:0;margin:0;padding:0;font-family:Arial,sans-serif">
                                        <tbody>
                                            <tr>
                                                <td align="center" valign="middle"
                                                    style="border-collapse:collapse;border:0;margin:0;padding:20px;color:#555559;font-family:Arial,sans-serif;font-size:12px;line-height:16px;vertical-align:middle;text-align:center;width:580px">
                                                    <div  style=" border-radius: 6px; ">
                                                        <a href="{{ route('login') }}" class="" target="_blank"
                                                            style="color:#ffffff; width:60px ; background: #F68800; padding: 10px">
                                                            Login Now
                                                        </a>
                                                    </div>
                                                    <div style="padding-top: 10px">
                                                        <b>asignmenthelpexpert.com</b>
                                                        <br> © 2018 - {{now()->year}}
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


