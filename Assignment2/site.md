## Website structure.

### Header Section

- The header section include company logo, and immportanct notice.
- The HTML content is located between <!-- header --> and <!-- End of header --> in index.html.
- The CSS style code is located between /_ Header _/ and /_ End of Header _/
- You can change the notice by changing the title and content in the following html snippet.

```html
<div class="header-text">
  <h1 class="heading">Open House for 2024 Intake</h1>
  <p class="header-paragraph">20th December 2024, Friday 3pm to 9pm.</p>
  <p class="header-paragraph-1">
    Bookings are essential. Could I please suggest that you make your booking as
    soon as possible so that you will not be disappointed?
  </p>
  <p class="header-paragraph-1">
    Please contact us on the Center’s email or BaizonnLearning@gmail.com Or
    Phone Lum on +65 62811816
  </p>
  <p class="header-paragraph-1">
    Christmas buffet dinner will be arranged for all guests. Vegetarian menu is
    available too. Kindly indicate your preference during booking.
  </p>
  <p class="header-paragraph-1">
    Unique Baizonn T-Shirt will be given free for all confirmed students during
    the Open House.
  </p>
</div>


### Navbar Section

- The Navbar section provide navigation menu of the website.
- The HTML content is located between <!-- Navbar --> and <!-- End of Navbar --> in index.html
  - You can change menu name, add new menu by changing the HTML code at the section above.
- The CSS style is located between /_ Navbar _/ and /_ End of Navbar _/
  - YOu can change Narbar style by adjust CSS at the section above.
- Navbar funtionality is handle by javascript code at script.js.

### Program section

- The program section includes popular programs that Baizonn learning center provides.
- the HTML content is located between <!-- Programs --> and <!-- End of Programs --> in index.html
  - You can change program, add more prgrame, adjust price by changing the HTML code at the section above.
- The CSS style is located between /_ Programs _/ and /_ End of Programs _/
  - YOu can change program style by adjust CSS at the section above.
- The price card flip function is handled by javascript code at script.js.

### story section

- The program section introduce company stories.
- the HTML content is located between <!-- Stories --> and <!-- End of Stories --> in index.html
  - You can change story content, add more stories by changing the HTML code at the section above.
- The CSS style is located between /_ Programs _/ and /_ End of Programs _/
  - YOu can change story style by adjust CSS at the section above.
- You can change video backgroud playback speed at script.js

```js
let vid = document.getElementById('myVideo');
vid.playbackRate = 0.5;
```

### Contact section

- The program section includes popular programs that Baizonn learning center provides.
- the HTML content is located between <!-- Contact --> and <!-- End of Contact --> in index.html
  - You can change program, add more prgrame, adjust price by changing the HTML code at the section above.
- The CSS style is located between /_ Contact _/ and /_ End of Contact _/
  - YOu can change contact style by adjust CSS at the section above.
- The submit button currently is not functional. It will be finished at next step.
