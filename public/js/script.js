document.addEventListener('DOMContentLoaded', function() {
    const pages = document.querySelectorAll('.page');
    const books = document.querySelectorAll('.book');

    books.forEach(function(book) {
        const bookPages = book.querySelectorAll('.page');

        bookPages.forEach(function(page) {
            page.addEventListener('click', function() {
                const currentPage = book.querySelectorAll('.page.active');
                const nextPage = this;

                // Rotim cartea pentru a afișa următoarea pagină
                book.style.transform = 'rotateY(-180deg)';
            });
        });
    });
});
//Change images
function changeImage(thumbnail) {
    var mainImage = document.getElementById('mainImage');
    mainImage.src = thumbnail.src;
    mainImage.alt = thumbnail.alt;
}

function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].classList.remove("active");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.classList.add("active");
}





