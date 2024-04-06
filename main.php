<?php
// Check if a URL is provided as input
if (isset($_GET['url'])) {
    $url = $_GET['url'];

    // Use file_get_contents to fetch the HTML content
    $html = file_get_contents($url);

    // Handle potential errors
    if ($html === false) {
        echo "Error fetching URL: $url";
    } else {
        // Print the HTML content
        echo $html;
    }
} else {
    // Display a form for user input if no URL is provided
    echo '<form method="GET">
            Enter a URL: <input type="text" name="url">
            <button type="submit">Fetch</button>
          </form>';
}

