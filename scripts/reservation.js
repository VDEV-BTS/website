function dispo() {
  const reservation = document.getElementById('dispo')
  reservation.classList.remove('hidden')
}

function howManyPets(ev) {
  const pets = document.getElementById('howmanypets')
  if (ev.id === 'pets-yes') pets.classList.remove('hidden')
  else pets.classList.add('hidden')
}

function howManyCar(ev) {
  const car = document.getElementById('howmanycar')
  if (ev.id === 'car-yes') car.classList.remove('hidden')
  else car.classList.add('hidden')
}
