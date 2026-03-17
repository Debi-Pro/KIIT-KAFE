/* ═══════════════════════════════════════════
   MENU
═══════════════════════════════════════════ */
function renderMenu() {
  // Build categories
  const cs = document.getElementById('cat-scroll');
  if (!cs.innerHTML) {
    CATS.forEach(c => {
      const d = document.createElement('div');
      d.className = 'cat-item' + (c === activeCategory ? ' active' : '');
      d.innerHTML = `<div class="cat-img">${CAT_EMOJI[c]||'🍽'}</div><div class="cat-label">${c}</div>`;
      d.onclick = () => {
        document.querySelectorAll('.cat-item').forEach(x => x.classList.remove('active'));
        d.classList.add('active');
        activeCategory = c;
        renderMenuGrid();
        document.getElementById('menu-section-label').textContent = c === 'All' ? 'Top rated for you' : c;
      };
      cs.appendChild(d);
    });
  }
  renderMenuGrid();
}

function filterMenuItems() {
  renderMenuGrid();
}

function renderMenuGrid() {
  const q = document.getElementById('menu-search-input')?.value.toLowerCase() || '';
  const filtered = MENU.filter(item => {
    const matchCat = activeCategory === 'All' || item.cat === activeCategory;
    const matchQ = !q || item.name.toLowerCase().includes(q) || item.sub.toLowerCase().includes(q);
    return matchCat && matchQ;
  });
  const grid = document.getElementById('items-grid');
  grid.innerHTML = filtered.map(item => {
    const inCart = cart.find(c => c.id === item.id);
    const imgHtml = item.img
      ? `<img src="${item.img}" alt="${item.name}" loading="lazy" onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">`
      : '';
    return `<div class="item-card">
      <div class="item-img">
        ${imgHtml}
        <span style="display:${item.img?'none':'flex'};font-size:52px;">${item.emoji}</span>
        ${item.rating ? `<div class="rating-badge">⭐ ${item.rating}</div>` : ''}
        <div class="time-badge">⏱ ${item.time}</div>
      </div>
      <div class="item-body">
        <div class="item-name">${item.name}</div>
        <div class="item-sub">${item.sub}</div>
        <div class="item-footer">
          <div class="item-price">₹${item.price}</div>
          <button class="add-btn ${inCart?'added':''}" onclick="addToCartById(${item.id})">${inCart?'✓':'+'}</button>
        </div>
      </div>
    </div>`;
  }).join('');
  updateCartIndicators();
}
