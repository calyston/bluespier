<?php get_header(); ?>
<section class="intro-contact">
  <div class="intro">
		<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>		
		<?php the_content(); ?>
		<?php endwhile; ?>
		<?php else : ?>
		<article class="post error">
			<h1 class="404">Nothing posts.</h1>
		</article>
		<?php endif; ?>
  </div>

  <div class="contact-section">
    <h3><i class="fas fa-envelope"></i>Contact Us</h3>
		<?php dynamic_sidebar('contact-form'); ?>
</section>

    <div class="wrapper">
      <section class="products-contact">
        <div class="products">
          <h4>Our Products</h4>
          <ul>
            <li><img class="products-img" src="https://christine.sobold.dev/wp-content/uploads/2018/05/icon-claimsure.png" alt="product-img"/>Theatre Management</li>
            <li><img class="products-img" src="https://christine.sobold.dev/wp-content/uploads/2018/05/icon-billsure.png" alt="product-img"/>Emergency and Trauma</li>
            <li><img class="products-img" src="https://christine.sobold.dev/wp-content/uploads/2018/05/icon-claimsure-services.png" alt="product-img"/>Virtual Clinic</li>
            <li><img class="products-img" src="https://christine.sobold.dev/wp-content/uploads/2021/10/icon_Stock_Mangement.webp" alt="product-img"/>Stock Management</li>
          </ul>
          <div class="sns">
            <p>Follow us:</p>
						<i class="fab fa-linkedin fa-2x"></i>
						<i class="fab fa-twitter-square fa-2x"></i>
          </div>
        </div>
        <div class="contact-info">
          <h4>Contact Us</h4>
          <p><i class="fas fa-map-marker-alt"></i>Greenbank House, Galton Way, Hadzor, Droitwich, Worcestershire, WR9 7ER</p>
          <p><i class="fas fa-phone-alt"></i>Ph: 0333 014 6262</p>
          <p><i class="far fa-envelope"></i>info@bluespier.com</p>
          <button class="main-button">Get In Touch</button>
        </div>
        <div class="callback-card">
          <h2>Request a Callback</h2>
          <button>Call Me Back<i class="fas fa-arrow-right"></i></button>
        </div>
      </section>
    </div>

<?php get_footer(); ?>