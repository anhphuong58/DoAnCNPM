var imgFeature = document.querySelector('.advertisement_main-img')
var listImg = document.querySelectorAll('.advertisement_list-image img')
var btnL = document.querySelector('.advertisement_main-controlL')
var btnR = document.querySelector('.advertisement_main-controlR')

var currentIndex = 0;

function updateImgByIndex(index){
    document.querySelectorAll('.advertisement_list-image div').forEach(item=>{
        item.classList.remove('active')
    })

    currentIndex = index;
    imgFeature.src = listImg[index].getAttribute('src')
    listImg[index].parentElement.classList.add('active')
}

listImg.forEach((imgElement, index)=>{
    imgElement.addEventListener('click', e => {
        imgFeature.style.opacity = '0'
        setTimeout(() => {
            updateImgByIndex(index)
            imgFeature.style.opacity = '1'
        }, 300);
    })
})

btnL.addEventListener('click', e=>{
    if(currentIndex == 0){
        currentIndex = listImg.length - 1
    }else{
        currentIndex--
    }

    imgFeature.style.animation = ''
    setTimeout(() => {
        updateImgByIndex(currentIndex);
        imgFeature.style.animation = 'slideLeft 0.25s ease-in-out forwards'
    }, 300);
})

btnR.addEventListener('click', e=>{
    if(currentIndex == listImg.length - 1){
        currentIndex = 0
    }else{
        currentIndex++
    }

    imgFeature.style.animation = ''
    setTimeout(() => {
        updateImgByIndex(currentIndex);
        imgFeature.style.animation = 'slideRight 0.25s ease-in-out forwards'
    }, 100);
})

function callback(){
    if(currentIndex == listImg.length - 1){
        currentIndex = 0
    }else{
        currentIndex++
    }
    updateImgByIndex(currentIndex);
}
var myVar = setInterval(callback,2700)