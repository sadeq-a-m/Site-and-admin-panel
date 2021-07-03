let link=document.querySelectorAll('.link')
let angleRight=document.querySelectorAll('.fa-angle-right')

link.forEach(item =>{
	item.addEventListener('click',()=>{
		item.nextElementSibling.classList.toggle('active')
		item.lastElementChild.classList.toggle('active-icon')
	})
})

let hamburger=document.querySelector('.hamburger')
let sidebar=document.querySelector('.sidebar')

hamburger.addEventListener('click',()=>{
	sidebar.classList.toggle('active-sidebar')
})

let adminProfile=document.querySelector('.btn-admin-profile')

adminProfile.addEventListener('click',()=>{
	adminProfile.nextElementSibling.classList.toggle('active-profile')
})