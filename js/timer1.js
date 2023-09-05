const h5 = document.querySelectorAll('.user h5')
const h3 = document.querySelector('.user1')
const grand=document.querySelector('.grand')
let div=document.querySelector('.container')
let a =document.querySelector('a')
let i =document.querySelector('i')
let s =61
function decompte(){
    if( s == -1 || s==0){
        s=00
        if(h3.textContent[h3.textContent.length-2]==h5[0].textContent){
            div.style.filter='blur(2px)'
            grand.style.display='block'
        }else{
            div.style.filter='blur(2px)'
            grand.style.display='block'
            a.innerText='Desole vous n\'avais pas remporter cette foi'
            i.className='fa fa-times fa-5x'
            i.style.color='red'
        }
    }
    else{
        s = s-1
    }
    if(s>=40){
        h5[1].style.color='green'
    }else if(s>=20){
        h5[1].style.color='rgb(243, 204, 134)'
    }else{
        h5[1].style.color='red'
    }
    h5[1].innerHTML=s+'s'
}

setInterval(decompte, 1000)



