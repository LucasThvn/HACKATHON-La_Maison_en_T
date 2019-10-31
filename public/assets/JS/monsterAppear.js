
[...document.querySelectorAll('.btn-card')].forEach((e, index) => {
    e.addEventListener('click', () => {
        document.querySelectorAll(".card")[index].style.display = "flex"
        e.style.display = "none"
    })
})
