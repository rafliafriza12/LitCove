<aside id="default-sidebar" class="w-[17%] h-screen transition-transform -translate-x-full sm:translate-x-0 shadow-[2px_0px_8px_#5a5a5a]" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-[#F6EEE0]">
       <ul class="space-y-2">
        <li>
            <div>
                <h1 class=" font-custom text-[40px] px-2 text-[#091F5B]">
                    Lit<span class="text-[#E55B13]">Cove</span>
                </h1>
            </div>
        </li>
          <li>
             <a href="/admin/books/all" class="flex items-center p-2 text-[#091F5B] rounded-lg hover:bg-gray-100 group font-semibold">
               <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75  group-hover:text-gray-900 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                  <path d="M16 14V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 0 0 0-2h-1v-2a2 2 0 0 0 2-2ZM4 2h2v12H4V2Zm8 16H3a1 1 0 0 1 0-2h9v2Z"/>
               </svg>
                <span class="ms-3">Books</span>
             </a>
          </li>
          <li>
             <div class="flex items-center p-2 text-[#091F5B] rounded-lg hover:bg-gray-100 group font-semibold">
               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
                </svg>
               <form action="/admin/update/iklan" method="POST" enctype="multipart/form-data">
                  @csrf
                  <label for="iklan" class="ms-3 cursor-pointer">Update Iklan</label>
                  <input type="file" id="iklan" name="image" hidden onchange="this.form.submit()">
               </form>
             </div>
          </li>
          <li>
             <a href="/admin/manage-user" class="flex items-center p-2 text-[#091F5B] rounded-lg hover:bg-gray-100 group font-semibold">
                <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                    <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                 </svg>
                <span class="ms-3">Users</span>
             </a>
          </li>
          <li>
            <form action="/logout" method="POST">
               @csrf
               <button type="submit" class="flex items-center p-2 text-[#091F5B] rounded-lg hover:bg-gray-100 group  font-semibold">
                  <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75  group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                   </svg>
                  <span class="ms-3">Logout</span>
               </button>
            </form>
          </li>
          
       </ul>
    </div>
 </aside>