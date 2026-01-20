<div class="rk-app">

  <aside class="rk-sidebar">

    <div class="rk-sidebar__brand">RAKIT</div>

    <nav class="rk-sidebar__menu">
      <ul class="rk-menu">

        <li class="rk-menu__item is-active">
          <a class="rk-menu__link" href="#" data-tooltip="Dashboard">
            <span>🏠</span>
            <span>Dashboard</span>
          </a>
        </li>

        <li class="rk-menu__item has-sub is-open">
          <a class="rk-menu__link" href="#">
            <span>📦</span><span>Master Data</span>
          </a>
          <ul class="rk-menu__sub">
            <li class="rk-menu__item"><a class="rk-menu__link" href="#">Users</a></li>
            <li class="rk-menu__item"><a class="rk-menu__link" href="#">Projects</a></li>
          </ul>
        </li>

      </ul>
    </nav>

  </aside>

  <div class="rk-main">

    <header class="rk-header">
      <div class="rk-header__left">
        <button id="rkSidebarToggle" class="rk-btn rk-btn--neutral rk-btn--ghost rk-btn--icon">
          ☰
        </button>
      </div>

      <div class="rk-header__right">
        <button class="rk-btn rk-btn--ghost rk-btn--icon">🔔</button>
        <div class="rk-user">
          <span>Admin</span>
          <button class="rk-user__avatar">👤</button>
        </div>
      </div>
    </header>

    <main class="rk-content">
      <?= $this->load->view($page, [], true); ?>
    </main>

  </div>

</div>
