function showError(msg) {
    createStylesError();
    let errorBlock = document.createElement('div');
    errorBlock.classList.add('error');
    document.body.appendChild(errorBlock);
    errorBlock.classList.add('errorAnim');
    errorBlock.style.display = 'block';
    errorBlock.setAttribute('onclick', 'closeError(this);');
    errorBlock.innerHTML = msg;
}
function createStylesError() {
    let errorStyles = document.createElement('style');
    errorStyles.innerText = `.error {
        display: none;
        box-sizing: border-box;
        position: fixed;
        top: 10px;
        margin: 20px;
        padding: 15px 30px;
        border-radius: 4px;
        background: repeating-linear-gradient(45deg,#df543b,#df543b 10px,#e05c45 10px,#e05c45 20px);
        width: calc(100vw - 40px);
        font-weight: 600;
        color:#333;
        text-align: center;
        animation: showError 0.4s linear;
        z-index: 99999999;
        box-shadow: 0 0 10px rgb(42, 39, 39);
    }
    @keyframes showError {
        from {
            top: -200px;
        }
        to {
            top: 10px;
        }
    }
    .errorAnim {
        animation: errorAnimation 1s infinite;
    }
    @keyframes errorAnimation {
        from {
            box-shadow: 0 0 0px black;
        }
        to {
            box-shadow: 0 0 30px black;
        }
    }
    @media only screen and (max-width: 1000px) {
    
    }`;
    document.head.appendChild(errorStyles);
}
function closeError(elem) {
    elem.style.top = '-200px';
    setTimeout(() => {
        elem.style.top = '10px';
        elem.style.display = 'none';
    }, 500);
}
