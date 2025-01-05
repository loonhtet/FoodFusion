  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

  </head>
  <body>
    <main class="grid grid-cols-4 bg-beige">
      <div class="p-6 border border-black/10">
          <h1>Brand</h1>
      </div>
      <div class="col-span-2 border border-black/10">
          <div class="grid grid-cols-5 p-2">
              <button class="mx-auto flex justify-center flex-col items-center gap-y-1 hover:bg-neutral py-2 px-3 rounded-lg">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                  </svg>   
                    
                  <span class="text-xs font-barlow">Cook Book</span>
              </button>

              <button class="mx-auto flex justify-center flex-col items-center gap-y-1 hover:bg-neutral py-2 px-3 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg> 
                  
                <span class="text-xs font-barlow">Search</span>
            </button>

            <button class="mx-auto flex justify-center flex-col items-center gap-y-1 hover:bg-neutral py-2 px-3 rounded-lg">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
              </svg>  
                
              <span class="text-xs font-barlow">Recipe Collection</span>
            </button>

            <button class="mx-auto flex justify-center flex-col items-center gap-y-1 hover:bg-neutral py-2 px-3 rounded-lg">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 3.75V16.5L12 14.25 7.5 16.5V3.75m9 0H18A2.25 2.25 0 0 1 20.25 6v12A2.25 2.25 0 0 1 18 20.25H6A2.25 2.25 0 0 1 3.75 18V6A2.25 2.25 0 0 1 6 3.75h1.5m9 0h-9" />
              </svg>
              
                
              <span class="text-xs font-barlow">Culinary</span>
            </button>

            <button class="mx-auto flex justify-center flex-col items-center gap-y-1 hover:bg-neutral py-2 px-3 rounded-lg">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
              </svg>                
                
              <span class="text-xs font-barlow">Educational </span>
            </button>
          </div>
      </div>
      <div class="p-6 border border-black/10">
        <div class="flex items-center justify-between">
          <h2>Welcome, {{ auth()->user()->name }}</h2>



          <div class="hs-dropdown [--strategy:absolute] [--flip:false] hs-dropdown-example relative inline-flex">
            <button id="hs-dropdown-example" type="button" class="hs-dropdown-toggle" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6.75h16.5" />
              </svg>
            </button>
          
            <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden z-10 mt-2 min-w-40 bg-white border border-black/10 p-2" role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-example">
              <a class="flex items-center gap-x-3.5 py-2 px-3 text-sm text-gray-800 font-montserrat" href="#">
                Profile
              </a>
              <a class="flex items-center gap-x-3.5 py-2 px-3 text-sm bg-danger text-white font-montserrat" href="#">
                Logout
              </a>
            </div>
          </div>
        </div>
        
      </div>
  </main>

  <main class="grid grid-cols-4 bg-beige">
      <div class="p-6 border border-black/10">
          <img class="w-full h-56 object-cover rounded-lg" src="https://images.unsplash.com/photo-1602467777854-37618c991180?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="profile_picture">

          <div class="my-4 hover:bg-neutral p-3 space-y-4 rounded-lg duration-300">
            <div class="flex items-center gap-x-2">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
              </svg>
                
              <h3 class="text-lg font-semibold font-barlow">{{ auth()->user()->name }}</h3>

            </div>

            <div class="flex items-center gap-x-2">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
              </svg>
              <span class="text-sm">{{ auth()->user()->email }}</span>
            </div>

            <a href="#" class="block text-sm w-full p-2 bg-beige text-center border border-black">Edit Profile</a>
          </div>
      </div>
      <div class="col-span-2 p-6 border border-black/10">
          <div class="flex items-center gap-x-2 mb-6">
              <button class="w-full bg-white px-5 py-3 text-left text-gray-500 border rounded-full" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-full-screen-modal" data-hs-overlay="#hs-full-screen-modal">Write Something Yummy...</button>

              <div id="hs-full-screen-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-full-screen-label">
                  <div class="h-full max-w-full max-h-full mt-10 transition-all opacity-0 hs-overlay-open:mt-0 hs-overlay-open:opacity-100 hs-overlay-open:duration-500">
                    <div class="flex flex-col h-full max-w-full max-h-full bg-white pointer-events-auto dark:bg-neutral-800">
                      <div class="flex items-center justify-between px-4 py-3 border-b dark:border-neutral-700">
                        <h3 id="hs-full-screen-label" class="font-bold text-gray-800 dark:text-white">
                          Modal title
                        </h3>
                        <button type="button" class="inline-flex items-center justify-center text-gray-800 bg-gray-100 border border-transparent rounded-full size-8 gap-x-2 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600" aria-label="Close" data-hs-overlay="#hs-full-screen-modal">
                          <span class="sr-only">Close</span>
                          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                          </svg>
                        </button>
                      </div>

                      <div>


                        @include("users.newsfeed")
                    
                      </div>
                    
                      <div class="flex items-center justify-end px-4 py-3 mt-auto border-t gap-x-2 dark:border-neutral-700">
                        <button type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#hs-full-screen-modal">
                          Close
                        </button>
                        <button type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-lg gap-x-2 hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                          Save changes
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                
          </div>


          <div class="space-y-8">
            <div class="p-4 border border-black/10 rounded-lg hover:bg-white duration-300">
              <img class="w-full h-[400px] object-cover rounded-lg" src="https://images.unsplash.com/photo-1482049016688-2d3e1b311543?q=80&w=1910&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">

              <div class="flex justify-between items-center mt-4">
                <div class="flex items-center gap-x-2">
                  <div class="flex items-center gap-x-1">
                    <button>
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                      </svg>                  
                    </button>
  
                    <span class="text-sm">10</span>
                  </div>
  
                  <div class="flex items-center gap-x-1">
                    <button>
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                      </svg>                                   
                    </button>
  
                    <span class="text-sm">5</span>
                  </div>

                </div>

                <div class="flex items-center gap-x-2">
                  <img class="w-5 h-5 rounded-full object-cover" src="https://images.unsplash.com/photo-1602233158242-3ba0ac4d2167?q=80&w=1936&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">

                  <span class="text-xs font-barlow">10 Hours ago</span>
                </div>
              </div>

              <h2 class="my-4 font-bold font-barlow">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus, molestiae?</h2>
              <span class="text-sm font-montserrat line-clamp-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto natus, recusandae inventore ratione mollitia laudantium soluta praesentium optio earum amet ipsam possimus illo non, velit vitae a nesciunt quas! Asperiores?</span>

            </div>

            <div class="p-4 border border-black/10 rounded-lg hover:bg-white duration-300">
              <div class="grid grid-cols-2 gap-1">
                <img class="w-full h-[404px] object-cover rounded-lg row-span-2" src="https://images.unsplash.com/photo-1482049016688-2d3e1b311543?q=80&w=1910&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                <img class="w-full h-[200px] object-cover rounded-lg" src="https://images.unsplash.com/photo-1506084868230-bb9d95c24759?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                <img class="w-full h-[200px] object-cover rounded-lg" src="https://images.unsplash.com/photo-1506084868230-bb9d95c24759?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">


                
              </div>

              <div class="flex justify-between items-center mt-4">
                <div class="flex items-center gap-x-2">
                  <div class="flex items-center gap-x-1">
                    <button>
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                      </svg>                  
                    </button>
  
                    <span class="text-sm">10</span>
                  </div>
  
                  <div class="flex items-center gap-x-1">
                    <button>
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                      </svg>                                   
                    </button>
  
                    <span class="text-sm">5</span>
                  </div>

                </div>

                <div class="flex items-center gap-x-2">
                  <img class="w-5 h-5 rounded-full object-cover" src="https://images.unsplash.com/photo-1602233158242-3ba0ac4d2167?q=80&w=1936&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">

                  <span class="text-xs font-barlow">10 Hours ago</span>
                </div>
              </div>

              <h2 class="my-4 font-bold font-barlow">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus, molestiae?</h2>
              <span class="text-sm font-montserrat line-clamp-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto natus, recusandae inventore ratione mollitia laudantium soluta praesentium optio earum amet ipsam possimus illo non, velit vitae a nesciunt quas! Asperiores?</span>

            </div>
          </div>
      </div>

      <div class="p-6 border border-black/10">
        <input type="text" class="w-full bg-white px-5 py-3 text-left text-gray-500 border rounded-full outline-neutral" placeholder="Search Name">

        <div class="my-4">
          <div class="flex justify-between items-center mb-4">
            <span class="text-sm">Top 5 Chef</span>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            </svg>            
          </div>

          <div class="mt-2 bg-white flex items-center justify-between">
            <div class="flex items-center gap-x-2 p-4">
              <img class="w-5 h-5 rounded-full object-cover" src="https://images.unsplash.com/photo-1602233158242-3ba0ac4d2167?q=80&w=1936&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
  
              <span class="text-xs font-barlow">Username</span>
            </div>

            <a href="#" class="text-xs mr-4 py-1 px-2 rounded-full bg-secondary">Profile</a>
          </div>

          <div class="mt-2 bg-white flex items-center justify-between">
            <div class="flex items-center gap-x-2 p-4">
              <img class="w-5 h-5 rounded-full object-cover" src="https://images.unsplash.com/photo-1602233158242-3ba0ac4d2167?q=80&w=1936&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
  
              <span class="text-xs font-barlow">Username</span>
            </div>

            <a href="#" class="text-xs mr-4 py-1 px-2 rounded-full bg-secondary">Profile</a>
          </div>

          <div class="mt-2 bg-white flex items-center justify-between">
            <div class="flex items-center gap-x-2 p-4">
              <img class="w-5 h-5 rounded-full object-cover" src="https://images.unsplash.com/photo-1602233158242-3ba0ac4d2167?q=80&w=1936&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
  
              <span class="text-xs font-barlow">Username</span>
            </div>

            <a href="#" class="text-xs mr-4 py-1 px-2 rounded-full bg-secondary">Profile</a>
          </div>
        </div>
      </div>
  </main>

  </body>
  </html>
