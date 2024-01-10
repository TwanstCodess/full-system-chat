<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tchat</title>

        <!-- Fonts -->
<style>
    body{
  margin:0;
  padding:0;
  font-family:sans-serif;
  background:#000;
  overflow:hidden;
}

.center{
  position:absolute;
  top:50%;
  left:50%;
  transform:prespective(1000px) translate(-50%,-50%);
  transform:skewY(15deg);
  transition:0.5s;
}

.center:hover{
  transform:prespective(1000px) translate(-50%,-50%);
  transform:skewY(0deg);
}

.center h1 span{
  position:absolute;

  transform:translate(-50%,-50%);

  text-transform:uppercase;
  font-size:100px;
  color:#222121bb;
  transform-style:preserve-3d;
  transition:0.8s;
}
.center h1 span:nth-child(1){
  clip-path: polygon(0 0, 100% 0, 100% 45%, 0 45%);
}



.center h1 span:nth-child(2){
  color:#5E17EB;
  transform:translate(-50%,-50%) skewX(-60deg);
  left:-38px;
  clip-path: polygon(0 45%, 100% 45%, 100% 55%, 0 55%);
}

.center h1 span:nth-child(3){
  transform:translate(-50%,-50%) skewY(0deg);
  left:-76px;
  clip-path: polygon(0 55%, 100% 55%, 100% 100%, 0 100%);
}

.center:hover h1 span:nth-child(2),
.center:hover h1 span:nth-child(3){
  transform:translate(-50%,-50%) skewX(0deg);
  left:0;
  color:#222121bb;
}
</style>
        <link rel="stylesheet" href="assets/css/fonts.css">
        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center justify-items-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white mb-0">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="fml-4 font-semibold text-indigo-600 hover:text-indigo-900 dark:text-gray-400 dark:hover:text-white bg-white p-1 mx-1 px-2 shadow-lg shadow-transparent transition-all duration-1000 hover:shadow-purple-700 rounded-lg">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold  text-indigo-600 hover:text-indigo-900 dark:text-gray-400 dark:hover:text-white bg-white p-1 mx-1 px-2 shadow-lg shadow-transparent transition-all duration-1000 hover:shadow-purple-700 rounded-lg">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-indigo-600 hover:text-indigo-900 dark:text-gray-400 dark:hover:text-white bg-white p-1 mx-1 px-2 shadow-lg shadow-transparent transition-all duration-1000 hover:shadow-purple-700 rounded-lg">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <script src="https://cdn.lordicon.com/lordicon.js"></script>
                    <div class="grid justify-items-center">
                        <div class=" text-indigo-500 text-center ">
                            <lord-icon
                                src="https://cdn.lordicon.com/kiynvdns.json"
                                trigger="hover"
                                style="width:250px;height:250px">
                            </lord-icon>

                            <div class="center mt-[180px]">
                                <h1>
                                  <span>Tchat</span>

                                  <span>Tchat</span>
                                  <span>Tchat</span>

                                </h1>
                              </div>
                              <h1>BY:Twanst Codes</h1>
                        </div>

        </div>



    </body>
</html>
