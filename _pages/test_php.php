---
layout: post
title: test_php
permalink: /test_php/
---

<form class="form" action="https://formspree.io/{{site.email}}" method="POST">
  <div class="form-item">
      <label class="contact-label" for="name">Name:</label>
      <input type="text" placeholder="Your name" id="name" class="contact-input" name="name" tabindex="1" required/>
  </div>
  <div class="form-item">
      <label class="contact-label" for="email">Email:</label>
      <input type="email" placeholder="Your email" id="email" class="contact-input" name="_replyto" tabindex="2" required/>
  </div>
  <div class="form-item">
    <label class="contact-label" for="message">Message:</label>
    <textarea class="contact-textarea" placeholder="Your message" class="contact-input" rows="4" id="message" name="message" tabindex="3" required></textarea>
  </div>
  <div class="form-item">
    <button type="submit" value="Send" class="form-btn">Send</button>
  </div>
</form>
