<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/assets.css" />
  <link rel="stylesheet" href="assets/css/styles.css" />
</head>

<body>
  <header>
    <nav>
      <div class="Top-left">
        <a href="/">
          <img src="assets/logo-P.png" alt="" />
        </a>
      </div>
      <div class="Top-right">
        <ul>
          <a href="/">Home</a>
          <a href="/projects">Projects</a>
          <a href="/contact">Contact</a>
        </ul>
      </div>
    </nav>
  </header>
  <main>
    <div class="hanging-asset">
      <div class="ha">
        <img src="assets/media.png" alt="" class="media" />
      </div>
    </div>
    <section class="contact-t">
      <div class="contact-me">
        <div class="head"><span class="bullets">/</span>Contact-me</div>
        <p>
          I'm interested in freelance opportunities. However, if you have
          other request or question, don't hesitate to contact me.
        </p>
      </div>
      <div class="info">
        <div class="i-box">
          <h1>Message me here</h1>
          <div class="mail">
            <img src="assets/mail.svg" alt="" />
            rawalsarthak555@gmail.com
          </div>
          <div class="insta">
            <img src="assets/instagram.svg" alt="" />
            itsmesarthak.rawal
          </div>
        </div>
      </div>
    </section>
    <section class="c-form">
      <div class="form-container">
        <form action="/submit-form" method="POST">
          <div class="f-top">
            <input
              type="text"
              id="name"
              name="name"
              placeholder="Name"
              required />

            <input
              type="email"
              id="email"
              name="email"
              placeholder="Email"
              required />
          </div>

          <input
            type="text"
            id="title"
            name="title"
            placeholder="Title"
            required />

          <textarea
            id="message"
            name="message"
            rows="5"
            placeholder="Message"
            required></textarea>

          <button type="submit">Send</button>
        </form>
      </div>
    </section>
  </main>
  <hr class="f-hr" />
  <footer>
    <div class="f-top">
      <div class="f-right">
        <div class="dev-info">
          <div class="f2">
            <div class="f-1">
              <img src="assets/logo-P.png" alt="" />
              <div class="f-name">Sarthak</div>
            </div>
            <div class="f-mail">rawalsarthak555@gmail.com</div>
          </div>
          <div class="f2-des">Learner and Developer</div>
        </div>
      </div>
      <div class="f-left">
        <div class="Socials">
          <h1>Socials</h1>
          <div class="s-box">
            <a href="https://www.linkedin.com/in/vnillaice-ok-0342422b7/"><img src="assets/Linkedin.png" alt="" /></a>
            <a href="https://figma.com"><img src="assets/Figma.png" alt="" /></a>
            <a href="https://github.com/VnillaICE"><img src="assets/Github.png" alt="" /></a>
            <a href="https://www.instagram.com/itsmesarthak.rawal/"><img src="assets/Instagram.png" alt="" /></a>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright">© Copyright 2024. Made by Sarthak</div>
  </footer>
</body>

</html>