export default function counterFunction() {
	const counters = document.querySelectorAll('.counter-target');

	counters.forEach( (counter) => {
		counter.innerText = '0';

		const updateCounter = () => {
			const target = +counter.getAttribute('data-target');
			const c = +counter.innerText;

			const increment = target / 500;

			if (c < target) {
				counter.innerText = `${Math.ceil(c + increment)}`;
				setTimeout(updateCounter, 10);
			} else {
				counter.innerText = target;
			}
		};

		updateCounter();
	});
}
