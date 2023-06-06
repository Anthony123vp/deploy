// var $loginMsg = $(".loginMsg"),
//   $login = $(".login"),
//   $signupMsg = $(".signupMsg"),
//   $signup = $(".signup"),
//   $frontbox = $(".frontbox");

// $("#switch1").on("click", function () {
//   $loginMsg.toggleClass("visibility");
//   $frontbox.addClass("moving");
//   $signupMsg.toggleClass("visibility");

//   $signup.toggleClass("hide");
//   $login.toggleClass("hide");
// });

// $("#switch2").on("click", function () {
//   $loginMsg.toggleClass("visibility");
//   $frontbox.removeClass("moving");
//   $signupMsg.toggleClass("visibility");

//   $signup.toggleClass("hide");
//   $login.toggleClass("hide");
// });

// setTimeout(function () {
//   $("#switch1").click();
// }, 1000);

// setTimeout(function () {
//   $("#switch2").click();
// }, 3000);

const loginMsg = document.querySelector(".loginMsg");
const login = document.querySelector(".login");
const signupMsg = document.querySelector(".signupMsg");
const signup = document.querySelector(".signup");
const frontbox = document.querySelector(".frontbox");

document.querySelector("#switch1").addEventListener("click", function () {
  loginMsg.classList.toggle("visibility");
  frontbox.classList.add("moving");
  signupMsg.classList.toggle("visibility");

  signup.classList.toggle("hide");
  login.classList.toggle("hide");
});

document.querySelector("#switch2").addEventListener("click", function () {
  loginMsg.classList.toggle("visibility");
  frontbox.classList.remove("moving");
  signupMsg.classList.toggle("visibility");

  signup.classList.toggle("hide");
  login.classList.toggle("hide");
});

setTimeout(function () {
  document.querySelector("#switch1").click();
}, 1000);

setTimeout(function () {
  document.querySelector("#switch2").click();
}, 3000);
