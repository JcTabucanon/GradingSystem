<section class="w-full">
  <div class="flex flex-col min-w-full overflow-hidden overflow-x-auto align-middle rounded-md shadow">
    <table class="min-w-full divide-y divide-indigo-200 table-fixed">
      <thead class="bg-indigo-400">
        <tr>
          <th class="text-white th">
            Subject
          </th>
          <th class="text-white th">
            1st
          </th>
          <th class="text-white th">
            2nd
          </th>
          <th class="text-white th">
            3rd
          </th>
          <th class="text-white th">
            4th
          </th>
          <th class="text-white th">
            Final
          </th>
          <th class="text-white th">
            Remarks
          </th>
        </tr>
      </thead>
      <tbody class="bg-white divide-y divide-gray-200">
        <?php foreach ($result as $data) : ?>
          <tr class="group">
            <td class="flex td">
              <div class="flex items-center">
                <?= $data['subj_name']; ?>
              </div>
              <?php if (!isset($_GET['course']) || empty($_GET['course'])) { ?>
                <div class="inline-flex items-center px-3 py-1 ml-2 text-sm text-center text-white bg-blue-500 shadow-sm font-sm rounded-2xl">
                  <?= $data['subj_level']; ?>
                </div>
              <?php } ?>
              <div class="inline-flex items-center px-3 py-1 ml-2 text-sm text-center text-white shadow-sm font-sm rounded-2xl <?= ($data['subj_sem'] == 'First Semester') ? 'bg-emerald-500' : (($data['subj_sem'] == 'Second Semester') ? 'bg-amber-500' : 'bg-neutral-500'); ?>">
                <?= $data['subj_sem']; ?>
              </div>
            </td>
            <td class="td">
              <div class="flex items-center">
                <?= $data['grade_first']; ?>
              </div>
            </td>
            <td class="td">
              <div class="flex items-center">
                <?= $data['grade_second']; ?>
              </div>
            </td>
            <td class="td">
              <div class="flex items-center">
                <?= $data['grade_third']; ?>
              </div>
            </td>
            <td class="td">
              <div class="flex items-center">
                <?= $data['grade_fourth']; ?>
              </div>
            </td>
            <td class="td">
              <div class="flex items-center">
                <?= $data['grade_avg']; ?>
              </div>
            </td>
            <td class="td">
              <div class="inline-flex items-center px-3 py-1 ml-2 text-sm text-center text-white font-sm rounded-2xl <?= ($data['grade_remarks'] == 'Passed') ? 'bg-green-500 shadow-sm' : (($data['grade_remarks'] == 'Failed') ? 'bg-red-500 shadow-sm' : ''); ?>">
                <?= $data['grade_remarks']; ?>
              </div>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</section>