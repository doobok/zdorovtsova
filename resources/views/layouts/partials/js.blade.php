<script src="{{ mix('js/app.js') }}" defer></script>

<script type="text/javascript">

  // const counters = document.querySelectorAll('.value');
  // const speed = 100;
  //
  // counters.forEach( counter => {
  //  const animate = () => {
  //     const value = +counter.getAttribute('akhi');
  //     const data = +counter.innerText;
  //
  //     const time = value / speed;
  //    if(data < value) {
  //         counter.innerText = Math.ceil(data + time);
  //         setTimeout(animate, 1);
  //       }else{
  //         counter.innerText = value;
  //       }
  //  }
  //  animate();
  // });

var number = document.querySelector('#numbers'),
		numberTop = number.getBoundingClientRect().top,
		start = +number.innerHTML, end = +number.dataset.max;

    const counters = document.querySelectorAll('.value');
    const speed = 1000;

		window.addEventListener('scroll', function onScroll() {
			if(window.pageYOffset > numberTop - window.innerHeight / 2) {
        console.log('start');
				this.removeEventListener('scroll', onScroll);
				// var interval = setInterval(function() {
				// 	number.innerHTML = ++start;
				// 	if(start == end) {
				// 		clearInterval(interval);
				// 	}
				// }, 5);
        counters.forEach( counter => {
         const animate = () => {
            const value = +counter.getAttribute('akhi');
            const data = +counter.innerText;

            const time = value / speed;
           if(data < value) {
                counter.innerText = Math.ceil(data + time);
                setTimeout(animate, 1);
              }else{
                counter.innerText = value;
              }
         }
         animate();
        });
			}
		});
/////////////////////////////////////////////////////////////

    // var number = document.querySelector('.number'),
    // 		numberTop = number.getBoundingClientRect().top,
    // 		start = +number.innerHTML, end = +number.dataset.max;
    //
    // 		window.addEventListener('scroll', function onScroll() {
    // 			if(window.pageYOffset > numberTop - window.innerHeight / 2) {
    //         console.log('start');
    // 				this.removeEventListener('scroll', onScroll);
    // 				var interval = setInterval(function() {
    // 					number.innerHTML = ++start;
    // 					if(start == end) {
    // 						clearInterval(interval);
    // 					}
    // 				}, 5);
    // 			}
    // 		});
/////////////////////////////////////////////////////////////

// window.scroll(function() {
//    var hT = $('.value').offset().top,
//        hH = $('.value').outerHeight(),
//        wH = $(window).height(),
//        wS = $(this).scrollTop();
//    if (wS > (hT+hH-wH) && (hT > wS) && (wS+wH > hT+hH)){
//
//    }
// });
//
//   const counters = document.querySelectorAll('.value');
//   const speed = 100;
//
//   counters.forEach( counter => {
//    const animate = () => {
//       const value = +counter.getAttribute('akhi');
//       const data = +counter.innerText;
//
//       const time = value / speed;
//      if(data < value) {
//           counter.innerText = Math.ceil(data + time);
//           setTimeout(animate, 1);
//         }else{
//           counter.innerText = value;
//         }
//    }
//    animate();
//   });

</script>
