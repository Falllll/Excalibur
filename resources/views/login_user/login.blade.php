<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User | Login</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
</head>
<body class="leading-normal tracking-normal text-indigo-900 m-6 bg-cover bg-fixed" style="background-image: url({{ asset('landing/header.png') }});">
    <div class="h-full">
      <!--Nav-->
      <div class="w-full container mx-auto">
        <div class="w-full flex items-center justify-between">
          <a class="flex items-center text-indigo-800 no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
            Ex<span class="bg-clip-text text-transparent bg-gradient-to-r from-indigo-800 to-green-900">-</span><span class="bg-clip-text text-transparent bg-gradient-to-r from-green-800 via-pink-900 to-purple-900"> Calibur</span>
          </a>

          <div class="flex w-1/2 justify-end content-center">
            <a class="inline-block text-blue-800 no-underline hover:text-pink-800 hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 transform hover:scale-125 duration-300 ease-in-out" href="#">
                Home
            </a>
            <a class="inline-block text-blue-800 no-underline hover:text-pink-800 hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 transform hover:scale-125 duration-300 ease-in-out" href="#">
                Product
            </a>
            <a class="inline-block text-blue-800 no-underline hover:text-pink-800 hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 transform hover:scale-125 duration-300 ease-in-out" href="#">
                About
            </a>
            <a class="inline-block text-blue-800 no-underline hover:text-pink-800 hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 transform hover:scale-125 duration-300 ease-in-out" href="#">
                Contact
            </a>
            <a class="inline-block text-blue-800 no-underline hover:text-pink-800 hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 transform hover:scale-125 duration-300 ease-in-out" href="#">
                Term of service
            </a>
            <span class="inline-block text-blue-900 text-center h-10 p-2 md:h-auto md:p-4">
                |
            </span>
            <a class="inline-block text-pink-800 no-underline hover:text-blue-800 hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 transform hover:scale-125 duration-300 ease-in-out" href="#">
                Login
            </a>
          </div>
        </div>
      </div>

      <!--Main-->
      <div class="pt-10">
        <div class="mx-0 lg:mx-24 lg:mt-10 mt-12 mb-8 lg:mb-20 py-16 px-15 border" >
                <div class="text-center text-white mb-4 text-2xl">YOUR ACCOUNT</div>
                <div>
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-1/2 text-center md:border-r">
                            <div>
                                <div class="mb-5 text-white lg:mb-20 text-2xl">
                                    NEW ACCOUNT
                                </div>
                                <p class="mb-5 lg:mb-36 px-6 lg:px-4 xl:px-12 text-base leading-6 text-white">Create an account to track and manage your orders and view all your personal information.</p>
                                <div class="text-center pt-2 tracking-widest">
                                    <button class="border text-white border-white shadow-xl font-medium px-11 py-1 w-60 tracking-widest">Register</button>
                                </div>
                            </div>
                        </div>
                        <div class="w-full pt-10 lg:pt-0 lg:w-1/2">
                            <div class="text-center text-white text-2xl">
                                LOGIN IN TO YOUR
                            </div>
                            <div class="text-center text-white text-2xl mb-5">
                                EX-CALIBUR ACCOUNT
                            </div>
                            <div class="flex flex-col justify-center md:justify-start my-auto pt-0 md:pt-0 px-8 md:px-16 xl:px-28">
                                <form class="flex flex-col" onsubmit="event.preventDefault();">
                                    <div class="flex flex-col pt-4">
                                        <label for="email" class="text-base text-white">Email</label>
                                        <input type="email" id="email" placeholder="your@email.com" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                                    </div>
                                    <div class="flex flex-col pt-4">
                                        <label for="password" class="text-base text-white">Password</label>
                                        <div class="relative">
                                            <input type="password" id="password" placeholder="Password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                                            <div class="absolute inset-y-0 right-0 top-3">
                                                <span class="cursor-pointer fa fa-eye-slash form-control-feedback view_password px-3"></span> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-between pt-4">
                                    <div>
                                        <label class="inline-flex text-white items-center">
                                            <input type="checkbox" class="form-checkbox">
                                            <span class="ml-2 text-base">Remember me</span>
                                        </label>
                                    </div>
                                    <div class="text-white">
                                        <a href="#forgetpassword" class="text-base hover:underline">Forget Password?</a></p>
                                    </div>
                                </div>
                                    <div class="text-center pt-6 tracking-widest">
                                        <button class="border text-white border-white shadow-xl font-medium px-11 py-1 w-60 tracking-widest">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <!--Footer-->
        <div class="w-full pt-10 pb-6 text-sm text-center md:text-left fade-in">
          <a class="text-gray-500 no-underline hover:no-underline" href="#">&copy; 2021</a>
          <a class="text-gray-500 no-underline hover:no-underline" href="#">Excalibur</a>
        </div>
      </div>
    </div>
  </body>
</html>

<!-- jQuery 3 -->
<script src="{{asset('Login_inv/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('Login_inv/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ asset('Login_inv/plugins/iCheck/icheck.min.js') }}"></script>
<script>
  $(function () {
    $('.view_password').on('click', function(){
      var x = document.getElementById("password");
      if (x.type === "password") {
          x.type = "text";
          $(this).removeClass('fa-eye-slash');
          $(this).addClass('fa-eye');
      } else {
          x.type = "password";
          $(this).removeClass('fa-eye');
          $(this).addClass('fa-eye-slash');
      }
     });
  });
</script>