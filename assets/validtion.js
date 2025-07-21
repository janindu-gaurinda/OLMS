//validtion js start
document
  .getElementById("leave_form")
  .addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent form submission

    // Clear previous error messages
    clearErrors();

    let isValid = true; // Flag to track validation status

    // Validate Leave_type
    const Leave_type = document.getElementById("Leave_type").value.trim();
    if (Leave_type === "") {
      showError("Leave_typeError", "Cannot be empty.");
      isValid = false;
    }

    // Validate date_of_commencing_leave
    const date_of_commencing_leave = document
      .getElementById("date_of_commencing_leave")
      .value.trim();
    if (date_of_commencing_leave === "") {
      showError("date_of_commencing_leaveError", "Cannot be empty.");
      isValid = false;
    }

    // Validate date_of_resuming_duties
    const date_of_resuming_duties = document
      .getElementById("date_of_resuming_duties")
      .value.trim();
    if (date_of_resuming_duties === "") {
      showError("date_of_resuming_dutiesError", "Cannot be empty.");
      isValid = false;
    }
    // Validate address_when_on_leave
    const address_when_on_leave = document
      .getElementById("address_when_on_leave")
      .value.trim();
    if (address_when_on_leave === "") {
      showError("address_when_on_leaveError", "Cannot be empty.");
      isValid = false;
    }
    // Validate supervisor_id
    const supervisor_id = document.getElementById("supervisor_id").value.trim();
    if (supervisor_id === "") {
      showError("supervisor_idError", "Cannot be empty.");
      isValid = false;
    }
    // Validate reason_for_leave
    const reason_for_leave = document
      .getElementById("reason_for_leave")
      .value.trim();
    if (reason_for_leave === "") {
      showError("reason_for_leaveError", "Cannot be empty.");
      isValid = false;
    }
    // Validate num_of_days
    const num_of_days = document.getElementById("num_of_days").value.trim();
    // const num_of_daysPattern = /^\d+$/; // Matches one or more digits (only numbers)
    const num_of_daysPattern = /^\d+(\.\d+)?$/;

    if (num_of_days === "") {
      showError("num_of_daysError", "Cannot be empty.");
      isValid = false;
    } else if (!num_of_daysPattern.test(num_of_days)) {
      showError("num_of_daysError", "Please enter a valid number.");
      isValid = false;
    }

    // If form is valid, submit the form
    if (isValid) {
      document.getElementById("leave_form").submit(); // Submit the form if validation passes
    }
  });

// Function to display error messages
function showError(errorId, message) {
  const errorElement = document.getElementById(errorId);
  errorElement.textContent = message;
}

// Function to clear error messages
function clearErrors() {
  const errorElements = document.querySelectorAll(".error");
  errorElements.forEach((element) => {
    element.textContent = "";
  });
}



//validation end





// // Function to calculate the number of days between the two dates
// function calculateDays() {
//   // Get the values from the date input fields
//   var startDate = document.getElementById("date_of_commencing_leave").value;
//   var endDate = document.getElementById("date_of_resuming_duties").value;

//   // Check if both dates are selected
//   if (startDate && endDate) {
//     // Convert the dates into JavaScript Date objects
//     var start = new Date(startDate);
//     var end = new Date(endDate);

//     // Calculate the difference in time (in milliseconds)
//     var timeDifference = end - start;

//     // If the end date is earlier than the start date, set the number of days to 0 or display an error
//     if (timeDifference < 0) {
//       document.getElementById("num_of_days").value = "Invalid date range"; // Error message or set to 0
//       return;
//     }

//     // Convert the time difference from milliseconds to days
//     var dayDifference = timeDifference / (1000 * 3600 * 24);

//     // Set the calculated number of days in the input field
//     document.getElementById("num_of_days").value = dayDifference;
//   }
// }

// // Event listeners to trigger the calculation when dates are changed
// document
//   .getElementById("date_of_commencing_leave")
//   .addEventListener("change", calculateDays);
// document
//   .getElementById("date_of_resuming_duties")
//   .addEventListener("change", calculateDays);




  // /////////////////////////// leave limiterror
  