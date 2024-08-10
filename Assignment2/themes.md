# Customizing the website style

## Background

The backgroud image/video can be changed.

### Header section background

- Use an image to replace the image file "header-bg.jpg" under images folder. Please have the file named "header-bg.jpg". The image type must be jpeg.

### Navbar section backgroud

- Use an image to replace "navbar-bg.jpg" under images folder. Please have the file named "navbar-bg.jpg". The image type must be jpeg.

### Our story section background

- Our story backgroud is a video. It shows class environment.
- If you want to change different video, please use your video to replace "video.mp3" under
- The video playback speed can be adjusted at line 41 script.js.

```js
let vid = document.getElementById('myVideo');
vid.playbackRate = 0.5;
```

### contact section background

- Use an image to replace "contact-us-bg.png" under images folder. Please have the file named "contact-us-bg.png". The image type must be png.

## Color style.

- The website css file has defined 5 color style.
- To change the webpage style, please adjust the color hex code in style.css file.

```css
:root {
  --primary-color: #2b81e4;
  --secondary-color: #eee;
  --white-color: #fff;
  --grey-color: #555;
  --light-grey-color: #777;
}
```
