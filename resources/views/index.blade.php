<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="leading-normal tracking-normal text-indigo-900 m-6 bg-cover bg-fixed" style="background-image: url('landing/header.png');">
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
      <div class="container pt-24 md:pt-36 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <!--Left Col-->
        <div class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden">
          <h1 class="my-4 text-3xl md:text-5xl text-white opacity-75 font-bold leading-tight text-center md:text-left">
            Practice
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">
                makes perfect
            </span>
          </h1>
          <p class="leading-normal text-base md:text-2xl mb-8 text-center md:text-left">
            We are a company that develops a website by combining a dedicated team with a friendly face
          </p>

          <form class="bg-gray-900 opacity-75 w-full shadow-lg rounded-lg px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
                <h3 class="block text-blue-300 py-2 font-bold mb-2">CONTACT US</h3>
              <input
                class="shadow appearance-none border rounded w-full p-3 text-gray-700 leading-tight focus:ring transform transition hover:scale-105 duration-300 ease-in-out mb-5"
                type="text"
                placeholder="Your name"
              />
              <input
                class="shadow appearance-none border rounded w-full p-3 text-gray-700 leading-tight focus:ring transform transition hover:scale-105 duration-300 ease-in-out mb-5"
                type="text"
                placeholder="Your email"
              />
              <textarea class="shadow appearance-none border rounded w-full p-3 text-gray-700 leading-tight focus:ring transform transition hover:scale-105 duration-300 ease-in-out "
              name=""
              id="" cols="30" rows="10"
              placeholder="Your Message"></textarea>
            </div>

            <div class="flex items-center justify-between pt-4">
              <button
                class="bg-gradient-to-r from-purple-800 to-green-500 hover:from-pink-500 hover:to-green-500 text-white font-bold py-2 px-4 rounded focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
                type="button"
              >
                Send
              </button>
            </div>
          </form>
        </div>

        <!--Right Col-->
        <div class="w-full xl:w-3/5 p-12 overflow-hidden">
          <img class="mx-auto w-full md:w-4/5 transform -rotate-6 transition hover:scale-105 duration-700 ease-in-out hover:rotate-6" src="landing/macbook.svg" />
        </div>

        <!--Footer-->
        <div class="w-full pt-16 pb-6 text-sm text-center md:text-left fade-in">
          <a class="text-gray-500 no-underline hover:no-underline" href="#">&copy; 2021</a>
          <a class="text-gray-500 no-underline hover:no-underline" href="#">Excalibur</a>
        </div>
      </div>
    </div>
  </body>
</html>