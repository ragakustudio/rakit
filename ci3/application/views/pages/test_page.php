<div style="max-width:960px; margin:40px auto; padding:0 24px">

  <!-- ================= BUTTON ================= -->
  <section style="margin-bottom:48px">
    <h2>Button</h2>

    <div style="display:flex; gap:12px; flex-wrap:wrap">
      <button class="rk-btn rk-btn--primary rk-btn--solid rk-btn--md">Save</button>
      <button class="rk-btn rk-btn--danger rk-btn--outline rk-btn--md">Delete</button>
      <button class="rk-btn rk-btn--neutral rk-btn--ghost rk-btn--md">Cancel</button>
      <button class="rk-btn rk-btn--primary rk-btn--ghost rk-btn--icon">✕</button>
    </div>
  </section>

  <!-- ================= INPUT ================= -->
  <section style="margin-bottom:48px">
    <h2>Input</h2>

    <div class="rk-form" style="max-width:360px">

      <div class="rk-field rk-field--md">
        <label class="rk-label">Name</label>
        <input class="rk-input" placeholder="Your name" />
      </div>

      <div class="rk-field rk-field--md is-error">
        <label class="rk-label">Email</label>
        <input class="rk-input" />
        <div class="rk-error">Email is required</div>
      </div>

      <div class="rk-field rk-field--md is-disabled">
        <label class="rk-label">Company</label>
        <input class="rk-input" disabled />
      </div>

    </div>
  </section>

  <!-- ================= INPUT EXTENDED ================= -->
  <section style="margin-bottom:48px">
    <h2>Input (Icon & Password)</h2>

    <div class="rk-form" style="max-width:360px">

      <div class="rk-field rk-field--md">
        <label class="rk-label">Search</label>
        <div class="rk-input-wrap">
          <span class="rk-input__icon">🔍</span>
          <input class="rk-input" placeholder="Search user..." />
        </div>
      </div>

      <div class="rk-field rk-field--md">
        <label class="rk-label">Password</label>
        <div class="rk-input-wrap has-action">
          <input type="password" class="rk-input" />
          <span class="rk-input__action"
            onclick="
              const i=this.previousElementSibling;
              i.type = i.type === 'password' ? 'text' : 'password';
              this.textContent = i.type === 'password' ? 'Show' : 'Hide';
            ">
            Show
          </span>
        </div>
      </div>

    </div>
  </section>

  <!-- ================= FORM ================= -->
  <section style="margin-bottom:48px">
    <h2>Form</h2>

    <form class="rk-form" style="max-width:480px">

      <div class="rk-field rk-field--md">
        <label class="rk-label">Description</label>
        <textarea class="rk-textarea" placeholder="Write something..."></textarea>
        <div class="rk-helper">Max 500 characters</div>
      </div>

      <div class="rk-field rk-field--md">
        <label class="rk-label">Role</label>
        <select class="rk-select">
          <option>Select role</option>
          <option>Admin</option>
          <option>Editor</option>
        </select>
      </div>

      <div class="rk-field rk-field--md is-error">
        <label class="rk-label">Status</label>
        <select class="rk-select">
          <option>Select status</option>
        </select>
        <div class="rk-error">Status is required</div>
      </div>

      <div
