let divame=document.querySelectorAll('#AMEUBLEMENT')
let divprod=document.querySelectorAll('#prod')
let pree=document.querySelectorAll('#Pr')
divame.forEach(classe)
divprod.forEach(classe)
pree.forEach(e=>{
    e.classList.add('invisible2')
})

//fonction

function classe(e){
    e.classList.add('invisible')
    e.childNodes[3].classList.add('invisible1')
}

const ratio =.2
let options = {
    root: null,
    rootMargin: "0px",
    threshold: ratio,
  };
  //forEach
let defilement = function(entries,observer){
    entries.forEach(function(entry){
        if(entry.intersectionRatio){
            entry.target.classList.add('visible')
            //observer.unobserve(entry.target)
        }
    })
}
let observer = new IntersectionObserver(defilement, options)
document.querySelectorAll('[class*="invisible"]').forEach(function(r){
    observer.observe(r)
})

