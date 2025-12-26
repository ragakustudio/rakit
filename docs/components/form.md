# RAKIT — Form Contract v0.1

## 1️⃣ Tujuan
Menstandarkan struktur dan perilaku form di seluruh produk Ragaku
tanpa ketergantungan framework JS.

Form bertugas sebagai:
- Media input user
- Representasi state validasi
- Jembatan UI ↔ sistem

---

## 2️⃣ Struktur Dasar

<form class="rk-form">
  <div class="rk-field">
    <label class="rk-label">Label</label>
    <input class="rk-input" />
    <div class="rk-helper">Helper text</div>
  </div>
</form>

Aturan:

- Input wajib berada di dalam .rk-field
- Label selalu visible
- Placeholder bukan pengganti label

## 3️⃣ Elemen Form
.rk-form
Container utama form.
Tidak mengatur layout page atau grid besar.

.rk-field
Satu unit field.
Berisi:

- label
- input / select / textarea
- helper (opsional)
- error (opsional)

.rk-label
Menjelaskan input

Bahasa manusia (bukan teknis backend)

Input Types
html
Copy code
<input class="rk-input" />
<textarea class="rk-textarea"></textarea>
<select class="rk-select"></select>
Semua input share behavior & state yang sama.

## 4️⃣ State Handling
4.1 Normal
Field tanpa modifier.

### 4.2 Error
html
Copy code
<div class="rk-field is-error">
  <label class="rk-label">Email</label>
  <input class="rk-input" />
  <div class="rk-error">Email tidak valid</div>
</div>
Aturan:

- Error per field
- Tidak pakai alert global

### 4.3 Disabled

<div class="rk-field is-disabled">
  <label class="rk-label">Company</label>
  <input class="rk-input" disabled />
</div>

### 4.4 Loading (Skeleton)

<div class="rk-field is-loading">
  <div class="rk-skeleton rk-skeleton--line"></div>
</div>

## 5️⃣ Helper & Error Copywriting

- Helper: opsional, informatif
- Error: singkat, netral, tidak menyalahkan user

Contoh:

- ❌ "Input salah"
- ✅ "Email tidak valid"

## 6️⃣ Aturan Penting

❌ Jangan taruh logic validasi di view
❌ Jangan pakai placeholder sebagai label
❌ Jangan gabung beberapa input dalam satu .rk-field

## 7️⃣ Checklist Validasi

Form dianggap valid jika:

- Menggunakan .rk-form
- Setiap input berada di .rk-field
- Label selalu ada
- Error per field
- State konsisten