<div class="flex flex-col min-w-full overflow-hidden overflow-x-auto align-middle shadow">
  <table class="min-w-full divide-y divide-gray-200 table-fixed">
    <thead class="bg-gray-100">
      <tr>
        <th scope="col" class="th">
          No.
        </th>
        <th scope="col" class="th">
          Subject Name
        </th>
        <th scope="col" class="th">
          Instructor
        </th>
        <th scope="col" class="th">
          Room
        </th>
        <th scope="col" class="th">
          Days and Time
        </th>
        <th scope="col" class="th">
          Options
        </th>
        <th scope="col" class="th">
        </th>
      </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200 ">
      <?php foreach ($result as $data) : ?>
        <tr class="hover:bg-gray-100 group">
          <td class="td">
            <div class="flex items-center capitalize">
              <?= $i += 1; ?>
            </div>
          </td>
          <td class="td-title">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-gray-500 group-hover:text-gray-900" fill="none" viewBox="0 0 24 24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
            </svg>
            <div class="text-sm font-normal text-gray-500">
              <div class="text-base font-semibold text-gray-900 capitalize">
                <?= $data['class_name']; ?>
              </div>
              <div class="text-sm font-normal text-gray-500">
                <?= $data['class_desc']; ?>
              </div>
            </div>
          </td>
          <td class="td">
            <div class="flex items-center capitalize">
              <?= $data['class_inst']; ?>
            </div>
          </td>
          <td class="td">
            <div class="flex items-center capitalize">
              <?php if (!empty($data['class_room'])) { ?>
                <?= $data['class_room']; ?>
              <?php } else { ?>
                None
              <?php } ?>
            </div>
          </td>
          <td class="td">
            <div class="flex items-center">
              <?php if (!empty($data['class_day'])) { ?>
                <?= $data['class_day']; ?>
              <?php } else { ?>
                None
              <?php } ?>
              /
              <?php if (!empty($data['class_time'])) { ?>
                <?= $data['class_time']; ?>
              <?php } else { ?>
                None
              <?php } ?>
            </div>
          </td>
          <td class="p-4 space-x-2 whitespace-nowrap">
            <a href="student-list.php?id=<?= $data['class_code']; ?>" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-black bg-yellow-500 rounded-lg hover:bg-yellow-600 focus:ring-4 focus:ring-yellow-400/50">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
              </svg>
              View Students
            </a>
          </td>
          <td class="p-4 space-x-2 text-right whitespace-nowrap">
            <button type="button" data-view-button data-id="<?= $data['class_id']; ?>" data-name="<?= $data['class_name']; ?>" data-desc="<?= $data['class_desc']; ?>" data-inst="<?= $data['class_inst']; ?>" data-level="<?= $data['class_level']; ?>" data-day="<?= $data['class_day']; ?>" data-time="<?= $data['class_time']; ?>" data-room="<?= $data['class_room']; ?>" data-section="<?= $data['class_section']; ?>" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-gray-600 rounded-lg hover:bg-gray-700 focus:ring-4 focus:ring-gray-200">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
              </svg>
              View
            </button>
            <button type="button" data-edit-button data-id="<?= $data['class_id']; ?>" data-name="<?= $data['class_name']; ?>" data-desc="<?= $data['class_desc']; ?>" data-inst="<?= $data['class_inst']; ?>" data-level="<?= $data['class_level']; ?>" data-day="<?= $data['class_day']; ?>" data-time="<?= $data['class_time']; ?>" data-room="<?= $data['class_room']; ?>" data-section="<?= $data['class_section']; ?>" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200">
              <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
              </svg>
              Edit
            </button>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>