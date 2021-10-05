const loginText = document.querySelector(".title-text.login");
    const loginForm = documetn.querySelector("form.login");
    const loginBtn = documetn.querySelector("label.login");
    const signupBtn = documetn.querySelector("label.signup");
    const signupLink = documetn.querySelector("form .signup-link a");
    // ボータンスピードコントロール
    signupBtn.onclick = (()=>{
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
      });
      loginBtn.onclick = (()=>{
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
      });
      signupLink.onclick = (()=>{
        signupBtn.click();
        return false;
      });
