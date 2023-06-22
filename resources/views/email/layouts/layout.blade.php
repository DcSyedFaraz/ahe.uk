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


    /* th,
    td {
        border: 2px solid red;
        text-align: left;
        padding: 8px;
        width: 14rem;
        color: black;
        font-size: 17px;

    } */


    img {
        width: 150px;

    }

    .div-2 {
        background-color: lightblue;
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
        background-color: rgb(21, 172, 223);
        margin-top: 20px;
        border: 3px solid red;
        font-weight: bold;
        margin-bottom: 20px;
        font-size: 20px;
        margin-left: auto;
        margin-right: auto;

    }
</style>

<div style="background-color:lightgrey ">
    <div class="table-one">

        <table align="center"
            style="font-weight:normal;border-collapse:collapse;border:0;margin-left:auto;margin-right:auto;padding:0;font-family:Arial,sans-serif;color:#555559;background-color:white;font-size:16px;line-height:26px;width:600px;">
            <tbody>
                <tr>
                    <td {{-- border:1px solid #eeeff0; margin:0; margin:0;--}}
                        style="border-collapse:collapse;padding:0;border:0;color:#555559;font-family:Arial,sans-serif;font-size:16px;line-height:26px">
                        <table
                            style="font-weight:normal;border-collapse:collapse;border:0;padding:0;font-family:Arial,sans-serif">
                            <tbody>
                                <tr>
                                    <td colspan="4" valign="top"
                                        style="border-collapse:collapse;border:0;margin:0;padding:0;color:#555559;font-family:Arial,sans-serif;font-size:16px;line-height:26px;background-color:lightblue;border-bottom:4px solid #19bcbd;text-align:center">
                                        <a href="{{ route('home') }}" target="_blank">
                                            <img src="{{ asset('imgs/cheapresumeLogo.png') }}"
                                                alt="{{ env('APP_NAME', 'cheapresumewriter') }}"
                                                style="width:150px; margin-top:10px;">
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border-collapse:collapse;border:0;background-color:lightgrey">
                                        @yield('content')
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="border-collapse:collapse;border:0;padding: 10px;background-color: lightblue">


                                        <span>
                                            <a
                                                href="https://www.facebook.com/people/Cheap-Resume-Writer-USA/100083135802094/"><img
                                                    src="{{ asset('imgs/email-footer/5a22b43e909176.0984090415122238065922.png') }}"
                                                    alt="{{ env('APP_NAME', 'cheapresumewriter') }}"
                                                    style="width:20px; "></a>
                                            <a href="https://www.instagram.com/cheapresumewriterusa/"><img
                                                    src="{{ asset('imgs/email-footer/5a355496a61e55.7452819615134445026804.png') }}"
                                                    alt="{{ env('APP_NAME', 'cheapresumewriter') }}"
                                                    style="width:20px;"></a>
                                            <a href="https://api.whatsapp.com/send/?phone=0012243385225"><img
                                                    src="{{ asset('imgs/email-footer/transparent-social-media-icons-icon-whatsapp-icon-5dd10656a77cf0.019391031573979734686.png') }}"
                                                    alt="{{ env('APP_NAME', 'cheapresumewriter') }}"
                                                    style="width:20px; "></a>
                                        </span>
                                        <p style="text-align: center">© 2018 - 2022. All rights reserved <a
                                                href="{{ route('home') }}" style="color:red">cheapresumewriter.com</a>
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
