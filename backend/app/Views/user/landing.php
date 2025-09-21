<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cocopan | Fresh Bread & Coffee</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans text-gray-900">

  <!-- Hero -->
  <section class="h-screen bg-cover bg-center relative" style="background-image:url('https://images.unsplash.com/photo-1541167760496-1628856ab772?auto=format&fit=crop&w=1600&q=80');">
    <div class="absolute inset-0 bg-black/50"></div>
    <div class="relative h-full flex flex-col items-center justify-center text-center text-white px-6">
      <h1 class="text-5xl md:text-6xl font-bold mb-4">Cocopan</h1>
      <p class="text-xl md:text-2xl mb-6">Freshly Baked Bread & Brewed Coffee, Anytime 24/7</p>
      <a href="#products" class="bg-yellow-500 hover:bg-yellow-600 text-black font-semibold px-6 py-3 rounded-full shadow">
        Explore Our Menu
      </a>
    </div>
  </section>

  <!-- Products -->
  <section id="products" class="py-16 px-6 bg-gray-50 text-center">
    <h2 class="text-4xl font-bold mb-4">Our Favorites</h2>
    <p class="text-gray-600 mb-12">Delicious bread and coffee made fresh, day and night.</p>
    <div class="grid gap-8 max-w-6xl mx-auto md:grid-cols-3">
      <div class="bg-white rounded-xl shadow hover:scale-105 transition">
        <img src="https://images.squarespace-cdn.com/content/v1/670617fd9fdb0f1a8f5fbffe/30a4aed0-e246-4baa-82fd-5327ca4d4ef9/Breadbox_ISO2.png" class="w-full h-56 object-cover" alt="Bread">
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2">Freshly Baked Bread</h3>
          <p class="text-gray-600">Crispy outside, soft inside — baked with love daily.</p>
        </div>
      </div>
      <div class="bg-white rounded-xl shadow hover:scale-105 transition">
        <img src="https://images.unsplash.com/photo-1511920170033-f8396924c348?auto=format&fit=crop&w=800&q=80" class="w-full h-56 object-cover" alt="Coffee">
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2">Signature Coffee</h3>
          <p class="text-gray-600">Freshly brewed coffee to energize your day or night.</p>
        </div>
      </div>
      <div class="bg-white rounded-xl shadow hover:scale-105 transition">
        <img src="https://images.squarespace-cdn.com/content/v1/670617fd9fdb0f1a8f5fbffe/95cbc784-4f8a-4446-815a-bdba5ad03b94/Glazed+Donut.png" class="w-full h-56 object-cover" alt="Pastries">
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2">Delicious Pastries</h3>
          <p class="text-gray-600">Sweet treats baked daily, perfect with your coffee.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- About -->
  <section class="py-16 px-6 text-center max-w-3xl mx-auto">
    <h2 class="text-4xl font-bold mb-6">Why Cocopan?</h2>
    <p class="text-gray-600 text-lg">
      At Cocopan, we believe comfort should always be within reach. That’s why we serve high-quality bread and coffee 24/7 — at prices every Filipino can afford.
    </p>
  </section>

  <!-- Contact -->
  <section class="py-16 px-6 bg-yellow-500 text-center text-black">
    <h2 class="text-4xl font-bold mb-4">Visit Us Anytime</h2>
    <p class="mb-6">Open 24/7 | Freshly Baked • Freshly Brewed</p>
    <a href="mailto:info@cocopan.ph" class="bg-black hover:bg-gray-800 text-white px-6 py-3 rounded-full font-semibold shadow">
      Contact Us
    </a>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-900 text-gray-400 text-center py-6">
    © 2025 Cocopan. All rights reserved.
  </footer>

</body>
</html>
