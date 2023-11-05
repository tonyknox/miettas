<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', "Mietta's") }}</title>

    <!-- Fonts  -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    
    <!-- Scripts  -->
    @vite(['resources/css/app.css', 'resources/css/knox.css','resources/js/app.js','resources/js/modal.js','resources/js/getdata.js'])  
    <script>'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js'</script>
</head>
<body class="text-gray-900 antialiased">
    <div class="">
        <div class="w-screen">
            <div class="mx-8 -mb-20">
                @include('includes.navigation')
            </div>
            <div class="grid md:grid-cols-5  mx-12 gap-4" style="background-color:rgb(255, 254, 252">
            

            <!-- col-2 Page Heading  ------>

            <div class="md:col-span-5 md:col-start-2 md:w-screen mt-8">
                <slot name="header">
                    {{ $header }}
                </slot>
            </div>
        
            <!--new row col 1 sidebar  ---------->

            <div style="background-color:rgb(245, 250, 245);" class="hidden md:block md:start-col-1 -ml-8 pl-4 pr-2 font-bold text-gray-500"> 
                <slot name="sidebar">    
                    {{ $sidebar }}        
                </slot>
            </div> 
            
            <!--col 2 Page Main Content --------->

            <div class="md:col-span-3 max-w-[600px]">
                <slot name="main">
                    {{ $main }}
                </slot>          
            </div>
        </div>

        <!-- new row footer-------------->
        
        <div class="md:colspan-5 mx-6">
            <slot name="footer">
                {{ $footer }}    
                <div class="text-sm font-bold">
                    &copy;Mietta's {{ date('Y') }}
                </div>           
            </slot>
        </div>

    </div>
        

</body>

</html>
