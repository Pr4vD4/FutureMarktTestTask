let headerBtnFree = document.querySelector('.btn-free')
let headerBtnFreeMobile = document.querySelector('.btn-free-mobile')
let sidebarClose = document.querySelector('.sidebar-close')
let sidebar = document.querySelector('#sidebar-view')

headerBtnFree.addEventListener('click', () => {
    sidebar.classList.toggle('d-none')
});
headerBtnFreeMobile.addEventListener('click', () => {
    sidebar.classList.toggle('d-none')
});
sidebarClose.addEventListener('click', () => {
    sidebar.classList.toggle('d-none')
});

