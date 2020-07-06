var isMobile = new MobileDetect(window.navigator.userAgent).mobile(); //initiate as false
//if desktop isMobile == null;


if (isMobile == null) {
  var scroller = new SmoothScroll({
    target: document.querySelector("#scroll-container"), // element container to scroll
    scrollEase: 0.05,
  });
} else {
  document.querySelector(".viewport").style.position = "inherit";
}
