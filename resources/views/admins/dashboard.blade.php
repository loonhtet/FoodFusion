
@vite(['resources/css/app.css', 'resources/js/app.js'])

<section class="flex">
    <aside class="w-56 h-screen bg-neutral border-r-2 border-[#fbe8c8] fixed top-0">
        <div class="flex flex-col justify-between h-full">
            <div>
                <h1 class="text-2xl font-bold font-barlow px-2 py-4 text-center">Admin Dashboard</h1>
                <ul class="p-2 mt-12">
                    <li class="w-full px-4 py-4 hover:bg-white duration-300 rounded-md flex items-center text-sm font-montserrat font-semibold gap-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.2" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>

                        <span>
                        Dashboard
                        </span>
                    </li>

                    <li class="w-full px-4 py-4 hover:bg-white duration-300 rounded-md flex items-center text-sm font-montserrat font-semibold gap-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.2" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 0 1 2.25-2.25h7.5A2.25 2.25 0 0 1 18 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 0 0 4.5 9v.878m13.5-3A2.25 2.25 0 0 1 19.5 9v.878m0 0a2.246 2.246 0 0 0-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0 1 21 12v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6c0-.98.626-1.813 1.5-2.122" />
                        </svg>

                        <span>
                        Blogs
                        </span>
                    </li>

                    <li class="w-full px-4 py-4 hover:bg-white duration-300 rounded-md flex items-center text-sm font-montserrat font-semibold gap-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.2" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                        </svg>

                        <span>
                        Users
                        </span>
                    </li>

                    <li class="w-full px-4 py-4 hover:bg-white duration-300 rounded-md flex items-center text-sm font-montserrat font-semibold gap-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.2" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>  

                        <span>
                        Admins
                        </span>
                    </li>
                </ul>
            </div>


   
              
            <button class="py-3 text-white font-montserrat font-semibold bg-danger rounded-md m-2 flex justify-center items-center gap-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.4" stroke="currentColor" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.636 5.636a9 9 0 1 0 12.728 0M12 3v9" />
                </svg>

                <span>Log Out</span>
            </button>

        </div>
    </aside>

    <main class="ms-56 w-full">
        <header>
            <nav class="bg-deep text-white flex justify-between items-center w-full p-4">
                <div class="w-full">
                    <input type="text" placeholder="Search..." class="w-1/3 border px-4 py-2 bg-neutral focus:outline-none focus:scale-95 duration-300 border-[#fbe8c8] text-black rounded-md">
                    <button class="px-4 py-2 text-black bg-secondary rounded-md ml-1 border border-yellow-800" type="submit">
                        Search
                    </button>
                </div>


                <div class="hs-dropdown relative inline-flex">
                    <button id="hs-dropdown-unstyled" type="button" class="hs-dropdown-toggle inline-flex" aria-expanded="false" aria-label="Menu">
                        <img class="w-9 h-9 rounded-full object-cover border-2 border-accent" src="https://images.unsplash.com/photo-1735257676933-828bfbdc03a2?q=80&w=2075&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                    </button>
                  
                    <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 w-40 hidden z-10 mt-2 min-w-40 bg-deep text-white p-2 rounded-lg shadow-xl shadow-gray-500/10" role="menu" aria-labelledby="hs-dropdown-unstyled">
                      <a class="block px-4 py-2 text-sm hover:bg-white hover:text-black rounded-lg duration-300" href="#">Profile</a>
                      <a class="block px-4 py-2 text-sm hover:bg-danger hover:text-white rounded-lg duration-300" href="#">Log Out</a>
                    </div>
                  </div>
            </nav>
        </header>


        <div class="p-4 space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="flex flex-col bg-white border border-t-4 border-t-secondary shadow-sm rounded-xl">
                    <div class="p-4 md:p-5 grid gap-y-3">
                      <h3 class="text-5xl font-barlow font-bold text-black">
                        10
                      </h3>
                      <span class="text-gray-700">Total Admin</span>

                      <a href="#" class="text-sm px-3 py-2 bg-deep text-white w-fit ms-auto rounded-md hover:scale-95 duration-300">Manage</a>
                    </div>
                </div>

                <div class="flex flex-col bg-white border border-t-4 border-t-accent shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:border-t-blue-500 dark:shadow-neutral-700/70">
                    <div class="p-4 md:p-5 grid gap-y-3">
                      <h3 class="text-5xl font-barlow font-bold text-black">
                        10
                      </h3>
                      <span class="text-gray-700">Total User</span>

                      <a href="#" class="text-sm px-3 py-2 bg-deep text-white w-fit ms-auto rounded-md hover:scale-95 duration-300">Manage</a>
                    </div>
                </div>

                <div class="flex flex-col bg-white border border-t-4 border-t-primary shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:border-t-blue-500 dark:shadow-neutral-700/70">
                    <div class="p-4 md:p-5 grid gap-y-3">
                      <h3 class="text-5xl font-barlow font-bold text-black">
                        10
                      </h3>
                      <span class="text-gray-700">Total Receipe</span>

                      <a href="#" class="text-sm px-3 py-2 bg-deep text-white w-fit ms-auto rounded-md hover:scale-95 duration-300">Manage</a>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="flex flex-col col-span-2">
                    <div class="-m-1.5 overflow-x-auto">
                      <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="border rounded-lg overflow-hidden dark:border-neutral-700">
                          <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                            <thead>
                              <tr>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Name</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Age</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Address</th>
                                <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Action</th>
                              </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                              <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">John Brown</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">45</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">New York No. 1 Lake Park</td>
                                <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                  <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400">Delete</button>
                                </td>
                              </tr>
                  
                              <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">Jim Green</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">27</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">London No. 1 Lake Park</td>
                                <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                  <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400">Delete</button>
                                </td>
                              </tr>
                  
                              <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">Joe Black</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">31</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">Sidney No. 1 Lake Park</td>
                                <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                  <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400">Delete</button>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </main>
</section>
