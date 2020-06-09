jQuery(document).ready(function () {
  var scrollTopBtn = document.querySelector("#scrollToTop");

  // window.addEventListener("scroll", function () {
  //   if (this.window.pageYOffset > 450) { // show btn
  //     this.setTimeout(function () {
  //       scrollTopBtn.style.display = "block";
  //     }, 250);
  //   } else { // hide btn
  //     this.setTimeout(function () {
  //       scrollTopBtn.style.display = "none";
  //     }, 250);
  //   }
  // });
  window.addEventListener("scroll", function () {
    if (this.window.pageYOffset > 900) {
      if (!scrollTopBtn.classList.contains("btn-entrance")) {
        scrollTopBtn.classList.remove("btn-exit");
        scrollTopBtn.classList.add("btn-entrance");
        scrollTopBtn.style.display = "block";
      }
    } else {
      if (scrollTopBtn.classList.contains("btn-entrance")) {
        scrollTopBtn.classList.remove("btn-entrance");
        scrollTopBtn.classList.add("btn-exit");
        setTimeout(function () {
          scrollTopBtn.style.display = "none";
        }, 250);
      }
    }
  });

  scrollTopBtn.addEventListener("click", function () {
    // window.scroll(0, 0);
    // window.scroll({
    // 	top: 0,
    // 	left: 0,
    // 	behavior: "smooth"
    // });
    jQuery("html, body").animate(
      {
        scrollTop: 0,
      },
      "slow"
    );
  });
});
