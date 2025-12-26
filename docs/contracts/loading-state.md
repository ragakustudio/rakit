🧱 LOADING STATE CONTRACT — RAKIT (v0.1)

Tujuan dokumen
Menstandarkan cara RAKIT menampilkan kondisi menunggu data tanpa bikin UI loncat, panik, atau membingungkan.

## 1️⃣ Definisi Loading State

Loading State adalah kondisi ketika:

- Request sedang berjalan
- Data belum tersedia
- Sistem belum bisa menyimpulkan apa pun

Loading bukan empty dan bukan error.

## 2️⃣ Prinsip Utama Loading di RAKIT

Loading harus:

1. Stabil secara layout
   Tidak mengubah tinggi / struktur halaman secara drastis.

2. Tenang secara visual
   Tidak mencuri fokus berlebihan.

3. Kontekstual
   Mewakili bentuk data yang sedang dimuat.

4. Sementara
   Selalu digantikan oleh data / empty / error.

## 3️⃣ Posisi Loading State (WAJIB)

Loading SELALU berada di dalam Section.

Page
└─ PageBody
   └─ Section
      └─ SectionContent
         └─ LoadingState


❌ Tidak boleh:

- Mengganti Page
- Mengganti PageHeader
- Menutupi seluruh aplikasi

## 4️⃣ Jenis Loading State

RAKIT mengenal 3 level loading:

4.1 Inline Loading

Digunakan untuk:

- Aksi kecil
- Update parsial

Contoh:

- Refresh table
- Submit form

4.2 Section Loading (Default)

Digunakan untuk:

- Table
- Metric
- Chart
- List

➡️ Ini yang paling sering dipakai

4.3 Page Loading (Sangat terbatas)

Digunakan hanya jika:

- Seluruh Page tergantung satu request
- Tidak ada data lama yang bisa ditampilkan

⚠️ Sebisa mungkin DIHINDARI

## 5️⃣ Struktur Konseptual Loading State
LoadingState
├─ Skeleton / Placeholder (Wajib)
└─ Message (Opsional)

## 6️⃣ Skeleton Principle (PENTING)

Skeleton bukan spinner generik.

Skeleton harus:

- Meniru bentuk data asli
- Mengisi ruang yang sama
- Menjaga ritme layout

Contoh:

- Table → baris skeleton
- Metric → box skeleton
- Text → line skeleton

## 7️⃣ Message pada Loading (Opsional)

Jika digunakan:

- Singkat
- Netral
- Tidak janji waktu

Contoh:

- “Memuat data…”
- “Menyiapkan informasi…”

❌ Jangan:

- “Tunggu sebentar ya”
- Hampir selesai”
- Countdown palsu

## 8️⃣ Loading vs Empty vs Error

- Kondisi	State
- Request berjalan	Loading
- Request sukses, data kosong	Empty
- Request gagal	Error

⚠️ Tidak boleh tampil bersamaan

## 9️⃣ Contoh Implementasi (Referensi)

Ini bukan kontrak, hanya contoh implementasi awal RAKIT.

<div class="rk-state rk-state--loading">
  <div class="rk-skeleton rk-skeleton--table">
    <!-- placeholder rows -->
  </div>
</div>

## 🔟 Aturan Sakral

- Loading tidak boleh menggantikan Page
- Loading tidak boleh memicu layout shift besar
- Loading harus relevan dengan konten yang dimuat
- Loading selalu bersifat sementara

## 1️⃣1️⃣ Checklist Validasi

Loading State dianggap valid jika:

- Muncul di dalam Section
- Menjaga struktur halaman
- Tidak membingungkan user
- Digantikan state lain setelah request selesai