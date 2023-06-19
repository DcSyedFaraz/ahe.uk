@extends('email.layouts.layout')

@section('content')
    <table>
        <tbody>
            <tr>
                <td>
                    <p>You have successfully paid the payment {{ $invoice->amount.'$' }} .</p>
                    <p>Sign in to your account to check the order status </p>
                    <button><a style="color: white" href="{{ route('login') }}">
                            {{ __('Login') }}</a></button>

                    <p>Best Regards</p>
                    <p>Customer Support,</p>
                    <p>Cheap Resume Writer</p>
                </td>
            </tr>

        </tbody>
    </table>
@endsection
