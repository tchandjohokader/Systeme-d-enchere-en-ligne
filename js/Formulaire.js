const  elle=document.querySelectorAll('.group-form')
const nom=document.querySelector('#nom')
const prenom=document.querySelector('#prenom')
const l1=document.querySelector('.l1')
const l2=document.querySelector('.l2')
const l3=document.querySelector('.l3')
const form=document.querySelector('form')
const select =document.querySelector('select')
const visible=document.querySelectorAll('#icon3')
const input=document.querySelectorAll('input')
const button=document.querySelectorAll('button')
import {filtre} from '../securite/filtreXSS.js'

elle.forEach(el=>{
    el.childNodes[3].addEventListener('keyup',()=>{
        el.childNodes[5].style.display='flex'
        if(filtre(el.childNodes[3].value)){
            el.childNodes[3].value=""
        }
        switch (el.childNodes[1].id){    
            case '0':
                if(isNaN(el.childNodes[3].value)){
                    afficher(el)
                }else{
                    afficher(el,1)
                }
                break
            case '2':
                if(isNaN(el.childNodes[3].value)){
                    afficher(el,1)
                }else{
                    afficher(el)
                }
                break
            case '3':
                if(el.childNodes[3].value.length<3){
                    afficher(el,1)
                }else{
                    afficher(el)
                }
                break
            case '4':
                if(el.childNodes[3].value.length<=10){
                    afficher(el,1)
                }else{
                    afficher(el)
                }
                break
            case '5':
                verifier(el)
                break
            case '6':
                if(elle[5].childNodes[3].value != el.childNodes[3].value){
                    afficher(el,1)
                }else{
                    afficher(el)
                    el.childNodes[5].setAttribute('src','../ressource/image_Formulaire_Inscription/oeil (1).png')
                }
                break
            default:
                console.log('toto')
        }
    })}
)    
function afficher (el,z=0){
    if(z===1){
        el.childNodes[7].style.display='flex'
        el.childNodes[5].setAttribute('src','../ressource/image_Formulaire_Inscription/errored.png')
    }else{
        if(el.childNodes[7].id==="m"){
        }else{
            el.childNodes[5].setAttribute('src','../ressource/image_Formulaire_Inscription/checked.png')  
        }
        el.childNodes[7].style.display='none'
    }
}
function verifier(el){
    if(el.childNodes[3].value.length===0){
        l1.style.display='none'
    }
    else if(el.childNodes[3].value.length<4){
        l1.style.display='flex'
        l2.style.display='none'
        l3.style.display='none'
    }else if(el.childNodes[3].value.length<8){
        l2.style.display='flex'
        l3.style.display='none'
    }else{
        l3.style.display='flex'
    }
}

form.addEventListener('submit',(e)=>{
    let ver=true
    input.forEach(el=>{
        if(el.value=='' || el.parentNode.childNodes[5].getAttribute('src')=='../ressource/image_Formulaire_Inscription/errored.png'){
            e.preventDefault()
            ver=false
        }
    })
    if(ver){
        localStorage.setItem('nom',nom.value)
        localStorage.setItem('prenom',prenom.value)
        localStorage.setItem('civilite',select.value)
    } 

})

visible.forEach(el=>{
    el.addEventListener('click',e=>{
        if(e.target.parentNode.childNodes[3].getAttribute('type')=='text'){
            e.target.parentNode.childNodes[3].setAttribute('type','password')
            e.target.parentNode.childNodes[5].setAttribute('src','../ressource/image_Formulaire_Inscription/oeil (1).png')
        }else{
            e.target.parentNode.childNodes[3].setAttribute('type','text')
            e.target.parentNode.childNodes[5].setAttribute('src','../ressource/image_Formulaire_Inscription/oeil.png')
        }
    })
})