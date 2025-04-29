const fiturElements = document.querySelectorAll('.fitur-scroll');

function checkScrollFitur() {
    console.log("cek");
    fiturElements.forEach(el => {
        const rect = el.getBoundingClientRect();
        if (rect.top < window.innerHeight) {
            el.classList.add('visible');
        }
    });
}

window.addEventListener('scroll', checkScrollFitur);
window.addEventListener('load', checkScrollFitur);

const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

function setActiveMenu() {
    let currentPath = window.location.pathname;  
    let currentFile = currentPath.substring(currentPath.lastIndexOf('/') + 1); 

    console.log('Current File:', currentFile);

    allSideMenu.forEach(item => {
        const li = item.parentElement;  
        const itemHref = item.getAttribute('href');  

        li.classList.remove('active');
        
        if (currentFile === itemHref) {
            li.classList.add('active');
        }
    });
}

window.addEventListener('load', function () {
    setActiveMenu();
});

const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');
})

const searchButton = document.querySelector('#content nav form .form-input button');
const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
const searchForm = document.querySelector('#content nav form');

searchButton.addEventListener('click', function (e) {
	if(window.innerWidth < 576) {
		e.preventDefault();
		searchForm.classList.toggle('show');
		if(searchForm.classList.contains('show')) {
			searchButtonIcon.classList.replace('bx-search', 'bx-x');
		} else {
			searchButtonIcon.classList.replace('bx-x', 'bx-search');
		}
	}
})