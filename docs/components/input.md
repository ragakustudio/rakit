# Input — RAKIT Primitive Component

Input adalah komponen dasar untuk menerima data dari user.  
Dalam RAKIT, Input diperlakukan sebagai **kontrak data entry**, bukan sekadar field visual.

---

## 🎯 Purpose

Gunakan Input untuk:
- Mengisi data (text, email, password, number)
- Filtering
- Search
- Configuration form

**Jangan gunakan Input untuk aksi.**  
Aksi selalu menggunakan Button.

---

## 🧠 Design Principles

1. **Clarity over decoration**  
   Input harus jelas, bukan menarik perhatian.

2. **State-aware**  
   Input harus merepresentasikan kondisi data (error, disabled).

3. **Consistent sizing**  
   Input harus sejajar dengan Button.

4. **Accessible by default**  
   Fokus & error harus terlihat jelas.

---

## 1️⃣ Input Types (HTML Native)

RAKIT **tidak menciptakan tipe baru**, hanya membungkus yang ada.

| Type | HTML |
|----|------|
| Text | `text` |
| Email | `email` |
| Password | `password` |
| Number | `number` |
| Search | `search` |

## 1️⃣.2️⃣ Extended Input Types

Selain `<input>`, RAKIT mendukung:

| Element | Class |
|------|------|
| Textarea | `.rk-textarea` |
| Select | `.rk-select` |

Keduanya **wajib** berada di dalam `.rk-field` dan mengikuti size & state yang sama dengan `.rk-input`.

❌ Jangan mencampur class native (`form-control`, dll)

---

## 2️⃣ Size System (LOCKED)

Input **harus satu sistem** dengan Button.

| Size | Height |
|----|--------|
| `sm` | 32px |
| `md` | 40px |
| `lg` | 48px |

---

## 3️⃣ States

| State | Deskripsi |
|-----|----------|
| Default | Normal |
| Focus | Aktif diisi |
| Disabled | Tidak bisa diisi |
| Error | Data invalid |
| Readonly | Bisa dibaca, tidak diubah |

---

## 4️⃣ Structure (Wrapper-based)

Input **selalu** dibungkus wrapper untuk konsistensi.

# Input — RAKIT Primitive Component

Input adalah komponen dasar untuk menerima data dari user.  
Dalam RAKIT, Input diperlakukan sebagai **kontrak data entry**, bukan sekadar field visual.

Textarea & Select menggunakan struktur yang sama:

.rk-field
 ├─ .rk-label
 ├─ .rk-input-wrap (optional)
 │   └─ .rk-textarea / .rk-select
 └─ .rk-helper / .rk-error

---

## 🎯 Purpose

Gunakan Input untuk:
- Mengisi data (text, email, password, number)
- Filtering
- Search
- Configuration form

**Jangan gunakan Input untuk aksi.**  
Aksi selalu menggunakan Button.

---

## 🧠 Design Principles

1. **Clarity over decoration**  
   Input harus jelas, bukan menarik perhatian.

2. **State-aware**  
   Input harus merepresentasikan kondisi data (error, disabled).

3. **Consistent sizing**  
   Input harus sejajar dengan Button.

4. **Accessible by default**  
   Fokus & error harus terlihat jelas.

---

## 1️⃣ Input Types (HTML Native)

RAKIT **tidak menciptakan tipe baru**, hanya membungkus yang ada.

| Type | HTML |
|----|------|
| Text | `text` |
| Email | `email` |
| Password | `password` |
| Number | `number` |
| Search | `search` |

---

## 2️⃣ Size System (LOCKED)

Input **harus satu sistem** dengan Button.

| Size | Height |
|----|--------|
| `sm` | 32px |
| `md` | 40px |
| `lg` | 48px |

---

## 3️⃣ States

| State | Deskripsi |
|-----|----------|
| Default | Normal |
| Focus | Aktif diisi |
| Disabled | Tidak bisa diisi |
| Error | Data invalid |
| Readonly | Bisa dibaca, tidak diubah |

---

## 4.1️⃣ Extended Structure (with Icon)

Untuk input dengan icon, gunakan wrapper tambahan:

.rk-field
├─ .rk-label
├─ .rk-input-wrap
│ ├─ .rk-input__icon (optional)
│ ├─ .rk-input
│ └─ .rk-input__action (optional)
└─ .rk-helper / .rk-error

### Rules
- `.rk-input-wrap` **wajib** jika ada icon / action
- Icon **tidak** mempengaruhi height input
- Action (password toggle) **bukan button utama**

## 5️⃣ Class Contract (Non-Negotiable)

### Wrapper

.rk-field
.rk-field--{size}
.is-error
.is-disabled

### Input

.rk-input

### Text

.rk-label
.rk-helper
.rk-error

❌ Tidak ada utility class di HTML  
❌ Tidak styling langsung di CI3

---

## 6️⃣ Accessibility Rules

- Gunakan `<label for="">`
- Input harus fokus-visible
- Error **tidak hanya warna**, harus teks
- `disabled` ≠ `readonly`

---

## 7️⃣ Example Markup

### Default Input

<div class="rk-field rk-field--md">
  <label class="rk-label" for="name">Name</label>
  <input id="name" type="text" class="rk-input" />
</div>

### Input with Helper

<div class="rk-field rk-field--md">
  <label class="rk-label" for="email">Email</label>
  <input id="email" type="email" class="rk-input" />
  <div class="rk-helper">We will not share your email</div>
</div>

### Error State

<div class="rk-field rk-field--md is-error">
  <label class="rk-label" for="password">Password</label>
  <input id="password" type="password" class="rk-input" />
  <div class="rk-error">Password is required</div>
</div>

## 8️⃣ Do & Don’t

### ✅ Do

Gunakan wrapper .rk-field

Gunakan size system

Tampilkan error dengan teks

### ❌ Don’t

Jangan pakai placeholder sebagai label

Jangan styling langsung di input

Jangan campur logic validation di UI

## 9️⃣ Versioning

Current: Input v1

Status: Contract Locked

---