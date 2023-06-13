const offers = [
  {
    id: 1,
    icon: `<i class="fa-solid fa-cake-candles"></i>`,
    discount: "-13%",
    title: "Birthdays",
    texts: `For the birthday event special, you can get 20% off your entire
    purchase of 100 dollars or more`,
  },
  {
    id: 2,
    icon: `<i class="fa-solid fa-music"></i>`,
    discount: "-15%",
    title: "Concerts",
    texts: `For the concert event special, you can get 20% off your entire
    purchase of 100 dollars or more`,
  },
  {
    id: 3,
    icon: `<i class="fa-solid fa-heart"></i>`,
    discount: "-25%",
    title: "Marriage",
    texts: `For the marriage event special, you can get 30% off your entire
    purchase of 130 dollars or more`,
  },
  {
    id: 4,
    icon: `<i class="fa-regular fa-futbol"></i>`,
    discount: "-15%",
    title: "Sports",
    texts: `For the sports event special, you can get 23% off your entire
    purchase of 150 dollars or more`,
  },
];

const offers_text_wrapper = document.querySelector(".offers-discount-groups");

function LoadOffersText(offers) {
  let offers_texts = offers.map(function (item) {
    return ` 
      <section>
        <div class="icons-container">
          <h3 class="icon">${item.icon}</h3>
          <p>${item.discount}</p>
        </div>
        <div class="texts">
          <h3>${item.title}</h3>
          <p>
            ${item.texts}
          </p>
        </div>
      </section> 
        `;
  });

  offers_texts = offers_texts.join("");

  offers_text_wrapper.innerHTML = offers_texts;
}

window.addEventListener("DOMContentLoaded", LoadOffersText(offers));
