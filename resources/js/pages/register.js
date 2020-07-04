console.log("reg injected");

var cleave = new Cleave("[type='phone']", {
  numericOnly: true,
  blocks: [0, 3, 3, 4],
  delimiters: ["(", ") ", "-"],
});
