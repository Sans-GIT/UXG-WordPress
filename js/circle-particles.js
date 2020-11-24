/* -----------------------------------------------
/* How to use? : Check the GitHub README
/* ----------------------------------------------- */

/* To load a config file (particles.json) you need to host this demo (MAMP/WAMP/local)... */
/*
particlesJS.load('particles-js', 'particles.json', function() {
  console.log('particles.js loaded - callback');
});
*/
var particleProperties = {
  "particles": {
    "number": {
      "value": 7,
      "density": {
        "enable": true,
        "value_area": 1000
      }
    },
    "color": {
      "value": ["#536083", "#3BBE73", "#FDB400", "#3C50E0", "#FF5670", "#FDDD7F"]
    },
    "shape": {
      "type": ["circle"],
      "stroke": {
        "width": 0,
        "color": '#ffffff'
      },
      "polygon": {
        "nb_sides": 5
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 1,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 47,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": false,
      "distance": 150,
      "color": '#fff',
      "opacity": 0.4,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 7,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
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
        "enable": false,
        "mode": "repulse"
      },
      "onclick": {
        "enable": false,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 400,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 94,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true,
  "config_demo": {
    "hide_card": false,
    "background_color": "transaparent",
    "background_image": "",
    "background_position": "50% 50%",
    "background_repeat": "no-repeat",
    "background_size": "cover"
  }
};

var content_children_el = document.querySelector('#uxg-content').children;
console.log(content_children_el.length);
for (var i = 1; i <= content_children_el.length; i++) {
  if (document.getElementById('particlescontainer' + i)) {
    particlesJS('particlescontainer' + i, particleProperties);
  }
}
/* Otherwise just put the config content (json): */
