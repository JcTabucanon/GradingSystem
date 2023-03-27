<section class="grid grid-cols-1 my-4 2xl:grid-cols-2 xl:gap-4">
  <div class="h-full p-4 mb-4 bg-white rounded-lg shadow sm:p-6">
    <!--<div class="flex items-center justify-between mb-4">
      <h3 class="text-xl font-bold leading-none text-gray-900">Most viewed Students</h3>
    </div>
    <div class="flow-root">
      <ul role="list" class="divide-y divide-gray-200">
        <#?php if (!empty($topperformers))  ?>
          <#?php foreach ($topperformers as $data) : ?>
            <li class="py-3 sm:py-4">
              <div class="flex items-center space-x-4">
                <div class="flex-shrink-0">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                  </svg>
                </div>
                <div class="flex-1 min-w-0">
                  <p class="text-sm font-medium text-gray-900 truncate">
                    <#?= $data['student_lname'] . ', ' . $data['student_fname'] . ' ' . $data['student_mname']; ?>
                  </p>
                  <p class="text-sm text-gray-500 truncate">
                    <#?= $data['student_email']; ?>
                  </p>
                </div>
                <div class="inline-flex items-center text-base font-light text-gray-400">
                  <#?= $data['subj_name']; ?>
                </div> -->
                <!-- <div class="inline-flex items-center text-base font-semibold text-gray-900">
                  <#?= $data['grade_avg']; ?>
                </div>
              </div>
            </li>
          <#?php endforeach; ?>
        <#?php  ?>
      </ul>
    </div>
  </div> -->
  <div class="p-4 bg-white rounded-lg shadow sm:p-6 xl:p-8 ">
    <div class="flex items-center justify-between mb-4">
      <h3 class="text-xl font-bold leading-none text-gray-900">Course Overview</h3>
      <a href="class.php" class="inline-flex items-center p-2 text-sm font-medium rounded-lg text-cyan-600 hover:bg-gray-100">
        View all
      </a>
    </div>
    <div class="block w-full overflow-x-auto h-96">
      <table class="items-center w-full bg-transparent border-collapse">
        <thead>
          <tr>
            <th class="px-4 py-3 text-xs font-semibold text-left text-gray-700 uppercase align-middle border-l-0 border-r-0 bg-gray-50 whitespace-nowrap">Top Classes</th>
            <th class="px-4 py-3 text-xs font-semibold text-left text-gray-700 uppercase align-middle border-l-0 border-r-0 bg-gray-50 whitespace-nowrap">Students</th>
            <th class="px-4 py-3 text-xs font-semibold text-left text-gray-700 uppercase align-middle border-l-0 border-r-0 bg-gray-50 whitespace-nowrap min-w-140-px"></th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
          <?php if (!empty($result))  ?>
            <?php foreach ($result as $data) : ?>
              <?php $topclasses = $class->dashboardFetch($data['class_code']); ?>
              <?php foreach ($topclasses as $value) : ?>
                <tr class="text-gray-500">
                  <th class="p-4 px-4 text-sm font-normal text-left align-middle border-t-0 whitespace-nowrap"><?= $data['class_name']; ?></th>
                  <td class="p-4 px-4 text-xs font-medium text-gray-900 align-middle border-t-0 whitespace-nowrap"><?= $value['COUNT(*)']; ?></td>
                  <td class="p-4 px-4 text-xs align-middle border-t-0 whitespace-nowrap">
                </tr>
              <?php endforeach; ?>
            <?php endforeach; ?>
          <?php  ?>
        </tbody>
      </table>
    </div>
  </div>
</section>