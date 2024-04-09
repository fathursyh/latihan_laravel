function activeNav(link) {
    var title = document.querySelectorAll('.nav-link');
    title.forEach(element => {
        if(element.textContent == link) {
            element.classList.add('active');
        }
    });
}
