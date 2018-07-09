//declare clock hands
  	const secondHand = document.querySelector('.second-hand');
  	const minsHand = document.querySelector('.min-hand');
  	const hourHand = document.querySelector('.hour-hand');

  	//create function to get the time
  	function setDate() {
  		const now = new Date();

  		//get seconds and position seconds hand to match current time
  		const seconds = now.getSeconds();
  		const secondsDegrees = ((seconds / 60) * 360) + 90;
  		secondHand.style.transform = `rotate(${secondsDegrees}deg)`;

  		//get minutes and position minutes hand to match current time
  		const mins = now.getMinutes();
  		const minsDegrees = ((mins / 60) * 360) + 90;
  		minsHand.style.transform = `rotate(${minsDegrees}deg)`;

  		//get hour and position hour hand to match current time
  		const hours = now.getHours();
  		const HoursDegrees = ((hours / 12) * 360) + 90;
  		hourHand.style.transform = `rotate(${HoursDegrees}deg)`;
  	}
  	setInterval(setDate, 1000);