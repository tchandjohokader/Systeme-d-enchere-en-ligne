let papa=document.querySelectorAll('#Pr1')[0]
let p=document.querySelectorAll('[id*="exempleprod"]')
let input=document.querySelector('.grand input')
let div1=document.querySelector('.grand')
let button=document.querySelectorAll('.grand form button')
import {filtre} from '../securite/filtreXSS.js'
input.addEventListener('keyup',()=>{
    if(filtre(input.value)){
        input.value=""
    }
})
 
papa.addEventListener('click',(e)=>{

    p.forEach(p=>{
        p.style.filter='blur(2px)';
    })
    div1.style.display='block'
    e.stopPropagation()
})

button[0].addEventListener('click',(e)=>{
    e.preventDefault()
    console.log("button")
    p.forEach(p=>{
        p.style.filter=''
    })
    div1.style.display='none'
})
button[1].addEventListener('click',async (e)=>{
    //e.preventDefault()
   // await sleep(1000)
    div1.style.display='none'
    e.stopPropagation()
})
div1.addEventListener('click',(e)=>{
    e.stopPropagation()
})
window.addEventListener('click',()=>{
    p.forEach(p=>{
        p.style.filter=''
    })
    div1.style.display='none'
})
function suppretion(parent,i){
    parent.removeChild(parent.childNodes[i])
}



