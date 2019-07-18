// 0 = not set, 1 = desktop, 2 = mobile  
var device = 0;

const update_images = () => {

    if (device == 0 || (device == 1 && window.innerWidth < 600) || (device == 2 && window.innerWidth > 600)) {

        const callback = function() {
            console.log(this.responseText)

            // Remove old images
            var els = document.querySelectorAll(".slider-item")

            if (els != null) Array.prototype.forEach.call(els, function(e) { e.parentNode.removeChild(e) })

            JSON.parse(this.responseText).forEach(src => {

                var div = document.createElement('div');
                div.style.backgroundImage = "url('" + src + "')"
                div.classList.add('slider-item')
                document.getElementById('home-images').appendChild(div)
            })

            // Remove loader
            let loader = document.getElementById('home-loader')
            if (loader != null) loader.parentNode.removeChild(loader)

            var current = 1

            var slides = document.querySelectorAll(".slider-item")

            if (slides.length < 1) return


            setTimeout(() => {
                slides[0].style.opacity = 1
            }, 100)

            document.getElementById('title-bar').classList.add('white')

            setInterval(() => {
                slides[(current - 1) < 0 ? slides.length - 1 : current - 1].style.opacity = 0
                current = (current + 1) % slides.length
                slides[current].style.opacity = 1
            }, 10000)
        }

        device = (window.innerWidth > 600) ? 1 : 2;


        let req = new XMLHttpRequest()
        req.onload = callback
        req.open('POST', wpurl.ajaxurl, true)
        req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')
        req.send('action=images&device=' + (device == 1 ? 'desktop' : 'mobile'))
    }
}

window.onresize = update_images
window.onorientationchange = update_images

update_images()