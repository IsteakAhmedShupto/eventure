const reviews = [
  {
    id: 1,
    name: "Susan Smith",
    job: "Web developer",
    img: "https://www.course-api.com/images/people/person-1.jpeg",
    text: "Recently I got married with fiance through eventure. Eventure has the best management capabilities to arrange events.",
  },
  {
    id: 2,
    name: "Anna Johnson",
    job: "Web designer",
    img: "https://www.course-api.com/images/people/person-2.jpeg",
    text: "Recently I arranged my nephews birthday through eventure. Eventure has the best management capabilities to arrange events. It is perhaps the best in the country.",
  },
  {
    id: 3,
    name: "Peter Jones",
    job: "Rock Band Owner",
    img: "https://www.course-api.com/images/people/person-4.jpeg",
    text: "Recently we arranged a concert through eventure. Eventure has the best management capabilities to arrange events.",
  },
  {
    id: 4,
    name: "Bill Anderson",
    job: "CEO at SoftWare",
    img: "https://www.course-api.com/images/people/person-3.jpeg",
    text: "Recently I arranged an event for my employees through eventure. Eventure has the best management capabilities to arrange events.",
  },
];

const img = document.querySelector("#reviews-person-img");
const author = document.querySelector("#reviews-author");
const job = document.querySelector("#reviews-job");
const info = document.querySelector("#reviews-info");

const prevBtn = document.querySelector(".reviews-prev-btn");
const nextBtn = document.querySelector(".reviews-next-btn");

let currentItem = 0;

window.addEventListener("DOMContentLoaded", function () {
  const item = reviews[currentItem];
  img.src = item.img;
  author.textContent = item.name;
  job.textContent = item.job;
  info.textContent = item.text;
});

function showPerson(person) {
  const item = reviews[person];
  img.src = item.img;
  author.textContent = item.name;
  job.textContent = item.job;
  info.textContent = item.text;
}

nextBtn.addEventListener("click", function () {
  currentItem++;
  if (currentItem > reviews.length - 1) {
    currentItem = 0;
  }
  showPerson(currentItem);
});

prevBtn.addEventListener("click", function () {
  currentItem--;
  if (currentItem < 0) {
    currentItem = reviews.length - 1;
  }
  showPerson(currentItem);
});
