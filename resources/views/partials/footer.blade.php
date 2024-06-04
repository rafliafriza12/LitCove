

<footer id="footer" class="bg-[#091F5B] ">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
          <div class="mb-6 md:mb-0">
              {{-- <a href="https://flowbite.com/" class="flex items-center">
                 
              </a> --}}
              <h1 class=" font-custom text-[60px] text-[#E55B13]">Lit<span class=" text-white">Cove</span></h1>
          </div>
          <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
              <div>
                  <h2 class="mb-6 text-sm font-semibold  uppercase text-white">Let Us Help You</h2>
                  @auth
                  <ul class=" text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="/profile/setting/{{auth()->user()->id}}" class="hover:underline">Your Account</a>
                      </li>
                      <li>
                          <a href="/cart/{{auth()->user()->id}}" class="hover:underline">Your Orders</a>
                      </li>
                  </ul>
                  @else
                  <ul class=" text-gray-400 font-medium">
                    <li class="mb-4">
                        <a href="/signin" class="hover:underline">Your Account</a>
                    </li>
                    <li>
                        <a href="/signin" class="hover:underline">Your Orders</a>
                    </li>
                </ul>
                  @endauth
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold  uppercase text-white">Contact Us</h2>
                  <ul class=" text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="" class="hover:underline ">081360258927</a>
                      </li>
                      <li>
                          <a href="" class="hover:underline">082321000321</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold uppercase text-white">Address</h2>
                  <ul class=" text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="#" class="hover:underline">Darussalam, Banda Aceh</a>
                      </li>
                      <li>
                          <a href="#" class="hover:underline">Indonesia</a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
      <hr class="my-6  sm:mx-auto border-gray-700 lg:my-8" />
      <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm  sm:text-center text-gray-400">© 2024 <a href="https://flowbite.com/" class="hover:underline">Perdjaka™</a>. All Rights Reserved.
          </span>
      </div>
    </div>
</footer>
