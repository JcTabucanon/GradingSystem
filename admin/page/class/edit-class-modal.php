<div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto bg-gray-900/50 top-4 md:inset-0 h-modal sm:h-full" id="edit-class-modal" aria-modal="true" role="dialog">
  <div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
    <div class="relative bg-white rounded-lg shadow">
      <div class="flex items-start justify-between p-5 border-b rounded-t">
        <h3 class="text-xl font-semibold">
          Edit class
        </h3>
        <button type="button" class="btn-close-modal" data-close-button>
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <form action="../includes/class.inc.php" method="post">
        <input id="id" type="hidden" name="id">
        <div class="p-6 space-y-6">
          <div class="modal-grid">
            <div class="col-span-4 sm:col-span-3">
              <label for="name" class="label">Subject Name</label>
              <input id="name" type="text" class="input-field focus:ring-2 focus:ring-cyan-600/50 focus:border-cyan-600 focus:outline-none" disabled readonly>
            </div>
            <div class="col-span-4 sm:col-span-3">
              <label for="desc" class="label">Description</label>
              <input id="desc" type="text" class="input-field focus:ring-2 focus:ring-cyan-600/50 focus:border-cyan-600 focus:outline-none" disabled readonly>
            </div>
            <div class="col-span-4 sm:col-span-3">
              <label for="inst" class="label">Instructor</label>
              <input id="inst" type="text" class="input-field focus:ring-2 focus:ring-cyan-600/50 focus:border-cyan-600 focus:outline-none" disabled readonly>
            </div>
            <div class="col-span-4 sm:col-span-3">
              <label for="level" class="label">Year Level</label>
              <input id="level" type="text" class="input-field focus:ring-2 focus:ring-cyan-600/50 focus:border-cyan-600 focus:outline-none" disabled readonly>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="day" class="label">Day</label>
              <select id="day" name="day" class="input-field focus:ring-2 focus:ring-cyan-600/50 focus:border-cyan-600 focus:outline-none" required>
                <option value="" disabled selected hidden>Choose Day</option>
                <option value="MWF">MWF</option>
                <option value="TTH">TTH</option>
                <option value="S">S</option>
              </select>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="time" class="label">Time</label>
              <select id="time" name="time" class="input-field focus:ring-2 focus:ring-cyan-600/50 focus:border-cyan-600 focus:outline-none" required>
                <option value="" disabled selected hidden>Choose Time</option>
                <option value="7:30am-8:30am">7:30am-8:30am</option>
                <option value="8:30am-9:30am">8:30am-9:30am</option>
                <option value="9:30am-10:30am">9:30am-10:30am</option>
                <option value="10:30am-11:30am">10:30am-11:30am</option>
                <option value="11:30am-12:30pm">11:30am-12:30pm</option>
                <option value="12:30pm-1:30pm">12:30pm-1:30pm</option>
                <option value="1:30pm-2:30pm">1:30pm-2:30pm</option>
                <option value="2:30pm-3:30pm">2:30pm-3:30pm</option>
                <option value="3:30pm-4:30pm">3:30pm-4:30pm</option>
                <option value="4:30pm-5:30pm">4:30pm-5:30pm</option>
                <option value="5:30pm-6:30pm">5:30pm-6:30pm</option>
              </select>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="room" class="label">Room</label>
              <select id="room" name="room" class="input-field focus:ring-2 focus:ring-cyan-600/50 focus:border-cyan-600 focus:outline-none" placeholder="Room" required>
                <option value="" disabled selected hidden>Choose Room</option>
                <?php foreach ($rooms as $data) : ?>
                  <option value="<?= $data['room_name']; ?>"><?= $data['room_name']; ?></option>
                <?php endforeach ?>
              </select>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="section" class="label">Section (optional)</label>
              <input id="section" type="text" name="section" class="input-field focus:ring-2 focus:ring-cyan-600/50 focus:border-cyan-600 focus:outline-none" placeholder="Section">
            </div>
          </div>
        </div>
        <div class="items-center p-6 border-t border-gray-200 rounded-b">
          <button type="submit" name="edit" class="btn-cyan-modal">Update class</button>
        </div>
      </form>
    </div>
  </div>
</div>