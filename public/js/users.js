document.addEventListener('DOMContentLoaded', () => {
    let btn= document.querySelector('.reset-filters')
    btn.addEventListener('click',function (){
        const currentUrl = window.location.href;

        const updatedUrl = currentUrl.split('?')[0];

        window.history.replaceState({}, '', updatedUrl);

        location.reload();
    })
})
