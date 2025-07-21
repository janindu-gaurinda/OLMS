
  ///////////airport mail validtion strat/////////////////
  document
  .getElementById("airportform")
  .addEventListener("submit", function(event) {
      event.preventDefault(); // Prevent form submission

      // Clear previous error messages
      clearErrors();

      let isValid = true; // Flag to track validation status

      // Validate Airport Mail
      const apmailInput = document.getElementById("apmail");
      const apmailError = document.getElementById("apmailError");
      const apmail = apmailInput.value.trim();
      const emailPattern = /^[a-zA-Z0-9._%+-]+@airport\.lk$/; // Only allows @airport.lk emails

      if (apmail === "") {
          showError("apmailError", "Airport email cannot be empty.");
          isValid = false;
      } else if (!emailPattern.test(apmail)) {
          showError("apmailError", "Invalid email address. Must end with '@airport.lk'.");
          isValid = false;
      }

      // Additional validations can be added here for other inputs if needed

      // Submit the form if all validations pass
      if (isValid) {
          this.submit();
      }
  });

// Function to display error messages
function showError(errorId, message) {
  const errorElement = document.getElementById(errorId);
  errorElement.textContent = message; // Display the error message
}

// Function to clear error messages
function clearErrors() {
  const errorElements = document.querySelectorAll(".error");
  errorElements.forEach((element) => {
      element.textContent = ""; // Clear all error messages
  });
}
  ///////////airport mail validtion end/////////////////


