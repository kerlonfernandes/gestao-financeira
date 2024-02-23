

document.addEventListener('DOMContentLoaded', function () {

    // Dom.sel("#username").addEventListener("keyup", (e) => {
    //     if (e.target.value && e.target.value != "".trim()) {

    // });

    Dom.sel("#password").addEventListener("input", (event) => {
        let password = event.target.value.trim();
        console.log(Validators.updatePasswordStrength(password));
        if (event.target.value.length != "") {
            if (event.target.value.length < 6) {
                Dom.setHtml("#password-strength-message", "A senha deve ter mais que 6 caracteres")
            }
            else {
                Dom.setHtml("#password-strength-message", "<small class='alert-box valid'><strong>Válido</strong> <i class='fa-solid fa-circle-check'></i></small>")
            }
        }

    });

    Dom.sel("#confirm-password").addEventListener("keyup", (e) => {
        let password = Dom.selVal("#password")
        if (e.target.value === password) {
            Dom.setHtml(".rsltpassconfirm", "<small class='alert-box valid'><strong>Válido <i class='fa-solid fa-circle-check'></i></strong>: As senhas conferem</small>")
        }
        else {
            Dom.setHtml(".rsltpassconfirm", "<small class='invalid-msg'><strong>Inválido <i class='fa-solid fa-circle-exclamation'></i></strong>: As senhas não conferem</small>")
        }
    })

    Dom.sel("#form-onlyu").addEventListener("submit", (e) => {
        e.preventDefault();
        const allValid = [];
        let form = Dom.serializeForm("form-onlyu");

        let usernameElement = Dom.sel("#username");
        let username = usernameElement.value.trim();

        if (username !== "") {
            Helpers.ajax({
                method: 'GET',
                url: `${base_url}/api/v1/verify_user?username=${username}`,
                dataType: 'json',
                beforeSend: function (xhr) {
                    Dom.setHtml(".rslt", "<small><div id='spinner'></div></small>")
                },
                success: function (data) {
                    if (data.affected_rows >= 1) {
                        Dom.setHtml(".rslt", "<small class='invalid-msg'><strong>Inválido <i class='fa-solid fa-circle-exclamation'></i></strong>: Já foi usado!</small>")
                    } else if (data.affected_rows < 1) {
                        if (username.length > 6 && username.trim() !== "" && Validators.validateUser(username)) {
                            Dom.setHtml(".rslt", "<small class='alert-box valid'><strong>Válido</strong> <i class='fa-solid fa-circle-check'></i></small>");
                            allValid.push(true);
                        } else {
                            Dom.setHtml(".rslt", "<small style='margin-bottom:10px; color:red;'><strong>Inválido <i class='fa-solid fa-circle-exclamation'></i></strong>: O nome de usuário não pode conter caracteres especiais.</small>");
                        }
                    }
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }

        // Não é necessário limpar a área de mensagens aqui
        // Dom.setHtml(".rslt", "");

        let email = Dom.sel("#email");
        if (email.value.trim() !== "") {
            Helpers.ajax({
                method: 'GET',
                url: `${base_url}/api/v1/verify_email?email=${email.value.trim()}`,
                dataType: 'json',
                beforeSend: function (xhr) {
                    Dom.setHtml(".rsltem", "<small><div id='spinner'></div></small>");
                },
                success: function (data) {
                    if (data.affected_rows >= 1) {
                        Dom.setHtml(".rsltem", "<small class='invalid-msg'><strong>Inválido <i class='fa-solid fa-circle-exclamation'></i></strong>: Já foi usado!</small>");
                    } else if (data.affected_rows < 1) {
                        if (Validators.validateEmail(email.value.trim())) {
                            Dom.setHtml(".rsltem", "<small class='alert-box valid'><strong>Email Válido</strong> <i class='fa-solid fa-circle-check'></i></small>");
                            allValid.push(true);

                        } else {
                            Dom.setHtml(".rsltem", "<small style='margin-bottom:10px; color:red;'><strong>Inválido <i class='fa-solid fa-circle-exclamation shake'></i></strong>: Digite um e-mail válido!</small>");
                        }
                    }
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }
        let confirmPass = Dom.selVal("#confirm-password")
        let password = Dom.selVal("#password")
        if (confirmPass === password) {
            Dom.setHtml(".rsltpassconfirm", "<small class='alert-box valid'><strong>Válido <i class='fa-solid fa-circle-exclamation'></i></strong>: AS senhas batem</small>")

            allValid.push(true)
        }
        else {
            Dom.setHtml(".rsltpassconfirm", "<small class='invalid-msg'><strong>Inválido <i class='fa-solid fa-circle-check'></i></strong>: AS senhas não conferem</small>")
        }
        
        let allVal = Object.values(allValid)
        let allTrue = allVal.every(e => e === true);
        
        for(let i = 0; i < allTrue.length; i++){
            console.log(allTrue[i])
        }
        
        
        // Helpers.ajax({
        //     method: 'GET',
        //     url: `${base_url}/views/onlyuView.php`,
        //     data: null,
        //     headers: {
        //         'Content-Type': 'application/json'
        //     },
        //     dataType: 'html',
        //     beforeSend: function (xhr) { 
        //         console.log("Enviando...")
        //     },
        //     success: function (data) { 
        //         console.log(data)
        //     },
        //     error: function (error) {
        //         console.log(error)
        //      }
        // })
    })
})






