# Button — RAKIT Primitive Component

Button adalah komponen aksi utama dalam sistem Ragaku.  
Button **mewakili niat (intent)**, bukan sekadar warna atau gaya visual.

Dalam RAKIT, button diperlakukan sebagai **kontrak interaksi** antara user dan sistem.

---

## 🎯 Purpose

Gunakan Button untuk:
- Menjalankan aksi sistem (submit, save, delete, confirm)
- Memicu perubahan state
- Menyelesaikan flow user

**Jangan gunakan Button untuk navigasi halaman.**  
Untuk navigasi, gunakan `<a>` (link).

---

## 🧠 Design Principles

1. **Semantic over color**  
   Warna mengikuti makna, bukan sebaliknya.

2. **Consistency over creativity**  
   Lebih baik konsisten daripada terlihat unik tapi membingungkan.

3. **State-aware**  
   Button harus merepresentasikan kondisi sistem (loading, disabled).

4. **Composable**  
   Button harus bisa dipakai lintas produk tanpa modifikasi.

---

## 1️⃣ Semantic Types (Makna Aksi)

Semantic menentukan **arti tombol dalam sistem**, bukan tampilannya.

| Semantic | Kegunaan |
|--------|---------|
| `primary` | Aksi utama (Save, Submit, Confirm) |
| `secondary` | Aksi pendamping |
| `neutral` | Aksi netral (Cancel, Close) |
| `danger` | Aksi destruktif (Delete, Remove) |
| `success` | Aksi hasil positif |
| `warning` | Aksi berisiko |
| `info` | Aksi informatif |

📌 **Catatan:**  
Brand color **tidak menentukan semantic**.  
Semantic ditentukan oleh **konsekuensi aksi**, bukan warna brand.

---

## 2️⃣ Visual Variants (Appearance)

Variant menentukan **cara button tampil**, bukan maknanya.

| Variant | Deskripsi |
|-------|----------|
| `solid` | Emphasis utama |
| `outline` | Emphasis menengah |
| `ghost` | Minim visual |
| `text` | Hampir tanpa container |
| `icon` | Ikon saja |

Semantic + Variant = Button Style  
Contoh: `danger + outline`

---

## 3️⃣ Structure Types (Isi Button)

Struktur menentukan **isi dan komposisi button**.

| Structure | Contoh |
|---------|-------|
| Text only | `Save` |
| Leading icon | `💾 Save` |
| Trailing icon | `Next →` |
| Icon only | `🗑` |
| Text button | Link-like action |

Semua struktur ini **tetap satu komponen Button**.

---

## 4️⃣ Size System

Ukuran button ditentukan secara eksplisit untuk konsistensi.

| Size | Height | Use Case |
|----|-------|----------|
| `sm` | 32px | Dense UI, table action |
| `md` | 40px | Default |
| `lg` | 48px | Primary action / CTA |

Ukuran icon mengikuti ukuran button.

---

## 5️⃣ Button States

Button harus merepresentasikan kondisi sistem.

| State | Deskripsi |
|-----|----------|
| Default | Siap digunakan |
| Hover | Feedback interaksi |
| Active | Aksi ditekan |
| Disabled | Tidak dapat digunakan |
| Loading | Aksi sedang diproses |
| Focus | Aksesibilitas keyboard |

State direpresentasikan melalui **class**, bukan logic data.

---

## 6️⃣ Accessibility Rules

- Gunakan `<button>` untuk aksi
- Gunakan `type="button"` atau `type="submit"` sesuai konteks
- Gunakan `aria-disabled="true"` saat disabled
- Focus state **wajib terlihat**
- Icon-only button **wajib** punya `aria-label`

---

## 7️⃣ Class Contract (Non-Negotiable)

Button RAKIT mengikuti kontrak class berikut:

.rk-btn
.rk-btn--{semantic}
.rk-btn--{variant}
.rk-btn--{size}

.is-disabled
.is-loading

❌ Tidak boleh menambah utility class acak  
❌ Tidak boleh styling di layer backend  
❌ Tidak boleh inline style

---

## 8️⃣ Example Markup

### Primary Solid Button

```html
<button class="rk-btn rk-btn--primary rk-btn--solid rk-btn--md">
  Save
</button>

### Danger Outline Button

<button class="rk-btn rk-btn--danger rk-btn--outline rk-btn--sm">
  Delete
</button>

### Icon Only Button

<button
  class="rk-btn rk-btn--danger rk-btn--ghost rk-btn--icon"
  aria-label="Delete item">
  🗑
</button>


## 9️⃣ Do & Don’t
✅ Do

Gunakan semantic yang sesuai konsekuensi

Gunakan size standar

Gunakan state untuk feedback sistem

❌ Don’t

Jangan gunakan warna brand sebagai semantic

Jangan gunakan button untuk navigasi

Jangan overload variant

Jangan render data di button JS

## 1️⃣0️⃣ Versioning

Current: Button v1

Status: Stable (Contract Locked)

---