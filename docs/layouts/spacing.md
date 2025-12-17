# Spacing & Container — RAKIT

Spacing system digunakan untuk menjaga ritme visual antar section,
tanpa bergantung pada styling inline.

---

## 🎯 Goals

- Konsistensi jarak antar section
- Mudah dibaca & dipelihara
- Tidak mengganggu komponen

---

## 📐 Spacing Scale

| Token | Value |
|----|----|
| xs | 8px |
| sm | 12px |
| md | 24px |
| lg | 40px |
| xl | 64px |

---

## 🧱 Section System

Gunakan `.rk-section` untuk memisahkan area konten utama.

```html
<section class="rk-section">
  ...
</section>

# Spacing & Container — RAKIT

Spacing system digunakan untuk menjaga ritme visual antar section,
tanpa bergantung pada styling inline.

---

## 🎯 Goals

- Konsistensi jarak antar section
- Mudah dibaca & dipelihara
- Tidak mengganggu komponen

---

## 📐 Spacing Scale

| Token | Value |
|----|----|
| xs | 8px |
| sm | 12px |
| md | 24px |
| lg | 40px |
| xl | 64px |

---

## 🧱 Section System

Gunakan `.rk-section` untuk memisahkan area konten utama.

```html
<section class="rk-section">
  ...
</section>

❌ Anti-pattern

Inline style untuk spacing

Margin bebas tanpa sistem

Section tanpa container (kecuali full-width)

📌 Status

Version: Spacing v1

State: Stable