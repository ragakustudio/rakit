<h1>RAKIT Button Test</h1>

<!-- Primary solid -->
<button class="rk-btn rk-btn--primary rk-btn--solid rk-btn--md">
  Save
</button>

<!-- Danger outline -->
<button class="rk-btn rk-btn--danger rk-btn--outline rk-btn--sm">
  Delete
</button>

<!-- Neutral ghost -->
<button class="rk-btn rk-btn--neutral rk-btn--ghost rk-btn--md">
  Cancel
</button>

<!-- Icon only -->
<button class="rk-btn rk-btn--primary rk-btn--ghost rk-btn--icon" aria-label="Close">
  ✕
</button>

<h2>RAKIT Input Test</h2>

<div class="rk-field rk-field--md" style="max-width:320px">
  <label class="rk-label" for="name">Name</label>
  <input id="name" type="text" class="rk-input" placeholder="Your name" />
</div>

<br>

<div class="rk-field rk-field--md is-error" style="max-width:320px">
  <label class="rk-label" for="email">Email</label>
  <input id="email" type="email" class="rk-input" />
  <div class="rk-error">Email is required</div>
</div>

<br>

<div class="rk-field rk-field--md is-disabled" style="max-width:320px">
  <label class="rk-label" for="company">Company</label>
  <input id="company" type="text" class="rk-input" disabled />
</div>

<br>

<button class="rk-btn rk-btn--primary rk-btn--solid rk-btn--md">
  Submit
</button>

<div class="rk-field rk-field--md" style="max-width:320px">
  <label class="rk-label" for="search">Search</label>

  <div class="rk-input-wrap">
    <span class="rk-input__icon">🔍</span>
    <input id="search" type="search" class="rk-input" placeholder="Search user..." />
  </div>
</div>

<div class="rk-field rk-field--md" style="max-width:320px">
  <label class="rk-label" for="password">Password</label>

  <div class="rk-input-wrap has-action">
    <input id="password" type="password" class="rk-input" />
    <span class="rk-input__action" onclick="
      const i=this.previousElementSibling;
      i.type = i.type === 'password' ? 'text' : 'password';
      this.textContent = i.type === 'password' ? 'Show' : 'Hide';
    ">Show</span>
  </div>
</div>

<h2>RAKIT Form Test</h2>

<div class="rk-field rk-field--md" style="max-width:400px">
  <label class="rk-label" for="desc">Description</label>
  <textarea id="desc" class="rk-textarea" placeholder="Write something..."></textarea>
  <div class="rk-helper">Max 500 characters</div>
</div>

<br>

<div class="rk-field rk-field--md" style="max-width:320px">
  <label class="rk-label" for="role">Role</label>
  <select id="role" class="rk-select">
    <option value="">Select role</option>
    <option>Admin</option>
    <option>Editor</option>
    <option>Viewer</option>
  </select>
</div>

<br>

<div class="rk-field rk-field--md is-error" style="max-width:320px">
  <label class="rk-label" for="status">Status</label>
  <select id="status" class="rk-select">
    <option value="">Select status</option>
  </select>
  <div class="rk-error">Status is required</div>
</div>

<br>

<button class="rk-btn rk-btn--primary rk-btn--solid rk-btn--md">
  Save
</button>

<form class="rk-form" style="max-width:480px">

  <div class="rk-field rk-field--md">
    <label class="rk-label">Name</label>
    <input class="rk-input" />
  </div>

  <div class="rk-field rk-field--md">
    <label class="rk-label">Email</label>
    <input class="rk-input" />
  </div>

  <div class="rk-form-actions">
    <button class="rk-btn rk-btn--neutral rk-btn--ghost rk-btn--md">Cancel</button>
    <button class="rk-btn rk-btn--primary rk-btn--solid rk-btn--md">Save</button>
  </div>

</form>

<form class="rk-form" style="max-width:600px">

  <div class="rk-field rk-field--inline rk-field--md">
    <label class="rk-label">Site Name</label>
    <input class="rk-input" />
  </div>

  <div class="rk-field rk-field--inline rk-field--md">
    <label class="rk-label">Timezone</label>
    <select class="rk-select"></select>
  </div>

</form>

<form class="rk-form rk-form--grid" style="max-width:720px">

  <div class="rk-field rk-field--md">
    <label class="rk-label">First Name</label>
    <input class="rk-input" />
  </div>

  <div class="rk-field rk-field--md">
    <label class="rk-label">Last Name</label>
    <input class="rk-input" />
  </div>

</form>
