<style>
    input[type=range] {
        -webkit-appearance: none;
        margin: 20px 0;
        width: 100%;
    }

    input[type=range]:focus {
        outline: none;
    }

    input[type=range]::-webkit-slider-runnable-track {
        width: 100%;
        height: 4px;
        cursor: pointer;
        animate: 0.2s;
        background: #F68800;
        border-radius: 25px;
    }

    input[type=range]::-webkit-slider-thumb {
        height: 20px;
        width: 20px;
        border-radius: 50%;
        background: #fff;
        box-shadow: 0 0 4px 0 rgba(0, 0, 0, 1);
        cursor: pointer;
        -webkit-appearance: none;
        margin-top: -8px;
    }

    input[type=range]:focus::-webkit-slider-runnable-track {
        background: #f4c803;
    }

    .range-wrap {

        position: relative;
    }

    .range-value {
        position: absolute;
        top: -50%;
    }

    .range-value span {
        width: 30px;
        height: 24px;
        line-height: 24px;
        text-align: center;
        background: #03a9f4;
        color: #fff;
        font-size: 12px;
        display: block;
        position: absolute;
        left: 50%;
        transform: translate(-50%, 0);
        border-radius: 6px;
    }
</style>




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

            <form method="POST" id="contact-form" action="<?php echo e(route('form.submit')); ?>">
                <?php echo csrf_field(); ?>

                <?php if(session('success')): ?>
                    <div class="my-4 mx-auto bg-primari-one-lite border-t-4 border-primary-one rounded-b text-sm text-teal-900 px-4 py-3 shadow-md"
                        role="alert">

                        <p class="text-center font-bold"><?php echo e(session('success')); ?></p>

                    </div>
                <?php endif; ?>
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
                        <input type="email" class="form-input" id="exampleInput124" name="email"
                            aria-describedby="emailHelp124" required maxlength="255" placeholder="Email">
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
                                <?php $__currentLoopData = $deadlines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deadline): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php echo e(old('$deadline') == $deadline->id ? 'selected' : ''); ?>

                                        value="<?php echo e($deadline->id); ?>"><?php echo e($deadline->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </select>
                            <?php $__errorArgs = ['deadline'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-red-600 text-sm"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
                        <input type="tel" class="form-input" id="exampleInput124" name="phone"
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

                <button type="submit"  id="btn-submit"
                    class="transition ease-in-out delay-150 w-full rounded-bl-lg rounded-tr-lg bg-[#276967] px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md hover:bg-primary-700 hover:shadow-lg focus:bg-primary-700 focus:shadow-lg focus:outline-none hover:-translate-y-1 hover:scale-110 active:bg-primary-800 active:shadow-lg"
                    data-te-ripple-init data-te-ripple-color="light">
                    Let's Start
                </button>
            </form>
        </div>


    </div>
</div>


<script>
    //Slider of no of words
        const
            range = document.getElementById('range'),
            rangeV = document.getElementById('rangeV'),
            setValue = () => {
                const
                    newValue = Number((range.value - range.min) * 100 / (range.max - range.min)),
                    newPosition = 10 - (newValue * 0.2);
                rangeV.innerHTML = `<span>${range.value}</span>`;
                rangeV.style.left = `calc(${newValue}% + (${newPosition}px))`;
            };
        document.addEventListener("DOMContentLoaded", setValue);
        range.addEventListener('input', setValue);
//ajax for form...
$(document).ready(function() {





            $('#contact-form').on('submit', function(e) {
                e.preventDefault();

                const phoneNumber = phoneInput.getNumber();
                var number =  $('#phone').val(phoneNumber);

                // console.log(number);


                $.ajax({
                    url: "<?php echo e(route('form.submit')); ?>",
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
<?php /**PATH E:\Syed Faraz Shahid\blog\resources\views/partials/frontend/hero.blade.php ENDPATH**/ ?>