const linkItems = document.querySelectorAll(".link-item");

linkItems.forEach((linkItem, index) => {
    linkItem.addEventListener("click", () => {
        document.querySelector(".active").classList.remove("active");
        linkItem.classList.add("active");

        const indicator = document.querySelector(".indicator");

        indicator.style.left = `${index * 95 + 48}px`;
    })
})

function bnavbtnhom(){
    setTimeout (function(){
        window.location.href = 'home.php';
    }, 1000);
}
function bnavabtnbuy(){
    setTimeout (function(){
        window.location.href = 'buy.php';
    }, 1000);
}
function bnavbtnhstry(){
    setTimeout (function(){
        window.location.href = 'history.php';
    }, 1000);
}
function bnavabtnprof(){
    setTimeout (function(){
        window.location.href = 'profile.php';
    }, 1000);
}
function bnavabtnexit(){
    setTimeout (function(){
        window.location.href = 'sumout.php';
    }, 1000);
}