# Project Recipe

A simple website with curated recipes from select regions from across the world. If you've ever had trouble choosing what to eat for dinner worry no longer because our website was designed for people who struggle with this very issue. Simply choose from the tabs at the top which cuisine you'd like to indulge in and click the randomize button to get a 3 course meal of a main, a side, and a drink.

## Features
* **SQL database:** An SQL database contains all of the dishes including the ones you've favorited.
* **Favoriting:** If you've found a dish that speaks to you, you have the option of favoriting it.
* **Un-Favoriting:** If a dish you thought would be good wasn't, you have the option of removing it as a favorite.
* **Account System:** Quite rudimentary but allows for signup, login, and logout. This account is also linked to your favorites.
* **Error Handling for User Input:** For the field where you can input information it is safely guarded against incorrect inputs, empty fields, and sql injection.

## How To Run
* Download XAMPP
* Download the repository as a .zip file and unzip the file inside `htdocs` in the XAMPP file directory
* Launch the XAMPP server manager and run `mySQL database` and `Apache web server`
* Access `http://localhost/phpmyadmin/` on a web browser and import `myfirstdatabase.sql` included in the zip
* Access `http://localhost/FoodRandomizer/Main/Website%20Recipe%20Transcriber.php` in order to access the website

## AI USAGE
**Recommended Page (HTML & CSS)**
* Learned how I could add fonts. 
* Had it show me how to use cards and how to style them. 
* Troubleshooted to see how I could incorporate images that also worked on a website and not just locally.
* Had it teach me how to put the cards into grids
