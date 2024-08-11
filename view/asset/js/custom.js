(function () {
	'use strict';

	var tinyslider = function () {
		var el = document.querySelectorAll('.testimonial-slider');

		if (el.length > 0) {
			var slider = tns({
				container: '.testimonial-slider',
				items: 1,
				axis: "horizontal",
				controlsContainer: "#testimonial-nav",
				swipeAngle: false,
				speed: 700,
				nav: true,
				controls: true,
				autoplay: true,
				autoplayHoverPause: true,
				autoplayTimeout: 3500,
				autoplayButtonOutput: false
			});
		}
	};
	tinyslider();




	var sitePlusMinus = function () {

		var value,
			quantity = document.getElementsByClassName('quantity-container');

		function createBindings(quantityContainer) {
			var quantityAmount = quantityContainer.getElementsByClassName('quantity-amount')[0];
			var increase = quantityContainer.getElementsByClassName('increase')[0];
			var decrease = quantityContainer.getElementsByClassName('decrease')[0];
			increase.addEventListener('click', function (e) { increaseValue(e, quantityAmount); });
			decrease.addEventListener('click', function (e) { decreaseValue(e, quantityAmount); });
		}

		function init() {
			for (var i = 0; i < quantity.length; i++) {
				createBindings(quantity[i]);
			}
		};

		function increaseValue(event, quantityAmount) {
			value = parseInt(quantityAmount.value, 10);

			console.log(quantityAmount, quantityAmount.value);

			value = isNaN(value) ? 0 : value;
			value++;
			quantityAmount.value = value;
		}

		function decreaseValue(event, quantityAmount) {
			value = parseInt(quantityAmount.value, 10);

			value = isNaN(value) ? 0 : value;
			if (value > 0) value--;

			quantityAmount.value = value;
		}

		init();

	};
	sitePlusMinus();


})();


//count
function counter() {
	const amountBtnArray = document.querySelectorAll(".amountBtn");
	let amountBtn = document.getElementsByClassName('amountBtn');
	amountBtnArray.forEach(function (e) {
		e.addEventListener('click', function thayDoiSoLuong() {
			let countResult = 1
			// console.log(this)
			let amountValue = this.closest('.soLuong').getElementsByClassName('showAmount')[0].value;
			// console.log(amountValue)
			if (this.classList.contains('plus') == true) {
				countResult = parseInt(amountValue) + 1
				// console.log(countResult)
			}
			if (this.classList.contains('minus') == true) {
				countResult = parseInt(amountValue) - 1
				if (parseInt(amountValue) <= 1) {
					countResult = 1
				}
			}
			this.closest('.soLuong').getElementsByClassName('showAmount')[0].value = countResult
		})
	})
}

counter();