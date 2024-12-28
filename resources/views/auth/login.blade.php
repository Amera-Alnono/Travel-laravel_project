<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <title>Travel</title>
    <link rel="stylesheet" href={{ asset('assets/front/css/style2.css')}} />
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&family=Inconsolata:wght@200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
    <div class="container login text-center">
      <div class="card w-50 m-auto p-5 mt-5">
        <div class="mt-5 d-flex justify-content-center text-center">
          <h2>Log In</h2>
        </div>
        <div class="face mt-3 py-2 log mb-3 position-relative border w-100">
            <img
              class="position-absolute me-2 icon-face"
              style="left: 0"
              src={{ asset('assets/front/img/Facebook.png')}}
              alt=""
            />
            <!-- <button class="p-2 border bg-white"></button>  -->
            <span class="logIn">Log in with Facebook</span>
          </div>
          <div class="face mt-3 py-2 log mb-3 position-relative border w-100">
            <img
              class="position-absolute me-2 icon-face"
              style="left: 0"
              src={{ asset('assets/front/img/Google.png')}}
              alt=""
            />
            <span class="logIn">Log in with Google</span>
          </div>
          <div class="d-flex align-items-baseline justify-content-center">
            <div class="line"></div>
            <div>
              <p class="text-black-50 ms-1 me-1" style="font-size: 2px">
                OR sign in width
              </p>
            </div>
            <div class="line"></div>
          </div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address
            <div>

            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        -->

        <div class="mb-3 position-relative">
            <div class="mb-3">
              <img
                class="position-absolute at2 ps-2"
                src={{ asset('assets/front/img/At.png')}}
                alt=""
              />
              <label
                for="exampleDropdownFormEmail2 "
                class="form-label d-flex"
                >Email address</label
              >
              <input
                id="email"
                type="email"
                class="form-control text-left ps-5"
                placeholder="m.reyad.s@gmail.com"
                name="email" :value="old('email')" required autofocus autocomplete="username"
              />
              <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

        <!-- Password  -->
        <div class="mb-3">
            <label
              for="exampleDropdownFormEmail2 "
              class="form-label d-flex"
              >Password</label
            >
            <div class="photo position-relative">
              <i
                class="i2 fa-sharp fa-regular fa-eye position-absolute ms-5"
              ></i>
            </div>
            <input
            id="password"
              type="password"
              class="i2 form-control text-left"
              placeholder="**************"
              name="password"
              required autocomplete="current-password"
            />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
          </div>


        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a   style="color: #44a44c" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3"   style="background-color: #44a44c; color: #fff">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>

