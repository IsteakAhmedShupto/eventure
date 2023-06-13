function show_hide_pass() {
  const pass_word = document.querySelector(".login-password");

  if (pass_word.type === "password") {
    pass_word.type = "text";
  } else {
    pass_word.type = "password";
  }
}
