export default function Menu() {
	const navMobile = document.getElementById('nav-mobile');
	const button = document.getElementById('toogle-button');

	button.addEventListener('click', () => {
		'0%' === navMobile.style.right
			? ( navMobile.style.right = '-100%' )
			: (navMobile.style.right = '0%');
	});

	button.addEventListener('click', () => {
		'mobile-button active' === button.classList.value
			? ( button.classList.value = 'mobile-button' )
			: ( button.classList.value = 'mobile-button active' );
	} );
}
