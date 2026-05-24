<?php use Config\Navigation; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Studio Head</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/png" href="/favicon.ico">
  <link href="output.css" rel="stylesheet" />
</head>

<body class="h-screen w-screen overflow-hidden">

  <div class="grid grid-cols-[auto_1fr] h-full">
    <div class="border-r border-gray-300">
      <div class="bg-black p-4">
        <h1 class="text-2xl font-bold text-white uppercase">StudioHead</h1>
      </div>
      <nav>
        <ul>
          <?php foreach (Navigation::MENU_ITEMS as $item): ?>
            <li>
              <a href="/<?= $item['route'] ?>" class="sidebar-btn <?= url_is($item['route']) ? 'active' : ''; ?>">
                <?= $item['label'] ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </nav>
    </div>

    <div class="flex flex-col min-h-0">
      <header class="bg-white shadow">
        <div class="p-3 flex items-center justify-between">
          <h1 class="text-2xl font-bold">
            <?= esc($title ?? '') ?>
          </h1>
          <span>16 Mei 2026</span>
          <div class="avatar avatar-placeholder">
            <div class="bg-neutral text-neutral-content w-10 rounded-full">
              <span class="text-xl">D</span>
            </div>
          </div>
        </div>
      </header>

      <main class="p-4 overflow-auto flex flex-col gap-4">
        <?= $this->renderSection('content') ?>
      </main>
    </div>
  </div>

  <?= $this->renderSection('scripts') ?>

</body>



</html>
