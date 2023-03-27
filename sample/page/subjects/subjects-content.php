<section class="w-full">
  <div class="grid grid-cols-1 gap-4 lg:grid-cols-2">
    <?php foreach ($result as $data) : ?>
      <div class="relative z-10 block p-4 duration-300 bg-white border border-gray-100 shadow-md hover:z-50 rounded-xl hover:scale-110 hover:shadow-lg active:scale-100">
        <div class="absolute top-0 right-0 px-4 py-6 text-gray-300">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
          </svg>
        </div>
        <p class="text-xs font-medium text-gray-500"><?= $data['subj_desc']; ?></p>
        <h5 class="mt-1 text-xl font-bold text-gray-900"><?= $data['subj_name']; ?></h5>
        <dl class="flex items-center mt-6">
          <div class="flex items-center mr-8">
            <span class="p-2 text-white bg-blue-600 rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
              </svg>
            </span>
            <span class="flex ml-3 space-x-1 space-x-reverse text-xs font-medium text-gray-600 ">
              <dt>
                <?php if (!empty($data['class_day'])) { ?>
                  <?= $data['class_day']; ?>
                <?php } else { ?>
                  None
                <?php } ?></dt>
              <dd class="sr-only">Class date</dd>
            </span>
          </div>
          <div class="flex items-center mr-8">
            <span class="p-2 text-white bg-yellow-600 rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </span>
            <span class="flex ml-3 space-x-1 space-x-reverse text-xs font-medium text-gray-600 ">
              <dt>
                <?php if (!empty($data['class_time'])) { ?>
                  <?= $data['class_time']; ?>
                <?php } else { ?>
                  None
                <?php } ?>
              </dt>
              <dd class="sr-only">Class time</dd>
            </span>
          </div>
          <div class="flex items-center mr-8">
            <span class="p-2 text-white bg-indigo-600 rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
            </span>
            <span class="flex ml-3 space-x-1 space-x-reverse text-xs font-medium text-gray-600 ">
              <dt>
                <?php if (!empty($data['class_inst'])) { ?>
                  <?= $data['class_inst']; ?>
                <?php } else { ?>
                  None
                <?php } ?>
              </dt>
              <dd class="sr-only">Instructor name</dd>
            </span>
          </div>
          <div class="flex items-center mr-8">
            <span class="p-2 text-white rounded-full bg-rose-600">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" viewBox="0 0 20 20" fill="currentColor">
                <path d="M2 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1H3a1 1 0 01-1-1V4zM8 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1H9a1 1 0 01-1-1V4zM15 3a1 1 0 00-1 1v12a1 1 0 001 1h2a1 1 0 001-1V4a1 1 0 00-1-1h-2z" />
              </svg>
            </span>
            <span class="flex ml-3 space-x-1 space-x-reverse text-xs font-medium text-gray-600 ">
              <dt>
                <?php if (!empty($data['class_room'])) { ?>
                  <?= $data['class_room']; ?>
                <?php } else { ?>
                  None
                <?php } ?>
              </dt>
              <dd class="sr-only">Room location</dd>
            </span>
          </div>
        </dl>
      </div>
    <?php endforeach; ?>
  </div>
</section>