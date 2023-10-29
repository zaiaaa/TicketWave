const btnCad = document.querySelector('.cad')
const btnContainer = document.getElementById('divBtn')
const card_body = document.querySelector(".card-body")
const navButtons = document.getElementById('navButtons')

if(!btnCad){
    navButtons.style.justifyContent = 'center'
}

const btnUser = document.getElementById('user')
const menuLateral = document.getElementById('sideBarUserID')

btnUser.addEventListener('click', () => {
        menuLateral.classList.toggle('closed')
        menuLateral.classList.toggle('sideBarUser')
})

// btnUser.addEventListener('click', () => {
//     if(menuLateral.className == 'closed'){
//         menuLateral.classList.remove('closed')
//         menuLateral.classList.toggle('sideBarUser')
//     }   

// })