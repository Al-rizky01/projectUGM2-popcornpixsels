const scrollButton = document.querySelector(".page-up");

// Fungsi scroll ke atas
const scrollToTop = () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
};

// Tambahkan event listener click
scrollButton.addEventListener("click", scrollToTop);
