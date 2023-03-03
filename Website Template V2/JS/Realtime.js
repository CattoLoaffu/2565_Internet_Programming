function displayCurrentDate() {
    // Get the current date
    const now = new Date();

    // Format the date as a string
    const dateString = now.toLocaleDateString();

    // Update the content of the HTML element with the formatted date
    document.getElementById("date").innerHTML = dateString;
}

  // Call the function to display the current date
displayCurrentDate();
