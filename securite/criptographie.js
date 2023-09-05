let input =document.querySelectorAll('input')

function encoder(){
    input.forEach(input=>{
        input.value=window.atob(input.value)
    })
}
function decoder(){
    input.forEach(input=>{
        input.value=window.atob(input.value)
    })
}
