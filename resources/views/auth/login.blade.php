<x-layout>

    <section class="max-w-screen-md mx-auto">
        <div class="mt-7 bg-white md:border md:border-gray-200 rounded-xl shadow-sm dark:bg-neutral-900 md:dark:border-neutral-700">
            <div class="p-4 sm:p-7">
              <div class="text-center">
                <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Sign In</h1>
                <p class="mt-2 text-sm text-gray-600 dark:text-neutral-400">
                  Don't have an account yet?
                  <a href="{{ route('register') }}" class="text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="../examples/html/signin.html">
                    Sign up here
                  </a>
                </p>
              </div>
          
              <div class="mt-5">          
                                
                <!-- Form -->
                <form action="{{route('login')}}" method="POST">

                    @csrf



                  <div class="grid gap-y-4">
                    <!-- Form Group -->
                    <div>
                      <label for="email" class="block text-sm mb-2 dark:text-white">Email</label>
                      <div class="relative">
                        <input
                        type="text"
                        name="email"
                        value="{{old('email')}}"
                        placeholder=""
                        @class([
                          'w-full bg-transparent',
                          'border-red-600' => $errors->has('email'),
                          'placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-500 hover:border-slate-300 shadow-lg shadow-gray-100 ring-4 ring-transparent focus:ring-slate-100'
                        ])
                        />
                        <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                          <svg class="size-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                          </svg>
                        </div>
                      </div>
                      @error('email')
                      <p class="text-xs text-red-600 mt-2" id="email-error">{{$message}}</p>
                      @enderror
                    </div>
                    <!-- End Form Group -->
          
                    <!-- Form Group -->
                    <div>
                      <label for="password" class="block text-sm mb-2 dark:text-white">Password</label>
                      <div class="relative">
                        <input
                        type="password"
                        name="password"
                        placeholder=""
                        @class([
                          'w-full bg-transparent',
                          'border-red-600' => $errors->has('password'),
                          'placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-500 hover:border-slate-300 shadow-lg shadow-gray-100 ring-4 ring-transparent focus:ring-slate-100'
                        ])
                        />
                        <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                          <svg class="size-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                          </svg>
                        </div>
                      </div>
                      @error('password')
                      <p class="text-xs text-red-600 mt-2" id="email-error">{{$message}}</p>
                      @enderror
                    </div>
                    <!-- End Form Group -->

                    @error('failed')
                    <p class="text-xs text-red-600 mt-2" id="email-error">{{$message}}</p>
                    @enderror
          
                    <!-- Checkbox -->
                    <div class="flex items-center">
                      <div class="flex">
                        <input id="remember-me" name="remember" type="checkbox" class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                      </div>
                      <div class="ms-3">
                        <label for="remember" class="text-sm dark:text-white">Remember Me?</label>
                      </div>
                    </div>
                    <!-- End Checkbox -->
          
                    <button data-ripple-light="true" type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Sign up</button>
                  </div>
                </form>
                <!-- End Form -->
              </div>
            </div>
        </div>
    </section>

</x-layout>