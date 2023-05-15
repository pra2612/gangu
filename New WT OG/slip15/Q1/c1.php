// Define an array of suggestions
const suggestions = ["apple", "banana", "cherry", "date", "elderberry", "fig", "grape", "honeydew", "kiwi", "lemon", "mango", "nectarine", "orange", "peach", "quince", "raspberry", "strawberry", "tangerine", "watermelon"];

// Get references to the search box and suggestions div
const searchBox = document.getElementById("searchBox");
const suggestionsDiv = document.getElementById("suggestions");

// Define a function to get the suggestions based on user input
function getSuggestions() {
  const userInput = searchBox.value.toLowerCase(); // Get user input and convert to lowercase
  const matchingSuggestions = suggestions.filter(suggestion => suggestion.startsWith(userInput)); // Filter suggestions that start with user input
  suggestionsDiv.innerHTML = ""; // Clear previous suggestions
  matchingSuggestions.forEach(suggestion => {
    const suggestionDiv = document.createElement("div"); // Create a div element for each suggestion
    suggestionDiv.innerText = suggestion; // Set the text content of the div to the suggestion
    suggestionsDiv.appendChild(suggestionDiv); // Append the suggestion div to the suggestions container
  });
}

