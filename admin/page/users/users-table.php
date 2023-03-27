<div class="flex flex-col min-w-full overflow-hidden overflow-x-auto align-middle shadow">
  <table class="min-w-full divide-y divide-gray-200 table-fixed">
    <thead class="bg-gray-100">
      <tr>
        <th scope="col" class="th">
          No.
        </th>
        <th scope="col" class="th">
          Name
        </th>
        <th scope="col" class="th">
          Username
        </th>
        <th scope="col" class="th">
          Type
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
              <?= $data['account_id']; ?>
            </div>
          </td>
          <td class="td-title">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-gray-500 group-hover:text-gray-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <div class="text-sm font-normal text-gray-500">
              <div class="text-base font-semibold text-gray-900 capitalize">
                <?= $data['account_firstname'] . ' ' . $data['account_lastname']; ?>
              </div>
              <div class="text-sm font-normal text-gray-500">
                <?= $data['account_email']; ?>
              </div>
            </div>
          </td>
          <td class="td">
            <div class="flex items-center">
              <?= $data['account_username']; ?>
            </div>
          </td>
          <td class="td">
            <div class="flex items-center capitalize">
              <?= $data['account_type']; ?>
            </div>
          </td>
          <td class="p-4 space-x-2 text-right whitespace-nowrap">
            <button type="button" data-view-button data-fname="<?= $data['account_firstname']; ?>" data-lname="<?= $data['account_lastname']; ?>" data-email="<?= $data['account_email']; ?>" data-username="<?= $data['account_username']; ?>" data-type="<?= $data['account_type']; ?>" class="btn-gray">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
              </svg>
              View
            </button>
            <button type="button" data-edit-button data-id="<?= $data['account_id']; ?>" data-fname="<?= $data['account_firstname']; ?>" data-lname="<?= $data['account_lastname']; ?>" data-email="<?= $data['account_email']; ?>" data-username="<?= $data['account_username']; ?>" data-type="<?= $data['account_type']; ?>" class="btn-cyan">
              <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
              </svg>
              Edit
            </button>
            <button type="button" data-delete-button data-id="<?= $data['account_id']; ?>" class="btn-red">
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