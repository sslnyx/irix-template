require("./bootstrap");

// import * as home from "./pages/home";
// import nav from "./components/nav";

const MY_SITE = {
  // you have one namespace-object where you hold all your stuff

  components: ["nav"],
  init_components(el) {
    require(`./components/${el}`);
  },
  init(el) {
    require(`./pages/${el}`);
  },
};

// document.on('ready', MY_SITE.start); // here we assume some random js framework

(function () {
  // your page initialization code here
  // the DOM will be available here
  MY_SITE.components.forEach((el) => {
    MY_SITE.init_components(el);
  });
  MY_SITE.init(page);

})();
