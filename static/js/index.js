const update_images = () => {


    // Remove loader if still there
    let loader = document.getElementById('home-loader')
    if (loader != null) loader.parentNode.removeChild(loader)

    // Init slideshow
    var current = 1
    var slides = document.querySelectorAll(".slider-item")
    if (slides.length < 1) return

    // Delay is needed here for the animation to work
    setTimeout(() => { slides[0].style.opacity = 1 }, 100)

    setInterval(() => {
        slides[(current - 1) < 0 ? slides.length - 1 : current - 1].style.opacity = 0
        current = (current + 1) % slides.length
        slides[current].style.opacity = 1
    }, 10000)

    // Set titlebar white
    document.getElementById('title-bar').classList.add('white')
}

const scrollDown = () => {
    scrollToY((document.body.scrollHeight || document.documentElement.scrollHeight) / 2, 1500, 'easeOutCubic');
}

const scrollOpacity = () => {
    var height = (document.body.scrollHeight || document.documentElement.scrollHeight) / 2
    var cur = document.body.scrollTop || document.documentElement.scrollTop
    document.querySelector('.main-content').style.opacity = Math.pow((cur / height), 3)
    document.querySelector('#title-bar').style.opacity = Math.pow((cur / height), 3)
}

window.onscroll = scrollOpacity

update_images()

