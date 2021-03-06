
let searchIcon=document.querySelector('.search')
let searchMinIcon=document.querySelector('.search-min')
let searchModal=document.querySelector('.search-modal')
let iconCloseSearchModal=document.querySelector('.close-search')

//search event
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


//hamburger menu in the small devices
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


//call with us
let contactUs=document.querySelector('.call')

// contactUs.addEventListener('click',()=>{
//  	menuModal.style.transform="translateX(-100%)";
// })


//comments courses
let showCommentBox=document.getElementById('show-comment-box')
let createNewComment=document.querySelector('.create-new-comment')

showCommentBox.addEventListener('click',()=>{
	createNewComment.classList.toggle('show-create-comment')
})

let showReplyBox=document.querySelectorAll('.reply-comment')

showReplyBox.forEach((item)=>{
	item.addEventListener('click',()=>{
		item.nextElementSibling.classList.toggle('show-reply-box')
	})
})

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
	

