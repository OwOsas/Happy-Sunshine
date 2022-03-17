document.addEventListener()

function phoneNumberFormatter() {
  // grab the value of what the user is typing into the input
  const inputField = document.getElementById("phone_number");
  if (inputField.value) {
    const value = inputField.value;
    console.log(value.length);
  }

  // next, we're going to format this input with the `formatPhoneNumber` function, which we'll write next.

  // Then we'll set the value of the inputField to the formattedValue we generated with the formatPhoneNumber
}
