# Page Content Contract  
## Dashboard — Generic (RAKIT v1)

---

## 1. Tujuan Halaman

**Primary Goal**  
Memberikan gambaran cepat dan menyeluruh tentang kondisi sistem/produk dalam satu layar.

**Secondary Goal**  
Membantu user menentukan langkah lanjutan (next action) tanpa perlu masuk ke halaman detail.

**Non-Goal**
- Analisis mendalam
- Konfigurasi teknis
- Editing data

> Prinsip utama:  
> **Dashboard adalah alat orientasi, bukan eksplorasi.**

---

## 2. Target User

Halaman ini dirancang untuk:
- Owner / Founder
- Admin
- Project Manager
- (Future) Client

Asumsi:
- Tidak semua user memahami istilah teknis
- Informasi harus mudah dipahami dalam ≤ 10 detik

---

## 3. Struktur Konten (Hierarki Wajib)

Urutan konten **tidak boleh diubah**, hanya boleh disesuaikan secara visual.

Page Title
Breadcrumb
────────────────────
Summary Metrics
────────────────────
Primary Insights
────────────────────
Secondary Insights
────────────────────
(Optional) Visualization / Chart

## 4. Page Header Contract

### 4.1 Page Title
- Lokasi: Area Content
- Maksimal 1 baris
- Menggunakan bahasa umum

**Default Copy**
Dashboard

markdown
Copy code

### 4.2 Breadcrumb
- Lokasi: Tepat di bawah Page Title
- Fungsi: Konteks, bukan navigasi utama

**Default Copy**
Home / Dashboard

yaml
Copy code

---

## 5. Section — Summary Metrics

### Tujuan
Memberikan snapshot kondisi sistem saat ini.

### Aturan
- Maksimal 3–4 metrik
- Label harus human-readable
- Tidak menggunakan singkatan teknis tanpa konteks

### Struktur Data (Dummy)

{
  "summary": [
    { "label": "Total Activity", "value": 1234 },
    { "label": "Active Sessions", "value": 456 },
    { "label": "Key Actions", "value": 32 }
  ]
}

## 6. Section — Primary Insights

### Tujuan

Menjawab pertanyaan utama:

“Apa yang paling berdampak saat ini?”

### Contoh Use Case

- Top Items
- Top Pages
- Top Actions
- Top Contributors

### Struktur Data (Dummy)

    {
      "primary_insights": [
        {
          "title": "Top Items",
          "items": [
            { "label": "Item A", "value": 120 },
            { "label": "Item B", "value": 45 }
          ]
        }
      ]
    }

### Aturan

- Maksimal 5 item per insight
- Wajib memiliki empty state

### Empty State Copy (Default)

Belum ada data yang cukup untuk ditampilkan di bagian ini.

## 7. Section — Secondary Insights

### Tujuan

Memberikan konteks tambahan tanpa mengalihkan fokus utama.

### Contoh
- Platform
- Device
- Channel
- Environment

### Struktur Data (Dummy)

    {
      "secondary_insights": [
        {
          "title": "Platform",
          "items": [
            { "label": "Web", "value": 80 },
            { "label": "Mobile", "value": 20 }
          ]
        }
      ]
    }

## 8. Visualization / Chart (Opsional)

### Prinsip
- Chart bukan elemen wajib
- Dashboard harus tetap bermakna tanpa chart

### Jika digunakan:
- Satu chart utama
- Menjawab satu pertanyaan spesifik
- Tidak multitafsir

## 9. State Contract

### 9.1 Loading

Memuat data dashboard…

### 9.2 Empty (Global)

Belum ada data yang tersedia.
Aktivitas akan mulai terlihat setelah sistem digunakan.

### 9.3 Error

Terjadi kendala saat memuat data.
Silakan coba lagi beberapa saat.

Catatan:
- Copy harus tenang
- Tidak menyalahkan user

10. Aturan Global RAKIT

- Page Title tidak pernah berada di header global
- Breadcrumb selalu berada di area content
- Dashboard tidak boleh terlalu panjang
- Label harus bisa dipahami non-teknis user
- Struktur konten bersifat tetap, data bersifat dinamis

## 11. Catatan Implementasi

- Kontrak ini bersifat generik

- Bisa diadaptasi ke:
  - RAGIE
  - RainHUB
  - Sokola
  - Produk client Ragaku

- Visual dan styling diatur oleh RAKIT UI layer