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
  $("a.main-nav").click(function (e) {
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

$(document).ready(function () {
  $("iframe").toggle("slow");
  $("#show-map").click(function () {
    $("iframe").toggle("slow");
    if ($("#show-map").text() == "Ukryj mapę") {
      $("#show-map").text("Pokaż mapę");
    } else {
      $("#show-map").text("Ukryj mapę");
    }
  });

  $(".gallery-item").click(function () {
    $(".gallery-item").toggleClass("big-photo");
    if ($(this).hasClass("big-photo")) {
      $("html, body").animate(
        {
          scrollTop: $("#galeria").offset().top - 75,
          duration: 0,
        },
        1000
      );
    }
  });

  $("#myPhotoCarousel").bind("slide.bs.carousel", function () {
    // $(".gallery-item").removeClass("big-photo");
  });

  $(".nav-link").click(function () {
    $(".nav-link").removeClass("active");
    $(this).addClass("active");
    if ($(this).hasClass("drinks")) {
      $("#drinks").removeClass("hide");
      $("#cakes").addClass("hide");
    } else if ($(this).hasClass("cakes")) {
      $("#cakes").removeClass("hide");
      $("#drinks").addClass("hide");
    }
  });
});
