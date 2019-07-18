const update_images = () => {

    const callback = function() {
        console.log(this.responseText)

        JSON.parse(this.responseText).forEach(src => {

            var div = document.createElement('div');
            div.style.backgroundImage = "url('" + src + "')"
            div.classList.add('slider-item')
            document.getElementById('home-images').appendChild(div)
        })

        // Remove loader
        let loader = document.getElementById('home-loader')
        loader.parentNode.removeChild(loader)

        var current = 1

        var slides = document.getElementsByClassName('slider-item')

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

    let req = new XMLHttpRequest()
    req.onload = callback
    req.open('POST', wpurl.ajaxurl, true)
    req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')
    req.send('action=images&device=' + ((window.innerWidth > 600) ? 'desktop' : 'mobile'))

}

update_images()