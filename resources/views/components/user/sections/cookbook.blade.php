<div class="col-span-2 p-6 border border-black/10">
  <div class="flex flex-col gap-y-2 mb-6">
      <button class="w-full bg-white px-5 py-3 text-left text-gray-500 border rounded-full" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-full-screen-modal" data-hs-overlay="#hs-full-screen-modal">Write Something Yummy...</button>


      <form action="{{ route('recipe.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if (session('success'))
            <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-full" role="alert">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
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
                        <div class="pb-6 col-span-2">
                            <label for="title" class="block mb-2 font-medium text-gray-800">Title</label>
                            <input type="text" id="title" name="title" class="w-full px-4 py-3 border-2 bg-transparent border-black" placeholder="Recipe title" value="{{ old('title') }}" required>
                            @error('title')
                            <p class="text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
    
                        <!-- Image Upload -->
                        <div class="">
                        <label for="title" class="mb-2 block font-medium text-gray-800">Upload Recipe Image</label>

                          <div class="relative group">
                            <input 
                              type="file" 
                              id="image" 
                              name="image" 
                              accept="image/*" 
                              class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10"
                              onchange="previewImage(this)">
                            <div id="image-upload-area" class="flex items-center justify-center w-full p-6 border-2 border-dashed transition-all duration-300 border-black">
                              <div id="upload-content" class="text-center">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.3" stroke="currentColor" class="size-7 mx-auto">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                              </svg>


                                <p id="file-label" class="mt-2 text-sm text-gray-600">
                                  Drag and drop or click to upload
                                </p>
                                <p class="text-xs text-gray-500 dark:text-gray-500 mt-1">PNG, JPG, or WEBP (max 5MB)</p>
                              </div>
                              <img id="image-preview" class="hidden max-w-full max-h-64 object-cover rounded-lg" src="#" alt="Image Preview">
                            </div>
                            <button 
                              id="remove-image-btn" 
                              type="button" 
                              onclick="removeImage()" 
                              class="hidden absolute top-2 right-2 bg-red-500 text-white rounded-full p-1 hover:bg-red-600 transition-colors">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                              </svg>
                            </button>
                          </div>
                          @error('image')
                          <p class="mt-1 text-xs text-red-600 dark:text-red-400">
                            {{ $message }}
                          </p>
                          @enderror
                        </div>

                        <!-- Video Upload -->
                        <div class="">
                        <label for="video" class="mb-2 block font-medium text-gray-800">Upload Recipe Video</label>

                          <div class="relative group">
                            <input 
                              type="file" 
                              id="video" 
                              name="video" 
                              accept="video/*" 
                              class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10"
                              onchange="previewVideo(this)">
                            <div id="video-upload-area" class="flex items-center justify-center w-full p-6 border-2 border-dashed transition-all duration-300 border-black">
                              <div id="video-upload-content" class="text-center">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.3" stroke="currentColor" class="size-7 mx-auto">
                                <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                              </svg>

                                <p id="video-file-label" class="mt-2 text-sm text-gray-600">
                                  Drag and drop or click to upload
                                </p>
                                <p class="text-xs text-gray-500 mt-1">MP4, WebM, or OGG (max 50MB)</p>
                              </div>
                              <video id="video-preview" class="hidden max-w-full max-h-64 object-cover rounded-lg" controls>
                                Your browser does not support the video tag.
                              </video>
                            </div>
                            <button 
                              id="remove-video-btn" 
                              type="button" 
                              onclick="removeVideo()" 
                              class="hidden absolute top-2 right-2 bg-red-500 text-white rounded-full p-1 hover:bg-red-600 transition-colors">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                              </svg>
                            </button>
                          </div>
                          @error('video')
                          <p class="mt-1 text-xs text-red-600">
                            {{ $message }}
                          </p>
                          @enderror
                        </div>

                        <script>
                          function previewImage(input) {
                            const uploadContent = document.getElementById('upload-content');
                            const imagePreview = document.getElementById('image-preview');
                            const fileLabel = document.getElementById('file-label');
                            const removeImageBtn = document.getElementById('remove-image-btn');

                            if (input.files && input.files[0]) {
                              const reader = new FileReader();

                              reader.onload = function(e) {
                                uploadContent.classList.add('hidden');
                                imagePreview.src = e.target.result;
                                imagePreview.classList.remove('hidden');
                                removeImageBtn.classList.remove('hidden');
                                fileLabel.textContent = input.files[0].name;
                              }

                              reader.readAsDataURL(input.files[0]);
                            }
                          }

                          function removeImage() {
                            const uploadContent = document.getElementById('upload-content');
                            const imagePreview = document.getElementById('image-preview');
                            const fileLabel = document.getElementById('file-label');
                            const removeImageBtn = document.getElementById('remove-image-btn');
                            const imageInput = document.getElementById('image');

                            uploadContent.classList.remove('hidden');
                            imagePreview.classList.add('hidden');
                            removeImageBtn.classList.add('hidden');
                            fileLabel.textContent = 'Drag and drop or click to upload';
                            
                            // Clear the file input
                            imageInput.value = '';
                          }
                        </script>

                        <!-- Video Upload -->
                        <script>
                          function previewVideo(input) {
                            const uploadContent = document.getElementById('video-upload-content');
                            const videoPreview = document.getElementById('video-preview');
                            const fileLabel = document.getElementById('video-file-label');
                            const removeVideoBtn = document.getElementById('remove-video-btn');

                            if (input.files && input.files[0]) {
                              const reader = new FileReader();

                              reader.onload = function(e) {
                                uploadContent.classList.add('hidden');
                                videoPreview.src = e.target.result;
                                videoPreview.classList.remove('hidden');
                                removeVideoBtn.classList.remove('hidden');
                                fileLabel.textContent = input.files[0].name;
                              }

                              reader.readAsDataURL(input.files[0]);
                            }
                          }

                          function removeVideo() {
                            const uploadContent = document.getElementById('video-upload-content');
                            const videoPreview = document.getElementById('video-preview');
                            const fileLabel = document.getElementById('video-file-label');
                            const removeVideoBtn = document.getElementById('remove-video-btn');
                            const videoInput = document.getElementById('video');

                            uploadContent.classList.remove('hidden');
                            videoPreview.classList.add('hidden');
                            removeVideoBtn.classList.add('hidden');
                            fileLabel.textContent = 'Drag and drop or click to upload';
                            
                            // Clear the file input
                            videoInput.value = '';
                          }
                        </script>

                        <!-- Paragraph -->
                        <div class="pb-6 col-span-2">
                            <label for="paragraph" class="block mb-2 font-medium text-gray-800">Description</label>
                            <textarea id="paragraph" name="paragraph" class="w-full px-4 py-3 border-2 bg-transparent border-black" placeholder="Recipe description">{{ old('paragraph') }}</textarea>
                            @error('paragraph')
                            <p class="text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Ingredients Section -->
                        <div class="pb-6 col-span-2">
                            <label class="block mb-2 font-medium text-gray-800">Ingredients</label>
                            <div id="ingredients-container">
                                @if (old('ingredients'))
                                    @foreach (old('ingredients') as $key => $ingredient)
                                        <div class="ingredient-input mb-2 flex items-center gap-2">
                                            <input type="text" name="ingredients[]" class="w-full px-4 py-3 border-2 bg-transparent border-black" placeholder="Enter ingredient..." value="{{ $ingredient }}" required>
                                            <input type="text" name="quantities[]" class="w-1/3 px-4 py-3 border-2 bg-transparent border-black" placeholder="Quantity..." value="{{ old('quantities.'.$key) }}" required>
                                            <button type="button" class="remove-ingredient px-2 py-1 text-red-500 hover:text-red-700" onclick="removeIngredient(this)">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="ingredient-input mb-2 flex items-center gap-2">
                                        <input type="text" name="ingredients[]" class="w-full px-4 py-3 border-2 bg-transparent border-black" placeholder="Enter ingredient..." required>
                                        <input type="text" name="quantities[]" class="w-1/3 px-4 py-3 border-2 bg-transparent border-black" placeholder="Quantity..." required>
                                        <button type="button" class="remove-ingredient px-2 py-1 text-red-500 hover:text-red-700" onclick="removeIngredient(this)">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                @endif
                            </div>
                            <button type="button" onclick="addIngredient()" class="mt-2 px-4 py-2 bg-secondary text-sm rounded-lg hover:bg-secondary/80">Add Ingredient</button>
                            @error('ingredients.*')
                                <p class="text-sm text-red-500">{{ $message }}</p>
                            @enderror
                            @error('quantities.*')
                                <p class="text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Instructions Section -->
                        <div class="pb-6 col-span-2">
                            <label class="block mb-2 font-medium text-gray-800">Instructions</label>
                            <div id="instructions-container">
                                @if (old('instructions'))
                                    @foreach (old('instructions') as $instruction)
                                        <div class="instruction-input mb-2 flex items-center gap-2">
                                            <input type="text" name="instructions[]" class="w-full px-4 py-3 border-2 bg-transparent border-black" placeholder="Enter instruction step..." value="{{ $instruction }}" required>
                                            <button type="button" class="remove-instruction px-2 py-1 text-red-500 hover:text-red-700" onclick="removeInstruction(this)">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="instruction-input mb-2 flex items-center gap-2">
                                        <input type="text" name="instructions[]" class="w-full px-4 py-3 border-2 bg-transparent border-black" placeholder="Enter instruction step..." required>
                                        <button type="button" class="remove-instruction px-2 py-1 text-red-500 hover:text-red-700" onclick="removeInstruction(this)">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                @endif
                            </div>
                            <button type="button" onclick="addInstruction()" class="mt-2 px-4 py-2 bg-secondary text-sm rounded-lg hover:bg-secondary/80">Add Instruction</button>
                            @error('instructions.*')
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
    
        

      @props(['recipes' => []])  

      <div class="space-y-6">
        @foreach($recipes as $recipe)
        <div class="flex flex-col border-2 border-dashed border-gray-300 bg-transparent rounded-lg hover:bg-neutral hover:border-accent duration-300">
          @if($recipe->image)
            <img class="w-full h-[300px] rounded-t-lg object-cover" src="{{ asset($recipe->image) }}" alt="{{ $recipe->title }}">
          @else
            <div class="w-full h-[300px] rounded-t-lg bg-gray-200 flex items-center justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 text-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
              </svg>
            </div>
          @endif
          <div class="p-4 md:p-5">
            <h3 class="text-xl font-bold text-gray-800 dark:text-white font-barlow">
              {{ $recipe->title }}
            </h3>
            <p class="mt-2 text-gray-600 font-montserrat text-sm line-camp-3">
              {{ $recipe->paragraph }}
            </p>
            <div class="mt-4 flex items-center justify-between">
              <div class="flex items-center">
                @if($recipe->user->profile_image)
                  <img class="w-8 h-8 rounded-full object-cover mr-2" src="{{ asset($recipe->user->profile_image) }}" alt="{{ $recipe->user->name }}">
                @else
                  <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-gray-400">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>
                  </div>
                @endif
                <span class="text-sm text-gray-600">{{ $recipe->user->name }}</span>
              </div>
              <div class="flex items-center text-xs text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                {{ $recipe->updated_at->diffForHumans() }}
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
  </div>
</div>

<script>
    function addIngredient() {
        const container = document.getElementById('ingredients-container');
        const newInput = document.createElement('div');
        newInput.className = 'ingredient-input mb-2 flex items-center gap-2';
        newInput.innerHTML = `
            <input type="text" name="ingredients[]" class="w-full px-4 py-3 border-2 bg-transparent border-black" placeholder="Enter ingredient..." required>
            <input type="text" name="quantities[]" class="w-1/3 px-4 py-3 border-2 bg-transparent border-black" placeholder="Quantity..." required>
            <button type="button" class="remove-ingredient px-2 py-1 text-red-500 hover:text-red-700" onclick="removeIngredient(this)">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        `;
        container.appendChild(newInput);
    }

    function removeIngredient(button) {
        const input = button.parentElement;
        if (document.getElementsByClassName('ingredient-input').length > 1) {
            input.remove();
        }
    }

    function addInstruction() {
        const container = document.getElementById('instructions-container');
        const newInput = document.createElement('div');
        newInput.className = 'instruction-input mb-2 flex items-center gap-2';
        newInput.innerHTML = `
            <input type="text" name="instructions[]" class="w-full px-4 py-3 border-2 bg-transparent border-black" placeholder="Enter instruction step..." required>
            <button type="button" class="remove-instruction px-2 py-1 text-red-500 hover:text-red-700" onclick="removeInstruction(this)">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        `;
        container.appendChild(newInput);
    }

    function removeInstruction(button) {
        const input = button.parentElement;
        if (document.getElementsByClassName('instruction-input').length > 1) {
            input.remove();
        }
    }
</script>