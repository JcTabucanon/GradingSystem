<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Login</title>
  <link rel="stylesheet" href="../src/css/tailwind.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body>
  <main class="flex flex-col items-center justify-center h-screen bg-gray-50 font-inter">
    <header class="pb-8">
      <h1 class="text-5xl text-center text-gray-700">Sign in to your account</h1>
    </header>
    <section class="w-full bg-white shadow rounded-xl md:mt-0 sm:max-w-screen-sm xl:p-0">
      <div class="p-6 space-y-8 sm:p-8 lg:p-16">
        <h2 class="text-2xl font-bold text-gray-700 lg:text-3xl">Student Login</h2>
        <form class="mt-8 space-y-6" action="includes/student-login.inc.php" method="post">
          <div>
            <label for="studentid" class="block mb-2 text-sm font-medium text-gray-700"> Your Student ID</label>
            <input type="number" name="studentid" class="bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none sm:text-sm rounded-lg focus:ring-blue-600/50 focus:border-blue-600 focus:ring-2 block w-full p-2.5" placeholder="Student ID" required>
          </div>
          <div class="flex items-start">
            <div class="text-sm">
              <span class="text-red-600"><?= (isset($_GET['error']) && $_GET['error'] == 'empty') ? 'Please enter your student ID.' : ((isset($_GET['error']) && $_GET['error'] == 'usernotfound') ? 'Student not found. Please try again.' : ''); ?></span>
            </div>
          </div>
          <button type="submit" name="submit" class="w-full px-5 py-3 text-base font-medium text-center text-white transition duration-200 bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 sm:w-auto">Login to account</button>
        </form>
        <div class="text-sm text-gray-500">
          Not a student?<br><a href="../" class="text-blue-600 hover:underline">Return to selection menu</a>
        </div>
      </div>
    </section>
  </main>
</body>

</html>