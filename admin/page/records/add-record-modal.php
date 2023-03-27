<div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto bg-gray-900/50 top-4 md:inset-0 h-modal sm:h-full" id="add-record-modal" aria-modal="true" role="dialog">
  <div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
    <div class="relative bg-white rounded-lg shadow">
      <div class="flex items-start justify-between p-5 border-b rounded-t">
        <h3 class="text-xl font-semibold">
          Add record
        </h3>
        <button type="button" class="btn-close-modal" data-close-button>
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <form action="../includes/records.inc.php" method="post">
        <div class="p-6 space-y-6">
          <div class="modal-grid">
            <div class="col-span-4 sm:col-span-3">
              <label for="studentnumber" class="label">Student ID</label>
              <input type="text" name="studentnumber" value="<?= $studentnumber; ?>" class="cursor-default input-field focus:outline-none" readonly>
            </div>
            <div class="col-span-4 sm:col-span-3">
              <label class="label">Student Name</label>
              <input type="text" value="<?= $studentname; ?>" class="input-field focus:ring-2 focus:ring-green-600/50 focus:border-green-600 focus:outline-none" disabled readonly>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="status" class="label">Status</label>
              <select name="status" class="input-field focus:ring-2 focus:ring-green-600/50 focus:border-green-600 focus:outline-none" required>
                <option value="" disabled selected hidden>Choose Status</option>
                <option value="New Student">New Student</option>
                <option value="Continuing">Continuing</option>
                <option value="Transferee">Transferee</option>
              </select>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="level" class="label">Year Level</label>
              <select name="level" class="input-field focus:ring-2 focus:ring-green-600/50 focus:border-green-600 focus:outline-none" required>
                <option value="" disabled selected hidden>Choose year Level</option>
                <?php foreach ($gradelevel as $data) : ?>
                  <option value="<?= $data['course_name']; ?>"><?= $data['course_name']; ?></option>
                <?php endforeach ?>
              </select>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="year" class="label">Academic Year</label>
              <select name="year" class="input-field focus:ring-2 focus:ring-green-600/50 focus:border-green-600 focus:outline-none" required>
                <option value="" disabled selected hidden>Choose Academic Year</option>
                <?php foreach ($year as $data) : ?>
                  <option value="<?= $data['ay_name']; ?>"><?= $data['ay_name']; ?></option>
                <?php endforeach ?>
              </select>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="date" class="label">Date Enrolled</label>
              <input type="date" name="date" class="input-field focus:ring-2 focus:ring-green-600/50 focus:border-green-600 focus:outline-none" required>
            </div>
          </div>
        </div>
        <div class="items-center p-6 border-t border-gray-200 rounded-b">
          <button type="submit" name="add" class="btn-green-modal">Add record</button>
        </div>
      </form>
    </div>
  </div>
</div>