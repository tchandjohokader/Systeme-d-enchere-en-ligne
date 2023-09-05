//import {filtre} from '/securite/filtreXSS.js'
const text=document.querySelector('.afficher')
const img=document.querySelector('img')
const h1=document.createElement('h1')
const input=document.createElement('input')
const label=document.createElement('label')
const form=document.createElement('form')
const a = document.createElement('a')
const h3=document.createElement('h3')
let p=''
//Math.floor(Math.random() * 10000)
let code=Date.now().toString().split("").splice(Date.now().toString().length-4,4).join("")
let s =59;min=01
img.setAttribute('src','../queen ramona wallpaper.jpeg')
creer()
lance()
switch (localStorage.getItem('civilite')){
    case 'Monsieur':
        p='inscrit'
    case 'Madame':
        p='inscrite'
}
console.log(code)
a.addEventListener('click',()=>{
    //renvoyer un code
    code=Date.now().toString().split("").splice(Date.now().toString().length-4,4).join("")
    console.log(envoyer_mail(code))
})
form.addEventListener('keyup',(e)=>{
    e.preventDefault()
    if(input.value.length==4){
        if(input.value ===code){
            felicitation()
        }
    }
})
function felicitation(){
    text.removeChild(form)
    img.setAttribute('src','../queen ramona wallpaper.jpeg')
    h1.innerHTML=`felicitation ${localStorage.getItem('civilite')} ${localStorage.getItem('nom')} ${localStorage.getItem('prenom')} <br>vous êtes Maintenant ${p}`
    text.append(h1)
}
function creer(){
    const table=[['maxlength','4'],['placeholder','CODE'],['type','text']]
    label.textContent="ENTRE LE CODE"
    table.forEach(e => {
        input.setAttribute(`${e[0]}`,`${e[1]}`)
    });
    a.innerText='Renvoyer le message'
    a.setAttribute('href','#')
    form.append(label)
    form.append(input)
    text.append(form)
    form.append(a)
    form.append(h3)
}
function envoyer_mail(code){
    //envoyer le code par mail
    let message=`voici votre code de verification ${code}`
    lance()
    return message
}
function decompte(){
    if( s == -1){
        if(min==0 && s==-1){
            a.style.display='flex'
            h3.textContent=""
            return
        }
        min=min-1
        s=60
        }
    else{
        if(s<10){
            h3.textContent="0"+min+":"+"0"+s
        }else{
            h3.innerText="0"+min+":"+s
        }
        s = s-1
    }
}
function lance(){
    a.style.display='none'
    if(!(min==0 && s==-1)){
        setInterval(decompte, 1000)
    }else{
        s=59
        min=01
    }
}
