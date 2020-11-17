<html>
    <head>
        <title>Bookingsunny.com | Coming Soon</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/mobile.css') }}">
        <link rel="stylesheet" href="{{ asset('css/tablet.css') }}">
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
        <style>
            body{
                font-family: 'Poppins', sans-serif;
            
            }
        </style>
    </head>
    <body class="text-blue-darkest">
        <div class="w-100">
            <div class="w-100 relative z-999 bg-white">
                <div class="w-90 flex py-3 mx-auto">
                    <div class="w-30">
                        <img class="w-35" src="{{ asset('images/booking_sunny_logo.png') }}">
                    </div>  
                    <div class="w-40 text-center pt-2">
                        <ul class="list text-sm inline-block">
                            <li class="mx-3">Flights</li>
                            <li class="mx-3">Hotels</li>
                            <li class="mx-3">Team</li>
                            <li class="mx-3">Contact us</li>
                        </ul>
                        
                    </div>  
                    <div class="w-30 text-right pr-4">
                        <ul class="list text-sm pt-2">
                            <li class=""><a class="btn border-orange" href="tel:+250784112426">Call Us On +250 784 112 426</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="w-100">
                <div class="w-90 mx-auto flex">
                    <div class="w-40 ">
                        <div class="mt-24">
                            <h1 class="text-xs font-bold mt-4 text-orange">STAY TUNED</h1>
                            <p class="font-bold text-4xl -mt-5">We Are Coming Soon ...</p>
                            <p class="-mt-6 text-sm"><span class="font-bold text-orange">Bookingsunny.com</span> Find the Best Prices & Join Others Who Travelled With Us! Compare Travel Options With 480+ Providers. Book Your Dream Destination & Save Money!</p>
                            
                            @if(session()->has('success'))
                                <div class="bg-green-light text-sm my-2 text-white www.bookingsunny.comw-95 px-3 py-3">
                                    {{ session()->get('success') }}
                                </div>
                            @endif

                            <div>
                                <form method="POST" action="{{ route('email.store') }}">
                                    @csrf
                                    <div class="w-100 flex">
                                        
                                            <div class="w-70">
                                                
                                                    <input class="form-input shadow-inner py-2 rounded-none" name="email" placeholder="type in your email" type="email">
                                                
                                            </div>
                                            <div class="w-20">
                                                    <button class="btn text-white bg-orange text-sm" style="padding: 10px 10px 9.5px 10px">Notify Me <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                                      </svg></button>
                                            </div>
                                        
                                        
                                    </div>
                                </form>
                            </div>
                            <div class="mt-10">
                                <span class="text-orange text-sm font-bold">Remaining Days</span>
                                <p class="text-3xl -mt-1" id="demo"></p>
                            </div>
                            <div class="pt-8 absolute b-2">
                                <p class="text-xs ">© 2020 Sunny Voyage - All Right Reserved</p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="w-60 relative">

                        <img class="absolute  z-0 r-0 w-80" src="{{ asset('images/wallpaper.svg') }}">

                    </div>

                </div>
            </div>
        </div>


    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Dec 1, 2020 15:37:25").getTime();
        
        // Update the count down every 1 second
        var x = setInterval(function() {
        
            // Get today's date and time
            var now = new Date().getTime();
            
            // Find the distance between now and the count down date
            var distance = countDownDate - now;
            
            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
            // Output the result in an element with id="demo"
            document.getElementById("demo").innerHTML = days + "days " + hours + "h "
            + minutes + "m " + seconds + "s ";
            
            // If the count down is over, write some text 
            if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);
        </script>
            
    </body>
</html>