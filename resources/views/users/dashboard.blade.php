<x-layout>

    {{-- <h1>Welcome, {{ auth()->user()->name }}</h1> --}}

    
    <main class="grid grid-cols-4">
        <div class="p-6 border">
            <h1>Brand</h1>
        </div>
        <div class="col-span-2 border">
            <div class="grid grid-cols-4 p-6 border-b">
                <button class="mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                      </svg>                      
                </button>

                <button class="mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                      </svg>                      
                </button>
                
                <button class="mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                      </svg>                      
                </button>

                <button class="mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                      </svg>                      
                </button>
            </div>
        </div>
        <div class="p-6 border">
            <h1>Hello</h1>
        </div>
    </main>

    <main class="grid grid-cols-4">
        <div class="p-6 border">
            <h1>Hello</h1>
        </div>
        <div class="col-span-2 p-6 border">
            <div class="flex items-center gap-x-2">
                <img class="object-cover w-10 h-10 rounded-full aspect-square" src="https://images.unsplash.com/photo-1620436226596-46a359a295bc?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">

                <button class="w-full px-5 py-3 text-left text-gray-500 border rounded-full" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-full-screen-modal" data-hs-overlay="#hs-full-screen-modal">Write Something Yummy...</button>

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
                        <div class="grid h-full grid-cols-2 gap-6 p-6 overflow-y-auto">
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
                                      Pick a file up to 2MB.
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
        </div>
        <div class="p-6 border">
            <h1>Hello</h1>
        </div>
    </main>

    <script src="./node_modules/lodash/lodash.min.js"></script>
    <script src="./node_modules/dropzone/dist/dropzone-min.js"></script><script src="./node_modules/lodash/lodash.min.js"></script>
    <script src="./node_modules/dropzone/dist/dropzone-min.js"></script>

</x-layout>