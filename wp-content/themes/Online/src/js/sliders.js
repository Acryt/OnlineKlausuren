import { Swiper, Navigation, Pagination, Autoplay  } from 'swiper';

export function sliders() {
	console.log('Sliders Loaded');
	const blogSwiper = new Swiper('.slider-blog__swiper', {
		modules: [
			Navigation,
			Pagination,
			Autoplay
		],
		direction: 'horizontal',
		slidesPerView: 3,
		spaceBetween: 24,
		slidesPerGroup: 1,
		loop: true,
		centeredSlides: true,
		centeredSlidesBounds: true,
		autoHeight: true,
		autoplay: {
			enabled: false,
			delay: 5000,
		},
		speed: 500,
		pagination: {
			el: '.slider-blog__pagination',
			type: 'bullets',
			clickable: true,
		},
		navigation: {
			prevEl: '.slider-blog__prev',
			nextEl: '.slider-blog__next',
		},
		breakpoints: {
			520: {
			  slidesPerView: 1,
			  spaceBetween: 10,
			},
			920: {
			  slidesPerView: 2,
			  spaceBetween: 20,
			},
			1200: {
			  slidesPerView: 3,
			  spaceBetween: 30,
			},
		}
	});
	const reviewSwiper = new Swiper('.slider-review__swiper', {
		modules: [
			Navigation,
			Pagination,
			Autoplay
		],
		direction: 'horizontal',
		spaceBetween: 24,
		slidesPerGroup: 1,
		loop: true,
		centeredSlidesBounds: true,
		autoHeight: true,
		autoplay: {
			enabled: false,
			delay: 5000,
		},
		speed: 500,
		pagination: {
			el: '.slider-review__pagination',
			type: 'bullets',
			clickable: true,
		},
		navigation: {
			prevEl: '.slider-review__prev',
			nextEl: '.slider-review__next',
		},
		breakpoints: {
			520: {
			  slidesPerView: 1,
			  spaceBetween: 10,
			},
			720: {
			  slidesPerView: 2,
			  spaceBetween: 20,
			},
			920: {
			  slidesPerView: 3,
			  spaceBetween: 20,
			},
			1200: {
			  slidesPerView: 4,
			  spaceBetween: 30,
			},
		}
	});
}