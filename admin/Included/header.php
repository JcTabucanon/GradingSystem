
<div class="items-center justify-between block p-4 bg-white border-b border-gray-200 sm:flex">
  <div class="w-full mb-1">
    <div class="mb-4">
      <nav class="flex mb-5" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2">
          <li class="inline-flex items-center">
            <a href="../view/dashboard.php" class="inline-flex items-center text-gray-700 hover:text-gray-900">
              <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
              </svg>
              Home
            </a>
          </li>
          <li>
            <div class="flex items-center">
              <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
              </svg>
              <a href="<?= $breadcrumblink; ?>" class="ml-1 text-sm font-medium text-gray-700 capitalize hover:text-gray-900 md:ml-2"><?= $breadcrumb1; ?></a>
            </div>
          </li>
          <?php if (!empty($breadcrumb2)) { ?>
            <li>
              <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
                <?php if (!empty($breadcrumb3)) { ?>
                  <a href="<?= $breadcrumblink2; ?>" class="ml-1 text-sm font-medium text-gray-700 capitalize hover:text-gray-900 md:ml-2"><?= $breadcrumb2; ?></a>
                <?php } else { ?>
                  <span class="ml-1 text-sm font-medium text-gray-400 md:ml-2" aria-current="page"><?= $breadcrumb2; ?></span>
                <?php } ?>
              </div>
            </li>
          <?php } ?>
          <?php if (!empty($breadcrumb3)) { ?>
            <li>
              <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
                <span class="ml-1 text-sm font-medium text-gray-400 md:ml-2" aria-current="page"><?= $breadcrumb3; ?></span>
              </div>
            </li>
          <?php } ?>
        </ol>
      </nav>
      <h1 class="text-xl font-semibold text-gray-900 capitalize sm:text-2xl"><?= $page; ?></h1>
    </div>
    <div class="sm:flex">
      <div class="items-center hidden mb-3 sm:flex sm:divide-x sm:divide-gray-100 sm:mb-0">
        <form class="flex lg:pr-2" action="#" method="get">
          <?php if (!empty($_GET['code'])) { ?>
            <input type="hidden" name="code" value="<?= $_GET['code']; ?>">
          <?php }
          if (!empty($_GET['id'])) { ?>
            <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
          <?php }
          if (!empty($_GET['studentnumber'])) { ?>
            <input type="hidden" name="studentnumber" value="<?= $_GET['studentnumber']; ?>">
          <?php }
          if (!empty($_GET['course'])) { ?>
            <input type="hidden" name="course" value="<?= $_GET['course']; ?>">
          <?php } ?>
          <label for="users-search" class="sr-only">Search</label>
          <div class="relative mr-2 lg:w-64 xl:w-96">
            <input type="text" name="search" class="bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none sm:text-sm rounded-lg focus:ring-gray-200 focus:ring-4 block w-full p-2.5" placeholder="Search for <?= $search ?>" required>
          </div>
          <button type="submit" class="btn-header-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
          </button>
        </form>
        <div class="flex pl-0 mt-3 space-x-1 sm:pl-2 sm:mt-0">
          <a href="<?= $searchlink ?>" class="btn-header-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
            </svg>
            <span>View all</span>
          </a>
        </div>
      </div>
      <div class="flex items-center ml-auto space-x-2 sm:space-x-3">
        <button type="button" data-add-button class="<?= (empty($options) && ($page == 'List of Loads' || $page == 'Enrolled Subjects')) ? 'btn-header-green-disabled' : 'btn-header-green'; ?>" <?= (empty($options) && ($page == 'List of Loads' || $page == 'Enrolled Subjects')) ? 'disabled' : ''; ?>>
          <svg class="w-6 h-6 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
          </svg>
          <span>Add <?= $btn; ?></span>
        </button>
      </div>
    </div>
  </div>
</div>