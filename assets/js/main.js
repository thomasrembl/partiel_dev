function adminBtn(){
    window.location.href = "assets/page/admin.php";
}

const ArtOne = document.getElementById('art_1_content');
const ActivationBtn = document.getElementById('art_1_btn');
let textVisible = false;


ActivationBtn.addEventListener('click', () => {
    if (textVisible) {
        ArtOne.textContent = '';
        textVisible = false;
    } else {
        ArtOne.textContent = 'Lorem ipsum dolor sit a';
        textVisible = true;
    }
});

const ArtTwo = document.getElementById('art_2_content');
const ActivationBtn2 = document.getElementById('art_2_btn');
let textVisible2 = false;


ActivationBtn2.addEventListener('click', () => {
    if (textVisible2) {
        ArtTwo.textContent = '';
        textVisible2 = false;
    } else {
        ArtTwo.textContent = 'Lorem ipsum dolor sit a';
        textVisible2 = true;
    }
});

const ArtThree = document.getElementById('art_3_content');
const ActivationBtn3 = document.getElementById('art_3_btn');
let textVisible3 = false;


ActivationBtn3.addEventListener('click', () => {
    if (textVisible3) {
        ArtThree.textContent = '';
        textVisible3 = false;
    } else {
        ArtThree.textContent = 'Lorem ipsum dolor sit a';
        textVisible3 = true;
    }
});


const themeBtn = document.getElementById('theme_btn');
let Theme = 'Bright';
const header = document.getElementById('header');
const articles = document.querySelectorAll('article');
const btn = document.getElementById('btn');


themeBtn.addEventListener('click', () => {
    if (Theme === 'Bright') {
        document.body.style.backgroundColor = 'black';
        document.body.style.color = 'white';
        header.style.backgroundColor = 'var(--secondary-color)';
        btn.style.backgroundColor = 'var(--secondary-color)';
        articles.forEach(article =>{
            article.style.border = '3px solid var(--secondary-color)';
        });
        Theme = 'Dark';
    } else {
        document.body.style.backgroundColor = 'white';
        document.body.style.color = 'black';
        header.style.backgroundColor = 'var(--primary-color)';
        btn.style.backgroundColor = 'var(--primary-color)';
        articles.forEach(article =>{
            article.style.border = '3px solid var(--primary-color)';
        });
        Theme = 'Bright';
    }
});