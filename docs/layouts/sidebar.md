# Sidebar Menu — RAKIT

Sidebar Menu adalah sistem navigasi utama untuk admin layout.

---

## 🎯 Goals
- Struktur jelas & konsisten
- Mendukung nested menu
- Active state eksplisit
- Tidak bergantung JS framework

---

## 🧱 Structure (LOCKED)

.rk-sidebar
 ├─ .rk-sidebar__brand
 ├─ .rk-sidebar__menu
 │   └─ .rk-menu
 │      └─ .rk-menu__item
 │         ├─ .rk-menu__link
 │         └─ .rk-menu__sub (optional)

---

## 🧠 State
- `.is-active` → menu aktif
- `.has-sub` → item punya submenu
- `.is-open` → submenu terbuka

---

## ❌ Anti-pattern
- Inline styling
- Route logic di CSS
- Class generik (nav, item, dll)

---

## 📌 Status
- Version: Sidebar Menu v1
- State: Contract Locked
