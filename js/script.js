'use strict';
let linkPic = document.querySelectorAll('.modal');
let modalWin = document.querySelectorAll('.modal-window');
let buttonClose = document.querySelectorAll('.close');
buttonClose.forEach(item => item.addEventListener('click', function(sel){closeWindow(sel)}));
linkPic.forEach(item => item.addEventListener('click', function(sel){openWindow(sel)}));
function closeWindow(sel) {
    const targetTag = sel.target.parentNode.parentNode;
    const targetPic = targetTag.querySelector('div');
    console.log(targetPic);
    let classRem = 0;
    targetPic.classList.forEach(item => {
        if (item == 'hidden') {
        targetPic.classList.remove('hidden');
        targetPic.classList.add('visible');
        classRem = 1;
        }
        if ((item == 'visible') && (classRem == 0)) {
        targetPic.classList.remove('visible');
        targetPic.classList.add('hidden');
        }
        });
}
function openWindow(sel) {
    const targetTag = sel.target.parentNode;
    const targetPic = targetTag.querySelector('div');
    console.log(targetPic);
    let classRem = 0;
    targetPic.classList.forEach(item => {
        if (item == 'hidden') {
        targetPic.classList.remove('hidden');
        targetPic.classList.add('visible');
        classRem = 1;
        }
        if ((item == 'visible') && (classRem == 0)) {
        targetPic.classList.remove('visible');
        targetPic.classList.add('hidden');
        }
        });
}