## 1️⃣ Tujuan Dokumen

### Dokumen ini mendefinisikan kontrak struktur konten halaman admin di RAKIT.

Kontrak ini:
- Tidak bergantung framework
- Tidak menentukan styling
- Berlaku lintas produk Ragaku
- Slot-slot wajib & opsional
- Aturan penempatan konten

### Tujuan utamanya:

Semua halaman admin Ragaku punya “tulang” yang sama.

## 2️⃣ Struktur Konseptual Halaman

Page
├─ PageHeader
│  ├─ Title
│  └─ Breadcrumb (opsional)
│
└─ PageBody
   └─ Section (1 atau lebih)


### 📌 Catatan:

- Header halaman ≠ Header global
- Semua konten page harus berada di dalam .rk-page

## 3️⃣ Page Header

### 3.1 .rk-page__header

Fungsi:

- Memberi konteks halaman
- Menjadi anchor visual sebelum konten panjang

Isi wajib:
- Page Title
- Breadcrumb

Aturan:

- PageHeader tidak digunakan untuk action agar konteks halaman tetap stabil.
- Aksi halaman ditempatkan di dalam Section yang relevan.

### 3.2 .rk-page__title

- Satu elemen h1
- Maksimal satu baris
- Bahasa umum (bukan teknis)

### 3.3 .rk-page__breadcrumb

- Elemen konteks
- Boleh disembunyikan jika tidak relevan
- Tidak interaktif di MVP

## 4️⃣ Page Body

### 4.1 .rk-page__body

Fungsi:
- Container semua section
- Satu-satunya area yang memanjang

Aturan:
- Semua section harus child langsung
- Tidak boleh nesting page di dalam page

## 5️⃣ Section System

Semua section harus menggunakan .rk-section.

### 5.1 Base Section

  <section class="rk-section">
    <div class="rk-section__header">
      <h2 class="rk-section__title">Section Title</h2>
      <div class="rk-section__actions"></div>
    </div>

    <div class="rk-section__content">
      <!-- content -->
    </div>
  </section>

#### 5.2 Section Modifier

Modifier	                  Tujuan
- rk-section--summary	      KPI / metrics ringkas
- rk-section--primary	      Insight utama
- rk-section--secondary	    Insight pendukung
- rk-section--visual	      Chart / visual

📌 Modifier mendefinisikan peran semantik section, bukan tampilan visual.

### 6️⃣ Section Header Rules

- Section boleh tanpa header
- Kalau ada header:
  - Title opsional
  - Actions opsional

- Header tidak boleh terlalu tinggi

Contoh tanpa header:

<section class="rk-section rk-section--summary">
  <div class="rk-section__content">
    <!-- metric cards -->
  </div>
</section>

## 7️⃣ State Handling (Layout-level)

- State selalu ditampilkan di dalam section, bukan mengganti page.
- State tidak pernah menggantikan Page atau Section, hanya mengisi kontennya.


### 7.1 Loading

  <div class="rk-state rk-state--loading">
    Memuat data…
  </div>

### 7.2 Empty

  <div class="rk-state rk-state--empty">
    Belum ada data untuk ditampilkan.
  </div>

### 7.3 Error

  <div class="rk-state rk-state--error">
    Terjadi kesalahan saat memuat data.
  </div>

## 8️⃣ Aturan Penting (JANGAN DILANGGAR)

- ❌ Page tidak boleh punya lebih dari satu .rk-page__header
- ❌ Section tidak boleh langsung di luar .rk-page__body
- ❌ Action global tidak boleh masuk ke page header
- ✅ Page layout harus bisa berdiri tanpa data

## 9️⃣ Hubungan dengan RAKIT UI

- Layout ini agnostik visual
- Styling diatur oleh:
  - page.css
  - section.css
-Data di-inject oleh produk (RAGIE, RainHUB, dll)

## 1️⃣0️⃣ Checklist Validasi

Sebuah halaman dianggap valid secara RAKIT jika:

- Menggunakan .rk-page
- Memiliki page header (title + breadcrumb)
- Menggunakan .rk-section
- State ditampilkan di dalam section
- Tidak ada hardcoded data

## 1️⃣1️⃣ Contoh Implementasi (Referensi)

<div class="rk-page">

  <div class="rk-page__header">
    <h1 class="rk-page__title">Page Title</h1>
    <div class="rk-page__breadcrumb">Breadcrumb</div>
  </div>

  <div class="rk-page__body">

  <section class="rk-section rk-section--summary">
    <!-- Summary Metrics -->
  </section>

  <section class="rk-section rk-section--primary">
    <!-- Primary Insights -->
  </section>

  <section class="rk-section rk-section--secondary">
    <!-- Secondary Insights -->
  </section>

  <section class="rk-section rk-section--visual">
    <!-- Chart (optional) -->
  </section>

  </div>

</div>