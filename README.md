# 🤖 Botpress Channel-Web Examples Folder for MyDCampus
This is the repository for the MyDCampus Botpress Chatbot Channel-Web Examples folder.

You can directly clone this repo into the examples folder in the channel-web folder which can be located at `../botpress/data/assets/modules/channel-web/examples/` (the folder  needs to be empty first). After that, the files should be inside the examples folder.

You can test the site with this link (Botpress must be running and the `.tgz` file has been imported): `http://localhost:3000/assets/modules/channel-web/examples/MyDCampusPortal.html?botId=sample-bot`

## 📁 Important Files
The `My DCampus Portal_Files` folder contains the assets for the `MyDCampusPortal.html` website. The main CSS file for the website inside the folder is `app.min.css`

The chat bot injection script is in `MyDCampusPortal.html` found around `line 705`, or you can just `Ctrl + F + "chatbot script"` to find it. You can also make edits to the sidebar navigation around line `150` which contains the settings front-end for the chat bot settings.

The `Themes` folder contains the CSS files for each theme that's used by the chat bot.

The `.tgz` file is to be imported in the Botpress admin panel to work with an up to date chat bot at all times.

~~The `COPY INTO UI-LITE FOLDER` contains the JS function for dynamic chat box sizing. Instructions on how to implement are inside the folder.~~

## ✅ To-do List
- Create a folder for the different versions of the `.tgz` chat bot files. ✅
- Create a dark theme ✅
- Add options along with suboptions in chatbot settings:
	- Accessibility
		- Different accessibility features
	- Themes ✅
		- Different themes
- ~~Automate copying and pasting the UI-Lite JS function.~~
	- No longer relevant seeing as it now works without any additional steps.

### NEW TODO
- Make themes more dynamic (make minor styles stick after changing theme)
	- Almost done, just need to fix bugs:
		- ~~Bug with the color of the input when changing DLSL colors while in Neutral Textbox theme~~
		- ~~Border color for input doesn't stay consistent when turning Neutral Textbox on and off in dark theme~~
