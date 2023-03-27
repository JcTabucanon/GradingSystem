<div class="flex flex-col min-w-full overflow-hidden overflow-x-auto align-middle shadow">
  <table class="min-w-full divide-y divide-gray-200 table-fixed">
    <thead class="bg-gray-100">
      <tr>
        <th scope="col" class="th">
          No.
        </th>
        <th scope="col" class="th">
          Year Level
        </th>
        <th scope="col" class="th">
          School Year
        </th>
        <th scope="col" class="th">
          Status
        </th>
        <th scope="col" class="th">
          Date Enrolled
        </th>
        <th scope="col" class="th">
          Options
        </th>
        <th scope="col" class="th">
        </th>
      </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
      <?php foreach ($result as $data) : ?>
        <tr class="hover:bg-gray-100 group">
          <td class="td">
            <div class="flex items-center">
              <?= $i += 1; ?>
            </div>
          </td>
          <td class="td-title">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-gray-500 group-hover:text-gray-900" fill="none" viewBox="0 0 24 24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
            </svg>
            <div class="text-sm font-normal text-gray-500">
              <div class="text-base font-semibold text-gray-900 capitalize">
                <?= $data['sy_level']; ?>
              </div>
            </div>
          </td>
          <td class="td">
            <div class="flex items-center">
              <?= $data['sy_ay']; ?>
            </div>
          </td>
          <td class="td">
            <div class="flex items-center">
              <?= $data['sy_status']; ?>
            </div>
          </td>
          <td class="td">
            <div class="flex items-center">
              <?= $data['sy_enrolldate']; ?>
            </div>
          </td>
          <td class="p-4 space-x-2 whitespace-nowrap">
            <a href="course-list.php?id=<?= $data['sy_id'] ?>&studentnumber=<?= $studentnumber; ?>&course=<?= $data['sy_level']; ?>" class="btn-yellow">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z" />
              </svg>
              Subject List
            </a>
          </td>
          <td class="p-4 space-x-2 text-right whitespace-nowrap">
            <button type="button" data-view-button data-date="<?= $data['sy_enrolldate']; ?>" data-sem="<?= $data['sy_sem']; ?>" data-status="<?= $data['sy_status']; ?>" data-level="<?= $data['sy_level']; ?>" data-year="<?= $data['sy_ay']; ?>" class="btn-gray">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
              </svg>
              View
            </button>
            <button type="button" data-edit-button data-id="<?= $data['sy_id']; ?>" data-date="<?= $data['sy_enrolldate']; ?>" data-sem="<?= $data['sy_sem']; ?>" data-status="<?= $data['sy_status']; ?>" data-level="<?= $data['sy_level']; ?>" data-year="<?= $data['sy_ay']; ?>" class="btn-cyan">
              <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
              </svg>
              Edit
            </button>
            <button type="button" data-id="<?= $data['sy_id']; ?>" data-delete-button class="btn-red">
              <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
              </svg>
              Delete
            </button>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>