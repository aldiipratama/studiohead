<?= $this->setVar("title", "Dashboard")->extend('default') ?>

<?= $this->section('content') ?>
<h2 class="text-xl font-bold">
  Dashboard
</h2>

<p>Selamat datang kembali, Admin!</p>

<div class="grid grid-cols-4 gap-4">
  <?php foreach (Constants::DATA_STATS_DASHBOARD as $stat): ?>
    <div class="card shadow-md">
      <div class="card-body flex-row justify-between items-center">
        <div class="flex flex-col">
          <h2 class="card-title">
            <?= $stat['title'] ?>
          </h2>
          <span class="font-bold text-xl">
            <?= $stat['value'] ?>
          </span>
          <p>
            <?= $stat['label'] ?>
          </p>
        </div>

        <div class="size-10 p-2 <?= $stat['color'] ?> rounded-lg text-white">
          <?= $stat['icon'] ?>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>

<div class="card">
  <div class="card-body">
    <div class="size-80">
      <canvas id="grafik-booking"></canvas>
    </div>
  </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.5.1/dist/chart.umd.min.js"></script>
<script>
  const ctx = document.getElementById('grafik-booking');

  new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
      datasets: [{
        label: 'Jumlah Booking',
        data: [12, 19, 3, 5, 2, 3, 7, 10, 15, 20, 25, 30],
        borderColor: 'black',
        backgroundColor: 'gray',
        fill: true,
        tension: 0.4
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          display: true,
          position: 'top',
        },
        title: {
          display: true,
          text: 'Grafik Booking per Bulan'
        }
      },
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
<?= $this->endSection() ?>

