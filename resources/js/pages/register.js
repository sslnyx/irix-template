console.log("reg injected");

var cleave = new Cleave("[type='phone']", {
  numericOnly: true,
  blocks: [0, 3, 3, 4],
  delimiters: ["(", ") ", "-"],
});

document.querySelector("#reg-form").addEventListener("submit", () => {
  event.preventDefault();

  const formdata = {};

  //creat formdata
  document.querySelectorAll(".form-group").forEach((el) => {
    formdata[el.childNodes[1].name] = el.childNodes[1].value;
  });

  grecaptcha.ready(function () {
    grecaptcha
      .execute(siteKey, { action: "contact_form" })
      .then(function (token) {
        // Add your logic to submit to your backend server here.
        // console.log(formdata);
        formdata["token"] = token;

        backendFn(formdata);
      });
  });
});

const backendFn = function (params) {
  axios
    .post("/registrants/new", params)
    .then(function (response) {
      console.log(response);
    })
    .catch((error) => {
      console.log(error.response);
    });
};
