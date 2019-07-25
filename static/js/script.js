window.requestAnimFrame = (function() {
    return window.requestAnimationFrame ||
        window.webkitRequestAnimationFrame ||
        window.mozRequestAnimationFrame ||
        function(callback) {
            window.setTimeout(callback, 1000 / 60);
        };
})();

// main function
function scrollToY(scrollTargetY, speed, easing) {
    // scrollTargetY: the target scrollY property of the window
    // speed: time in pixels per second
    // easing: easing equation to use

    var scrollY = window.scrollY || document.documentElement.scrollTop,
        scrollTargetY = scrollTargetY || 0,
        speed = speed || 2000,
        easing = easing || 'easeOutSine',
        currentTime = 0;

    // min time .1, max time .8 seconds
    var time = Math.max(.1, Math.min(Math.abs(scrollY - scrollTargetY) / speed, .8));

    // easing equations from https://github.com/danro/easing-js/blob/master/easing.js
    var easingEquations = {
        easeOutSine: function(pos) {
            return Math.sin(pos * (Math.PI / 2));
        },
        easeInOutSine: function(pos) {
            return (-0.5 * (Math.cos(Math.PI * pos) - 1));
        },
        easeInOutQuint: function(pos) {
            if ((pos /= 0.5) < 1) {
                return 0.5 * Math.pow(pos, 5);
            }
            return 0.5 * (Math.pow((pos - 2), 5) + 2);
        },
        easeInSine: function(pos) {
            return -Math.cos(pos * (Math.PI / 2)) + 1;
        },
        easeInCubic: function(pos) {
            return Math.pow(pos, 3);
        },
        easeOutCubic: function(pos) {
            return (Math.pow((pos - 1), 3) + 1);
        },
        easeOutQuart: function(pos) {
            return -(Math.pow((pos - 1), 4) - 1);
        },

    };

    function tick() {
        currentTime += 1 / 60;

        var p = currentTime / time;
        var t = easingEquations[easing](p);

        if (p < 1) {
            requestAnimFrame(tick);

            window.scrollTo(0, scrollY + ((scrollTargetY - scrollY) * t));
        } else {
            console.log('scroll done');
            window.scrollTo(0, scrollTargetY);
        }
    }

    tick();
}

const init = () => {
    document.getElementById("open").addEventListener('click', (e) => {
        document.getElementById("mobile-nav-content").classList.add("show")
        e.stopPropagation()
        e.preventDefault()


    });
    document.getElementById("close").addEventListener('click', (e) => {
        document.getElementById("mobile-nav-content").classList.remove("show")
        e.stopPropagation()
        e.preventDefault()


    })


    if (document.getElementById("arrow") != null) {

        document.getElementById("arrow").addEventListener('click', (e) => {
            scrollToY(0, 1500, 'easeOutCubic')
            e.stopPropagation()
            e.preventDefault()
        })

    }
}

window.onload = init