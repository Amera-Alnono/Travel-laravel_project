<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <title>Travel</title>
    <link rel="stylesheet" href={{ asset('assets/front/css/style2.css') }} />
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&family=Inconsolata:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
    <div class="container register text-center">
        <div class="card w-50 m-auto p-3 mt-5">
            <div class="mt-5 d-flex justify-content-center text-center">
                <h2>Sign In</h2>
            </div>

            <div class="mt-3 py-2 log mb-3 position-relative border w-100">
                <i class="face fa-brands fa-facebook position-absolute"></i>
                <span class="logIn">Log in with Facebook</span>
            </div>

            <div class="mt-3 py-2 log mb-3 position-relative border w-100">
                <i class="fa-brands fa-google icon-google position-absolute"></i>
                <span class="logIn">Log in with Google</span>
            </div>
            <div class="d-flex align-items-center justify-content-center">
                <div class="line"></div>
                <div class="line-content">OR sign in width</div>
                <div class="line"></div>
            </div>


            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="row mb-3 mt-3">
                    <div class="col position-relative">
                        <label for="" class="d-flex">first_Name</label>
                        <i class="user fa-regular fa-user position-absolute"></i>
                        <input id="first_Name"  class="form-control ps-5" type="text" name="first_Name" :value="old('first_Name')" required autofocus autocomplete="name" placeholder="Amany"/>
                        <x-input-error :messages="$errors->get('first_Name')" class="mt-2" />
                    </div>

                    <div class="col position-relative">
                       <label for="" class="d-flex">last_Name</label>
                       <i class="user fa-regular fa-user position-absolute"></i>
                       <input id="last_Name"  class="form-control ps-5" type="text" name="last_Name" :value="old('last_Name')" required autofocus autocomplete="name"  placeholder="Barakat"/>
                       <x-input-error :messages="$errors->get('last_Name')" class="mt-2" />
                   </div>

                </div>


    <!-- Email Address -->

            <div class="mb-3 position-relative">
                <label for="exampleDropdownFormEmail2 " class="form-label d-flex">Email</label>
                <i class="fa-duotone fa-at position-absolute"></i>
                <input id="email" name="email" :value="old('email')" required autocomplete="username"   type="email"  class="form-control text-left ps-5" placeholder="m.reyad.s@gmail.com" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

                <!-- Password
            <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        -->

                <div class="mb-2 mt-3 position-relative">
                    <label for="exampleDropdownFormEmail2 " class="form-label d-flex">Password</label>
                    <i class="i2 fa-sharp fa-regular fa-eye position-absolute mt-1"></i>
                    <input  id="password"  name="password"  type="password" class="i2 form-control text-left" placeholder="**************" required autocomplete="new-password" />
                </div>
                <p class="d-flex" style="font-size: 12px">
                    8 or more characters, at leadt 1 letter and 1 number
                </p>


                <!-- Confirm Password
            <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>


        -->
        <div class="mt-4">
                <div class="mb-2 mt-3 position-relative">
                    <label for="exampleDropdownFormEmail2 " class="form-label d-flex">Confirm Password</label>
                    <i class="i2 fa-sharp fa-regular fa-eye position-absolute mt-1"></i>
                    <input type="password" id="password_confirmation" class="i2 form-control text-left" placeholder="**************" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
        </div>
                <div class="d-flex">
                    <div class="check">
                        <div class="mb-3">
                            <input type="checkbox" />
                            <label class="form-check-label pe-2" for="dropdownCheck2">
                                I agree with
                            </label>
                        </div>
                    </div>

                    <div>
                        <a class="Forgot" style="color: #44a44c" href="">Terms&Conditions</a>
                    </div>
                </div>

                <div>
                    <x-primary-button class="ml-4"  style="background-color: #44a44c; color: #fff">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a style="color: #44a44c" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                </div>

    </form>

        </div>
    </div>



    <script
      src="https://kit.fontawesome.com/b03f8c0ada.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
