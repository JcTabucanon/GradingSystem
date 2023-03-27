<div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto bg-gray-900/50 top-4 md:inset-0 h-modal sm:h-full" id="add-student-modal" aria-modal="true" role="dialog">
  <div class="relative w-full h-full max-w-6xl px-4 md:h-auto">
    <div class="relative bg-white rounded-lg shadow">
      <div class="flex items-start justify-between p-5 border-b rounded-t">
        <h3 class="text-xl font-semibold">
          Add new student
        </h3>
        <button type="button" class="btn-close-modal" data-close-button>
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <form action="../includes/students.inc.php" method="post">
        <div class="p-6 space-y-6">
          <div class="grid grid-cols-12 gap-6">
            <div class="col-span-6 sm:col-span-3">
              <label for="studentnumber" class="label">Student Number</label>
              <input type="number" name="studentnumber" class="input-field focus:ring-2 focus:ring-green-600/50 focus:border-green-600 focus:outline-none" placeholder="000000" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="firstname" class="label">First Name</label>
              <input type="text" name="firstname" class="input-field focus:ring-2 focus:ring-green-600/50 focus:border-green-600 focus:outline-none" placeholder="Juan" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="middlename" class="label">Middle Name</label>
              <input type="text" name="middlename" class="input-field focus:ring-2 focus:ring-green-600/50 focus:border-green-600 focus:outline-none" placeholder="Bayani" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="lastname" class="label">Last Name</label>
              <input type="text" name="lastname" class="input-field focus:ring-2 focus:ring-green-600/50 focus:border-green-600 focus:outline-none" placeholder="dela Cruz" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="gender" class="label">Gender</label>
              <select name="gender" class="input-field focus:ring-2 focus:ring-green-600/50 focus:border-green-600 focus:outline-none">
                <option value="" disabled selected hidden>Choose Gender...</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Others">Others</option>
                <option value="">Prefer not to say</option>
              </select>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="bday" class="label">Date of Birth</label>
              <input type="date" name="bday" class="input-field focus:ring-2 focus:ring-green-600/50 focus:border-green-600 focus:outline-none" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="age" class="label">Age</label>
              <input type="number" name="age" class="input-field focus:ring-2 focus:ring-green-600/50 focus:border-green-600 focus:outline-none" placeholder="Age" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="status" class="label">Status</label>
              <select name="status" class="input-field focus:ring-2 focus:ring-green-600/50 focus:border-green-600 focus:outline-none">
                <option value="" disabled selected hidden>Choose Status...</option>
                <option value="Single">Single</option>
                <option value="Female">Married</option>
                <option value="Divorced">Divorced</option>
                <option value="Widowed">Widowed</option>
              </select>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="nationality" class="label">Nationality</label>
              <input type="text" name="nationality" class="input-field focus:ring-2 focus:ring-green-600/50 focus:border-green-600 focus:outline-none" placeholder="Nationality" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="religion" class="label">Religion</label>
              <input type="text" name="religion" class="input-field focus:ring-2 focus:ring-green-600/50 focus:border-green-600 focus:outline-none" placeholder="Religion" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="contact" class="label">Contact Number</label>
              <input type="tel" name="contact" class="input-field focus:ring-2 focus:ring-green-600/50 focus:border-green-600 focus:outline-none" placeholder="09987654321" pattern="[0-9]{11}" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="email" class="label">Email</label>
              <input type="email" name="email" class="input-field focus:ring-2 focus:ring-green-600/50 focus:border-green-600 focus:outline-none" placeholder="example@email.com" required>
            </div>
            <div class="col-span-6">
              <label for="address1" class="label">Address 1</label>
              <input type="text" name="address1" class="input-field focus:ring-2 focus:ring-green-600/50 focus:border-green-600 focus:outline-none" placeholder="Address 1" required>
            </div>
            <div class="col-span-6">
              <label for="address2" class="label">Address 2 (optional)</label>
              <input type="text" name="address2" class="input-field focus:ring-2 focus:ring-green-600/50 focus:border-green-600 focus:outline-none" placeholder="Address 2">
            </div>
          </div>
        </div>
        <div class="items-center p-6 border-t border-gray-200 rounded-b">
          <button type="submit" name="add" class="btn-green-modal">Add student</button>
        </div>
      </form>
    </div>
  </div>
</div>