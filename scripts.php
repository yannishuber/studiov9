<script>
    window.onresize = update_images;
    window.onload = init;
    screen.orientation.onchange = update_images;


    function init() {
        document.getElementById("open").addEventListener('click', function(e) {
            // prevent compatibility mouse events and click
            document.getElementById("mobile-nav-content").classList.add("show");
            e.stopPropagation();
            e.preventDefault();


        });
        document.getElementById("close").addEventListener('click', function(e) {
            // prevent compatibility mouse events and click
            document.getElementById("mobile-nav-content").classList.remove("show");
            e.stopPropagation();
            e.preventDefault();


        });
        update_images();
    }

    function update_images() {
        if (window.innerWidth > 600) {

            var tmp = document.getElementsByClassName("mobile");
            for (let i = 0; i < tmp.length; i++) {
                tmp[i].classList.remove("carousel-item");
            }
            var tmp = document.getElementsByClassName("desktop");
            for (let i = 0; i < tmp.length; i++) {
                tmp[i].classList.add("carousel-item");
            }
        } else {
            var tmp = document.getElementsByClassName("desktop");
            for (let i = 0; i < tmp.length; i++) {
                tmp[i].classList.remove("carousel-item");
            }
            var tmp = document.getElementsByClassName("mobile");
            for (let i = 0; i < tmp.length; i++) {
                tmp[i].classList.add("carousel-item");
            }
        }

    }



    $(() => {

        $('img').removeAttr('title');
        $('.carousel').carousel({
            interval: 10000
        })


    });
</script>