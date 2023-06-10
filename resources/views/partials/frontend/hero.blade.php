<!------------------------- Hero Section Start ----------------------->
<div class=" bg-orange  bg-coover pb-24 mb-[8.5rem] bg-left-bottom
 bg-repeat">

    <div
        class="container mx-auto main p-4 md:p-10 pt-16 justify-items-center max-w-full h-auto grid grid-cols-1 gap-x-4 lg:grid-cols-2 ">

        <div class="pb-3 flex space-x-4 ">
            <div class=" mt-4">
                <img class="animate-pulse" src="images/dotted squaredotted.png" alt="">
            </div>

            <div class="  ">
                <h1 class="text-3xl font-medium font-inter">Online Assignment Help UK</h1>
                <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa quos magni dignissimos
                    autem magnam nesciunt? Inventore incidunt nobis dolor nam.</p>
                <p class="font-bold">Price Starts $10 per page</p>
                <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, rerum incidunt? Enim,
                    doloremque. Quis, doloremque.</p>
            </div>
        </div>







        <div class="w-full  md:max-w-max sm:mx-auto  rounded-lg bg-white p-6 shadow-lg">

            <form method="POST" action="{{ route('form.submit') }}">

                @if (session('success'))
                    <div class="my-4 mx-auto bg-primari-one-lite border-t-4 border-primary-one rounded-b text-sm text-teal-900 px-4 py-3 shadow-md"
                        role="alert">

                        <p class="text-center font-bold">{{ session('success') }}</p>

                    </div>
                @endif
                @csrf
                <div class="grid grid-cols-1 sm:grid-cols-6 gap-4">
                    <div class="col-span-2">
                        <h2 class="text-lg font-bold font-inter">ORDER NOW</h2>
                    </div>
                    <div class="col-span-4 bg-[#276967] rounded-lg p-2 mb-4">
                        <p class="text-sm text-white">Upto $50 off on all assignments</p>
                    </div>
                </div>

                <!-- First Name and Last Name -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="relative mb-6" data-te-input-wrapper-init>
                        <input type="text" class="form-input" id="exampleInput123" name="fname"
                            aria-describedby="emailHelp123" required maxlength="255" placeholder="First name">
                        <label for="emailHelp123" class="form-lebel"></label>
                    </div>
                    <div class="relative mb-6" data-te-input-wrapper-init>
                        <input type="text" class="form-input" id="exampleInput124" name="lname"
                            aria-describedby="emailHelp124" required maxlength="255" placeholder="Last name">
                        <label for="exampleInput124" class="form-lebel"></label>
                    </div>
                </div>

                <!-- Subject and Deadline -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="relative mb-6" data-te-input-wrapper-init>
                        <input type="text" class="form-input" id="exampleInput123" name="subject"
                            aria-describedby="emailHelp123" placeholder="Subject">
                        <label for="emailHelp123" class="form-lebel"></label>
                    </div>
                    <div class="relative mb-6" data-te-input-wrapper-init>
                        <div class="w-full">
                            <select id="deadline" name="deadline" type="text" class="form-select">
                                <option hidden="" value="0" disabled="" selected="">Deadline
                                </option>
                                @foreach ($deadlines as $deadline)
                                    <option {{ old('$deadline') == $deadline->id ? 'selected' : '' }}
                                        value="{{ $deadline->id }}">{{ $deadline->name }}</option>
                                @endforeach
                                {{-- <option value="1">15 Days</option>
                                                        <option value="2">10 Days</option>
                                                        <option value="3">7 Days</option>                                       --}}
                            </select>
                            @error('deadline')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <label for="exampleInput124" class="form-lebel"></label>
                    </div>
                </div>

                <!-- Wordcount Slider -->
                <div class="range bg-[#F5F5F5] mb-4">
                    <label for="steps-range" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Word
                        Count</label>

                    <div class="range-wrap">
                        <div class="range-value" id="rangeV"></div>
                        <input id="range" name="wcount" type="range" min="250" max="5000"
                            value="2000">
                    </div>
                </div>

                <!-- Country Code Number University -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                    <div>
                        <select id="small" name="country" class="form-select">
                            <option selected>Choose a country</option>
                            <option value="US">United States</option>
                            <option value="CA">Canada</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                        </select>
                    </div>

                    <div class="relative mb-6" data-te-input-wrapper-init>
                        <input type="number" class="form-input" id="exampleInput124" name="phone"
                            aria-describedby="emailHelp124" placeholder="Phone Number">
                        <label for="exampleInput124" class="form-lebel"></label>
                    </div>

                    <div>
                        <div class="relative mb-6" data-te-input-wrapper-init>
                            <input type="text" class="form-input" id="exampleInput124" name="university"
                                aria-describedby="emailHelp124" placeholder="University">
                            <label for="exampleInput124" class="form-lebel"></label>
                        </div>
                    </div>
                </div>

                <button type="submit"
                    class="transition ease-in-out delay-150 w-full rounded-bl-lg rounded-tr-lg bg-[#276967] px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md hover:bg-primary-700 hover:shadow-lg focus:bg-primary-700 focus:shadow-lg focus:outline-none hover:-translate-y-1 hover:scale-110 active:bg-primary-800 active:shadow-lg"
                    data-te-ripple-init data-te-ripple-color="light">
                    Let's Start
                </button>
            </form>
        </div>


    </div>
</div>


<script>
    $(document).ready(function() {
        const phoneInputField = document.querySelector("#phone");
        const phoneInput = window.intlTelInput(phoneInputField, {
            preferredCountries: ["ae"],
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });
        $('#contact-form').on('submit', function(e) {
            e.preventDefault();

            const phoneNumber = phoneInput.getNumber();
            $('#phone2').val(phoneNumber);
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
