<div class="rk-page">

  <!-- PAGE HEADER -->
  <div class="rk-page__header">
    <h1 class="rk-page__title">Dashboard</h1>
    <div class="rk-page__breadcrumb">Home / Dashboard</div>
  </div>

  <div class="rk-page__body">

    <!-- ===============================
         SUMMARY METRICS
    ================================ -->
    <section class="rk-section rk-section--summary">
      <div class="rk-section__content">
        <div class="rk-metrics">

          <div class="rk-metric">
            <div class="rk-metric__label">Pageviews</div>
            <div class="rk-metric__value">12,345</div>
            <div class="rk-metric__meta">Last 7 days</div>
          </div>

          <div class="rk-metric">
            <div class="rk-metric__label">Sessions</div>
            <div class="rk-metric__value">3,210</div>
          </div>

          <div class="rk-metric">
            <div class="rk-metric__label">CTA Clicks</div>
            <div class="rk-metric__value">214</div>
          </div>

        </div>
      </div>
    </section>

    <!-- ===============================
         LOADING STATE (REFERENCE)
    ================================ -->
    <section class="rk-section">
      <div class="rk-section__header">
        <h2 class="rk-section__title">Loading State</h2>
      </div>

      <div class="rk-section__content">
        <div class="rk-state rk-state--loading">
          <div class="rk-skeleton rk-skeleton--title"></div>
          <div class="rk-skeleton rk-skeleton--line"></div>
          <div class="rk-skeleton rk-skeleton--line"></div>
        </div>
      </div>
    </section>

    <!-- ===============================
         EMPTY STATE (REFERENCE)
    ================================ -->
    <section class="rk-section">
      <div class="rk-section__header">
        <h2 class="rk-section__title">Empty State</h2>
      </div>

      <div class="rk-section__content">
        <div class="rk-state rk-state--empty">
          <div class="rk-state__title">Belum ada data</div>
          <div class="rk-state__desc">
            Tidak ada data untuk periode ini.
          </div>
        </div>
      </div>
    </section>

    <!-- ===============================
         TOP PAGES (REAL TABLE)
    ================================ -->
    <section class="rk-section rk-section--primary">
      <div class="rk-section__header">
        <h2 class="rk-section__title">Top Pages</h2>
      </div>

      <div class="rk-section__content">
        <div class="rk-table-wrap">
          <table class="rk-table">
            <thead>
              <tr>
                <th>Page</th>
                <th class="is-numeric">Views</th>
                <th class="is-numeric">Visitors</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>/</td>
                <td class="is-numeric">1,245</td>
                <td class="is-numeric">980</td>
              </tr>
              <tr>
                <td>/pricing</td>
                <td class="is-numeric">402</td>
                <td class="is-numeric">311</td>
              </tr>
              <tr>
                <td class="is-muted">/contact</td>
                <td class="is-numeric is-muted">27</td>
                <td class="is-numeric is-muted">19</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <!-- ===============================
         TOP EVENTS
    ================================ -->
    <section class="rk-section rk-section--secondary">
      <div class="rk-section__header">
        <h2 class="rk-section__title">Top Events</h2>
      </div>

      <div class="rk-section__content">
        <div class="rk-table-wrap">
          <table class="rk-table">
            <thead>
              <tr>
                <th>Event</th>
                <th class="is-numeric">Count</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>page_view</td>
                <td class="is-numeric">3,421</td>
              </tr>
              <tr>
                <td>cta_click</td>
                <td class="is-numeric">214</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <!-- ===============================
         SEMANTIC + VARIANT
    ================================ -->
    <section class="rk-section">
      <div class="rk-section__header">
        <h2 class="rk-section__title">Semantic & Variant</h2>
      </div>

      <div class="rk-section__content">
        <div style="display:flex;gap:12px;flex-wrap:wrap">

          <button class="rk-btn rk-btn--primary rk-btn--solid rk-btn--md">
            Primary Solid
          </button>

          <button class="rk-btn rk-btn--primary rk-btn--outline rk-btn--md">
            Primary Outline
          </button>

          <button class="rk-btn rk-btn--neutral rk-btn--solid rk-btn--md">
            Neutral Solid
          </button>

          <button class="rk-btn rk-btn--neutral rk-btn--ghost rk-btn--md">
            Neutral Ghost
          </button>

          <button class="rk-btn rk-btn--danger rk-btn--solid rk-btn--md">
            Danger Solid
          </button>

          <button class="rk-btn rk-btn--danger rk-btn--outline rk-btn--md">
            Danger Outline
          </button>

        </div>
      </div>
    </section>

    <!-- ===============================
         CONTENT PATTERN
    ================================ -->
    <section class="rk-section">
      <div class="rk-section__header">
        <h2 class="rk-section__title">Content Pattern</h2>
      </div>

      <div class="rk-section__content">
        <div style="display:flex;gap:12px;flex-wrap:wrap">

          <!-- Text only -->
          <button class="rk-btn rk-btn--primary rk-btn--solid rk-btn--md">
            Save
          </button>

          <!-- Leading icon -->
          <button class="rk-btn rk-btn--primary rk-btn--solid rk-btn--md">
            <span class="rk-btn__icon">➕</span>
            <span class="rk-btn__label">Add User</span>
          </button>

          <!-- Trailing icon -->
          <button class="rk-btn rk-btn--neutral rk-btn--ghost rk-btn--md">
            <span class="rk-btn__label">Next</span>
            <span class="rk-btn__icon">→</span>
          </button>

          <!-- Icon only -->
          <button
            class="rk-btn rk-btn--neutral rk-btn--ghost rk-btn--icon"
            aria-label="Close">
            ✕
          </button>

          <!-- Text button -->
          <button class="rk-btn rk-btn--neutral rk-btn--ghost rk-btn--sm">
            View detail
          </button>

        </div>
      </div>
    </section>

    <!-- ===============================
         SIZE
    ================================ -->
    <section class="rk-section">
      <div class="rk-section__header">
        <h2 class="rk-section__title">Size</h2>
      </div>

      <div class="rk-section__content">
        <div style="display:flex;gap:12px;align-items:center;flex-wrap:wrap">

          <button class="rk-btn rk-btn--primary rk-btn--solid rk-btn--sm">
            Small
          </button>

          <button class="rk-btn rk-btn--primary rk-btn--solid rk-btn--md">
            Medium
          </button>

          <button class="rk-btn rk-btn--primary rk-btn--solid rk-btn--lg">
            Large
          </button>

        </div>
      </div>
    </section>

    <!-- ===============================
         STATE
    ================================ -->
    <section class="rk-section">
      <div class="rk-section__header">
        <h2 class="rk-section__title">State</h2>
      </div>

      <div class="rk-section__content">
        <div style="display:flex;gap:12px;flex-wrap:wrap">

          <!-- Disabled -->
          <button class="rk-btn rk-btn--primary rk-btn--solid rk-btn--md" disabled>
            Disabled
          </button>

          <!-- Loading -->
          <button class="rk-btn rk-btn--primary rk-btn--solid rk-btn--md is-loading">
            Loading
          </button>

        </div>
      </div>
    </section>

  </div>
</div>