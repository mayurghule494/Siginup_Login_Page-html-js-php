document.addEventListener("DOMContentLoaded", function() {
  const wrapper = document.querySelector(".wrapper");
  const signupHeader = document.querySelector(".signup header");
  const loginHeader = document.querySelector(".login header");

  loginHeader.addEventListener("click", function() {
    wrapper.classList.add("active");
  });

  signupHeader.addEventListener("click", function() {
    wrapper.classList.remove("active");
  });
});

