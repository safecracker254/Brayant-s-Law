<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUTTON WEBSITE</title>
    <link rel="stylesheet" href="styles/homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <!-- font awesome script code -->
    <script src="https://use.fontawesome.com/f52cab40d6.js"></script>
    <!-- end of it -->
</head>
<body>
<div id="particles-js"></div>

    <div class="menu-container">
        <div class="menu-toggle">
            <img src="images/logo.png" width="120px" height="120px;">     
        </div>
        <!-- home -->
        <li style="--i:0" index="1"  >
            <a href="#"><i class="fa-solid fa-apple-whole"></i></a>
        </li>
        <!-- about us -->
        <li style="--i:1" index="2" >
            <a href="about.html"><i class="fa-solid fa-info"></i></a>
        </li>
        <!-- contact us -->
        <li style="--i:2" index="3" >
            <a href="service.html"><i class="fa-solid fa-comment-dots"></i></a>
        </li>
        <!-- blog  -->
        <li style="--i:3" index="4" >
            <a href="#"><i class="fa-solid fa-newspaper"></i></a>
        </li>
        <!-- our services -->
        <li style="--i:4" index="5" >
            <a href="#"><i class="fa-solid fa-bell-concierge"></i></a>
        </li>
        <!-- coming soon -->
        <li style="--i:5" index="6" >
            <a href="#"><i class="fas fa-cart-plus"></i></a>
        </li>
        <!-- live chat -->
         <li style="--i:6" index="7" >
            <a href="#"><i class="fa-regular fa-headset"></i></a>
        </li> -->
        <!-- inquiry  -->
        <li style="--i:7" index="8" >
            <a href="#"><i class="fas fa-chart-pie"></i></a>
        </li> -->
        
    </div>

    <script>
        $(document).ready(function(){
            var menuExpanded = false;
            $(".menu-toggle").click(function(){
                if(!menuExpanded){
                    $(".menu-container").addClass('active');

                }
                else{
                    $(".menu-container").removeClass('active');
                }
                menuExpanded = !menuExpanded;
            })
            $(".menu-container li").hover(function(){
                var index = $(this).attr('index');
                $(this).find('a').addClass('hover'+index);

            
        });
        $(".menu-container li").mouseleave(function(){
                var index = $(this).attr('index');
                $(this).find('a').removeClass('hover'+index);

            
        });
        $(".menu-toggle").hover(function(){
            $(".menu-container li").each(function(){
                var index = $(this).attr('index');
                $(this).find('a').addClass('hover'+index);    
            });
        });
        $(".menu-toggle").click(function(){
            $(".menu-container li").each(function(){
                var index = $(this).attr('index');
                $(this).find('a').removeClass ('hover'+index);    
            });
        });
    })

    // start of partcicles
    // ParticlesJS Config.
particlesJS("particles-js", {
  "particles": {
    "number": {
      "value": 80,
      "density": {
        "enable": true,
        "value_area": 700
      }
    },
    "color": {
      "value": "#ffffff"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#000000"
      },
      "polygon": {
        "nb_sides": 5
      },
    },
    "opacity": {
      "value": 0.5,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 0.1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 3,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 10,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 150,
      "color": "#ffffff",
      "opacity": 0.4,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 2,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "grab"
      },
      "onclick": {
        "enable": true,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 140,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
}); 
    // end of particles
    </script>
    
</body>
</html>