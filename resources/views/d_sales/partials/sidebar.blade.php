<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-60 h-screen pt-20 transition-transform -translate-x-full bg-slate-100 border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-slate-100 dark:bg-gray-800">
       <ul class="space-y-2 font-medium">
          <li>
             <a href="/dashboard" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                <span class="ml-3">Dashboard</span>
             </a>
          </li>
          {{-- {{ ($active === "all") ? 'md:text-blue-500' : 'dark:text-white' }} --}}
          {{-- <li>
            <button type="button" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-prospek" data-collapse-toggle="dropdown-prospek">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c10 0 18.8-4.9 24.2-12.5l-99.2-99.2c-14.9-14.9-23.3-35.1-23.3-56.1v-33c-15.9-4.7-32.8-7.2-50.3-7.2H178.3zM384 224c-17.7 0-32 14.3-32 32v82.7c0 17 6.7 33.3 18.7 45.3L478.1 491.3c18.7 18.7 49.1 18.7 67.9 0l73.4-73.4c18.7-18.7 18.7-49.1 0-67.9L512 242.7c-12-12-28.3-18.7-45.3-18.7H384zm24 80a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z"/></svg>
                  <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Customer Prospek</span>
                  <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <ul id="dropdown-prospek" class="hidden py-2 space-y-2">
                  <li>
                     <a href="/dashboard/prospek/create" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Input Prospek</a>
                  </li>
                  <li>
                     <a href="/dashboard/prospek/" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Data Prospek</a>
                  </li>
            </ul>
         </li> --}}
         <li>
            <a href="/dashboard/prospek/" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c10 0 18.8-4.9 24.2-12.5l-99.2-99.2c-14.9-14.9-23.3-35.1-23.3-56.1v-33c-15.9-4.7-32.8-7.2-50.3-7.2H178.3zM384 224c-17.7 0-32 14.3-32 32v82.7c0 17 6.7 33.3 18.7 45.3L478.1 491.3c18.7 18.7 49.1 18.7 67.9 0l73.4-73.4c18.7-18.7 18.7-49.1 0-67.9L512 242.7c-12-12-28.3-18.7-45.3-18.7H384zm24 80a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z"/></svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Customer Prospek</span>
            </a>
         </li>
         <li>
            <a href="/dashboard/closing/" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM625 177L497 305c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L591 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/></svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Customer Closing</span>
            </a>
         </li>
         <li>
            <a href="/dashboard/brosur/" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                <svg viewBox="0 0 640 512" aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M64 464c-8.8 0-16-7.2-16-16V64c0-8.8 7.2-16 16-16H224v80c0 17.7 14.3 32 32 32h80V448c0 8.8-7.2 16-16 16H64zM64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V154.5c0-17-6.7-33.3-18.7-45.3L274.7 18.7C262.7 6.7 246.5 0 229.5 0H64zm56 256c-13.3 0-24 10.7-24 24s10.7 24 24 24H264c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24H264c13.3 0 24-10.7 24-24s-10.7-24-24-24H120z"/></svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Sebaran Brosur</span>
            </a>
         </li>
          <li>
             <a href="/dashboard/odp/" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                <svg viewBox="0 0 640 512" aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M16 144a144 144 0 1 1 288 0A144 144 0 1 1 16 144zM160 80c8.8 0 16-7.2 16-16s-7.2-16-16-16c-53 0-96 43-96 96c0 8.8 7.2 16 16 16s16-7.2 16-16c0-35.3 28.7-64 64-64zM128 480V317.1c10.4 1.9 21.1 2.9 32 2.9s21.6-1 32-2.9V480c0 17.7-14.3 32-32 32s-32-14.3-32-32z"/></svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Daftar ODP</span>
             </a>
          </li>
          <ul class="pt-4 mt-4 space-y-2 font-medium border-t border-gray-200 dark:border-gray-700">
       </ul>
    </div>
 </aside>
