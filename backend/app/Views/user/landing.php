<?= view('components/header') ?>
<body class="font-sans text-gray-900">

  <!-- Navbar -->
  <?= view('components/navbar') ?>

  <!-- Hero -->
  <section id="home" class="h-screen bg-cover bg-center relative" style="background-image:url('https://images.unsplash.com/photo-1541167760496-1628856ab772?auto=format&fit=crop&w=1600&q=80');">
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
    <h2 class="text-4xl font-bold mb-4">Favorites</h2>
    <p class="text-gray-600 mb-12">Delicious bread and coffee made fresh, day and night.</p>
    <div class="grid gap-8 max-w-6xl mx-auto md:grid-cols-3">
      
    <?= view('components/cards/productCard', ['image' => null, 'title' => "Freshly Baked Bread", 'text' => "Crispy outside, soft inside — baked with love daily."]) ?>
    <?= view('components/cards/productCard', ['image' => 'https://images.unsplash.com/photo-1511920170033-f8396924c348?auto=format&fit=crop&w=800&q=80', 'title' => "Signature Coffee", 'text' => "Freshly brewed coffee to energize your day or night"]) ?>
    <?= view('components/cards/productCard', ['image' => 'https://images.squarespace-cdn.com/content/v1/670617fd9fdb0f1a8f5fbffe/95cbc784-4f8a-4446-815a-bdba5ad03b94/Glazed+Donut.png', 'title' => "Delicious Pastries", 'text' => "Sweet treats baked daily, perfect with your coffee."]) ?>

    </div>
  </section>

  <section class="py-16 px-6 text-center max-w-3xl mx-auto">
    <h2 class="text-4xl font-bold mb-6">Why Cocopan?</h2>
    <p class="text-gray-600 text-lg">
      At Cocopan, we believe comfort should always be within reach. That’s why we serve high-quality bread and coffee 24/7 — at prices every Filipino can afford.
    </p>
  </section>
  <!-- About -->
  <?= view('components/footer') ?>

  <!-- Navbar Scroll Script -->
  

</body>
</html>
