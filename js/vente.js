let popo=document.querySelectorAll('input')
let textarea=document.querySelector('textarea')
import {filtre} from '/securite/filtreXSS.js'
let i =0
popo.forEach(popo=>{
    popo.addEventListener('change',()=>{
        console.log(popo)
        previewImage(popo)
        console.log("tzr")
    })
})
function previewImage(popo){
    let file=popo
    let picture=file.parentNode.childNodes[1].childNodes[1]
    let message=document.querySelector('.message')
    let btnUpload=document.querySelector('.btnUpload')
    let regex=new RegExp("[^.]+$")
    fileExension=file.value.match(regex)
     
    if(fileExension =='jpeg'||fileExension =='jpg'||fileExension =='png'){
        i++

        if(i==4){
            btnUpload.style.display='flex'
        }
        message.innerHTML=''
        let reader=new FileReader()
        reader.readAsDataURL(file.files[0])
        reader.addEventListener('load',()=>{
            //localStorage.setItem('image',reader.result)
            console.log(reader.result)
            picture.setAttribute('src',reader.result)
        })
    }else{
        picture.setAttribute('src','/ressource/istockphoto-1152189152-612x612.jpg')
        btnUpload.style.display='none'
        message.innerHTML='<b>ATTENTION CECI n\'est pas une image</b> '
    }}

textarea.addEventListener('keyup',()=>{
    if(filtre(textarea.value)){
        textarea.value=""
    }
})
