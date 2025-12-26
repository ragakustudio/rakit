🧩 RAKIT — Table Component v0.1
1️⃣ Tujuan Komponen

Table digunakan untuk:

- Menampilkan data terstruktur berulang
- Membandingkan data antar baris
- Menjadi dasar insight operasional (bukan visual utama)

Table bukan visualisasi, tapi representasi data mentah yang rapi.

## 2️⃣ Kapan Table Dipakai

Gunakan table jika:

- Data memiliki lebih dari 2 kolom
- Data perlu dibaca per baris
- Data bersifat list / log / ranking / hasil query

❌ Jangan pakai table untuk:

- KPI ringkas
- Insight utama
- Single data point

## 3️⃣ Posisi Table dalam Page Contract

Table TIDAK BOLEH berdiri sendiri.

Table WAJIB berada di dalam:

.rk-page
  └─ .rk-page__body
      └─ .rk-section
          └─ .rk-section__content
              └─ table


📌 Table selalu milik sebuah section.

## 4️⃣ Struktur Dasar Table (Konseptual)

<table class="rk-table">
  <thead>
    <tr>
      <th>Column A</th>
      <th>Column B</th>
      <th class="rk-table__col--right">Column C</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td>Value A</td>
      <td>Value B</td>
      <td class="rk-table__col--right">123</td>
    </tr>
  </tbody>
</table>

## 5️⃣ Aturan Kolom (v0.1)

### 5.1 Alignment

Default: left

- Numeric / count / metric: right
- Action column: center (jika ada)

Gunakan modifier class:

- .rk-table__col--right
- .rk-table__col--center

### 5.2 Header (<th>)

- Wajib ada <thead>
- Header tidak boleh multi-line
- Tidak ada icon sort di v0.1

## 6️⃣ State Handling (WAJIB)

Table tidak meng-handle state sendiri.

State SELALU ditampilkan di level section.

### 6.1 Loading
<section class="rk-section">
  <div class="rk-section__content">
    <div class="rk-state rk-state--loading">
      Memuat data…
    </div>
  </div>
</section>

### 6.2 Empty
<div class="rk-state rk-state--empty">
  Tidak ada data untuk ditampilkan.
</div>


📌 JANGAN render <table> jika data kosong.

## 7️⃣ Styling Principle (Non-Visual Rule)

Table v0.1:

- Tanpa border tebal
- Divider horizontal ringan
- Tidak ada zebra striping
- Tidak ada hover effect kompleks
- Numeric column wajib menggunakan `.is-numeric`
- Table wajib dibungkus `.rk-table-wrap` untuk overflow horizontal
- Data sekunder (minor importance) gunakan `.is-muted`
- Hover row bersifat visual saja, bukan interaksi

Tujuan:

Table mudah dibaca, tidak mendominasi halaman

## 8️⃣ Larangan (ANTI-PATTERN)

❌ Table langsung di .rk-page__body
❌ Table tanpa header
❌ Table meng-handle loading sendiri
❌ Table berisi KPI besar
❌ Table nested di dalam table lain

## 9️⃣ Hubungan dengan Komponen Lain
Komponen	                  Hubungan
Page	                      Table selalu anak dari section
Section	                    Section bertanggung jawab atas state
Loading State	              Table tidak pernah loading sendiri
Empty State	                Menggantikan table, bukan di dalam table

## 🔟 Checklist Validasi Table v0.1

Table dianggap valid secara RAKIT jika:

- ✅ Berada di dalam .rk-section
- ✅ Memiliki <thead>
- ✅ Tidak muncul saat data kosong
- ✅ State ditampilkan di section
- ❌ Tidak ada sorting
- ❌ Tidak ada pagination
- ❌ Tidak ada bulk action

### 📌 Catatan Versi

Table v0.1 adalah foundation.

Fitur yang BELUM termasuk:

- Sorting
- Pagination
- Bulk action
- Row click
- Inline action

Semua itu v0.2+ dan harus lewat kontrak baru.

🧠 KESIMPULAN

Table di RAKIT adalah alat baca data,
bukan alat interaksi.

Kalau table-nya ribet → berarti salah tempat.