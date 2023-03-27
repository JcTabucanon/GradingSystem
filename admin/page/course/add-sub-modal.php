<div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto bg-gray-900/50 top-4 md:inset-0 h-modal sm:h-full" id="add-subject-modal" aria-modal="true" role="dialog">
  <div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
    <div class="relative bg-white rounded-lg shadow">
      <div class="flex items-start justify-between p-5 border-b rounded-t">
        <h3 class="text-xl font-semibold">
          Add new course
        </h3>
        <button type="button" class="btn-close-modal" data-close-button>
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <form action="../includes/subjects.inc.php" method="post">
        <div class="p-6 space-y-6">
          <div class="modal-grid">
            <div class="col-span-6 sm:col-span-3">
              <label for="code" class="label">course Code</label>
              <input type="number" name="code" class="input-field focus:ring-2 focus:ring-green-600/50 focus:border-green-600 focus:outline-none" placeholder="0000" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="name" class="label">Course Name</label>
              <input type="text" name="name" class="input-field focus:ring-2 focus:ring-green-600/50 focus:border-green-600 focus:outline-none" placeholder="Subject Name" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="desc" class="label">course Description</label>
              <input type="text" name="desc" class="input-field focus:ring-2 focus:ring-green-600/50 focus:border-green-600 focus:outline-none" placeholder="Description" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="unit" class="label">Units</label>
              <input type="number" name="unit" class="input-field focus:ring-2 focus:ring-green-600/50 focus:border-green-600 focus:outline-none" placeholder="Units" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="level" class="label">Year Level</label>
              <select name="level" class="input-field focus:ring-2 focus:ring-green-600/50 focus:border-green-600 focus:outline-none">
                <option value="" disabled selected hidden>Choose Year Level</option>
                <?php foreach ($gradelevel as $data) : ?>
                  <option value="<?= $data['course_name']; ?>"><?= $data['course_name']; ?></option>
                <?php endforeach ?>
              </select>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="ay" class="label">Academic Year</label>
              <select name="ay" class="input-field focus:ring-2 focus:ring-green-600/50 focus:border-green-600 focus:outline-none">
                <option value="" disabled selected hidden>Choose Academic Year</option>
                <?php foreach ($year as $data) : ?>
                  <option value="<?= $data['ay_name']; ?>"><?= $data['ay_name']; ?></option>
                <?php endforeach ?>
              </select>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="sem" class="label">Semester</label>
              <select name="sem" class="input-field focus:ring-2 focus:ring-green-600/50 focus:border-green-600 focus:outline-none">
                <option value="" disabled selected hidden>Choose Semester</option>
                <option value="First Semester">First Semester</option>
                <option value="Second Semester">Second Semester</option>
                <option value="Summer">Summer</option>
              </select>
            </div>
          </div>
        </div>
        <div class="items-center p-6 border-t border-gray-200 rounded-b">
          <button type="submit" name="add" class="btn-green-modal">Add Course</button>
        </div>
      </form>
    </div>
  </div>
</div>