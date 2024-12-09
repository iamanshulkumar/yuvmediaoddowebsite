document.addEventListener("DOMContentLoaded", function (e) {
  document.querySelector(".gallery-wrapper") &&
    (t = new Isotope(".gallery-wrapper", {
      itemSelector: ".element-item",
      layoutMode: "fitRows",
    }));
  var t,
    r = document.querySelector(".categories-filter"),
    r =
      (r &&
        r.addEventListener("click", function (e) {
          matchesSelector(e.target, "li a") &&
            (e = e.target.getAttribute("data-filter")) &&
            t.arrange({ filter: e });
        }),
      document.querySelectorAll(".categories-filter"));
  r &&
    Array.from(r).forEach(function (e) {
      var t;
      (t = e).addEventListener("click", function (e) {
        matchesSelector(e.target, "li a") &&
          (t.querySelector(".active").classList.remove("active"),
          e.target.classList.add("active"));
      });
    });
});
var lightbox = GLightbox({ selector: ".image-popup", title: !1 });
