<div class="flex flex-col min-w-full overflow-hidden overflow-x-auto align-middle shadow">
  <table class="min-w-full divide-y divide-gray-200 table-fixed">
    <thead class="bg-gray-100 text-center">
      <tr>
        <th scope="col" class="th">
          No.
        </th>
        <th scope="col" class="th text-center">
          Instructor Code
        </th>
        <th scope="col" class="th text-center">
          Name
        </th>
        <th scope="col" class="th text-center">
          Gender
        </th>
        <th scope="col" class="th text-center">
          Address
        </th>
        <th scope="col" class="th text-center">
          Employment Status
        </th>
        <th scope="col" class="th text-center">
          Options
        </th>
      
        <th scope="col" class="th text-center">
          Action
        </th>
        <th scope="col" class="th text-center">
        </th>
      </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200 ">
      <?php foreach ($result as $data) : ?>
        <tr class="hover:bg-gray-100 group">
          <td class="td">
            <div class="flex items-center">
              <?= $data['inst_id']; ?>
            </div>
          </td>
          <td class="td">
            <div class="flex items-center capitalize">
              <?= $data['inst_code']; ?>
            </div>
          </td>
          <td class="td-title">
          
            <div class="text-sm font-normal text-gray-500">
              <div class="text-base font-semibold text-gray-900 capitalize">
                <?= $data['inst_name']; ?>
              </div>
              <div class="text-sm font-normal text-gray-500">
                <?= $data['inst_email']; ?>
              </div>
            </div>
          </td>
          <td class="td">
            <div class="flex items-center capitalize">
              <?= $data['inst_gender']; ?>
            </div>
          </td>
          <td class="td">
            <div class="flex items-center capitalize">
              <?= $data['inst_address']; ?>
            </div>
          </td>
          <td class="td">
            <div class="flex items-center capitalize">
              <?= $data['inst_empstatus']; ?>
            </div>
          </td>
          <td class="p-4 space-x-2 whitespace-nowrap">
            <a href="loads.php?code=<?= $data['inst_code']; ?>" class="btn-yellow">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd" />
              </svg>
              List of Loads
            </a>
          </td>
          <td class="p-4 space-x-2 text-right whitespace-nowrap">
            <button type="button" data-view-button data-code="<?= $data['inst_code']; ?>" data-name="<?= $data['inst_name']; ?>" data-address="<?= $data['inst_address']; ?>" data-gender="<?= $data['inst_gender']; ?>" data-status="<?= $data['inst_status']; ?>" data-email="<?= $data['inst_email']; ?>" data-empstatus="<?= $data['inst_empstatus']; ?>" class="btn-gray">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
              </svg>
              View
            </button>
            <button type="button" data-edit-button data-id="<?= $data['inst_id']; ?>" data-code="<?= $data['inst_code']; ?>" data-name="<?= $data['inst_name']; ?>" data-address="<?= $data['inst_address']; ?>" data-gender="<?= $data['inst_gender']; ?>" data-status="<?= $data['inst_status']; ?>" data-email="<?= $data['inst_email']; ?>" data-empstatus="<?= $data['inst_empstatus']; ?>" class="btn-cyan">
              <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
              </svg>
              Edit
            </button>
            <button type="button" data-id="<?= $data['inst_id']; ?>" data-delete-button class="btn-red">
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