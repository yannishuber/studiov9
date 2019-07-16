<script>
    window.onresize = update_images;
    window.onload = init;
    screen.orientation.onchange = update_images;


    function init() {
        document.getElementById("open").addEventListener('click', function(e) {
            document.getElementById("mobile-nav-content").classList.add("show");
            e.stopPropagation();
            e.preventDefault();


        });
        document.getElementById("close").addEventListener('click', function(e) {
            document.getElementById("mobile-nav-content").classList.remove("show");
            e.stopPropagation();
            e.preventDefault();


        });
        update_images();
    }




    function update_images() {

        var slides;
        var current = 1;

        if (window.innerWidth > 600) {
            slides = document.getElementsByClassName("desktop");
            current = 1;
        } else {
            slides = document.getElementsByClassName("mobile");
            current = 1;
        }

        slides[0].style.opacity = 1;
        setInterval(function() {
            for (var i = 0; i < slides.length; i++) {
                slides[i].style.opacity = 0;
            }
            current = (current + 1) % slides.length;
            slides[current].style.opacity = 1;
        }, 10000);

    }

    const scrollToTop = () => {
        const c = document.documentElement.scrollTop || document.body.scrollTop;
        if (c > 0) {
            window.requestAnimationFrame(scrollToTop);
            window.scrollTo(0, c - c / 8);
        }
    };
</script>