"use strict";

function showSignIn() {
    let signIn = `
        <form action="#" class="singin" method="POST">
            <div style="height: 40px; display: flex; align-items: center; justify-content: center;">
                <img src="./public/imgs/close.png" class="closeShowSignin" onclick="document.querySelector('.singin').remove();">
                <p style="font-weight: 800; font-size: 0.8rem;">Введите данные</p>
            </div>

            <div class="signinInputs">
                <input type="text" placeholder="Имя пользователя или email" style="border-bottom: 1px solid var(--grayTwoColor);border-top-left-radius: 9px;border-top-right-radius: 9px;">
                <input type="password" placeholder="Пароль" style="border-bottom-left-radius: 9px;border-bottom-right-radius: 9px;">
                <img src="./public/imgs/view.png" class="viewPass" onclick="this.previousSibling.previousSibling.type='text'">
            </div>

            <div style="margin-top: 15px;">
                <button class="btn-gray">Войти</button>
            </div>

            <div>
                <a href="#" class="link">Забыли пароль?</a>
            </div>
        </form>
    `;
    document.body.innerHTML += signIn;
}
