const toggleWidth = 600

// 0 = not set, 1 = desktop, 2 = mobile  
var device = 0;

const update_images = () => {

    if (device == 0 || (device == 1 && window.innerWidth < toggleWidth) || (device == 2 && window.innerWidth > toggleWidth)) {

        const callback = function() {

            // Remove old images
            var els = document.querySelectorAll(".slider-item")
            if (els != null) Array.prototype.forEach.call(els, function(e) { e.parentNode.removeChild(e) })

            // Add new images
            JSON.parse(this.responseText).forEach(src => {
                var div = document.createElement('div');
                div.style.backgroundImage = "url('" + src + "')"
                div.classList.add('slider-item')
                document.getElementById('home-images').appendChild(div)
            })

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

        device = (window.innerWidth > toggleWidth) ? 1 : 2;

        let req = new XMLHttpRequest()
        req.onload = callback
        req.open('POST', wpurl.ajaxurl, true)
        req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')
        req.send('action=images&device=' + (device == 1 ? 'desktop' : 'mobile'))
    }
}

const scrollDown = () => {
    scrollToY((document.body.scrollHeight || document.documentElement.scrollHeight) / 2, 500, 'easeOutCubic');
}

window.onresize = update_images
window.onorientationchange = update_images

update_images()