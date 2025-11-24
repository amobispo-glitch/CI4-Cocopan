<?= view('components/header') ?>
<body class="font-sans text-gray-900 bg-[#FFFDF7]">

  <!-- Navbar -->
  <?= view('components/navbar') ?>

  <!-- Moodboard Section -->
  <section class="min-h-screen pt-32 pb-20 px-6 max-w-6xl mx-auto">

    <!-- Title with Background -->
    <h1 class="text-5xl font-bold text-center mb-10 text-[#0F172A] bg-gradient-to-r from-[#EAB308]/40 to-[#FEF3C7]/50 py-4 px-6 inline-block rounded-2xl shadow-sm">
      Cocopan Moodboard
    </h1>

    <!-- Color Palette -->
    <div class="mb-16 bg-[#FFF8E1] py-10 px-6 rounded-2xl shadow-md">
      <h2 class="text-3xl font-semibold mb-6 text-center text-[#0F172A] bg-[#FDE68A]/60 inline-block px-4 py-2 rounded-lg">
        Color Palette
      </h2>
      <p class="text-center text-gray-600 mb-8">
        The Cocopan color palette reflects the brand’s warm, cozy, and welcoming identity — 
        a blend of vibrant yellow, deep coffee tones, and light cream hues.
      </p>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
        <!-- Cocopan Yellow -->
        <div>
          <div class="space-y-2">
            <div class="h-16 rounded-lg" style="background-color:#CA8A04;"></div>
            <div class="h-16 rounded-lg" style="background-color:#EAB308;"></div>
            <div class="h-16 rounded-lg" style="background-color:#FDE68A;"></div>
          </div>
          <p class="font-semibold mt-4 text-[#0F172A]">Cocopan Yellow (Primary)</p>
          <p class="text-sm text-gray-500">#CA8A04 – #EAB308 – #FDE68A</p>
        </div>

        <!-- Midnight Coffee -->
        <div>
          <div class="space-y-2">
            <div class="h-16 rounded-lg" style="background-color:#020617;"></div>
            <div class="h-16 rounded-lg" style="background-color:#0F172A;"></div>
            <div class="h-16 rounded-lg" style="background-color:#1E293B;"></div>
          </div>
          <p class="font-semibold mt-4 text-[#0F172A]">Midnight Coffee (Accent)</p>
          <p class="text-sm text-gray-500">#020617 – #0F172A – #1E293B</p>
        </div>

        <!-- Warm Cream -->
        <div>
          <div class="space-y-2">
            <div class="h-16 rounded-lg" style="background-color:#FDE68A;"></div>
            <div class="h-16 rounded-lg" style="background-color:#FEF3C7;"></div>
            <div class="h-16 rounded-lg" style="background-color:#FFFBEB;"></div>
          </div>
          <p class="font-semibold mt-4 text-[#0F172A]">Warm Cream (Background)</p>
          <p class="text-sm text-gray-500">#FDE68A – #FEF3C7 – #FFFBEB</p>
        </div>
      </div>
    </div>

    <!-- Typography -->
    <div class="mb-16 text-center">
      <h2 class="text-3xl font-semibold mb-6 text-[#0F172A] bg-[#EAB308]/30 inline-block px-4 py-2 rounded-lg">
        Typography
      </h2>
      <div class="space-y-6">
        <div>
          <p class="text-gray-600 text-sm mb-2">Heading Font</p>
          <p class="font-serif text-3xl text-[#EAB308]">Cocopan - Heading Example</p>
        </div>
        <div>
          <p class="text-gray-600 text-sm mb-2">Body Font</p>
          <p class="font-sans text-xl text-[#0F172A]">Body text example for longer paragraphs</p>
        </div>
      </div>
    </div>

    <!-- ☀️ Button Set (with background) -->
    <div class="mb-16 text-center bg-[#FEF3C7]/70 py-10 px-6 rounded-2xl shadow-md">
      <h2 class="text-3xl font-semibold mb-8 text-[#FFFDF7] bg-[#0F172A] inline-block px-5 py-3 rounded-xl shadow-lg">
        Button Set
      </h2>
      <div class="flex flex-wrap justify-center gap-6">
        <?= view('components/buttons/primary') ?>
        <?= view('components/buttons/secondary') ?>
        <?= view('components/buttons/bordered') ?>
        <?= view('components/buttons/disabled') ?>
      </div>
    </div>

    <!-- 🌙 Night Mode Button Set (with background) -->
    <div class="mb-16 text-center bg-[#0F172A]/80 py-10 px-6 rounded-2xl shadow-lg">
      <h2 class="text-3xl font-semibold mb-8 text-[#FFFDF7] bg-[#1E293B] inline-block px-5 py-3 rounded-xl shadow-lg">
        🌙 Night Mode Button Set
      </h2>
      <div class="flex flex-wrap justify-center gap-6">
        <button class="bg-[#0F172A] hover:bg-[#1E293B] text-[#EAB308] font-semibold px-6 py-3 rounded-full shadow transition">Primary</button>
        <button class="border border-[#EAB308] text-[#EAB308] hover:bg-[#EAB308] hover:text-[#0F172A] font-semibold px-6 py-3 rounded-full transition">Secondary</button>
        <button class="border-2 border-gray-500 text-gray-400 px-6 py-3 rounded-full font-semibold hover:bg-gray-800 transition">Bordered</button>
        <button class="bg-gray-800 text-gray-600 px-6 py-3 rounded-full font-semibold cursor-not-allowed">Disabled</button>
      </div>
    </div>

    <!-- 🍩 Card Samples -->
    <div class="text-center">
      <h2 class="text-3xl font-semibold mb-8 text-[#0F172A] bg-[#FDE68A]/50 inline-block px-4 py-2 rounded-lg">
        🍩 Card Samples
      </h2>

      <div class="grid md:grid-cols-3 gap-10 justify-center">
        <!-- Card 1 -->
        <?= view('components/cards/productCard', ['image' => null, 'title' => "Freshly Baked Bread", 'text' => "Crispy outside, soft inside — baked with love daily."]) ?>

        <!-- Card 2 -->
        <?= view('components/cards/productCard2', ['image' => null, 'title' => "Freshly Baked Bread", 'text' => "Crispy outside, soft inside — baked with love daily."]) ?>

        <!-- Card 3 -->
        <?= view('components/cards/productCard3', ['image' => null, 'title' => "Freshly Baked Bread", 'text' => "Crispy outside, soft inside — baked with love daily."]) ?>
      </div>

      <!-- 🧁 Logo Section with Two Formats -->
      <div class="text-center mt-20">
        <h2 class="text-2xl font-semibold text-[#0F172A] mb-6 bg-[#EAB308]/25 inline-block px-4 py-2 rounded-lg">Logo</h2>
        
        <div class="flex justify-center items-center gap-10">
          <!-- Circle Logo -->
          <div class="bg-white rounded-full p-2 shadow-lg border-4 border-[#EAB308]">
            <img 
              src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRheI89iFUg5I_sVIDYpD_Q2HPxPAfNzebhgA&s"
              alt="Cocopan Circle Logo" 
              class="w-28 h-28 rounded-full object-cover"
            >
          </div>

          <!-- Square Logo -->
          <div class="bg-white rounded-xl p-2 shadow-lg border-4 border-[#EAB308]">
            <img 
              src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRheI89iFUg5I_sVIDYpD_Q2HPxPAfNzebhgA&s"
              alt="Cocopan Square Logo" 
              class="w-28 h-28 rounded-lg object-cover"
            >
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Call to Action -->
  <?= view('components/cta') ?>

  <!-- Footer -->
  <?= view('components/footer') ?>

</body>
</html>
