$(document).ready(function() {
    history.scrollRestoration = "manual";
    $(window).on('beforeunload', function() {
        $(window).scrollTop(0);
    });
    // ページスクロール
    $('.scroll').click(function() {
        // スクロールの速度
        var speed = 400; // ミリ秒で記述
        var href = $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $('body,html').animate({
            scrollTop: position
        }, speed, 'swing');
        return false;
    });

    $('.icon-play a').on('click', function(ev) {
        // alert();
        $('.icon-play').hide();
        $(".content-video iframe")[0].src += "&autoplay=1";

        ev.preventDefault();

    });

    //  loading splash
    var canvassize = 500;

    if(window.innerWidth < 768) {
        canvassize = 375
    }


    var $body = document.body,
        $wrap = document.getElementById('loading_ware'),

        areawidth = window.innerWidth,
        areaheight = window.innerHeight,
        length = 30,
        radius = 5.6,

        rotatevalue = 0.035,
        acceleration = 0,
        animatestep = 0,
        toend = false,

        pi2 = Math.PI * 2,

        group = new THREE.Group(),
        mesh, ringcover, ring,

        camera, scene, renderer;

    camera = new THREE.PerspectiveCamera(65, 1, 1, 10000);
    camera.position.z = 150;

    scene = new THREE.Scene();
    scene.add(group);

    mesh = new THREE.Mesh(
        new THREE.TubeGeometry(new(THREE.Curve.create(function() {},
            function(percent) {

                var x = length * Math.sin(pi2 * percent),
                    y = radius * Math.cos(pi2 * 3 * percent),
                    z, t;

                t = percent % 0.25 / 0.25;
                t = percent % 0.25 - (2 * (1 - t) * t * -0.0185 + t * t * 0.25);
                if (Math.floor(percent / 0.25) == 0 || Math.floor(percent / 0.25) == 2) {
                    t *= -1;
                }
                z = radius * Math.sin(pi2 * 2 * (percent - t));

                return new THREE.Vector3(x, y, z);

            }
        ))(), 200, 1.1, 2, true),
        new THREE.MeshBasicMaterial({
            // color: 0xffffff
            // , wireframe: true
        })
    );
    group.add(mesh);

    ringcover = new THREE.Mesh(new THREE.PlaneGeometry(50, 15, 1), new THREE.MeshBasicMaterial({
        opacity: 0,
        transparent: true
    }));
    ringcover.position.x = length + 1;
    ringcover.rotation.y = Math.PI / 2;
    group.add(ringcover);

    ring = new THREE.Mesh(new THREE.RingGeometry(4.3, 5.55, 32), new THREE.MeshBasicMaterial({
        opacity: 0,
        transparent: true
    }));
    ring.position.x = length + 1.1;
    ring.rotation.y = Math.PI / 2;
    group.add(ring);

    // fake shadow
    (function() {
        var plain, i;
        for (i = 0; i < 10; i++) {
            plain = new THREE.Mesh(new THREE.PlaneGeometry(length * 2 + 1, radius * 3, 1), new THREE.MeshBasicMaterial({
                color: 0xd1684e,
                transparent: true,
                opacity: 0
            }));
            plain.position.z = -2.5 + i * 0.5;
            group.add(plain);
        }
    })();

    renderer = new THREE.WebGLRenderer({
        antialias: true,
        alpha: true
    });
    renderer.setPixelRatio(window.devicePixelRatio);
    renderer.setSize(canvassize, canvassize);
    renderer.setClearColor(0x000000, 0);

    $wrap.appendChild(renderer.domElement);

    $body.addEventListener('mousedown', start, false);
    $body.addEventListener('touchstart', start, false);
    $body.addEventListener('mouseup', back, false);
    $body.addEventListener('touchend', back, false);

    animate();


    function start() {
        toend = true;
    }

    function back() {
        toend = false;
    }

    function tilt(percent) {
        group.rotation.y = percent * 0.5;
    }

    function render() {
        var progress;

        animatestep = Math.max(0, Math.min(240, toend ? animatestep + 1 : animatestep - 4));
        acceleration = easing(animatestep, 0, 1, 240);

        if (acceleration > 0.35) {
            progress = (acceleration - 0.35) / 0.65;
            group.rotation.y = -Math.PI / 2 * progress;
            group.position.z = 50 * progress;
            progress = Math.max(0, (acceleration - 0.97) / 0.03);
            mesh.material.opacity = 1 - progress;
            ringcover.material.opacity = ring.material.opacity = progress;
            ring.scale.x = ring.scale.y = 0.9 + 0.1 * progress;
        }

        renderer.render(scene, camera);

    }

    function animate() {
        mesh.rotation.x += rotatevalue + acceleration;
        render();
        requestAnimationFrame(animate);
    }

    function easing(t, b, c, d) {
        if ((t /= d / 2) < 1) return c / 2 * t * t + b;
        return c / 2 * ((t -= 2) * t * t + 2) + b;
    }


    // Loading number
    var percentage = 0;

    function updateLoading() {
        percentage++;
        $("#loading_text").text(percentage);

        if (percentage < 100) {
            setTimeout(updateLoading, 30);
        } else if (percentage == 100) {
            $('.loading__body').removeClass('blur');
            $(".loading__text, #loading_ware").addClass('hidden');
            $(".select__sound").removeClass('hidden');
        }
    }

    updateLoading();

    // sound run line
    const soundToggleRects = $(".ui-sound-toggle-rects rect");
    const intensity = 2.5;
    let isAnimating = true;

    function animateRects(time) {
        if (isAnimating) {
            soundToggleRects.each(function(index, rect) {
                const o = Math.cos(time * 0.003 + index * 0.5) * intensity;
                $(rect).css("transform", `translateY(${o}px)`);
            });
        } else {
            soundToggleRects.css("transform", "translateY(0px)");
        }

        requestAnimationFrame(animateRects);
    }

    requestAnimationFrame(animateRects);

    // $(".ui-sound-toggle").on("click", function() {
    //     console.log('click')
    //     // isAnimating = !isAnimating;
    // });

    // play video splash
    var videoSplash_ver = $('#splash_ver')[0];
    var videoMain = $('#main_video')[0];
    var checkSoundOff = false
    $('.select__sound-choice-item-on').click(function() {
        $('.select__sound').css({
            "opacity": 0,
            "z-index": -1
        })
        $('.next-sound-line').removeClass('hidden')

        videoSplash_ver.play();
        videoSplash_ver.muted = false;
        checkSoundOff = false
    })

    $('.select__sound-choice-item-off').click(function() {
        $('.select__sound').css({
            "opacity": 0,
            "z-index": -1
        })
        $('.next-sound-line').removeClass('hidden')
        isAnimating = !isAnimating;

        videoSplash_ver.play();
        videoSplash_ver.muted = true;
        checkSoundOff = true;
    })

    $('#splash_ver').on('ended', function() { // show video 02
        $('.main-video').css({
            "opacity": 1,
            "visibility": "visible",
            "transition": ".3s all"
        })
        $('.main, body').addClass('active');
        $('.footer').addClass('active');
        $('.nav').removeClass('hidden');

        if (checkSoundOff === true) {
            videoMain.muted = true;
        } else {
            videoMain.muted = false;
        }
        //

        videoMain.play()
    });

    $('.btn-menu-mb a').click(function() {
        $('.nav-link-menu').addClass('active');
    })

    $('.close-menu a').click(function() {
        $('.nav-link-menu').removeClass('active');
    })

    $('.nav-list__link').click(function(e) {
        e.preventDefault();
        $('.nav-link-menu').removeClass('active');
        var target = $($(this).attr('href'));
        if (target.length) {
            var scrollTo = target.offset().top;
            $('body, html').animate({
                scrollTop: scrollTo + 'px'
            }, 800);
        }
    });


    var navOffset = 1978;

    $(window).on('scroll', function() {
        var scrollPos = $(window).scrollTop();

        if(scrollPos > 100) {
            $('.scroll-main').fadeOut();
        } else {
           $('.scroll-main').fadeIn();
        }

        if (scrollPos >= navOffset) {
            $('.head-main').addClass('active');
        }

        if(scrollPos > 4000 || (scrollPos < 1800)) {
            $('.head-main').removeClass('active').fadeIn();
        }

        $('.fukuoka-parco, #cosme, .fadeup').each(function() {
            var elementOffset = $(this).offset().top;
            var windowHeight = $(window).height();

            if (scrollPos + windowHeight > elementOffset) {
                $(this).addClass('animated');
                // $('.head-main').removeClass('active');
            } else {
                // $(this).removeClass('active');
            }
        });

    });

    if(areawidth < 769) {
        var $swiper = $(".swiper-container");
        var $bottomSlide = null;
        var $bottomSlideContent = null;
        var mySwiper = new Swiper(".swiper-container", {
            spaceBetween: 1,
            slidesPerView: 3,
            centeredSlides: true,
            roundLengths: true,
            loop: true,
            loopAdditionalSlides: 30,
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev"
            }
        });
        // $('.slide-product').slick({
        //     slidesToShow: 3,
        //     centerMode: true,
        //     dots: false,
        //     arrows: true,
        //     infinite: true,
        //     centerPadding: '80px',
        //     prevArrow: '<button type="button" class="slick-custom-arrow slick-prev"><img src="/page/koreantrendweek/assets/images/arrow-left.svg" class="" alt=""></button>',
        //     nextArrow: '<button type="button" class="slick-custom-arrow slick-next"><img src="/page/koreantrendweek/assets/images/arrow-right.svg" class="" alt=""></button>',
        //     responsive: [{
        //         breakpoint: 767,
        //         settings: {
        //             slidesToShow: 1,
        //         }
        //     }]
        // });
    }

    // function updateRotation() {
    //     $('.slide-product .item-slide').removeClass('rotate');

    //     // Lấy index của slide hiện tại
    //     var currentIndex = $('.slide-product .slick-center').index();

    //     // Xoay cho ảnh 1 và ảnh 3
    //     var slides = $('.slide-product .item-slide');

    //     // Áp dụng class rotate cho ảnh 1 và ảnh 3
    //     $(slides[currentIndex - 1]).addClass('rotate'); // Ảnh bên trái
    //     $(slides[currentIndex + 1]).addClass('rotate'); // Ảnh bên phải
    // }

    // // Gọi hàm khi slider thay đổi
    // $('.slide-product').on('afterChange', function(event, slick, currentSlide) {
    //     updateRotation();
    // });

    // // Gọi lần đầu tiên để thiết lập xoay ban đầu
    // updateRotation();
})

 window.onload = function() { // canvas random run
    function startCanvasAnimation(canvasId) {
      const canvas = document.getElementById(canvasId);
      const context = canvas.getContext('2d');
      let time = 0;

      const color = function (x, y, r, g, b) {
        context.fillStyle = `rgb(${r}, ${g}, ${b})`;
        context.fillRect(x, y, 10, 10);
      };

      const R = function (x, y, time) {
        return Math.floor(192 + 64 * Math.cos((x * x - y * y) / 300 + time));
      };

      const G = function (x, y, time) {
        return Math.floor(192 + 64 * Math.sin((x * x * Math.cos(time / 4) + y * y * Math.sin(time / 3)) / 300));
      };

      const B = function (x, y, time) {
        return Math.floor(192 + 64 * Math.sin(5 * Math.sin(time / 9) + ((x - 100) * (x - 100) + (y - 100) * (y - 100)) / 1100));
      };

      const animate = function () {
        for (let x = 0; x <= 30; x++) {
          for (let y = 0; y <= 30; y++) {
            color(x * 10, y * 10, R(x, y, time), G(x, y, time), B(x, y, time));
          }
        }
        time += 0.03;
        window.requestAnimationFrame(animate);
      };

      animate();
    }

    startCanvasAnimation('canvas1');
    startCanvasAnimation('canvas2');
    startCanvasAnimation('canvas3');
    startCanvasAnimation('canvas4');
};