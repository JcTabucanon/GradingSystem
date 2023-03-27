<div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto bg-gray-900/50 top-4 md:inset-0 h-modal sm:h-full" id="add-instructor-modal" aria-modal="true" role="dialog">
  <div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
    <div class="relative bg-white rounded-lg shadow">
      <div class="flex items-start justify-between p-5 border-b rounded-t">
        <h3 class="text-xl font-semibold">
          Add new Instructor
        </h3>
        <button type="button" class="btn-close-modal" data-close-button>
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <form action="../includes/instructor.inc.php" method="post">
        <div class="p-6 space-y-6">
          <div class="modal-grid">
            <div class="col-span-6 sm:col-span-3">
              <label for="code" class="label">Instructor Code</label>
              <input type="number" name="code" class="input-field focus:ring-2 focus:ring-green-600/50 focus:border-green-600 focus:outline-none" placeholder="0000" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="password" class="label">Password</label>
              <input type="password" name="password" class="input-field focus:ring-2 focus:ring-green-600/50 focus:border-green-600 focus:outline-none" placeholder="••••••••" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="name" class="label">Name</label>
              <input type="text" name="name" class="input-field focus:ring-2 focus:ring-green-600/50 focus:border-green-600 focus:outline-none" placeholder="First Name, Middle Name, Last Name" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="email" class="label">Email</label>
              <input type="email" name="email" class="input-field focus:ring-2 focus:ring-green-600/50 focus:border-green-600 focus:outline-none" placeholder="example@email.com" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="address" class="label">Address</label>
              <input type="text" name="address" class="input-field focus:ring-2 focus:ring-green-600/50 focus:border-green-600 focus:outline-none" placeholder="Address" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="gender" class="label">Gender</label>
              <select name="gender" class="input-field focus:ring-2 focus:ring-green-600/50 focus:border-green-600 focus:outline-none">
                <option value="" disabled selected hidden>Choose Gender...</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Others">Others</option>
                <option value="N/A">Prefer not to say</option>
              </select>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="status" class="label">Status</label>
              <select name="status" class="input-field focus:ring-2 focus:ring-green-600/50 focus:border-green-600 focus:outline-none">
                <option value="" disabled selected hidden>Choose Status...</option>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Divorced">Divorced</option>
                <option value="Widowed">Widowed</option>
              </select>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="empstatus" class="label">Employment Status</label>
              <select name="empstatus" class="input-field focus:ring-2 focus:ring-green-600/50 focus:border-green-600 focus:outline-none">
                <option value="" disabled selected hidden>Choose Employment Status...</option>
                <option value="Full-time">Full-time</option>
                <option value="Part-time">Part-time</option>
                <option value="Contract">Contract</option>
                <option value="Intern">Intern</option>
              </select>
            </div>
          </div>
        </div>
        <div class="items-center p-6 border-t border-gray-200 rounded-b">
          <button type="submit" name="add" class="btn-green-modal">Add Instructor</button>
        </div>
      </form>
    </div>
  </div>
</div>