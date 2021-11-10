function addBorderElement(id)
{
    const el = document.getElementById(id);
    el.style.borderBottom = "5px solid #dcc865";
    const child = el.querySelector('.header__link');
    child.classList.add('change');
}

function removeBorderElement(id)
{
    const el = document.getElementById(id);
    el.style.borderBottom = "none";
    const child = el.querySelector('.header__link');
    child.classList.remove('change');
}