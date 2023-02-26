# 🤖 <strong>Botpress Channel-Web/Examples Directory for MyDCampus Portal</strong>

<img src="git_img_assets/dbuddy.png" />

This is the repository for the MyDCampus Botpress Chatbot Channel-Web Examples directory.

The Channel-Web module in Botpress enables the integration of the chat bot into the website or web application, allowing users to interact with the bot through a chat widget.

The Channel-Web module also includes features such as message history, user authentication, and custom styling options (which is extensively used in this project) for the chat widget.

A repository specifically for the examples directory in this module was created because the source control within the Botpress Admin Panel didn't quite suit our development needs. We needed a way to be able to easily track the changes made to the UI of the chatbot to always have the most updated view of what the chatbot would look like. This repository also stores the NLP and Rule-Based flow of the chatbot exported from the admin panel.
 
## 🪛 <strong>Installation and usage</strong>

You can directly clone this repo into the examples directory in the channel-web directory which can be located at `../botpress/data/assets/modules/channel-web/examples/` (the directory needs to be empty first). After that, the files should be inside the examples directory.

```bash
cd ../botpress/data/assets/modules/channel-web/examples/ # ../ is where you have botpress installed
rm -r * # deletes all the content in the examples directory
git clone https://github.com/pangilinan-patrick/MyDCampus-Channel-Web.git . # clones into the current directory
```

The site is then tested with this link (Botpress must be running and the `.tgz` file has been imported using the Botpress admin site): 
```html
http://localhost:3000/assets/modules/channel-web/examples/MyDCampusPortal.html?botId=draft
```

Please note that this project was developed using `Botpress 12.30.6`

## 📁 <strong>Important Files</strong>

📂 The `My DCampus Portal_Files` directory contains the assets for the `MyDCampusPortal.html` website. The main CSS file for the website inside the directory is `app.min.css`

&nbsp;&nbsp;&nbsp;&nbsp;📄 The chat bot injection script is in `MyDCampusPortal.html` found around `line 520`, or you can just `Ctrl + F + "chatbot script"` to find it. You can also make edits to the sidebar navigation around `line 140` which contains the settings front-end for the chat bot settings.

&nbsp;&nbsp;&nbsp;&nbsp;📄 The main chatbot script and other related scripts are located around `line 650`.

📂 The `Themes` directory contains the CSS file for each theme that's used by the chat bot.

📂 The `Chatbot tgz Import Files` directory contains the chatbot NLP and Rule Based flow and is to be imported using the Botpress Admin Panel to work with an up to date chat bot at all times. The current latest version of the chatbot is `v1`.

📂 The `Database Files` directory contains the IT support knowledgebase in the MyDCampus portal website to aid in the chatbot's ability to answer user's queries. The database is to be imported into PostgreSQL for the reason that it performs better than MySQL which is used by default.
```sql
/* Example of how to import the database from the Database Files folder. A graphical tool can also be used. */
createdb mydbuddydb
pg_restore -d mydbuddydb -h 127.0.0.1 -U postgres mydbuddydb.sql
```

 A `.env` file is to then be created in the Botpress directory and should be set accordingly:

```bash
# .env file
DATABASE_URL=postgres
DATABASE_URL=postgres://postgres:postgres@127.0.0.1:5432/mydbuddydb
```

## ✅ <strong>Features</strong>
<table>
  <tr>
    <th>UI Features 🖌️</th>
    <th>Status</th>
  </tr>
  <tr>
    <td>Themes<ul><li>DLSL Colors 1</li><li>DLSL Colors 2</li><li>Neutral Textbox</li><li>Centered Botpress Branding</li><li>Tall Chatbox</ul></td>
    <td align="center">✅</td>
  </tr>
  <tr>
    <td>Accessibility</td>
    <td align="center">✅</td>
  </tr>
  <tr>
    <td>Dark Theme</td>
    <td align="center">✅</td>
  </tr>
</table>

<table>
  <tr>
    <th>Chatbot Features 🦾</th>
    <th>Status</th>
  </tr>
  <tr>
    <td>NLP Flow<ul>
    <td align="center">✅</td>
  </tr>
  <tr>
    <td>Rule-Based Flow</td>
    <td align="center">✅</td>
  </tr>
</table>

## 🤖 <strong>Chatbot Capabilities</strong>

### <strong>NLP/NLU</strong>
- <strong>Intent Classification </strong>- recognizing what the user wants by categorizing phrases by meaning.
- <strong>Entity Extraction</strong> - pulling out structured data or information from unstructured text with reference to predefined categories, such as dates, time, cities, and names.
- <strong> Slot Tagging </strong>- identifying contiguous spans of words in an input that correspond to certain parameters, labeling a user query with semantic meaning.
- <strong> Language Identification </strong> - knowing which language hte user query is written.
- <strong> Spell Checking </strong> - making sure that the user input is spelt correctly by fixing spelling errors.
- <strong> Out of Scope Recognition </strong> - identifies instances of which user input is not within the scope of the chatbot.

### <strong>Rule-Based System</strong>
- <strong> User Interface </strong> - the user can interact with the rule-based system through this component. The UI of the system takes queries and displays outputs in a readable format, allowing non-expert users to communicate easily.
- <strong> Interface or Rules Engine </strong> - this component is the brain of the rule-based system, as it serves as the main processing unit of the system. This engine applies rules to the knowledge base and extracts knowledge from it in order to derive a conclusion.
- <strong> Knowledge Base </strong> - a type of storage that stores information acquired from the different experts of the domain that the system is particularly focused on. The more content the knowledge base has, the more precise the rule-based system can be. The knowledge base used for the chatbot is the existing knowledge base available in DLSL.

More details in our [thesis manuscript](https://drive.google.com/file/d/1x8l3txLr_DRiydIllHEzzJ-JSGgrCKgK/view).

## 🎨 <strong>Themes and UI</strong>

This showcases the themes for the chatbot and the website.

<table align="center">
  <th><p align="center">Light Theme</p></th>
  <th><p align="center">Dark Theme</p></th>
  <tr>
    <td align="center">
      <img src="git_img_assets/themes-accessibility/dcampus-website.png" width="500">
    </td>
    <td align="center">
      <img src="git_img_assets/themes-accessibility/dark-theme.png" width="500">
    </td>
  </tr>
</table>

<table align="center">
  <th><p align="center">DLSL Colors 1</p></th>
  <th><p align="center">DLSL Colors 2</p></th>
  <tr>
    <td align="center">
      <img src="git_img_assets/themes-accessibility/dlsl-colors.png" height="350">
    </td>
    <td align="center">
      <img src="git_img_assets/themes-accessibility/dlsl-colors-2.png" height="350">
    </td>
  </tr>
</table>

<table align="center">
  <th><p align="center">Neutral Textbox</p></th>
  <th><p align="center">Tall Chatbox</p></th>
  <tr>
    <td align="center">
      <img src="git_img_assets/themes-accessibility/neutral-textbox.png" height="350">
    </td>
    <td align="center">
      <img src="git_img_assets/themes-accessibility/tall-chatbox.png" height="350">
    </td>
  </tr>
</table>

<table align="center">
  <th><p align="center">Sidebar Options</p></th>
  <tr>
    <td align="center">
      <img src="git_img_assets/themes-accessibility/sidebar.png" height="300">
    </td>
  </tr>
</table>


## ♿ <strong>Accessibility Features</strong>

### <strong>Zooming In</strong>

A zoom in feature can be applied on the chatbox for users with poor eyesight.

<img src="git_img_assets/themes-accessibility/zoom-demo.GIF">

### <strong>High Contrast Theme</strong>
The high contrast theme colors are based on Contrast Ratios compliant with `WCAG (Web Content Accessibility Guidance)`

<table align="center">
  <th><p align="center">Black Foreground on DLSL Colors Background</p></th>
  <th><p align="center">DLSL Colors Foreground on Black Foreground</p></th>
  <tr>
    <td align="center">
      <img src="git_img_assets/Blackfg-to-DLSLbg.png" height="300">
    </td>
    <td align="center">
      <img src="git_img_assets/DLSLfg-to-blackbg.png" height="300">
    </td>
  </tr>
</table>

<table align="center">
  <th><p align="center">Gray Foreground on Black Background</p></th>
  <tr>
    <td align="center">
      <img src="git_img_assets/Grayfg-to-blackbg.png" height=300>
    </td>
  </tr>
</table>

<table align="center">
  <th><p align="center">High Contrast Theme</p></th>
  <tr>
    <td align="center">
      <img src="git_img_assets/themes-accessibility/high-contrast.png" height=300>
    </td>
  </tr>
</table>

## 🎉 <strong>Credits</strong>

- The DLSL MyDCampus portal is developed by the <strong>ICT team at DLSL </strong>the original site can be found here (Only members of DLSL can access): https://mydcampus.dlsl.edu.ph

- <strong>Botpress</strong> is an easy to use chatbot editor powered by generative AI. Their website can be found here: https://botpress.com/

- The DLSL logos, including the <strong>BR. BUKNOY and Mascot</strong> which is used as the logo for the chatbot are intellectual properties of De La Salle Lipa. More information can be found here: https://scholarum.dlsl.edu.ph/intellectual-property/
