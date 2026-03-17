/* ═══════════════════════════════════════════
   DATA STORE
═══════════════════════════════════════════ */
const MENU = [
  {id:1, name:'Coca Cola', sub:'400ml', price:40, cat:'Beverages', emoji:'🥤', rating:4.3, time:'5 min', img:'https://images.unsplash.com/photo-1554866585-cd94860890b7?w=300&q=80'},
  {id:2, name:'Cold Coffee', sub:'200ml', price:89, cat:'Coffee & Drinks', emoji:'☕', rating:4.5, time:'8 min', img:'https://images.unsplash.com/photo-1461023058943-07fcbe16d735?w=300&q=80'},
  {id:3, name:'Matcha Latte', sub:'200ml', price:99, cat:'Coffee & Drinks', emoji:'🍵', rating:4.4, time:'5 min', img:'https://images.unsplash.com/photo-1536256263959-770b48d82b0a?w=300&q=80'},
  {id:4, name:'Signature Cold Brew', sub:'300ml', price:89, cat:'Coffee & Drinks', emoji:'☕', rating:4.7, time:'5 min', img:'https://images.unsplash.com/photo-1481833761820-0509d3217039?w=300&q=80'},
  {id:5, name:'Amul Cool', sub:'200ml', price:30, cat:'Beverages', emoji:'🥛', rating:4.2, time:'3 min', img:'https://images.unsplash.com/photo-1563227812-0ea4c22e6cc8?w=300&q=80'},
  {id:6, name:'Club Sandwich', sub:'Classic', price:120, cat:'Snacks', emoji:'🥪', rating:4.3, time:'10 min', img:'https://images.unsplash.com/photo-1528735602780-2552fd46c7af?w=300&q=80'},
  {id:7, name:'Lay\'s Chile', sub:'Chips', price:20, cat:'Snacks', emoji:'🍟', rating:4.1, time:'2 min', img:'https://images.unsplash.com/photo-1566478989037-eec170784d0b?w=300&q=80'},
  {id:8, name:'Cadbury Chocolate', sub:'Dairy Milk', price:49, cat:'Snacks', emoji:'🍫', rating:4.6, time:'2 min', img:'https://images.unsplash.com/photo-1481391319762-47dff72954d9?w=300&q=80'},
  {id:9, name:'Amul Chhas', sub:'200ml', price:25, cat:'Beverages', emoji:'🥛', rating:4.0, time:'3 min', img:''},
  {id:10, name:'Donut', sub:'Oval Shape', price:45, cat:'Snacks', emoji:'🍩', rating:4.4, time:'5 min', img:'https://images.unsplash.com/photo-1551024506-0bccd828d307?w=300&q=80'},
  {id:11, name:'Pizza', sub:'4.2★ • 15 min', price:199, cat:'Hot Dogs', emoji:'🍕', rating:4.2, time:'15 min', img:'https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=300&q=80'},
  {id:12, name:'Chocolate Truffle Cake', sub:'Slice', price:79, cat:'Snacks', emoji:'🍰', rating:4.5, time:'5 min', img:'https://images.unsplash.com/photo-1578985545062-69928b1d9587?w=300&q=80'},
  {id:13, name:'KFC', sub:'4.3★ • 30 min', price:249, cat:'Hot Dogs', emoji:'🍗', rating:4.3, time:'30 min', img:'https://images.unsplash.com/photo-1626082927389-6cd097cdc6ec?w=300&q=80'},
  {id:14, name:'Patties', sub:'4.2★ • 10 min', price:89, cat:'Biryani', emoji:'🫓', rating:4.2, time:'10 min', img:'https://images.unsplash.com/photo-1568901346375-23c9450c58cd?w=300&q=80'},
  {id:15, name:'Nescafe Coffee', sub:'200ml', price:60, cat:'Coffee & Drinks', emoji:'☕', rating:4.3, time:'5 min', img:'https://images.unsplash.com/photo-1507133750040-4a8f57021571?w=300&q=80'},
  {id:16, name:'Wafers', sub:'Assorted', price:30, cat:'Wafers', emoji:'🍪', rating:4.0, time:'2 min', img:''},
  {id:17, name:'Hot Dog', sub:'Classic', price:89, cat:'Hot Dogs', emoji:'🌭', rating:4.2, time:'8 min', img:'https://images.unsplash.com/photo-1612392062422-7f3bf5a0ffe6?w=300&q=80'},
  {id:18, name:'Chicken Biryani', sub:'Full Plate', price:180, cat:'Biryani', emoji:'🍛', rating:4.5, time:'20 min', img:'https://images.unsplash.com/photo-1589302168068-964664d93dc0?w=300&q=80'},
];

const CATS = ['All','Beverages','Wafers','Snacks','Coffee & Drinks','Hot Dogs','Biryani'];
const CAT_EMOJI = {All:'🌟',Beverages:'🥤',Wafers:'🍪',Snacks:'🍟','Coffee & Drinks':'☕','Hot Dogs':'🌭',Biryani:'🍛'};

let cart = [];
let currentUser = null;
let selectedPayMethod = 'upi';
let currentOrderId = '';
let discount = 0;
let activeCategory = 'All';

/* ═══════════════════════════════════════════
   NAVIGATION
═══════════════════════════════════════════ */
function nav(page) {
  document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
  const el = document.getElementById('page-' + page);
  el.classList.add('active');
  window.scrollTo(0,0);
  if (page === 'menu') renderMenu();
  if (page === 'cart') renderCart();
  if (page === 'payment') renderPaymentPage();
}

/* ═══════════════════════════════════════════
   UTILS
═══════════════════════════════════════════ */
function toast(msg) {
  const el = document.getElementById('toast-el');
  el.textContent = msg;
  el.classList.add('show');
  clearTimeout(window._t);
  window._t = setTimeout(() => el.classList.remove('show'), 2600);
}

function closeModal(id) { document.getElementById(id).classList.remove('show'); }

document.querySelectorAll('.modal-overlay').forEach(el => {
  el.addEventListener('click', e => { if (e.target === el) el.classList.remove('show'); });
});
