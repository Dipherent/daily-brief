<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>The Daily Brief</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body class="antialiased font-sans border-t-8 border-blue-300">

        <div class="text-gray-800 ">
            <div class="relative container mx-auto flex pb-3 flex-col lg:flex-row  border-b-2 border-blue-300">
                <div class="flex-auto pt-12 md:mr-32">
                    <h1 class="text-5xl md:text-6xl pl-4 sm:px-4 font-thin">The Daily Brief</h1>
                    <h2 class="text-lg md:text-xl font-bold text-blue-800 ml-4 leading-loose">Get daily relavant news straight to your inbox</h2>
                    <p class="pb-8 text-normal text-blue-700 font-light ml-4">We only send you the kind of news you would want to read in 10 minutes or less and focus on what matters</p>
                    
                    <div class="flex mx-2 py-6">
                        <input class="flex-1 rounded rounded-r-none px-4 bg-gray-200 border border-r-0 shadow-lg
                        outline-none focus:border-blue-300" type="email" placeholder="Enter your email address to subscribe">
                        <button class="flex-2 uppercase bg-blue-300 text-white rounded rounded-l-none 
                        py-3 px-6 font-semibold tracking-normal shadow-lg">Join Free</button>
                    </div>
                </div>
                <div class="flex">
                    <img src="/img/news-img.svg" alt="news">
                </div>

            </div>
        </div>
      

        <div class="mt-4 pb-12 h-1/2 w-screen bg-gradient-to-r from-blue-100 via-blue-200 to-blue-100" 
        style="background-image: url(/img/map.svg)">
            <div class="max-w-6xl mx-auto px-4 sm:px-12 lg:px-8 py-4">
                <h2 class="text-blue-700 font-bold text-2xl text-center">"tell me why I would want to subscribe to your daily brief"
                    <span class="font-thin">...you may ask!</span></h2>
                <p class="text-normal text-gray-800 leading-normal font-semibold whitespace-normal px-2 sm:px-20 py-6">
                    This is the age of information, but also the age of disinformation. We spend so much
                    time and efforts to find some credible news abour subjects of interest. 
                </p>

                <p class="text-normal text-gray-800 leading-normal px-2 sm:px-20">
                    The Daily Brief is meant to be your daily digest of credible and important news around
                    you. We browse the media world for you and deliver a short, concise and interesting
                    list of the most relevant stories out there. You will only spend around 10 minutes 
                    reading through this, and you can be assured that you won’t miss anything important.
                </p>
                
                <div class="mt-8 ml-6 px-2 sm:px-20 text-sm leading-5 text-gray-700">
                <!-- Heroicon name: check-circle -->
                    <div class="flex">
                        <svg class="flex-shrink-0 mr-4 h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        Prepared and sent daily in the early morning so you can enjoy reading it with
                        your cup of coffee (you will still enjoy reading this if you don’t dirnk coffee)   
                    </div>    
                    
                    <div class="flex mt-2">
                        <svg class="flex-shrink-0 mr-4 h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                            Covers politics, economy, technology and other news categories so you would
                            not miss on anything important
                    </div>
                    
                    <div class="flex mt-2">
                        <svg class="flex-shrink-0 mr-4 h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        This is abolsutely free of charge, and you you will never be charge for this service
                    </div>   

                </div>
            </div>

                
        </div>


        <div class="h-1/2 w-screen bg-gradient-to-r from-blue-100 via-blue-200 to-blue-100">
            
            <div class="max-w-6xl mx-auto px-4 sm:px-12 lg:px-8 py-4">
                <h2 class="text-blue-700 font-bold text-2xl text-center">"tell me why I would want to subscribe to your daily brief"
                    <span class="font-thin">...you may ask!</span></h2>
                <p class="text-normal text-gray-800 leading-normal font-semibold whitespace-normal px-2 sm:px-20 py-6">
                    Here is a list of the most frequently asked questions by most of our users                
                </p>

                <p class="text-normal text-gray-900 leading-normal font-semibold whitespace-normal px-2 sm:px-20 pt-6 pb-2">
                    How many subscribers do you have?                
                </p>

                <p class="text-normal text-gray-600 leading-normal font-normal whitespace-normal px-2 sm:px-20">
                    At the moment, we have over 1 million readers in our email list, and this list is only growing bigger. 
                    You will become part of a well-informed community by joing today!

                </p>

                <p class="text-normal text-gray-900 leading-normal font-semibold whitespace-normal px-2 sm:px-20 pt-6 pb-2">
                    Why is this free? and how do you make any profit?                
                </p>

                <p class="text-normal text-gray-600 leading-normal font-normal whitespace-normal px-2 sm:px-20">
                    A fair question. The main motive for this project is not money driven at all, but rather a civic duty to 
                    deliver high quality news and information to those who seek it. However, we do get paid. We work 
                    with sponsors who seek exposure through our list. Having said that, you will notice that we put
                    the sponsor’s name at the top of each newsletter we send out.
                </p>

                <p class="text-normal text-gray-900 leading-normal font-semibold whitespace-normal px-2 sm:px-20 pt-6 pb-2">
                    Do you share my email with anyone esle?                
                </p>

                <p class="text-normal text-gray-600 leading-normal font-normal whitespace-normal px-2 sm:px-20">
                    Never. We don’t share your email with anyone else, and we will never do.                
                </p>

                <p class="text-normal text-gray-900 leading-normal font-semibold whitespace-normal px-2 sm:px-20 pt-6 pb-2">
                    Can I cancel my subscription at any time?                
                </p>

                <p class="text-normal text-gray-600 leading-normal font-normal whitespace-normal px-2 sm:px-20">
                    Sure. This is just a service you’re benefiting from, and there is no strings attached. You can unsubscribe 
                    from the list at any point, and your email will be automatically removed. You can also re-subscribe
                    again if you want to. 
                </p>
            </div>
                
        </div>


        <div class="my-8">
            <div class="max-w-6xl mx-auto px-4 sm:px-12 lg:px-8 py-4 ">
                <h2 class="text-6xl font-hairline px-2 sm:px-20">About Us</h2>
                <p class="text-normal text-gray-800 leading-normal font-thin whitespace-normal px-2 sm:px-20 py-2">
                    We are a group of professional journalists who enjoy reading and writing about interesting stuff across
                    many fields. The team consists of highly motivated individuals skilled enough to re-write the news
                    in a fun and interesting way.
                    You can always reach us at: <span class="font-bold">editor@thedailybreifnewsletter.com </span>                
                </p>

                
            </div>
                
        </div>

       <footer class="bg-blue-800 text-white text-sm">
            <div class="container mx-auto py-8 text-center">
                <div>Copyrights 2020. All rights reserved. The Daily Brief Newsletter</div>
            </div>
       </footer>
      
    </body>
</html>
