# rqGlobal Website
### WordPress powered
This project entails the development of the rqGlobal website on WordPress.
The programming has been executed through a custom WordPress theme, ensuring a unique and tailored experience that caters to rqGlobal's specific needs.

#### Prerequisites

- WordPress 6.4.2
- [Laragon](https://laragon.org/): Database, Apache, PHP 8.1, and Node

#### Development tools
- [Laragon](https://laragon.org/): Provides an efficient development environment with a database, Apache, PHP, and Node.

## Installation Steps

1. **Install WordPress 6.4.2**
    On your local environment. It is crucial to set this up as the first step since the repository does not include the official WordPress files. You can do this by:
    - Using Laragon's built-in option: right-click -> quick app -> WordPress, or
    - By creating a new folder inside "www/" in Laragon's root and then unzipping the files from [WordPress](https://wordpress.org/download/).


        IMPORTANT: Whatever path you take, name the project or folder *"rq.global.dev".*

2. **Clone the Repository**
   ```bash
   git clone https://github.com/skLuan/wp_rq.global
3. **Folder Configuration**
-    Move all folders, including the .git folder, to the WordPress installation folder or the root directory "rq.global.dev".
    Replace files as needed.
-    Copy the provided "wp-admin.php" file to the root directory "rq.global.dev".

4. **Import data base**
    ```bash
    echo 'Exporting database from MySQL...';
    mysq --user='USERNAMEDB' --password='PASSDB' LOCALDBNAME < ./db/local_data.sql
    echo '---------------> Export complete!! <---------------';
    # if folder db isnt created, do a
    # mkdir db
    ```
    Ensure to replace -> **'USERNAMEDB,'** **'PASSDB,'** and **'LOCALDBNAME'**
    with your credentials and the database name in the *wp-config.php* file.
    Remember that *local_data.sql* is a provided file.
5. **Update Permalinks**
    Access the WordPress admin, go to Settings > Permalinks > Save to update the permalinks.

6. **Content Files**
    Copy provided content files (img, videos):
        wp-content/uploads/ for WordPress-related elements.
        wp/themes/rq_theme/assets/ for theme-related elements.
        
      ***Image Management***
    The "wp-content/uploads/" folder contains WordPress images as an administrator or CMS. Handle images separately. No files are stored in the repository. see the .gitignore for more info 
        
7. **Compiling Tailwind CSS**
    Tailwind CSS is used for CSS management. To compile it, go to "wp-content/themes/rq_themes/" and run:
    ```bash
    npm install
    npm run tailwind
    ```
    This will activate the Tailwind daemon to build the output .css file in "rq_theme/css/style_output.css".
    
    #### IMPORTANT:
    Laragon will always put a ".test" in the links, so to see the page, go to "rq.global.dev.test".