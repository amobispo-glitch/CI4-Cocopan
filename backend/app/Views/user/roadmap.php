<?= view('components/header') ?>
<body class="font-sans text-gray-900 bg-amber-50">

  <!-- Navbar -->
  <?= view('components/navbar') ?>

  <!-- Roadmap Section -->
  <section class="pt-32 pb-20 px-6 max-w-6xl mx-auto">
    <h1 class="text-5xl font-bold text-center mb-12 text-yellow-600 bg-yellow-100 py-4 rounded-xl shadow-md">
      Cocopan Website Roadmap
    </h1>

    <p class="text-center text-lg text-gray-700 max-w-3xl mx-auto mb-16">
      This roadmap outlines the design and development journey of the Cocopan website — from initial wireframes to a polished, interactive user experience.
    </p>

    <!-- Roadmap Timeline -->
    <div class="relative border-l-4 border-yellow-500 pl-8 space-y-12">

      <!-- Phase 1 -->
      <div class="relative">
        <div class="absolute -left-6 top-1 bg-yellow-500 text-white w-10 h-10 rounded-full flex items-center justify-center font-bold shadow-md">
          1
        </div>
        <div class="bg-white rounded-xl p-6 shadow-lg">
          <h2 class="text-2xl font-bold text-yellow-600 mb-2">Phase 1: UI Research & Concept Design</h2>
          <p class="text-gray-700 mb-2">Gathered design inspiration and brand references to define Cocopan’s visual identity — warm tones, rounded shapes, and cozy minimalism.</p>
          <p class="text-sm text-gray-500">Status: Completed</p>
        </div>
      </div>

      <!-- Phase 2 -->
      <div class="relative">
        <div class="absolute -left-6 top-1 bg-yellow-500 text-white w-10 h-10 rounded-full flex items-center justify-center font-bold shadow-md">
          2
        </div>
        <div class="bg-amber-100 rounded-xl p-6 shadow-lg">
          <h2 class="text-2xl font-bold text-yellow-700 mb-2">Phase 2: Moodboard & Design System</h2>
          <p class="text-gray-700 mb-2">Created a moodboard showcasing Cocopan’s colors, typography, button styles, and card designs to ensure visual consistency across pages.</p>
          <p class="text-sm text-gray-500">Status: Completed</p>
        </div>
      </div>

      <!-- Phase 3 -->
      <div class="relative">
        <div class="absolute -left-6 top-1 bg-yellow-500 text-white w-10 h-10 rounded-full flex items-center justify-center font-bold shadow-md">
          3
        </div>
        <div class="bg-slate-900 text-white rounded-xl p-6 shadow-lg">
          <h2 class="text-2xl font-bold text-yellow-400 mb-2">Phase 3: Website Layout & Navigation</h2>
          <p class="text-gray-200 mb-2">Developed the website structure — homepage, moodboard, and roadmap pages — with a fixed navbar, smooth transitions, and responsive design.</p>
          <p class="text-sm text-gray-400">Status: In Progress</p>
        </div>
      </div>

      <!-- Phase 4 -->
      <div class="relative">
        <div class="absolute -left-6 top-1 bg-yellow-500 text-white w-10 h-10 rounded-full flex items-center justify-center font-bold shadow-md">
          4
        </div>
        <div class="bg-white rounded-xl p-6 shadow-lg">
          <h2 class="text-2xl font-bold text-yellow-600 mb-2">Phase 4: Interactive Components</h2>
          <p class="text-gray-700 mb-2">Add animations, hover effects, scroll reveals, and interactive elements to enhance the user experience across all pages.</p>
          <p class="text-sm text-gray-500">Status: Planned</p>
        </div>
      </div>

      <!-- Phase 5 -->
      <div class="relative">
        <div class="absolute -left-6 top-1 bg-yellow-500 text-white w-10 h-10 rounded-full flex items-center justify-center font-bold shadow-md">
          5
        </div>
        <div class="bg-amber-100 rounded-xl p-6 shadow-lg">
          <h2 class="text-2xl font-bold text-yellow-700 mb-2">Phase 5: Optimization & Deployment</h2>
          <p class="text-gray-700 mb-2">Finalize responsiveness, optimize assets, and prepare for live deployment with efficient performance and SEO readiness.</p>
          <p class="text-sm text-gray-500">Status: Upcoming</p>
        </div>
      </div>

      <!-- Phase 6 -->
      <div class="relative">
        <div class="absolute -left-6 top-1 bg-yellow-500 text-white w-10 h-10 rounded-full flex items-center justify-center font-bold shadow-md">
          6
        </div>
        <div class="bg-slate-900 text-white rounded-xl p-6 shadow-lg">
          <h2 class="text-2xl font-bold text-yellow-400 mb-2">Phase 6: Interactive Menu & Ordering Mockup</h2>
          <p class="text-gray-200 mb-2">Design a prototype for an interactive menu with filterable categories, item previews, and mock order buttons to simulate real e-commerce flow.</p>
          <p class="text-sm text-gray-400">Status: Planned</p>
        </div>
      </div>

      <!-- Phase 7 -->
      <div class="relative">
        <div class="absolute -left-6 top-1 bg-yellow-500 text-white w-10 h-10 rounded-full flex items-center justify-center font-bold shadow-md">
          7
        </div>
        <div class="bg-white rounded-xl p-6 shadow-lg">
          <h2 class="text-2xl font-bold text-yellow-600 mb-2">Phase 7: User Interaction & Feedback System</h2>
          <p class="text-gray-700 mb-2">Introduce a simple UI for users to leave feedback, rate products, or share their favorite moodboard designs — focusing on frontend experience.</p>
          <p class="text-sm text-gray-500">Status: Upcoming</p>
        </div>
      </div>

      <!-- Phase 8 -->
      <div class="relative">
        <div class="absolute -left-6 top-1 bg-yellow-500 text-white w-10 h-10 rounded-full flex items-center justify-center font-bold shadow-md">
          8
        </div>
        <div class="bg-amber-100 rounded-xl p-6 shadow-lg">
          <h2 class="text-2xl font-bold text-yellow-700 mb-2">Phase 8: Accessibility & Performance Enhancements</h2>
          <p class="text-gray-700 mb-2">Improve accessibility (contrast, ARIA labels, keyboard navigation) and performance through advanced optimization and lazy loading for images and animations.</p>
          <p class="text-sm text-gray-500">Status: Planned</p>
        </div>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <?= view('components/footer') ?>

</body>
</html>
