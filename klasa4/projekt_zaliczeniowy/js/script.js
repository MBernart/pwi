window.addEventListener("scroll", () => {
  header = document.getElementsByTagName("header")[0];
  logo = document.getElementById("logo-img");
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    header.style.height = "75px";
  } else {
    header.style.height = "100px";
  }
});

function showOnScroll(selectorStatement) {
  var windowHeight = $(window).height();

  //   console.log($(selectorStatement));
  $(selectorStatement).each(function () {
    var myObjTop = $(this).offset().top;

    // console.log($(this));

    var topOfWindow = $(window).scrollTop();
    if (topOfWindow + windowHeight - 150 > myObjTop) {
      $(this).addClass("fadeIn");
    }
  });
}

$(document).ready(function () {
  showOnScroll("section");
});

$(window).scroll(function () {
  showOnScroll("section");
});

$(function () {
  $("a").click(function (e) {
    e.preventDefault();
    var target = $(this.hash);
    var scrollTo = target.offset().top;
    if (scrollTo < 130) {
      scrollTo -= 130;
    } else {
      scrollTo -= 75;
    }
    $("html, body").animate(
      {
        scrollTop: scrollTo,
      },
      1000
    );
    return false;
  });
});
