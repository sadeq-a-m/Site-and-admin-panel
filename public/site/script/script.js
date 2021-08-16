let navbar=document.querySelector('.navbar')
let hamburger=document.querySelector('.fa-bars')
let arrowEl=document.querySelectorAll('.arrowEl')
let iconTimes=document.querySelector('.fa-times')
let cogs=document.querySelector('.cogs')
let setting=document.querySelector('.setting')
let submenu1=document.querySelector('.submenu1')


hamburger.addEventListener('click',() => {
	navbar.classList.toggle('deactive-navbar')
})

iconTimes.addEventListener('click',()=>{
	navbar.classList.remove('deactive-navbar')
})

cogs.addEventListener('click',()=>{
	setting.classList.toggle('active-setting')
})

arrowEl.forEach(item => {
	item.addEventListener('click',()=>{
		let x=item.lastElementChild.lastElementChild
		x.classList.toggle('active-arrow')
		
		let y=item.nextElementSibling
		y.classList.toggle('active-submenu')
	})
})



