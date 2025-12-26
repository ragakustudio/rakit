📐 RAKIT — Metric / Summary Contract v0.1
## 1️⃣ Tujuan

Menstandarkan cara menampilkan angka ringkas (KPI) di halaman admin:

- Konsisten antar produk (RAGIE, RainHUB, Sokola)
- Mudah discan (5–10 detik)
- Tidak tercampur dengan insight panjang (table / chart)

Metric = jawaban cepat
Table/Chart = penjelasan lanjut

## 2️⃣ Struktur Dasar (WAJIB)

<section class="rk-section rk-section--summary">
  <div class="rk-metrics">
    <div class="rk-metric">
      <div class="rk-metric__label">Pageviews</div>
      <div class="rk-metric__value">12,345</div>
      <div class="rk-metric__meta">Last 7 days</div>
    </div>
  </div>
</section>

Aturan keras

❌ Metric tidak boleh di luar rk-section--summary
❌ Metric tidak boleh pakai <table>
❌ Metric tidak boleh jadi link di v0.1

## 3️⃣ Komponen Metric

.rk-metrics

- Container grid/flex
- Mengatur jarak & responsif
- Tidak mengatur data

.rk-metric

Satu KPI = satu unit

Isi:

- Label (apa yang diukur)
- Value (angka utama)
- Meta (opsional: periode / konteks)

## 4️⃣ Elemen & Perannya

### 4.1 .rk-metric__label

1. Teks kecil
2. Non-teknis

Contoh:

- “Pageviews”
- “CTA Clicks”
- “Active Users”

### 4.2 .rk-metric__value

1. Fokus utama
2. Boleh diformat (1,245 / 12.3k)
3. Tidak pakai satuan panjang

### 4.3 .rk-metric__meta (opsional)

Konteks ringan

Contoh:

- “Last 7 days”
- “Today”
- “All time”

## 5️⃣ Jumlah & Hirarki

- Ideal: 3–5 metric
- Maksimal: 6
- Lebih dari itu → salah desain (harus pakai table)

Urutan disarankan:

1. Metric paling penting (core value)
2. Pendukung
3. Pendukung lain

## 6️⃣ State Handling (WAJIB)

Loading

<div class="rk-metric rk-metric--loading">
  <div class="rk-skeleton rk-skeleton--metric"></div>
</div>

Empty

<div class="rk-metric rk-metric--empty">
  <div class="rk-metric__label">Pageviews</div>
  <div class="rk-metric__value">—</div>
</div>

Error

<div class="rk-metric rk-metric--error">
  Gagal memuat data
</div>

## 7️⃣ Aturan Desain (JANGAN DILANGGAR)

❌ Jangan taruh icon dulu (v0.1)
❌ Jangan pakai warna status (green/red) dulu
❌ Jangan bandingkan periode (delta) di v0.1

✅ Fokus ke angka sekarang

Semua fancy stuff = v0.2+

## 8️⃣ Contoh Implementasi (Dashboard)

<section class="rk-section rk-section--summary">
  <div class="rk-metrics">
    <div class="rk-metric">
      <div class="rk-metric__label">Pageviews</div>
      <div class="rk-metric__value">12,345</div>
      <div class="rk-metric__meta">Last 7 days</div>
    </div>

    <div class="rk-metric">
      <div class="rk-metric__label">Sessions</div>
      <div class="rk-metric__value">3,210</div>
    </div>

    <div class="rk-metric">
      <div class="rk-metric__label">CTA Clicks</div>
      <div class="rk-metric__value">214</div>
    </div>
  </div>
</section>

## 9️⃣ Checklist Validasi

Metric v0.1 dianggap SAH jika:

 1. Ada di rk-section--summary
 2. Tidak pakai table
 3. Label jelas & non-teknis
 4. Value mudah dibaca
 5. State ditangani (loading/empty)