<nav id="navbar" class="fixed top-0 left-0 w-full flex justify-between items-center px-8 py-4 bg-transparent text-white z-50 transition-all duration-300">
    <!-- Left side: Logo + Cocopan + Moodboard -->
    <div class="flex items-center space-x-6">
      <a href='/' class="flex items-center space-x-2 hover:opacity-90 transition">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRheI89iFUg5I_sVIDYpD_Q2HPxPAfNzebhgA&s" 
             alt="Cocopan Logo" 
             class="w-10 h-10 rounded-full object-cover">
        <h1 class="text-2xl font-bold">Cocopan</h1>
      </a>

      <a href="#moodboard" class="underline-animate font-semibold text-yellow-400 hover:text-yellow-300 transition">
        Moodboard
      </a>
    </div>

    <!-- Right side: Log In + Sign Up -->
    <div class="space-x-4">
      <a href="login" class="border border-yellow-500 hover:bg-yellow-500 hover:text-black px-4 py-2 rounded-full font-semibold transition">
        Log In
      </a>
      <a href='signup' class="bg-yellow-500 hover:bg-yellow-600 text-black px-4 py-2 rounded-full font-semibold transition">
        Sign Up
      </a>
    </div>
  </nav>

  <script>
    window.addEventListener('scroll', function() {
      const navbar = document.getElementById('navbar');
      if (window.scrollY > 50) {
        navbar.classList.add('bg-slate-900', 'shadow-lg');
        navbar.classList.remove('bg-transparent');
      } else {
        navbar.classList.add('bg-transparent');
        navbar.classList.remove('bg-slate-900', 'shadow-lg');
      }
    });
  </script>