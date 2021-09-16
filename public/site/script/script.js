//This section of the code is for displaying the admin panel on the left and the settings panel on the right
let navbar=document.querySelector('.navbar')
let hamburger=document.querySelector('.fa-bars')
let arrowEl=document.querySelectorAll('.arrowEl')
let iconTimes=document.querySelector('.fa-times')
let cogs=document.querySelector('.cogs')
let setting=document.querySelector('.setting')
let submenu1=document.querySelector('.submenu1')

//right panel
hamburger.addEventListener('click',() => {
	navbar.classList.toggle('deactive-navbar')
})

iconTimes.addEventListener('click',()=>{
	navbar.classList.remove('deactive-navbar')
})

//left panel
cogs.addEventListener('click',()=>{
	setting.classList.toggle('active-setting')
})

//arrows in the right panel
arrowEl.forEach(item => {
	item.addEventListener('click',()=>{
		let x=item.lastElementChild.lastElementChild
		x.classList.toggle('active-arrow')
		
		let y=item.nextElementSibling
		y.classList.toggle('active-submenu')
	})
})

//This part of the code is to display the user profile
let showProfile=document.getElementById('showProfile')
let profileHolder=document.querySelector('.profile-holder')


// showProfile.addEventListener('click',()=>{
//     profileHolder.classList.toggle('show-profile')
// })


//alert codes

let alertModal=document.getElementById('alert')
let closeAlert=document.querySelector('.fa-times')

//alert danger
function showAlertRed(){
	alertModal.classList.add('alert-box-red')
}

closeAlert.addEventListener('click',()=>{
	alertModal.classList.remove('alert-box-red')
})

//alert success
function showAlertGreen(){
	alertModal.classList.add('alert-box-green')
}

closeAlert.addEventListener('click',()=>{
	alertModal.classList.remove('alert-box-green')
})

//show alert
//showAlertGreen()
