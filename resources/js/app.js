require("./bootstrap");

// import * as home from "./pages/home";
// import nav from "./components/nav";

const MY_SITE = {
  // you have one namespace-object where you hold all your stuff

  pages: {
    home: {
      // inside you have smaller chunks, for specific pages or widgets
      // this one is for main page
      _init: function () {
        require("./pages/home");
      },
    },
    // but there are other pages
    register: {},
  },

  components: {
    // or widgets
    nav: {
      _init: function () {
        require("./components/nav");
      },
    },
    // and maybe you want to put common functions into dedicated block
    global_utilities: {},
    // and of course - the loader
  },

  start_page(el) {
    console.log(this.pages[el]);
  },
};

// document.on('ready', MY_SITE.start); // here we assume some random js framework

(function () {
  // your page initialization code here
  // the DOM will be available here
  MY_SITE.start_page(page);
  Object.keys(MY_SITE.components).forEach((el) => {
    console.log(el);
    // MY_SITE.start(page);
  });
  //   MY_SITE.start(page);
  //   MY_SITE.nav;
})();
