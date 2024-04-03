// Start countdown with a specific date
startCountdown("Jun 16, 2024 23:59:00");

/*
 * @description Starts the countdown timer based on the provided target date.
 * @param countDownDate String value of the target date and time for the countdown in string format.
 */
function startCountdown(countDownDate) {
  const targetDate = new Date(countDownDate).getTime();
  let countdownInterval;

  console.log('target date '+targetDate+' actual date '+new Date().getTime());
  // Update the count down every 1 second
  countdownInterval = setInterval(function () {
    
    // Check if the count down is over
    if (targetDate - new Date().getTime() < 0) {
      handleCountdownExpiration(countdownInterval);
    }else{
      updateCountdownDisplay(targetDate);
    }
  }, 1000);
}

/*
 * @description Updates the HTML element with the formatted countdown display.
 * @param countDownDate Date object That contains the target date and time for the countdown.
 */
function updateCountdownDisplay(countDownDate) {
  const time = calculateRemainingTime(countDownDate);
  const countdownDisplay = `${time.days}d ${time.hours}h ${time.minutes}m ${time.seconds}s`;
  document.querySelector("#targetCounter").innerHTML = countdownDisplay;
}

/*
 * @description Calculates the remaining time in days, hours, minutes, and seconds.
 * @param countDownDate Date object That contains the target date and time for the countdown.
 * @return The function will return an object containing the remaining time.
 */
function calculateRemainingTime(countDownDate) {
  const now = new Date().getTime();
  const distance = countDownDate - now;

  const days = Math.floor(distance / (1000 * 60 * 60 * 24));
  const hours = Math.floor(
    (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
  );
  const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  const seconds = Math.floor((distance % (1000 * 60)) / 1000);

  return { days, hours, minutes, seconds };
}

/*
 * @description Handles the expiration of the countdown by clearing the interval and updating the display.
 * @param countdownInterval the interval ID of the countdown timer.
 */
function handleCountdownExpiration(countdownInterval) {
  clearInterval(countdownInterval);
  document.querySelector("#targetCounter").innerHTML = "EXPIRED";
}


