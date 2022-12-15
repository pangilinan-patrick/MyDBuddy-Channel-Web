# 🤖 Botpress Channel-Web Examples Folder for MyDCampus
This is the repository for the MyDCampus Botpress Chatbot Channel-Web Examples folder.

You can directly clone this repo into the examples folder in the channel-web folder which can be located at `../botpress/data/assets/modules/channel-web/examples/` (the folder  needs to be empty first). After that, the files should be inside the examples folder.

You can test the site with this link (Botpress must be running and the `.tgz` file has been imported): `http://localhost:3000/assets/modules/channel-web/examples/MyDCampusPortal.html?botId=sample-bot`

## 📁 Important Files
The `My DCampus Portal_Files` folder contains the assets for the `MyDCampusPortal.html/php` website. The main CSS file for the website inside the folder is `app.min.css`

The chat bot injection script is in `MyDCampusPortal.html/php` found around `line 520`, or you can just `Ctrl + F + "chatbot script"` to find it. You can also make edits to the sidebar navigation around `line 140` which contains the settings front-end for the chat bot settings.

The main chatbot script and other related scripts are located around `line 650`.

The `Themes` folder contains the CSS file for each theme that's used by the chat bot.

The `.tgz` file is to be imported in the Botpress admin panel to work with an up to date chat bot at all times.

The `Database Files` folder contains the needed database files to aid in the chatbot's ability to answer user's queries.

## ✅ To-do List
- Login 
	- Polish login UI
- ~~First time chatbot notification for users~~
- Accessibility
	- ~~High Contrast Theme~~
	- The high contrast theme colors are based on Contrast Ratios compliant with WCAG (Web Content Accessibility Guidance)
	### Black Foreground on DLSL Colors background
	<img src="git_img_assets/Blackfg-to-DLSLbg.png" height=350>
	
	### DLSL Colors Foreground on black background
	<img src="git_img_assets/DLSLfg-to-blackbg.png" height=350>
	
	### Gray Foreground on black background
	<img src="git_img_assets/Grayfg-to-blackbg.png" height=350>

## ✅ Finished Features
- Tgz folders ✅
- Suboptions menu for themes and accessibility options ✅
- Dynamic themes (polished) ✅
	- DLSL Colors 1
	- DLSL Colors 2
	- Neutral Textbox
	- Centered Botpress Branding
	- Tall Chatbox
- Dark theme ✅
- Chatbot scaling accessibility  ✅
- Login UI Draft ✅
