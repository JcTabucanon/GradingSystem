<div class="flex flex-col min-w-full overflow-hidden overflow-x-auto align-middle shadow">
  <table class="min-w-full divide-y divide-gray-200 table-fixed">
    <thead class="bg-gray-100">
      <tr>
        <th scope="col" class="th">
          No.
        </th>
        <th scope="col" class="th">
         Course Name
        </th>
        <th scope="col" class="th">
          Instructor
        </th>
        <th scope="col" class="th">
          1st
        </th>
        <th scope="col" class="th">
          2nd
        </th>
        <th scope="col" class="th">
          3rd
        </th>
        <th scope="col" class="th">
          4th
        </th>
        <th scope="col" class="th">
          Final
        </th>
        <th scope="col" class="th">
          Remarks
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
            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-gray-500 group-hover:text-gray-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
            </svg>
            <div class="text-sm font-normal text-gray-500">
              <div class="text-base font-semibold text-gray-900 capitalize">
                <?= $data['subj_name']; ?>
              </div>
              <div class="text-sm font-normal text-gray-500">
                <?= $data['subj_desc']; ?>
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
              <?= $data['grade_first']; ?>
            </div>
          </td>
          <td class="td">
            <div class="flex items-center capitalize">
              <?= $data['grade_second']; ?>
            </div>
          </td>
          <td class="td">
            <div class="flex items-center capitalize">
              <?= $data['grade_third']; ?>
            </div>
          </td>
          <td class="td">
            <div class="flex items-center capitalize">
              <?= $data['grade_fourth']; ?>
            </div>
          </td>
          <td class="td">
            <div class="flex items-center capitalize">
              <?= $data['grade_avg']; ?>
            </div>
          </td>
          <td class="td">
            <div class="flex items-center capitalize">
              <?= $data['grade_remarks']; ?>
            </div>
          </td>
          <td class="p-4 space-x-2 text-right whitespace-nowrap">
            <button type="button" data-delete-button data-id="<?= $data['grade_id']; ?>" class="btn-red">
              <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
              </svg>
              Unassign
            </button>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>