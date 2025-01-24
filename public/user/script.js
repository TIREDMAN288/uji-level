document.addEventListener("DOMContentLoaded", () => {
    const logo = document.querySelector(".logo img");
    logo.addEventListener("click", () => {
      alert("Welcome to Street Striders!");
    });
  
    const buttons = document.querySelectorAll(".search-bar button, .icons a");
    buttons.forEach((button) => {
      button.addEventListener("mouseenter", () => {
        button.style.transform = "scale(1.1)";
      });
  
      button.addEventListener("mouseleave", () => {
        button.style.transform = "scale(1)";
      });
    });
  });
  let currentSlideIndex = 0;
  const slides = [
    "{{asset('image/asset -ujilevel/header.jpeg')}}", 
    "{{asset('image/asset -ujilevel/header1.png')}}", 
    "{{asset('image/asset -ujilevel/header.jpeg')}}"  
  ];

function changeSlide() {
  let imgElement = document.getElementById("slideImage");

  imgElement.style.animation = 'fadeOut 1s ease-out'; 
  setTimeout(function() {

    currentSlideIndex = (currentSlideIndex + 1) % slides.length; 
    imgElement.src = slides[currentSlideIndex];


    imgElement.style.animation = 'fadeIn 1s ease-out';
  }, 1000); 
}

setInterval(changeSlide, 5000); 

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



