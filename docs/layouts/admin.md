# Admin Layout — RAKIT

Admin Layout adalah struktur dasar untuk seluruh sistem internal Ragaku Studio
(RAGIE, RainHub, Sokola).

Layout ini bersifat **netral, modular, dan scalable**.

---

## 🎯 Goals

- Konsisten di semua produk
- Aman untuk data panjang & dinamis
- Mudah di-extend tanpa rewrite
- Tidak bergantung framework JS

---

## 🧱 Layout Structure (LOCKED)

.rk-app
├─ .rk-sidebar
├─ .rk-main
│ ├─ .rk-header
│ └─ .rk-content


### Role

| Element | Fungsi |
|------|-------|
| `.rk-app` | Root container |
| `.rk-sidebar` | Navigasi utama |
| `.rk-main` | Area konten |
| `.rk-header` | Topbar / action |
| `.rk-content` | Page content |

---

## 📐 Layout Rules

- Sidebar **fixed width**
- Main content **flexible**
- Header **sticky (optional)**
- Content **scrollable**

---

## 🧠 State (Future-ready)

| State | Deskripsi |
|----|----|
| Sidebar collapsed | Sidebar mengecil |
| Header sticky | Header tetap di atas |
| Content scroll | Scroll hanya di konten |

---

## ❌ Anti-pattern

- Jangan taruh logic data di layout
- Jangan campur layout dengan komponen
- Jangan styling langsung di HTML

---

## ✅ Example Skeleton

<div class="rk-app">

  <aside class="rk-sidebar">
    Sidebar
  </aside>

  <div class="rk-main">

    <header class="rk-header">
      Header
    </header>

    <main class="rk-content">
      Page content
    </main>

  </div>

</div>

📌 Status

Version: Admin Layout v1

State: Contract Locked
