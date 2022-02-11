Steps to Run the App:
1. Install Xampp https://www.apachefriends.org/download.html
2. Start Xampp and start Apache Server.
3. When the Xampp Server is running go to the config of the Apache server and select Apache(httpd.conf)
4. A text file will open Within this file, there are three settings you’ll want to update. To get started, press Ctrl + F, then enter “80” in the search field:
5. This will display all instances of the number 80 in the file. search for “Listen 80” and update it to “Listen 8080”. Finally, search for “servername localhost:80”. Once you find it, modify it to “servername localhost:8080”. When you’re finished, save and close the file.
6. Now it’s time to move on to the second file. To do so, you can return to the XAMPP control panel, then select Config under the Apache settings again. This time, open the Apache (http-ssl.conf) file.
7. When the file opens in your text editor, press Ctrl + F, and then enter 443 in the search field. Locate “Listen 443” and update this to “Listen 4433”.
8. Next, search the file for the next instance of “443”. It should be “<VirtualHost _default_:443>”. Once you find it, you can go ahead and change it to “<VirtualHost _default_:4433>”. When you’re finished, remember to save and close the file.
9. Once you’ve updated the settings in both files, the final step is to stop Apache. You can do this by clicking on the Stop button along the same Apache row. After Apache has been stopped, click the Start button to complete the restart process.
10. Copy the Repo to this Path C:\xampp\htdocs
11. Visit this URL to test the App: http://localhost:8080/Contact-Form/index.html