
//create function to play a sound when correct key is pressed
function playSound(e) {
  	const audio = document.querySelector(`audio[data-key="${e.keyCode}"]`);
    const key = document.querySelector(`.key[data-key="${e.keyCode}"]`);
    if (!audio) return;
    audio.currentTime = 0;
    audio.play();
    key.classList.add('playing'); //start playing CSS style
  }

  //create function to return to normal CSS style
  function removeTransition(e) {
  	if(e.propertyName !== 'transform') return;
  	this.classList.remove('playing');
  }

  const keys = document.querySelectorAll('.key');
  keys.forEach(key => key.addEventListener('transitionend', removeTransition));
  window.addEventListener('keydown', playSound);