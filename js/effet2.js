let divame=document.querySelectorAll('#vente')
divame.forEach(classe)

function classe(e){
    e.classList.add('invisible')
}

const ratio =0.8
let options = {
    root: null,
    rootMargin: "0px", 
    threshold: ratio,
  };
let defilement = function(entries,observer){
    entries.forEach(function(entry){
        if(entry.intersectionRatio){
            entry.target.classList.add('visible')
            entry.target.querySelectorAll('#T').forEach((e)=>{
                e.classList.add('inisible')
            })
        }
    })
}
let observer = new IntersectionObserver(defilement, options)
document.querySelectorAll('[class*="invisible"]').forEach(function(r){
    observer.observe(r)
})

