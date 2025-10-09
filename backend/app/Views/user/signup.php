<?= view('components/header') ?>
<body class="font-sans text-gray-900 bg-gray-50">

  <!-- Navbar -->
 <?= view('components/navbar') ?>

  <!-- Signup Form Section -->
  <section class="flex items-center justify-center min-h-screen bg-cover bg-center px-6" style="background-image: url('https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=1600&q=80');">
    <div class="absolute inset-0 bg-black/50"></div>

    <div class="relative z-10 bg-white/95 backdrop-blur-md rounded-2xl shadow-lg p-10 w-full max-w-md">
      <h2 class="text-3xl font-bold text-center text-gray-900 mb-2">Create Your Account</h2>
      <p class="text-center text-gray-600 mb-6">Join Cocopan and enjoy freshly baked goodness!</p>

      <form action="/signup/submit" method="POST" class="space-y-5">
        <div>
          <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
          <input type="text" id="name" name="name" required class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-yellow-400 focus:outline-none">
        </div>

        <div>
          <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
          <input type="email" id="email" name="email" required class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-yellow-400 focus:outline-none">
        </div>

        <div>
          <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
          <input type="password" id="password" name="password" required class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-yellow-400 focus:outline-none">
        </div>

        <div>
          <label for="confirm_password" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
          <input type="password" id="confirm_password" name="confirm_password" required class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-yellow-400 focus:outline-none">
        </div>

        <button type="submit" class="w-full bg-yellow-500 hover:bg-yellow-600 text-black font-semibold py-2 rounded-lg shadow transition">
          Sign Up
        </button>
      </form>

      <p class="text-center text-gray-600 mt-6 text-sm">
        Already have an account?
        <a href="/login" class="text-yellow-500 hover:underline font-semibold">Log in here</a>
      </p>
    </div>
  </section>

  <!-- Footer -->
  <?= view('components/footer') ?>

</body>
</html>
