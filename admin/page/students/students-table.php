<div class="flex flex-col min-w-full overflow-hidden overflow-x-auto align-middle shadow">
  <table class="min-w-full divide-y divide-gray-200 table-fixed">
    <thead class="bg-gray-100">
      <tr>
        <th scope="col" class="th">
          No.
        </th>
        <th scope="col" class="th">
          Student ID
        </th>
        <th scope="col" class="th">
          Name
        </th>
        <th scope="col" class="th">
          Gender
        </th>
        <th scope="col" class="th">
          Age
        </th>
        <th scope="col" class="th">
          Contact #
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
            <div class="flex items-center">
              <?= $i += 1; ?>
            </div>
          </td>
          <td class="td">
            <div class="flex items-center capitalize">
              <?= $data['student_number']; ?>
            </div>
          </td>
          <td class="td-title">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-gray-500 group-hover:text-gray-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path d="M12 14l9-5-9-5-9 5 9 5z" />
              <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
            </svg>
            <div class="text-sm font-normal text-gray-500">
              <div class="text-base font-semibold text-gray-900 capitalize">
                <?= $data['student_lname'] . ', ' . $data['student_fname'] . ' ' . $data['student_mname']; ?>
              </div>
              <div class="text-sm font-normal text-gray-500">
                <?= $data['student_email']; ?>
              </div>
            </div>
          </td>
          <td class="td">
            <div class="flex items-center capitalize">
              <?= $data['student_gender']; ?>
            </div>
          </td>
          <td class="td">
            <div class="flex items-center capitalize">
              <?= $data['student_age']; ?>
            </div>
          </td>
          <td class="td">
            <div class="flex items-center capitalize">
              <?= $data['student_contact']; ?>
            </div>
          </td>
          <td class="p-4 space-x-2 whitespace-nowrap">
            <a href="records.php?studentnumber=<?= $data['student_number']; ?>" class="btn-yellow">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z" />
              </svg>
              Enrollment Records
            </a>
          </td>
          <td class="p-4 space-x-2 text-right whitespace-nowrap">
            <button type="button" data-view-button data-number="<?= $data['student_number']; ?>" data-fname="<?= $data['student_fname']; ?>" data-mname="<?= $data['student_mname']; ?>" data-lname="<?= $data['student_lname']; ?>" data-gender="<?= $data['student_gender']; ?>" data-bday="<?= $data['student_bday']; ?>" data-age="<?= $data['student_age']; ?>" data-status="<?= $data['student_status']; ?>" data-nationality="<?= $data['student_nationality']; ?>" data-religion="<?= $data['student_religion']; ?>" data-contact="<?= $data['student_contact']; ?>" data-email="<?= $data['student_email']; ?>" data-address1="<?= $data['student_address1']; ?>" data-address2="<?= $data['student_address2']; ?>" class="btn-gray">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
              </svg>
              View
            </button>
            <button type="button" data-edit-button data-id="<?= $data['student_id']; ?>" data-number="<?= $data['student_number']; ?>" data-fname="<?= $data['student_fname']; ?>" data-mname="<?= $data['student_mname']; ?>" data-lname="<?= $data['student_lname']; ?>" data-gender="<?= $data['student_gender']; ?>" data-bday="<?= $data['student_bday']; ?>" data-age="<?= $data['student_age']; ?>" data-status="<?= $data['student_status']; ?>" data-nationality="<?= $data['student_nationality']; ?>" data-religion="<?= $data['student_religion']; ?>" data-contact="<?= $data['student_contact']; ?>" data-email="<?= $data['student_email']; ?>" data-address1="<?= $data['student_address1']; ?>" data-address2="<?= $data['student_address2']; ?>" class="btn-cyan">
              <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
              </svg>
              Edit
            </button>
            <button type="button" data-delete-button data-id="<?= $data['student_id']; ?>" data-number="<?= $data['student_number']; ?>" class="btn-red">
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