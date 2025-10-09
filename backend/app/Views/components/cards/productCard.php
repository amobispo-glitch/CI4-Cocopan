
      <div class="bg-white rounded-xl shadow hover:scale-105 transition">
        <img src= "<?= esc($image ?? 'https://images.squarespace-cdn.com/content/v1/670617fd9fdb0f1a8f5fbffe/30a4aed0-e246-4baa-82fd-5327ca4d4ef9/Breadbox_ISO2.png') ?>" class="w-full h-56 object-cover" alt="Bread">
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2"> <?= esc($title ?? "This Title") ?></h3>
          <p class="text-gray-600"> <?= esc($text ?? "text") ?></p>
        </div>
      </div>