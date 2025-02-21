document.addEventListener("DOMContentLoaded", () => {
  const logo = document.querySelector(".logo img");
  if (logo) {
      logo.addEventListener("click", () => {
          alert("Welcome to Street Striders!");
      });
  }

  const buttons = document.querySelectorAll(".search-bar button, .icons a");
  buttons.forEach((button) => {
      button.addEventListener("mouseenter", () => {
          button.style.transform = "scale(1.1)";
      });

      button.addEventListener("mouseleave", () => {
          button.style.transform = "scale(1)";
      });
  });

  let currentSlideIndex = 0;
  // const slides = @json([
  //     asset('image/asset-ujilevel/header.jpeg'),
  //     asset('image/asset-ujilevel/header1.png'),
  //     asset('image/asset-ujilevel/header.jpeg')
  // ]);

  function changeSlide() {
      let imgElement = document.getElementById("slideImage");
      if (!imgElement) return;

      imgElement.style.opacity = "0"; 

      setTimeout(() => {
          currentSlideIndex = (currentSlideIndex + 1) % slides.length;
          imgElement.src = slides[currentSlideIndex];
          imgElement.style.opacity = "1"; 
      }, 1000);
  }

  setInterval(changeSlide, 5000);
});

document.addEventListener("DOMContentLoaded", () => {
  const incrementBtn = document.querySelector(".increment");
  const decrementBtn = document.querySelector(".decrement");
  const quantityInput = document.getElementById("quantity");
  const stockInfo = document.querySelector(".stock");
  const priceDisplay = document.querySelector(".subtotal .price");

  const pricePerItem = 100000; // Harga satuan

  // Increment Button
  incrementBtn.addEventListener("click", () => {
    let quantity = parseInt(quantityInput.value);
    if (quantity < 549) {
      quantity++;
      quantityInput.value = quantity;
      updateSubtotal(quantity);
    }
  });

  // Decrement Button
  decrementBtn.addEventListener("click", () => {
    let quantity = parseInt(quantityInput.value);
    if (quantity > 1) {
      quantity--;
      quantityInput.value = quantity;
      updateSubtotal(quantity);
    }
  });

  // Update Subtotal
  function updateSubtotal(quantity) {
    const subtotal = quantity * pricePerItem;
    priceDisplay.textContent = `Rp ${subtotal.toLocaleString("id-ID")}`;
  }

  // Input Validation
  quantityInput.addEventListener("input", () => {
    let quantity = parseInt(quantityInput.value);
    if (isNaN(quantity) || quantity < 1) {
      quantity = 1;
    } else if (quantity > 549) {
      quantity = 549;
    }
    quantityInput.value = quantity;
    updateSubtotal(quantity);
  });
});

document.addEventListener('DOMContentLoaded', function () {
  const heroImage = document.querySelector('.hero-image img');
  const heroText = document.querySelector('.hero-text');
  const ctaButton = document.querySelector('.cta-button');

  setTimeout(() => {
      heroImage.classList.add('show-image');
      heroText.classList.add('show-text');
      ctaButton.classList.add('show-button');
  }, 300); 
});

document.addEventListener('DOMContentLoaded', function () {
  const categoryCards = document.querySelectorAll('.category-card');
  
  categoryCards.forEach((card, index) => {
      setTimeout(() => {
          card.classList.add('show');
      }, 200 * index); 
  });
});

// pesanan
let pesananItems = [
  {
      id: 3,
      name: 'Sepatu dewasa pria dan wanita',
      brand: 'Nike',
      price: 100000,
      quantity: 1,
      size: 45,
      image: '/api/placeholder/80/80'
  },
  {
      id: 2,
      name: 'Sepatu dewasa pria dan wanita',
      brand: 'Nike',
      price: 100000,
      quantity: 2,
      size: 41,
      image: '/api/placeholder/80/80'
  }
];

// Format number to currency
function formatCurrency(number) {
  return new Intl.NumberFormat('id-ID').format(number);
}

// Update quantity of an item
function updateQuantity(id, change) {
  const item = pesananItems.find(item => item.id === id);
  if (item) {
      item.quantity = Math.max(1, item.quantity + change);
      renderPesanan();
      updateSummary();
  }
}

// Remove item from cart
function removeItem(id) {
  pesananItems = pesananItems.filter(item => item.id !== id);
  renderPesanan();
  updateSummary();
}

// Render cart items
function renderPesanan() {
  const pesananContainer = document.getElementById('pesananItems');
  pesananContainer.innerHTML = pesananItems.map(item => `
      <div class="pesanan-item">
          <input type="checkbox" class="pesanan-checkbox">
          <img src="${item.image}" alt="${item.name}" class="pesanan-image">
          <div class="pesanan-details">
              <div class="pesanan-price">Rp ${formatCurrency(item.price)}</div>
              <div class="pesanan-brand">${item.brand}</div>
              <div class="pesanan-name">${item.name}</div>
              <div class="pesanan-size">Size: ${item.size}</div>
              <div class="pesanan-quantity">
                  <button class="pesanan-btn" onclick="updateQuantity(${item.id}, -1)">-</button>
                  <span class="pesanan-value">${item.quantity}</span>
                  <button class="pesanan-btn" onclick="updateQuantity(${item.id}, 1)">+</button>
              </div>
          </div>
          <div class="pesanan-total">
              <div>Rp ${formatCurrency(item.price * item.quantity)}</div>
              <span class="pesanan-remove" onclick="removeItem(${item.id})">Hapus</span>
          </div>
      </div>
  `).join('');
}

// Update summary calculations
function updateSummary() {
  const subtotal = pesananItems.reduce((sum, item) => sum + (item.price * item.quantity), 0);
  const shipping = 10000;
  const total = subtotal + shipping;

  document.getElementById('subtotal').textContent = `Rp ${formatCurrency(subtotal)}`;
  document.getElementById('total').textContent = `Rp ${formatCurrency(total)}`;
}

// Initial render
renderPesanan();
updateSummary();

// end pesanan


