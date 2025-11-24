<?= view('components/header') ?>
<body class="font-sans text-gray-900 bg-gray-50">

  <!-- Navbar -->
 <?= view('components/navbar') ?>

    <!-- Right side: Sign Up -->
    

  <!-- Login Form Section -->
  <section class="flex items-center justify-center min-h-screen bg-cover bg-center px-6" style="background-image: url('https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?auto=format&fit=crop&w=1600&q=80');">
    <div class="absolute inset-0 bg-black/50"></div>

    <div class="relative z-10 bg-white/95 backdrop-blur-md rounded-2xl shadow-lg p-10 w-full max-w-md">
      <h2 class="text-3xl font-bold text-center text-gray-900 mb-2">Welcome Back!</h2>
      <p class="text-center text-gray-600 mb-6">Log in to your Cocopan account</p>

      <form action="<?= base_url('login/submit') ?>" method="POST" class="space-y-5">
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
          <input type="email" id="email" name="email" required class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-yellow-400 focus:outline-none">
        </div>

        <div>
          <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
          <input type="password" id="password" name="password" required class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-yellow-400 focus:outline-none">
        </div>

        <button type="submit" class="w-full bg-yellow-500 hover:bg-yellow-600 text-black font-semibold py-2 rounded-lg shadow transition">
          Log In
        </button>
      </form>

      <p class="text-center text-gray-600 mt-6 text-sm">
        Don’t have an account?
        <a href="<?= base_url('signup') ?>" class="text-yellow-500 hover:underline font-semibold">Sign up here</a>
      </p>
    </div>
  </section>
  <?= view('components/cta') ?>
  <!-- Footer -->
  <?= view('components/footer') ?>

</body>
</html>