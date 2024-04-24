<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Khmer:wght@100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js" integrity="sha512-EKWWs1ZcA2ZY9lbLISPz8aGR2+L7JVYqBAYTq5AXgBkSjRSuQEGqWx8R1zAX16KdXPaCjOCaKE8MCpU0wcHlHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/heroes/">
    
    <style>
        * {
            box-sizing: border-box;
            font-family: "Noto Serif Khmer", serif;
            font-optical-sizing: auto;
            font-weight: 600;
            font-style: normal;
            font-variation-settings:
                "wdth" 100;
        }

        .toast-top-center {
            position: absolute;
            top: 20px;
            padding: 50px;
            color: red;
        }

        .custom-card {
            padding: 20px;
        }

        .myAnimation {
            animation-name: myFun;
            animation-duration: 4s;
        }

        @keyframes myFun {
            0% {
                background-color: #198754;
                color: #f8f9fa !important;
            }
            100% { 
                background-color: #fff;
            }
        }

        .circle {
            position: absolute;
            width: 20px;
            height: 20px;

            &:before {
                content: "";
                position: relative;
                display: block;
                width: 250%;
                height: 250%;
                box-sizing: border-box;
                margin-left: -75%;
                margin-top: -75%;
                border-radius: 45px;
                background-color: red;
                animation: pulse 1.25s cubic-bezier(0.215, 0.61, 0.355, 1) infinite;
            }

            &:after {
                content: "";
                position: absolute;
                left: 0;
                top: 0;
                display: block;
                width: 100%;
                height: 100%;
                background-color: red;
                border-radius: 50px;
                animation: circle 1.25s cubic-bezier(0.455, 0.03, 0.515, 0.955) -0.4s infinite;
            }
            }

            @keyframes pulse {
                0% {
                    transform: scale(0.33);
                }
                80%,
                100% {
                    opacity: 0;
                }
            }

            @keyframes circle {
                0% {
                    transform: scale(0.8);
                }
                50% {
                    transform: scale(1);
                }
                100% {
                    transform: scale(0.8);
                }
            }

        /* Text loading */
        .text-container {
            height: 100vh;
            background: #773d8c; 
            display: flex;
            justify-content: center;
            align-items: center;
            }

        .loading {
            display: flex;
            flex-direction: row;
        }
        .loading__letter {
            font-size: 24px;
            font-weight: normal;
            letter-spacing: 4px;
            text-transform: uppercase;
            font-family: "Audiowide";
            color: #fff;
            animation-name: bounce;
            animation-duration: 2s;
            animation-iteration-count: infinite;
        }

        .loading__letter:nth-child(2) {
            animation-delay: .1s;	
        }
        .loading__letter:nth-child(3) {
            animation-delay: .2s;
        }
        .loading__letter:nth-child(4) {
            animation-delay: .3s;	
        }
        .loading__letter:nth-child(5) {
            animation-delay: .4s;
        }
        .loading__letter:nth-child(6) {
            animation-delay: .5s;	
        }
        .loading__letter:nth-child(7) {
            animation-delay: .6s;
        }
        .loading__letter:nth-child(8) {
            animation-delay: .8s;
        }
        .loading__letter:nth-child(9) {
            animation-delay: 1s;
        }
        .loading__letter:nth-child(10) {
            animation-delay: 1.2s;
        }

        @keyframes bounce {
            0% {
                transform: translateY(0px)
            }
            40% {
                transform: translateY(-40px);
            }
            80%,
            100% {
                transform: translateY(0px);
            }
        }


        @media (max-width: 700px) {
            .loading__letter {
                font-size: 50px;
            }
        }

        @media (max-width: 340px) {
            .loading__letter {
                font-size: 40px;
            }
        }


    </style>

</head>
<body class="bg-light">

    <input id="eventId" type="hidden" name="" value={{ $event->id }}>

    <header>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <div class="circle"></div>
                    {{-- <span >Live Updating...</span> --}}
                    <div class="text-loading" style="padding-left: 1.5em">
                        <div class="loading">
                          <div class="loading__letter">L</div>
                          <div class="loading__letter">i</div>
                          <div class="loading__letter">v</div>
                          <div class="loading__letter">e</div>
                          <div class="loading__letter">.</div>
                          <div class="loading__letter">.</div>
                          <div class="loading__letter">.</div>
                        </div>
                    </div>
                </a>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a href={{ route('guests.index', $event->id) }} type="button" class="btn btn-primary btn-sm px-4 gap-3">Go Back</a>
                    {{-- <button type="button" class="btn btn-outline-secondary btn-sm px-4">Close</button> --}}
                </div>
            </div>
        </div>
    </header>

    <main>
        {{-- <h1 class="visually-hidden">Heroes examples</h1> --}}

        <div class="px-4 py-4 text-center bg-primary text-light">
            <img class="d-block mx-auto mb-4" src={{ asset('assets/img/logo.png')}} alt="" width="100" height="100">
            <h1 class="display-5 fw-bold">{{ $event->name  }} នៅ {{ $event->event_date }}</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead">ចំនួនភ្ងៀវចូលរួម</p>
                <span><span id="guestCount" class="display-4 fw-bold">{{ $guestCount }}</span> នាក់</span>
            </div>
        </div>
      
        <div class="container">
            <div class="row px-4">
                <div class="my-3 p-3 bg-body rounded shadow-sm" style="max-width: 920px; margin: auto">
                    <h6 class="border-bottom pb-2 mb-0">Recent updates</h6>

                    <div id="realTime" style="font-size: 18px">

                        @foreach ($guests as $guest)
                            <div class="d-flex pt-3 border-bottom custom-card">
                                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
                                
                                <div class="mb-0 small lh-sm w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">{{ $guest->fullname }}</strong>
                                        <span>ចងដៃចំនួន <span class="text-info">{{$guest->amount}}@if($guest->currency == "USD")$@else៛@endif
                                            </span>, តាមរយៈ​: <span class="text-info">{{ $guest->payment_method}}</span> </span>
                                    </div>
                                    <span class="d-block">អាសយដ្ឋាន: {{ $guest->address }}
                                    </span>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    <small class="d-block text-end mt-3">
                        <a href={{ route('guests.index', $event->id) }} >View all</a>
                    </small>
                </div>
                
            </div>
        </div>
        

    </main>
    

    <script>

        let eventId  = document.getElementById("eventId").value;
        let guestCount  = parseInt(document.getElementById("guestCount").innerHTML);

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('865bd7a25d7eb9d9741d', {
            cluster: 'ap1'
        });

        var channel = pusher.subscribe('myGuest-channel');
            channel.bind('myGuest-event', function(data) {
                // alert(JSON.stringify(data));

                if (data.guest.event_id == eventId) {
                    
                    toastr.options = {
                        "closeButton": true,
                        "debug": false,
                        "newestOnTop": true,
                        "progressBar": true,
                        "positionClass": "toast-top-center",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    }
                    toastr["success"](`${data.guest.fullname} ចងដៃចំនួន ${data.guest.amount}$ ❤️`);

                    const El = document.getElementById("realTime");
                    const newEl = document.createElement("div");
                    newEl.className = 'd-flex pt-3 border-bottom custom-card myAnimation';
                    // newEl.appendChild(document.createTextNode("Some text"));
                    newEl.innerHTML = `
                            <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
                            
                            <div class="mb-0 small lh-sm w-100">
                                <div class="d-flex justify-content-between">
                                    <strong class="text-gray-dark">${data.guest.fullname}</strong>
                                    <span>ចងដៃចំនួន <span class="text-info">${data.guest.amount}${data.guest.currency == "USD"? "$" : "៛"}
                                        </span>, តាមរយៈ​: <span class="text-info">${data.guest.payment_method}</span> </span>
                                </div>
                                <span class="d-block">អសយដ្ឋាន: ${data.guest.address}</span>
                            </div>`;
                    
                    El.prepend(newEl);

                    // lastId = lastId + 1;

                    document.getElementById("guestCount").innerHTML = guestCount + 1;
                }
        });
    </script>
</body>
</html>

