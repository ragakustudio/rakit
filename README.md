# RAKIT — Ragaku Frontend Foundation

**“RAKIT bukan untuk terlihat cepat, tapi untuk bertahan lama.”**

RAKIT (Ragaku Kit) adalah fondasi frontend internal Ragaku Studio untuk membangun sistem digital yang konsisten, scalable, dan sadar terhadap data serta state.

RAKIT bukan framework, bukan theme, dan bukan UI kit instan.  
RAKIT adalah **kontrak kerja frontend**.

---

## 🪵 Filosofi RAKIT

RAKIT diambil dari kata *merakit* — proses membangun sesuatu secara bertahap, sadar struktur, dan dapat dibongkar–pasang tanpa merusak keseluruhan sistem.

RAKIT menolak solusi instan yang hanya terlihat rapi di awal, tetapi rapuh saat sistem berkembang.  
Sebaliknya, RAKIT memilih konsistensi, modularitas, dan kesadaran sistem sebagai fondasi utama.

### Prinsip Utama RAKIT

1. **Dibangun, bukan dibeli**  
   RAKIT tidak bergantung pada template mentah yang tidak memahami konteks sistem.  
   Setiap bagian dirakit dari kebutuhan nyata.

2. **Bertahap, bukan terburu-buru**  
   Standar lahir dari pemakaian, bukan asumsi.  
   Sesuatu distandarkan karena terbukti membantu, bukan karena terlihat keren.

3. **Modular, bukan rapuh**  
   Komponen harus dapat diganti atau diperbaiki tanpa merusak sistem lain.

4. **Sadar sistem, bukan sekadar tampilan**  
   UI adalah bagian dari sistem hidup: sadar data, state, dan perilaku backend.

5. **Disiplin kecil, bukan kompleksitas besar**  
   Workflow yang kaku lebih baik daripada arsitektur besar yang sulit dijaga.

6. **Digunakan sebelum disempurnakan**  
   RAKIT tidak mengejar kesempurnaan di awal, tetapi keberlanjutan.

---

## 1️⃣ Background & Context

Ragaku Studio mengembangkan beberapa produk internal:

- **RainHub** — internal system (HRIS, Project Management, Portfolio)
- **Sokola** — Learning Management System (LMS)
- **RAGIE** — Ragaku Analytics & Growth Insight Engine

Produk-produk ini berkembang secara organik dengan kebutuhan yang terus bertambah.  
Frontend dan UI dibangun bertahap, namun tanpa standar yang baku.

RAKIT lahir sebagai **jawaban atas kebutuhan fondasi frontend yang konsisten**, sebelum kompleksitas sistem semakin besar.

---

## 2️⃣ Problem Statement

Masalah utama yang dihadapi sebelum RAKIT:

- Struktur frontend berbeda di setiap project
- Build Tailwind tidak konsisten (source dan output tercampur)
- Template pihak ketiga sering bertabrakan dengan logic sistem
- UI state (sidebar, layout, resize) tidak memiliki kontrak yang jelas
- Context switching tinggi saat berpindah project

Masalah ini **bukan disebabkan oleh tools**, melainkan oleh **tidak adanya standar frontend yang hidup**.

---

## 3️⃣ Facts & Observations

Beberapa fakta lapangan yang menjadi dasar keputusan:

- RainHub & Sokola menggunakan Tailwind CSS
- Tailwind cocok untuk sistem jangka panjang yang dikustom
- Template admin umumnya dibuat untuk demo, bukan sistem hidup
- UI tanpa kesadaran data & state akan menjadi technical debt
- Layout adalah titik paling rapuh dalam sistem berbasis data

---

## 4️⃣ Key Insights

- Framework boleh fleksibel, workflow harus kaku
- Standarisasi harus lahir dari pemakaian nyata
- UI state harus dipisahkan dari data & backend logic
- Konsistensi lebih penting daripada kecepatan awal
- Template tanpa kontrak teknis hampir selalu berujung chaos

---

## 5️⃣ Decision Summary

Keputusan strategis yang diambil:

- Tailwind CSS digunakan sebagai bahasa UI utama Ragaku Studio
- Tidak lagi mengadopsi template pihak ketiga secara mentah
- Membangun standar frontend internal bernama **RAKIT**
- **RAGIE Tracker** dijadikan UI Lab awal
- Fokus pada layout, state, dan aturan main sebelum visual polish

---

## 6️⃣ What is RAKIT?

RAKIT adalah:

- Fondasi frontend **hidup**
- Kontrak teknis antara UI, state, dan sistem
- Standar layout & interaksi lintas produk Ragaku

RAKIT **bukan**:

- Theme siap pakai
- UI kit React/Vue
- Framework JavaScript
- Produk komersial

RAKIT dibangun **HTML-first** dengan Tailwind CSS agar dapat digunakan di:

- CodeIgniter 3 / 4
- WordPress
- (Future) Laravel, React, Next.js

---

## 7️⃣ Scope & Non-Goals

### In Scope (RAKIT v0.x)

- Fondasi design token (color, spacing, typography)
- Primitive UI components (button, input, badge)
- Composite components (card, table, form group)
- Admin layout (sidebar, navbar, content wrapper)
- UI state contract (loading, empty, error)
- JavaScript minimal (event & state based)

### Out of Scope

- UI kit lengkap siap jual
- Animasi kompleks
- Framework JavaScript
- Dependency NPM di layer aplikasi
- Branding visual final

---

## ⚠️ Core Rules (Non-Negotiable)

Aturan ini **tidak boleh dilanggar**:

- RAKIT tidak menangani data atau business logic
- RAKIT tidak melakukan fetch, parsing, atau rendering data
- JavaScript RAKIT hanya mengatur state dan interaksi UI
- Styling tidak boleh dilakukan di layer backend (CI, WP, dsb)
- Tidak ada inline style atau utility class acak di view
- Semua perubahan UI harus lewat token atau state

Pelanggaran terhadap aturan ini akan menghasilkan UI yang rapuh dan sulit dirawat.

---

## 8️⃣ Implementation Strategy

Strategi implementasi RAKIT:

1. Menjadikan **RAGIE Tracker sebagai UI Lab**
2. Membangun **RAKIT v0.x** secara bertahap
3. Mengimplementasikan RAKIT ke RAGIE
4. Mengadopsi RAKIT secara gradual ke RainHub & Sokola
5. Iterasi berdasarkan pemakaian nyata, bukan asumsi

Pendekatan ini menghindari rewrite besar dan menjaga sistem tetap berjalan.

---

## 👥 Intended Audience

RAKIT ditujukan untuk:

- Developer internal Ragaku Studio
- Tim kecil / solo developer
- Sistem berbasis data (Dashboard, LMS, HRIS, Analytics)
- Backend tradisional (CI, WordPress)

RAKIT **tidak ditujukan** untuk:

- Landing page sekali pakai
- Website marketing sederhana
- Proyek tanpa rencana maintenance

---

## 📌 Executive Summary

RAKIT adalah fondasi frontend Ragaku Studio yang dibangun untuk **ketahanan jangka panjang**, bukan kecepatan sesaat.

Dengan menjadikan UI sebagai bagian dari sistem hidup — sadar data, state, dan backend behavior — RAKIT membantu Ragaku Studio mengurangi chaos frontend, menurunkan cognitive load, dan membangun konsistensi lintas produk.

RAKIT bukan tujuan akhir, melainkan **cara bekerja**.

> Yang dirakit dengan sadar, akan bertahan saat sistem membesar.
