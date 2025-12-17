(function () {
  const app = document.querySelector('.rk-app');
  const btn = document.getElementById('rkSidebarToggle');
  const KEY = 'rakit.sidebar.collapsed';

  if (!app || !btn) return;

  // Restore state
  if (localStorage.getItem(KEY) === '1') {
    app.classList.add('is-sidebar-collapsed');
  }

  btn.addEventListener('click', function () {
    app.classList.toggle('is-sidebar-collapsed');

    localStorage.setItem(
      KEY,
      app.classList.contains('is-sidebar-collapsed') ? '1' : '0'
    );
  });
})();
