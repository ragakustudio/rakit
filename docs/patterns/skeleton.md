# 🧱 SKELETON PATTERN — RAKIT (v0.1)

Ini lanjutan alami dari:

Page Contract ✅

Empty State Contract ✅

Loading State Contract ✅

Sekarang kita bikin bentuk nyatanya, tapi masih sebagai PATTERN, bukan implementasi produk.

## 1️⃣ Apa itu Skeleton Pattern (versi RAKIT)

Skeleton adalah representasi visual dari struktur data
sebelum data benar-benar ada.

Bukan animasi.
Bukan spinner generik.
Bukan gimmick.

Skeleton di RAKIT itu:

“bayangan bentuk data asli”

## 2️⃣ Prinsip Skeleton di RAKIT (WAJIB)

Skeleton harus:

1. Meniru struktur data asli
   Kalau table → baris & kolom
   Kalau metric → box & angka

2. Mengisi ruang yang sama
   Supaya tidak ada layout shift saat data masuk

3. Netral secara visual
   Tidak kontras, tidak mencuri fokus

Kontekstual
Skeleton table ≠ skeleton metric

## 3️⃣ Posisi Skeleton (TIDAK BOLEH SALAH)

Skeleton SELALU hidup di dalam Loading State, dan Loading State SELALU di dalam Section.

Page
└─ PageBody
   └─ Section
      └─ SectionContent
         └─ LoadingState
            └─ Skeleton


❌ Skeleton tidak boleh:

- berdiri sendiri
- muncul tanpa loading
- muncul di luar section

## 4️⃣ Jenis Skeleton v0.1 (KITA KUNCI INI DULU)

Untuk RAKIT v0.1, cukup 3:

### 4.1 Skeleton Table

Digunakan untuk:

- list
- report
- log
- analytics table

Struktur konseptual:

SkeletonTable
├─ Header Row (opsional)
└─ Body Rows (3–7 baris)

### 4.2 Skeleton Metric

Digunakan untuk:

- KPI
- summary card
- dashboard overview

Struktur:

SkeletonMetric
├─ Label line
└─ Value block

### 4.3 Skeleton Text

Digunakan untuk:

- paragraph
- helper text
- description

Struktur:

SkeletonText
├─ Line
├─ Line
└─ Line (short)

## 5️⃣ Skeleton ≠ Data Dummy

⚠️ Ini penting:

Skeleton	        Dummy Data
Abstrak	          Spesifik
Netral	          Kontekstual
Sementara	        Bisa disalahpahami
Aman	            Bisa misleading

➡️ RAKIT TIDAK PAKAI dummy data untuk loading

## 6️⃣ Contoh Implementasi (Referensi, BUKAN KONTRAK)

<div class="rk-state rk-state--loading">

  <div class="rk-skeleton rk-skeleton--table">
    <div class="rk-skeleton__row"></div>
    <div class="rk-skeleton__row"></div>
    <div class="rk-skeleton__row"></div>
  </div>

</div>

📌 Ini hanya contoh struktur, bukan final HTML.

## 7️⃣ Aturan Sakral Skeleton

- Skeleton selalu dibungkus Loading State
- Skeleton tidak boleh interaktif
- Skeleton harus digantikan state lain
- Skeleton tidak boleh tampil bersama Empty / Error

## 8️⃣ Checklist Validasi

Skeleton dianggap valid jika:

- Bentuknya relevan dengan data asli
- Tidak menyebabkan layout shift
- Tidak membingungkan user
- Menghilang setelah data siap