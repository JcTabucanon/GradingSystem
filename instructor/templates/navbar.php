<nav class="bg-gray-800">
  <div class="px-8 mx-auto max-w-7xl">
    <div class="flex items-center justify-between h-16">
      <div class="flex items-center">
        <div class="flex-shrink-0">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-indigo-400" viewBox="0 0 20 20" fill="currentColor">
            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
          </svg>
        </div>
        <div class="flex items-baseline ml-10  space-x-4">
          <a href="homepage.php" class="px-3 py-2 text-sm font-medium rounded-md <?= ($page == 'Home') ? 'text-white bg-gray-900' : 'text-gray-300 hover:bg-gray-700 hover:text-white'; ?>" aria-current="page">Home</a>
          <a href="course.php" class="px-3 py-2 text-sm font-medium rounded-md <?= ($page == 'Subjects') ? 'text-white bg-gray-900' : 'text-gray-300 hover:bg-gray-700 hover:text-white'; ?>">Course</a>
          <a href="grades.php" class="px-3 py-2 text-sm font-medium rounded-md <?= ($page == 'Grades') ? 'text-white bg-gray-900' : 'text-gray-300 hover:bg-gray-700 hover:text-white'; ?>">Grades</a>
        </div>
      </div>
      <div class="relative px-3 py-2 rounded-md cursor-pointer group">
        <div class="flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <span class="ml-3 text-sm text-white"><?= $_SESSION['name']; ?></span>
        </div>
        <div class="absolute right-0 hidden w-32 pt-3 origin-top-right rounded-md shadow-lg group-hover:block">
          <a href="../includes/logout.inc.php" class="flex px-4 py-2 text-sm text-gray-700 bg-white rounded-md hover:bg-gray-100">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
            </svg>
            <span class="flex-1 ml-3 whitespace-nowrap">Sign out</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>
<header class="bg-gray-900 shadow">
  <div class="px-8 py-6 mx-auto max-w-7xl">
    <h1 class="text-3xl  font-bold text-gray-600"><?= $page; ?></h1>
  </div>
</header>