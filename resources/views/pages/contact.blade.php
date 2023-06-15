
@extends('layouts.web')
@section('title', 'Contact Us')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path())

@section('content')
    <section>
        <div class="container mx-auto my-8">
          <div id="msg-bag"></div>
            <div class="mx- md:mx-0">

                <div  class="max-w-[88%] md:max-w-2xl lg:max-w-[60rem] mx-auto border border-gray-300 rounded-xl shadow-lg shadow-slate-600 ">
                    {{-- gradient-to-tr from-primary-one to-primary-two  --}}
                    <div class="h-14 bg-primary-one-lite rounded-t-xl "><span
                            class="flex justify-center h-full py-2 text-3xl font-bold">

                            <span class="text-primary-two">Contact</span><span class="text-primary-one">
                                &nbsp;Us
                                                            </span> </span>

                        </div>

                    <form id="contact-form"  method="POST" action="{{ route('contact.store') }}">
                        @csrf
                        <div class=" grid grid-cols-1 md:grid-cols-2 gap-4 p-8 ">
                            {{-- <div class=" col-span-2 "></div> --}}

                            <div class="">
                                 <label class="text-md text-gray-600 font-bold">Name</label>
                                <input type="text" name="name" class="contact-input" placeholder=" Full Name">
                            </div>


                            <div>
                              <label class="text-md text-gray-600 font-bold"> Email</label>
                                <input type="text" name="email" class="contact-input" placeholder=" Enter Email">
                            </div>

                            <div class="">
                              <label class="text-md text-gray-600 font-bold">Phone</label>
                                <input type="tel" name="Phone" id="phone" class="contact-input" placeholder=" Enter Phone Number" value="{{ old('phone') }}"
                                oninput="this.value=this.value.replace(/[^0-9\+]/g,'');" autocomplete="off" data-intl-tel-input-id="0">
                                <input  type="hidden" name="phone" id="phone2" />
                            </div>


                            <div>
                              <label class="text-md text-gray-600 font-bold">Subject</label>
                                <input type="text" name="subject" class="contact-input" placeholder=" Subject">
                            </div>




                            <div class="col-span-1 md:col-span-2">
                              <label class="text-md text-gray-600 font-bold">Message</label>
                                <textarea type="text" name="detail" class="contact-input h-28" placeholder=" Type details here..."></textarea>
                            </div>
                        </div>

                    <div class="mx-auto w-32 font-extrabold mb-4 ">
                        <button class="px-4 py-2 contact-input bg-primary-one-lite hover:shadow-lg hover:shadow-slate-950 text-black text-center w-full" id="btn-submit"  type="submit">Submit</button>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
             const phoneInputField = document.querySelector("#phone");
             const phoneInput = window.intlTelInput(phoneInputField, {
                 preferredCountries: ["gb"],
                 utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
             });





            $('#contact-form').on('submit', function(e) {
                e.preventDefault();

                const phoneNumber = phoneInput.getNumber();
                var number =  $('#phone2').val(phoneNumber);

                // console.log(number);


                $.ajax({
                    url: "{{ route('contact.store') }}",
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: $('#contact-form').serialize(),
                    beforeSend: function() {
                        $(".contact-form-error").empty();
                        $('#contact-form').find(':submit').attr("disabled", true);
                        $('#btn-submit').html("Submiting...");
                    },
                    complete: function() {
                        $('#contact-form').find(':submit').attr("disabled", false);
                        $('#btn-submit').html("Submit");
                    },
                    success: function(res) {

                        // console.log(res)

                        $('#msg-bag').empty();

                        let msg =
                            '<div class="bg-green-100 border w-[80%] text-center left-[10%] border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">';
                        msg += '<strong class="font-bold">Success!</strong>';
                        msg += '<span class="block sm:inline">' + res.success + '</span>';
                        msg += '</div>';

                        $('#msg-bag').append(msg);

                        $(':input', 'form')
                            .not(':button, :submit, :reset, :hidden')
                            .val('')
                            .prop('checked', false)
                            .prop('selected', false);
                    },
                    error: function(err) {
                        if (err.status == 422) {

                            $('#msg-bag').empty();

                            let msg =
                                '  <div class="mx-auto md:mx-0 md:left-[35%] bg-red-100 border w-[80%]  md:w-[30%] border-red-400 text-red-700 px-4 py-3 rounded relative mb-4 text-center" role="alert">';
                            msg += '    <strong class="font-bold ">Error!</strong>';
                            msg += '    <span class="  ">Invalid Data</span>';
                            msg += ' </div>';

                            $('#msg-bag').append(msg);

                            $.each(err.responseJSON.errors, function(i, error) {
                                var el = $('#contact-form').find('[name="' + i + '"]');
                                el.after($('<span class="contact-form-error text-red-700">' +
                                    error[0] + '</span>'));
                            });

                            $('.contact-form-error').delay(2000).fadeOut();
                        }
                    },
                });
            });
        });
    </script>
@endsection
