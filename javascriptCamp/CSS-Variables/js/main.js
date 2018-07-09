  	const inputs = document.querySelectorAll('.controls input');

  	/*update function*/
  	function handleUpdate() {
  		const suffix = this.dataset.sizing || '';
  		document.documentElement.style.setProperty(`--${this.name}`, this.value + suffix);
  	}

  	/*Update values*/
  	inputs.forEach(input => input.addEventListener('change', handleUpdate));
  	inputs.forEach(input => input.addEventListener('mousemove', handleUpdate));