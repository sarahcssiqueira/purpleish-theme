export default function Menu() {
	const navMenuMobile = document.getElementById('menu-mobile');
	const button = document.getElementById('toogle-button');

	button.addEventListener('click', () => {
		'0%' === navMenuMobile.style.right
			? ( navMenuMobile.style.right = '-100%' )
			: (navMenuMobile.style.right = '0%');
	});

	button.addEventListener('click', () => {
		'mobile-button active' === button.classList.value
			? ( button.classList.value = 'mobile-button' )
			: ( button.classList.value = 'mobile-button active' );
	} );
}

console.log('hello from menu');
