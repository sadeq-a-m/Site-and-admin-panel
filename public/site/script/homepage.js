let searchIcon=document.querySelector('.search')
let searchMinIcon=document.querySelector('.search-min')
let searchModal=document.querySelector('.search-modal')
let iconCloseSearchModal=document.querySelector('.close-search')

searchIcon.onclick = ()=>{
	searchModal.style.transform="translateX(0%)";
}

searchModal.onclick = (event)=>{
	if(event.target.className == 'search-modal'){
		searchModal.style.transform="translateX(-100%)";
	}
}

iconCloseSearchModal.addEventListener('click',()=>{
	searchModal.style.transform="translateX(-100%)";
})

searchMinIcon.addEventListener('click',()=>{
	searchIcon.onclick();
})

let hamburger=document.querySelector('.hamburger')
let menuModal=document.querySelector('.menu-modal-min')
let iconCloseMenuModal=document.querySelector('.close-menu')

hamburger.onclick = ()=>{
	menuModal.style.transform="translateX(0%)";
}

menuModal.onclick=(event)=>{
	if(event.target.className == 'menu-modal-min'){
		menuModal.style.transform="translateX(-100%)";
	}
}

iconCloseMenuModal.addEventListener('click',()=>{
	menuModal.style.transform="translateX(-100%)";
})

let contactUs=document.querySelector('.call')

contactUs.addEventListener('click',()=>{
	menuModal.style.transform="translateX(-100%)";
	console.log('loged')
})









