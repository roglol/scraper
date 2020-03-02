var previous = document.querySelector('[aria-label="Previous"]');
var next = document.querySelector('[aria-label="Next"]');
var pageItems = document.querySelectorAll('.pagination > .page-link-button');
var firstIndex = 0;
pageItems.forEach((el,i,arr) =>{
    if(i <= 2){
        el.style.display = 'inline-block';
    }
    if(i ===arr.length-1){
        firstIndex = 2;
    }
})
previous.addEventListener('click', (e) =>{
    if(firstIndex <= 2){
        return
    }
    pageItems.forEach((el,i,arr) =>{
        if((firstIndex - 6) < i && i <= firstIndex-3){
            el.style.display = 'inline-block'
        }else{
            el.style.display = 'none';
        }
        if(i ===arr.length-1){
            firstIndex =firstIndex - 3;
        }
    })
})

next.addEventListener('click', (e) =>{
    if(firstIndex === pageItems.length-1){
        return
    }
    pageItems.forEach((el,i,arr) =>{
        if(firstIndex < i && i <= firstIndex + 3){
            el.style.display = 'inline-block'
        }else{
            el.style.display = 'none';
        }
        if(i ===arr.length-1){
            firstIndex =firstIndex + 3;
        }
    })
})