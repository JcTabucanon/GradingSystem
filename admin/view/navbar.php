<header class="fixed z-30 w-full bg-white border-b border-gray-200">
  <nav class="flex items-center justify-between p-3">
    <div class="flex items-center justify-start">
      <a href="#" class="ml-3 text-xl font-bold text-gray-900 uppercase transition duration-75">Student Grading System</a>
    </div>
    <div class="relative text-left group">
      <button type="button" class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm" id="menu-button" aria-expanded="true" aria-haspopup="true">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
        </svg>
        <span class="flex-1 ml-3 font-semibold uppercase whitespace-nowrap"><?= $user; ?></span>
      </button>
      <ul class="absolute right-0 hidden w-32 pt-2 group-hover:block">
        <li class="overflow-hidden bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
          <a href="../includes/logout.inc.php" class="flex items-center justify-center px-4 py-2 text-sm hover:bg-gray-100">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
            </svg>
            <span class="flex-1 ml-3 whitespace-nowrap">Sign out</span>
          </a>
        </li>
      </ul>
    </div>
  </nav>
</header>