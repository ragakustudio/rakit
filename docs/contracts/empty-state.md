🧱 EMPTY STATE CONTRACT — RAKIT (v0.1)

Tujuan:
Menstandarkan bagaimana sistem berbicara saat tidak ada data, tanpa panik, tanpa menyalahkan user.

## 1️⃣ Definisi Empty State

Empty State adalah kondisi ketika:

Data valid, tapi kosong

Request berhasil

Sistem tidak error

Empty State bukan error dan bukan loading.

## 2️⃣ Prinsip Utama Empty State

Empty State di RAKIT harus:

Jujur
Menjelaskan kondisi sebenarnya (data belum ada).

Tenang
Tidak menyalahkan user atau sistem.

Memberi arah
Jika memungkinkan, jelaskan apa langkah berikutnya.

Kontekstual
Pesan menyesuaikan konteks section, bukan generik.

## 3️⃣ Posisi Empty State (WAJIB)

Empty State SELALU berada di dalam Section, tepatnya:

Page
└─ PageBody
   └─ Section
      └─ SectionContent
         └─ EmptyState

❌ Tidak boleh:

menggantikan Page

muncul di PageHeader

muncul di luar Section

## 4️⃣ Struktur Konseptual Empty State

EmptyState
├─ Message (Wajib)
├─ Description (Opsional)
└─ Action (Opsional)

## 5️⃣ Elemen Empty State

### 5.1 Message (Wajib)

Pesan utama, singkat dan jelas.

Aturan:

1 kalimat

Bahasa manusia

Netral

Contoh:

“Belum ada data yang ditampilkan”

“Belum ada domain terdaftar”

### 5.2 Description (Opsional)

Penjelasan tambahan (kenapa / apa artinya).

Contoh:

“Data akan muncul setelah tracking aktif.”

“Tambahkan domain untuk mulai melihat data.”

### 5.3 Action (Opsional)

Aksi lanjutan jika dan hanya jika masuk akal.

Contoh:

Add Domain

Create Project

❌ Jangan tampilkan action jika:

user tidak punya akses

aksi tidak relevan dengan konteks section

## 6️⃣ Empty State vs Zero Value

⚠️ INI PENTING

Kondisi	                        Tampilkan Empty State?
Tidak ada record	              ✅ Ya
Record ada, value = 0	          ❌ Tidak
Filter terlalu ketat	          ⚠️ Tergantung konteks

Contoh:

Total Visitor = 0 → BUKAN empty

Tidak ada visitor record → EMPTY

## 7️⃣ Hubungan dengan Section Role

Empty State mewarisi konteks Section.

Contoh:

Summary Section → empty lebih ringkas

Primary Data Section → boleh ada action

Secondary Section → informatif saja

## 8️⃣ Contoh Implementasi (Referensi)

Bagian ini bukan kontrak, hanya contoh implementasi RAKIT.

<div class="rk-state rk-state--empty">
  <div class="rk-state__message">
    Belum ada data yang ditampilkan
  </div>
  <div class="rk-state__description">
    Data akan muncul setelah sistem aktif.
  </div>
  <div class="rk-state__action">
    <button>Add Data</button>
  </div>
</div>

## 9️⃣ Aturan Sakral (Tidak Boleh Dilanggar)

Empty State tidak boleh menggantikan Page

Empty State tidak boleh muncul saat loading

Empty State tidak boleh ambigu atau menyalahkan user

Empty State harus relevan dengan konteks Section

## 🔟 Checklist Validasi

Empty State dianggap valid jika:

Muncul di dalam Section

Memiliki pesan yang jelas

Tidak memicu kebingungan

Tidak mengganggu struktur Page