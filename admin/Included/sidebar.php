<aside id="sidebar" class="fixed top-0 left-0 z-20 flex flex-col flex-shrink-0 w-64 h-full pt-16" aria-label="Sidebar">
  <div class="relative flex flex-col flex-1 min-h-0 pt-0 bg-white border-r border-gray-200">
    <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
      <div class="flex-1 px-3 space-y-1 bg-white divide-y">
        <ul class="pb-2 space-y-2">
          <li>
            <a href="../view/dashboard.php" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg <?= ($currentpage == 'Dashboard') ? 'bg-gray-100' : 'hover:bg-gray-100 group'; ?>">
              <svg xmlns=" http://www.w3.org/2000/svg" class="w-5 h-5 duration-75 <?= ($currentpage == 'Dashboard') ? 'group-hover:text-gray-900' : 'text-gray-500'; ?>" viewBox="0 0 20 20" fill="currentColor">
                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z" />
                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z" />
              </svg>
              <span class="flex-1 ml-3 whitespace-nowrap">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="../view/students.php" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg <?= ($currentpage == 'Students') ? 'bg-gray-100' : 'hover:bg-gray-100 group'; ?>">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 duration-75 <?= ($currentpage == 'Students') ? 'group-hover:text-gray-900' : 'text-gray-500'; ?>" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
              </svg>
              <span class="flex-1 ml-3 whitespace-nowrap">Students</span>
            </a>
          </li>
          <li>
            <a href="../view/instructor.php" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg <?= ($currentpage == 'Instructors') ? 'bg-gray-100' : 'hover:bg-gray-100 group'; ?>">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 duration-75 <?= ($currentpage == 'Instructors') ? 'group-hover:text-gray-900' : 'text-gray-500'; ?>" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" />
                <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
              </svg>
              <span class="flex-1 ml-3 whitespace-nowrap">Instructors</span>
            </a>
          </li>
          <li>
            <a href="../view/course.php" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg <?= ($currentpage == 'Subjects') ? 'bg-gray-100' : 'hover:bg-gray-100 group'; ?>">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 duration-75 <?= ($currentpage == 'Subjects') ? 'group-hover:text-gray-900' : 'text-gray-500'; ?>" viewBox="0 0 20 20" fill="currentColor">
                <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z" />
              </svg>
              <span class="flex-1 ml-3 whitespace-nowrap">Course</span>
            </a>
          </li>
          <li>
            <a href="../view/class.php" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg <?= ($currentpage == 'Class') ? 'bg-gray-100' : 'hover:bg-gray-100 group'; ?>">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 duration-75 <?= ($currentpage == 'Class') ? 'group-hover:text-gray-900' : 'text-gray-500'; ?>" viewBox="0 0 20 20" fill="currentColor">
                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd" />
              </svg>
              <span class="flex-1 ml-3 whitespace-nowrap">Class</span>
            </a>
          </li>
          <li>
            <a href="../view/year.php" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg <?= ($currentpage == 'Academic Year') ? 'bg-gray-100' : 'hover:bg-gray-100 group'; ?>">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 duration-75 <?= ($currentpage == 'Academic Year') ? 'group-hover:text-gray-900' : 'text-gray-500'; ?>" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
              </svg>
              <span class="flex-1 ml-3 whitespace-nowrap">Academic Year</span>
            </a>
          </li>
          <li>
          <li>
            <a href="../view/grade-level.php" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg <?= ($currentpage == 'Grade Level') ? 'bg-gray-100' : 'hover:bg-gray-100 group'; ?>">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 duration-75 <?= ($currentpage == 'Grade Level') ? 'group-hover:text-gray-900' : 'text-gray-500'; ?>" viewBox="0 0 20 20" fill="currentColor">
                <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
              </svg>
              <span class="flex-1 ml-3 whitespace-nowrap">Program</span>
            </a>
          </li>
          <li>
            <a href="../view/department.php" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg <?= ($currentpage == 'Department') ? 'bg-gray-100' : 'hover:bg-gray-100 group'; ?>">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 duration-75 <?= ($currentpage == 'Department') ? 'group-hover:text-gray-900' : 'text-gray-500'; ?>" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10.496 2.132a1 1 0 00-.992 0l-7 4A1 1 0 003 8v7a1 1 0 100 2h14a1 1 0 100-2V8a1 1 0 00.496-1.868l-7-4zM6 9a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1zm3 1a1 1 0 012 0v3a1 1 0 11-2 0v-3zm5-1a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1z" clip-rule="evenodd" />
              </svg>
              <span class="flex-1 ml-3 whitespace-nowrap">Department</span>
            </a>
          </li>
          <li>
            <a href="../view/rooms.php" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg <?= ($currentpage == 'Rooms') ? 'bg-gray-100' : 'hover:bg-gray-100 group'; ?>">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 duration-75 <?= ($currentpage == 'Rooms') ? 'group-hover:text-gray-900' : 'text-gray-500'; ?>" viewBox="0 0 20 20" fill="currentColor">
                <path d="M2 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1H3a1 1 0 01-1-1V4zM8 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1H9a1 1 0 01-1-1V4zM15 3a1 1 0 00-1 1v12a1 1 0 001 1h2a1 1 0 001-1V4a1 1 0 00-1-1h-2z" />
              </svg>
              <span class="flex-1 ml-3 whitespace-nowrap">Rooms</span>
            </a>
          </li>
          <li>
            <a href="../view/users.php" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg <?= ($currentpage == 'Users') ? 'bg-gray-100' : 'hover:bg-gray-100 group'; ?>">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 duration-75 <?= ($currentpage == 'Users') ? 'group-hover:text-gray-900' : 'text-gray-500'; ?>" viewBox="0 0 20 20" fill="currentColor">
                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
              </svg>
              <span class="flex-1 ml-3 whitespace-nowrap">Users</span>
            </a>
          </li>
        </ul>
        <div class="pt-2 space-y-2">
          <a href="ourteam.php" class="flex items-center p-2 text-base font-normal text-gray-900 duration-75 rounded-lg <?= ($currentpage == 'Our Team') ? 'bg-gray-100' : 'hover:bg-gray-100 group'; ?>">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 duration-75 <?= ($currentpage == "Our Team") ? 'group-hover:text-gray-900' : 'text-gray-500'; ?>" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
            </svg>
            <span class="ml-3">Our Team</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</aside>