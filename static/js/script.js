$(() => {
    document.getElementById("open").addEventListener('click', (e) => {
        document.getElementById("mobile-nav-content").classList.add("show");
        e.stopPropagation();
        e.preventDefault();


    });
    document.getElementById("close").addEventListener('click', (e) => {
        document.getElementById("mobile-nav-content").classList.remove("show");
        e.stopPropagation();
        e.preventDefault();


    });


    if (document.getElementById("arrow") != null) {
        document.getElementById("arrow").addEventListener('click', (e) => {
            scrollToTop();
            e.stopPropagation();
            e.preventDefault();
        });

        const scrollToTop = () => {
            const c = Math.max(window.pageYOffset, document.documentElement.scrollTop, document.body.scrollTop)
            if (c > 0) {
                window.requestAnimationFrame(scrollToTop);
                window.scrollTo(0, c - c / 8);
            }
        };
    }

});