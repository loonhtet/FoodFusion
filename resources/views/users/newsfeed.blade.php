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
                          Create a Receipe
                        </h3>
                        <button type="button" class="inline-flex items-center justify-center text-gray-800 bg-gray-100 border border-transparent rounded-full size-8 gap-x-2 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600" aria-label="Close" data-hs-overlay="#hs-full-screen-modal">
                          <span class="sr-only">Close</span>
                          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                          </svg>
                        </button>
                      </div>
                      <div class="grid h-full grid-cols-2 gap-6 p-6 overflow-y-auto">
                          <div class="h-full">
                              <div id="dropzone" class="flex justify-center h-full p-12 bg-white border border-gray-300 border-dashed cursor-pointer rounded-xl dark:bg-neutral-800 dark:border-neutral-600">
                                  <div class="text-center">
                                      <span class="inline-flex items-center justify-center text-gray-800 bg-gray-100 rounded-full size-16 dark:bg-neutral-700 dark:text-neutral-200">
                                          <svg class="shrink-0 size-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                              <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                              <polyline points="17 8 12 3 7 8"></polyline>
                                              <line x1="12" x2="12" y1="3" y2="15"></line>
                                          </svg>
                                      </span>
                                      <div class="flex flex-wrap justify-center mt-4 text-sm leading-6 text-gray-600">
                                          <span class="font-medium text-gray-800 pe-1 dark:text-neutral-200">
                                              Drop your file here or
                                          </span>
                                          <span class="font-semibold text-blue-600 bg-white rounded-lg hover:text-blue-700 decoration-2 hover:underline focus-within:outline-none focus-within:ring-2 focus-within:ring-blue-600 focus-within:ring-offset-2 dark:bg-neutral-800 dark:text-blue-500 dark:hover:text-blue-600">browse</span>
                                      </div>
                                      <p class="mt-1 text-xs text-gray-400 dark:text-neutral-400">
                                          Pick a file up to 2MB.
                                      </p>
                                  </div>
                                  <input type="file" id="fileInput" class="hidden" accept="image/*">
                              </div>
                              <div id="previewContainer" class="mt-4 space-y-2 empty:mt-0"></div>
                          </div>
                          <div data-hs-file-upload='{
                              "url": "/upload",
                              "extensions": {
                                "default": {
                                  "class": "shrink-0 size-5"
                                },
                                "xls": {
                                  "class": "shrink-0 size-5"
                                },
                                "zip": {
                                  "class": "shrink-0 size-5"
                                },
                                "csv": {
                                  "icon": "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M4 22h14a2 2 0 0 0 2-2V7l-5-5H6a2 2 0 0 0-2 2v4\"/><path d=\"M14 2v4a2 2 0 0 0 2 2h4\"/><path d=\"m5 12-3 3 3 3\"/><path d=\"m9 18 3-3-3-3\"/></svg>",
                                  "class": "shrink-0 size-5"
                                }
                              }
                            }'>
                              <template data-hs-file-upload-preview="" class="h-full">
                                <div class="h-full p-3 border border-gray-300 border-solid rounded-xl dark:bg-neutral-800 dark:border-neutral-600">
                                  <div class="flex items-center justify-between mb-1">
                                    <div class="flex items-center gap-x-3">
                                      <span class="flex items-center justify-center text-gray-500 border border-gray-200 rounded-lg size-10 dark:border-neutral-700 dark:text-neutral-500" data-hs-file-upload-file-icon="">
                                        <img class="hidden rounded-lg" data-dz-thumbnail="">
                                      </span>
                                      <div>
                                        <p class="text-sm font-medium text-gray-800 dark:text-white">
                                          <span class="truncate inline-block max-w-[300px] align-bottom" data-hs-file-upload-file-name=""></span>.<span data-hs-file-upload-file-ext=""></span>
                                        </p>
                                        <p class="text-xs text-gray-500 dark:text-neutral-500" data-hs-file-upload-file-size=""></p>
                                      </div>
                                    </div>
                                    <div class="flex items-center gap-x-2">
                                      <button type="button" class="text-gray-500 hover:text-gray-800 focus:outline-none focus:text-gray-800 dark:text-neutral-500 dark:hover:text-neutral-200 dark:focus:text-neutral-200" data-hs-file-upload-remove="">
                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                          <path d="M3 6h18"></path>
                                          <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                          <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                          <line x1="10" x2="10" y1="11" y2="17"></line>
                                          <line x1="14" x2="14" y1="11" y2="17"></line>
                                        </svg>
                                      </button>
                                    </div>
                                  </div>
                            
                                  <div class="flex items-center gap-x-3 whitespace-nowrap">
                                    <div class="flex w-full h-2 overflow-hidden bg-gray-200 rounded-full dark:bg-neutral-700" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" data-hs-file-upload-progress-bar="">
                                      <div class="flex flex-col justify-center overflow-hidden text-xs text-center text-white transition-all duration-500 bg-blue-600 rounded-full whitespace-nowrap hs-file-upload-complete:bg-green-500" style="width: 0" data-hs-file-upload-progress-bar-pane=""></div>
                                    </div>
                                    <div class="w-10 text-end">
                                      <span class="text-sm text-gray-800 dark:text-white">
                                        <span data-hs-file-upload-progress-bar-value="">0</span>%
                                      </span>
                                    </div>
                                  </div>
                                </div>
                              </template>
                            
                              <div class="flex justify-center h-full p-12 bg-white border border-gray-300 border-dashed cursor-pointer rounded-xl dark:bg-neutral-800 dark:border-neutral-600" data-hs-file-upload-trigger="">
                                <div class="text-center">
                                  <span class="inline-flex items-center justify-center text-gray-800 bg-gray-100 rounded-full size-16 dark:bg-neutral-700 dark:text-neutral-200">
                                    <svg class="shrink-0 size-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                      <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                      <polyline points="17 8 12 3 7 8"></polyline>
                                      <line x1="12" x2="12" y1="3" y2="15"></line>
                                    </svg>
                                  </span>
                            
                                  <div class="flex flex-wrap justify-center mt-4 text-sm leading-6 text-gray-600">
                                    <span class="font-medium text-gray-800 pe-1 dark:text-neutral-200">
                                      Drop your file here or
                                    </span>
                                    <span class="font-semibold text-blue-600 bg-white rounded-lg hover:text-blue-700 decoration-2 hover:underline focus-within:outline-none focus-within:ring-2 focus-within:ring-blue-600 focus-within:ring-offset-2 dark:bg-neutral-800 dark:text-blue-500 dark:hover:text-blue-600">browse</span>
                                  </div>
                            
                                  <p class="mt-1 text-xs text-gray-400 dark:text-neutral-400">
                                    Pick a file up to 20MB.
                                  </p>
                                </div>
                              </div>
                            
                              <div class="mt-4 space-y-2 empty:mt-0" data-hs-file-upload-previews=""></div>
                            </div>


                            <div>
                              <div class="pb-6">
                                  <h1 class="mb-2">Write your title</h1>
                                  <input class="w-full px-4 py-3 border rounded-lg" type="text" placeholder="What's Title">
                              </div>

                              <div class="">
                                  <h1 class="mb-2">Write your content</h1>
                                  <textarea class="block w-full px-4 py-3 text-sm border rounded-lg disabled:pointer-events-none" rows="8" placeholder="Say your secrect..."></textarea>
                              </div>
                            </div>
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


  <script>
      document.addEventListener('DOMContentLoaded', function () {
          const dropzone = document.getElementById('dropzone');
          const fileInput = document.getElementById('fileInput');
          const previewContainer = document.getElementById('previewContainer');

          dropzone.addEventListener('click', () => fileInput.click());

          fileInput.addEventListener('change', (event) => {
              const files = event.target.files;
              previewContainer.innerHTML = '';
              for (const file of files) {
                  const reader = new FileReader();
                  reader.onload = (e) => {
                      const img = document.createElement('img');
                      img.src = e.target.result;
                      img.classList.add('w-full', 'h-56', 'object-cover', 'rounded-lg');
                      previewContainer.appendChild(img);
                  };
                  reader.readAsDataURL(file);
              }
          });

          dropzone.addEventListener('dragover', (event) => {
              event.preventDefault();
              dropzone.classList.add('border-blue-600');
          });

          dropzone.addEventListener('dragleave', () => {
              dropzone.classList.remove('border-blue-600');
          });

          dropzone.addEventListener('drop', (event) => {
              event.preventDefault();
              dropzone.classList.remove('border-blue-600');
              const files = event.dataTransfer.files;
              fileInput.files = files;
              const changeEvent = new Event('change');
              fileInput.dispatchEvent(changeEvent);
          });
      });
  </script>