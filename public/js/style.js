// const buttons = document.querySelectorAll("button");

// buttons.forEach(button => {
//     button.addEventListener('click',rippleEffect);
// });

// function rippleEffect(e) {
//     let circle = document.createElement('div');
//     this.appendChild(circle);
//     circle.classList.add('ripple')
//     circle.style.top = e.clientY - this.offsetTop + 'px';
//     circle.style.left = e.clientX - this.offsetLeft + 'px';
//     circle.style.transform = 'translate(-50%,-50%) scale(0)';
// }

// var importants = document.querySelectorAll('.btn');

// for (var i = 0; i < importants.length; i++) {
//   importants[i].style.backgroundColor = 'yellow';
// }

const btns = document.querySelectorAll("a.btn,button:not(.navbar-toggler)");

btns.forEach(btn => {
    btn.addEventListener('click',rEffect);
})

function rEffect(e){
    let circle = document.createElement('div');
    this.appendChild(circle);
    circle.classList.add('ripple');
    circle.style.top = e.clientY - this.offsetTop + 'px';
    circle.style.left = e.clientX - this.offsetLeft + 'px';
    circle.style.transform = 'translate(-50%, -50%) scale(0)';
}

//  const chiens = document.querySelectorAll("div.btn");
// chiens[0].style.color = "yellow";