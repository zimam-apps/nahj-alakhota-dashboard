// header
const headerConfig = {
  menuItems: [
    { to: "#about-section", label: "عن على خطاه" },
    { to: "#goals-section", label: "أهداف المنصة" },
    { to: "#faqs-section", label: "الأسئلة الشائعة" },
    { to: "#conditions-section", label: "الشروط والمتطلبات" },
    { to: "#contribution-section", label: "مساهمتنا" },
  ],
  init: function () {
    const nav = document.querySelector(".header-nav");
    const mobileNav = document.querySelector(
      "header .mobileNav .nav-container"
    );
    const listItem = document.querySelector(
      "header .mobileNav .nav-container .list_item"
    );
    this.menuItems.forEach((item) => {
      const anchor = document.createElement("a");
      anchor.href =
        window.location.pathname == "/join-request.html"
          ? `/index.html${item.to}`
          : item.to; //item.to;
      anchor.textContent = item.label;
      nav.appendChild(anchor);
    });

    this.menuItems.forEach((item) => {
      const newItem = listItem.cloneNode(true);
      newItem.setAttribute("href", `/index.html${item.to}`);
      newItem.querySelector("span").innerText = item.label;
      mobileNav.prepend(newItem);
    });
  },
};

document.addEventListener("DOMContentLoaded", () => {
  const mobileNav = document.querySelector("header .mobileNav");
  headerConfig.init();
  const listButton = document.querySelector("header .list-button");
  listButton.addEventListener("click", () => {
    if (mobileNav.classList.contains("fadeIn")) {
      mobileNav.classList.remove("fadeIn");
      listButton.classList.remove("close");
    } else {
      mobileNav.classList.add("fadeIn");
      listButton.classList.add("close");
    }
  });
  //
  window.addEventListener("scroll", (e) => {
    if (window.scrollY > 80) {
      document.querySelector("header").classList.add("scroll");
    } else {
      document.querySelector("header").classList.remove("scroll");
    }
  });
});
