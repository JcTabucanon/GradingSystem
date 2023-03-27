<div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto bg-gray-900/50 top-4 md:inset-0 h-modal sm:h-full" id="assign-subject-modal" aria-modal="true" role="dialog">
  <div class="relative w-full h-full max-w-5xl px-4 md:h-auto">
    <div class="relative bg-white rounded-lg shadow">
      <div class="flex items-start justify-between p-5 border-b rounded-t">
        <h3 class="text-xl font-semibold">
          Assign Subject
        </h3>
        <button type="button" class="btn-close-modal" data-close-button>
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <form action="../includes/subject-list.inc.php" method="post">
        <input type="hidden" name="syid" value="<?= $syid; ?>">
        <input type="hidden" name="studentnumber" value="<?= $studentnumber; ?>">
        <input type="hidden" name="course" value="<?= $course; ?>">
        <div class="p-6 overflow-y-auto h-96">
          <div class="flex flex-col min-w-full overflow-hidden overflow-x-auto align-middle shadow">
            <table class="min-w-full divide-y divide-gray-200 table-fixed">
              <thead class="bg-gray-100">
                <tr>
                  <th scope="col" class="th">
                  </th>
                  <th scope="col" class="th">
                    Course Name
                  </th>
                  <th scope="col" class="th">
                    Year Level
                  </th>
                  <th scope="col" class="th">
                    Units
                  </th>
                  <th scope="col" class="th">
                    Academic Year
                  </th>
                  <th scope="col" class="th">
                    Semester
                  </th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200 ">
                <?php foreach ($options as $data) : ?>
                  <tr class="hover:bg-gray-100 group">
                    <td class="w-4 p-4">
                      <div class="flex items-center">
                        <input type="checkbox" name="class[]" value="<?= $data['subj_code']; ?>" class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-cyan-200">
                        <label for="checkbox" class="sr-only">checkbox</label>
                      </div>
                    </td>
                    <td class="td">
                      <div class="flex items-center capitalize">
                        <?= $data['subj_name']; ?>
                      </div>
                    </td>
                    <td class="td">
                      <div class="flex items-center capitalize">
                        <?= $data['subj_level']; ?>
                      </div>
                    </td>
                    <td class="td">
                      <div class="flex items-center capitalize">
                        <?= $data['subj_unit']; ?>
                      </div>
                    </td>
                    <td class="td">
                      <div class="flex items-center capitalize">
                        <?= $data['subj_ay']; ?>
                      </div>
                    </td>
                    <td class="td">
                      <div class="flex items-center capitalize">
                        <?= $data['subj_sem']; ?>
                      </div>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="items-center p-6 border-t border-gray-200 rounded-b">
          <button type="submit" name="assign" class="btn-green-modal">Assign course</button>
        </div>
      </form>
    </div>
  </div>
</div>