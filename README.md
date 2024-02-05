a. Brief Description of the Project
The project is a simple web application developed using Laravel that utilizes AJAX to fetch data from a public API and display it on a webpage without reloading the page. The application focuses on providing a user-friendly interface for users to input a city name and retrieve corresponding weather information from the API. The fetched data is then displayed in a structured format on the webpage, enhancing the user experience by enabling real-time updates without page refreshes.

b. Instructions on How to Run the Project Locally
1-git clone https://github.com/IAMMARKHAN/EAD-AJAX.git
2-cd ajax-weather-application
3-php artisan serve
4-php artisan serve

c. Summary of Findings Regarding Performance Improvements
By utilizing AJAX to fetch data from the public API asynchronously, significant performance improvements were observed in the web application. The use of AJAX allowed the application to retrieve and display weather information in real-time without requiring the entire page to reload. This resulted in a smoother and more responsive user experience, as users could view updated weather data without experiencing delays or interruptions caused by page refreshes.

d. Challenges Faced and How They Were Overcome
Implementing AJAX Requests: Initially, integrating AJAX requests into the Laravel application posed challenges due to the need to handle asynchronous data retrieval and update the webpage dynamically. This was overcome by carefully designing the frontend and backend components to communicate effectively using AJAX and updating the DOM with the fetched data.

Cross-Origin Resource Sharing (CORS) Issues: Some public APIs may have CORS restrictions, preventing AJAX requests from different origins. This was addressed by either configuring the API to allow cross-origin requests or by setting up a proxy server to handle the requests on behalf of the client-side application.
