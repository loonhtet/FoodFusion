<div class="col-span-2 p-6 border border-black/10">
  <div class="flex items-center gap-x-2 mb-6">
      <button class="w-full bg-white px-5 py-3 text-left text-gray-500 border rounded-full" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-full-screen-modal" data-hs-overlay="#hs-full-screen-modal">Write Something Yummy...</button>


      <form action="{{ route('dashboard.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div id="hs-full-screen-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-full-screen-label">
            <div class="h-full max-w-full max-h-full mt-10 transition-all opacity-0 hs-overlay-open:mt-0 hs-overlay-open:opacity-100 hs-overlay-open:duration-500">
                <div class="flex flex-col h-full max-w-full max-h-full bg-beige pointer-events-auto dark:bg-neutral-800">
                    <div class="flex items-center justify-between px-4 py-3 border-b dark:border-neutral-700">
                        <h3 id="hs-full-screen-label" class="font-bold text-gray-800 dark:text-white">
                            Create Recipe
                        </h3>
                        <button type="button" class="inline-flex items-center justify-center text-gray-800 bg-secondary border border-transparent rounded-full size-8 gap-x-2 focus:outline-none" aria-label="Close" data-hs-overlay="#hs-full-screen-modal">
                            <span class="sr-only">Close</span>
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 6 6 18"></path>
                                <path d="m6 6 12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="grid h-full grid-cols-2 gap-6 p-6 overflow-y-auto">
                        <!-- Title -->
                        <div class="pb-6">
                            <label for="title" class="block mb-2 font-medium text-gray-800">Title</label>
                            <input type="text" id="title" name="title" class="w-full px-4 py-3 border-2 bg-transparent border-black" placeholder="Recipe title" value="{{ old('title') }}" required>
                            @error('title')
                            <p class="text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
    
                        <!-- Image Upload -->
                        <div data-hs-file-upload='{
                          "url": "/upload",
                          "extensions": {
                            "default": {
                              "class": "shrink-0 size-5"
                            },
                            "jpg": {
                              "class": "shrink-0 size-5"
                            },
                            "jpeg": {
                              "class": "shrink-0 size-5"
                            },
                            "png": {
                              "class": "shrink-0 size-5"
                            },
                            "gif": {
                              "class": "shrink-0 size-5"
                            }
                          }
                        }'>
                          <template data-hs-file-upload-preview="">
                            <div class="p-3 bg-white border border-solid border-gray-300 rounded-xl dark:bg-neutral-800 dark:border-neutral-600">
                              <div class="mb-1 flex justify-between items-center">
                                <div class="flex items-center gap-x-3">
                                  <span class="size-10 flex justify-center items-center border border-gray-200 text-gray-500 rounded-lg dark:border-neutral-700 dark:text-neutral-500" data-hs-file-upload-file-icon="">
                                    <img class="rounded-lg hidden" data-dz-thumbnail="">
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
                                <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" data-hs-file-upload-progress-bar="">
                                  <div class="flex flex-col justify-center rounded-full overflow-hidden bg-blue-600 text-xs text-white text-center whitespace-nowrap transition-all duration-500 hs-file-upload-complete:bg-green-500" style="width: 0" data-hs-file-upload-progress-bar-pane=""></div>
                                </div>
                                <div class="w-10 text-end">
                                  <span class="text-sm text-gray-800 dark:text-white">
                                    <span data-hs-file-upload-progress-bar-value="">0</span>%
                                  </span>
                                </div>
                              </div>
                            </div>
                          </template>

                          <div class="cursor-pointer p-12 flex justify-center bg-white border border-dashed border-gray-300 rounded-xl dark:bg-neutral-800 dark:border-neutral-600" data-hs-file-upload-trigger="">
                            <div class="text-center">
                              <span class="inline-flex justify-center items-center size-16 bg-gray-100 text-gray-800 rounded-full dark:bg-neutral-700 dark:text-neutral-200">
                                <svg class="shrink-0 size-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                  <polyline points="17 8 12 3 7 8"></polyline>
                                  <line x1="12" x2="12" y1="3" y2="15"></line>
                                </svg>
                              </span>

                              <div class="mt-4 flex flex-wrap justify-center text-sm leading-6 text-gray-600">
                                <span class="pe-1 font-medium text-gray-800 dark:text-neutral-200">
                                  Drop your image here or
                                </span>
                                <span class="bg-white font-semibold text-blue-600 hover:text-blue-700 rounded-lg decoration-2 hover:underline focus-within:outline-none focus-within:ring-2 focus-within:ring-blue-600 focus-within:ring-offset-2 dark:bg-neutral-800 dark:text-blue-500 dark:hover:text-blue-600">browse</span>
                              </div>

                              <p class="mt-1 text-xs text-gray-400 dark:text-neutral-400">
                                Supported formats: JPG, JPEG, PNG, GIF
                              </p>
                            </div>
                          </div>

                          <div class="mt-4 space-y-2 empty:mt-0" data-hs-file-upload-previews=""></div>
                          <input type="file" name="image" class="hidden" accept="image/*">
                          @error('image')
                          <p class="text-sm text-red-500">{{ $message }}</p>
                          @enderror
                        </div>

                        <!-- Paragraph -->
                        <div class="pb-6">
                            <label for="paragraph" class="block mb-2 font-medium text-gray-800">Content</label>
                            <textarea id="paragraph" name="paragraph" class="w-full px-4 py-3 border-2 bg-transparent border-black" rows="6" placeholder="Write your content..." required>{{ old('paragraph') }}</textarea>
                            @error('paragraph')
                            <p class="text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
    
                        <!-- Video Upload -->
                        <div>
                            <label for="video" class="block mb-2 font-medium text-gray-800 dark:text-white">Upload Video</label>
                            <input type="file" id="video" name="video" class="block w-full text-gray-800 dark:text-white" accept="video/*">
                            @error('video')
                            <p class="text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex items-center justify-end px-4 py-3 mt-auto border-t gap-x-2 dark:border-neutral-700">
                        <button type="button" class="inline-flex items-center px-4 py-2 text-sm  border border-black font-medium text-gray-800 rounded-lg shadow-sm gap-x-2 hover:scale-95 duration-300" data-hs-overlay="#hs-full-screen-modal">
                            Close
                        </button>
                        <button type="submit" name="save" class="bg-secondary  text-black hover:scale-95 duration-300 py-2 px-4 border rounded-lg border-secondary">Post</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    
        
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