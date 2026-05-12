<?php

if (!defined('ABSPATH')) {
    exit;
}

$lexwell_phone = '+91 9915999371';
$lexwell_email = 'digital.lexwell@gmail.com';
$lexwell_address = 'SCO 47, Second Floor, Sector-4 Panchkula, Haryana-134112';

get_header();
?>

<main id="primary" class="site-main">
    <section class="lw-hero lw-section" aria-label="Hero">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-7">
                    <div class="lw-hero-badge" data-aos="fade-up">
                        <span class="lw-hero-badge-dot" aria-hidden="true"></span>
                        NUMBER #1 SOLVER AGENCY
                    </div>

                    <h1 class="lw-hero-title mb-3" data-aos="fade-up" data-aos-delay="100">
                        Proven <span class="lw-hero-title-accent">consulting</span><br>
                        for modern global<br>
                        enterprises
                    </h1>

                    <p class="lw-hero-subtitle mb-4" data-aos="fade-up" data-aos-delay="200">Transform your business with expert consultancy services our team of seasoned consultants unparalleled.</p>

                    <div class="lw-hero-actions" data-aos="fade-up" data-aos-delay="300">
                        <a class="btn btn-dark btn-lg" href="<?php echo esc_url(home_url('/contact/')); ?>">Free consultation</a>
                        <a class="btn btn-outline-primary btn-lg" href="tel:<?php echo esc_attr(str_replace(' ', '', $lexwell_phone)); ?>">Call <?php echo esc_html($lexwell_phone); ?></a>

                        <a class="lw-hero-play" href="#" aria-label="Play our reels">
                            <span class="lw-hero-play-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 8l6 4-6 4V8Z" fill="currentColor"/><path d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20Z" stroke="currentColor" stroke-width="2"/></svg>
                            </span>
                            Play our reels
                        </a>
                    </div>

                    <div class="lw-hero-points mt-4" data-aos="fade-up" data-aos-delay="350">
                        <div class="lw-point">Quick solutions</div>
                        <div class="lw-point">Expert advice</div>
                        <div class="lw-point">Strategic planning</div>
                        <div class="lw-point">Efficient operations</div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="lw-hero-media" data-aos="fade-left" data-aos-delay="200">
                        <div class="lw-hero-shape" aria-hidden="true"></div>
                        <div class="lw-hero-ring" aria-hidden="true"></div>
                        <?php
                        $hero_person = get_theme_mod('lexwell_hero_person_image', '');
                        if (is_string($hero_person) && $hero_person !== '') {
                            echo '<img class="lw-hero-person" src="' . esc_url($hero_person) . '" alt="" loading="lazy">';
                        }
                        ?>

                        <a class="lw-hero-media-play" href="#" aria-label="Play our reels" data-aos="fade-up" data-aos-delay="250">
                            <span class="lw-hero-media-play-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 8l6 4-6 4V8Z" fill="currentColor"/><path d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20Z" stroke="currentColor" stroke-width="2"/></svg>
                            </span>
                            Play our reels
                        </a>

                        <div class="lw-hero-float" data-aos="fade-up" data-aos-delay="350">
                            <div class="lw-hero-float-avatars" aria-hidden="true">
                                <span></span><span></span><span></span>
                            </div>
                            <div class="lw-hero-float-text"><strong>39K+</strong> Happy clients all over world.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="lw-section" aria-label="Services">
        <div class="container">
            <div class="lw-section-head" data-aos="fade-up">
                <h2 class="lw-section-title">In comprehensive service offer</h2>
                <p class="lw-section-subtitle">Choose the service you need. We’ll guide documentation, filing, and completion end-to-end.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="lw-card">
                        <div class="lw-card-title">Business Registration</div>
                        <div class="lw-card-text">Private Company, OPC, LLP, Section 8, Nidhi, Indian Subsidiary, Start-Up.</div>
                        <a class="lw-card-link" href="https://lexwell.co.in/private-company-registration/" target="_blank" rel="noopener">Learn more</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="80">
                    <div class="lw-card">
                        <div class="lw-card-title">GST / IEC / Licenses</div>
                        <div class="lw-card-text">GST Registration, IEC, Digital Signature, Shop & Establishment, FSSAI.</div>
                        <a class="lw-card-link" href="https://lexwell.co.in/gst-registration/" target="_blank" rel="noopener">Learn more</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="160">
                    <div class="lw-card">
                        <div class="lw-card-title">ROC Compliances</div>
                        <div class="lw-card-text">Annual filing for Pvt Ltd, Public Ltd, LLP, OPC, Section 8, Nidhi.</div>
                        <a class="lw-card-link" href="https://lexwell.co.in/annual-filing-for-pvt-ltd/" target="_blank" rel="noopener">Learn more</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="lw-card">
                        <div class="lw-card-title">XBRL Filing</div>
                        <div class="lw-card-text">Standalone / Consolidated statements filing with complete support.</div>
                        <a class="lw-card-link" href="https://lexwell.co.in/xbrl-filing-of-standalone-financial-statements/" target="_blank" rel="noopener">Learn more</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="80">
                    <div class="lw-card">
                        <div class="lw-card-title">Trademark</div>
                        <div class="lw-card-text">Registration, objection, renewal, assignment, hearing, opposition.</div>
                        <a class="lw-card-link" href="https://lexwell.co.in/trademark-registration/" target="_blank" rel="noopener">Learn more</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="160">
                    <div class="lw-card">
                        <div class="lw-card-title">Copyright</div>
                        <div class="lw-card-text">Copyright registration and documentation support.</div>
                        <a class="lw-card-link" href="https://lexwell.co.in/copyright-registration/" target="_blank" rel="noopener">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="lw-section lw-process" aria-label="Process">
        <div class="container">
            <div class="lw-section-head" data-aos="fade-up">
                <h2 class="lw-section-title">Three steps to transform your business</h2>
                <p class="lw-section-subtitle">A simple process that keeps filing and compliance stress-free.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="lw-step">
                        <div class="lw-step-num">01</div>
                        <div class="lw-step-title">Understand requirement</div>
                        <div class="lw-step-text">We check eligibility, documents, timeline, and costs.</div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="90">
                    <div class="lw-step">
                        <div class="lw-step-num">02</div>
                        <div class="lw-step-title">Custom strategy</div>
                        <div class="lw-step-text">We prepare forms, draft documents, and handle submissions.</div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="180">
                    <div class="lw-step">
                        <div class="lw-step-num">03</div>
                        <div class="lw-step-title">Execute & optimize</div>
                        <div class="lw-step-text">Track status, respond to queries, and deliver approvals.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="lw-section lw-testimonials" aria-label="Testimonials">
        <div class="container">
            <div class="lw-section-head" data-aos="fade-up">
                <h2 class="lw-section-title">Listening to our clients</h2>
                <p class="lw-section-subtitle">Starter slider (we can replace with real reviews next).</p>
            </div>

            <div class="swiper lw-testimonials-swiper" data-aos="fade-up" data-aos-delay="120">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="lw-quote">
                            <div class="lw-quote-text">Their guidance helped us streamline documentation and complete filings without delays.</div>
                            <div class="lw-quote-name">Client Review</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="lw-quote">
                            <div class="lw-quote-text">Professional, responsive, and clear—highly recommended for registrations and compliance.</div>
                            <div class="lw-quote-name">Client Review</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="lw-quote">
                            <div class="lw-quote-text">Fast execution and timely updates throughout the entire process.</div>
                            <div class="lw-quote-name">Client Review</div>
                        </div>
                    </div>
                </div>
                <div class="lw-swiper-nav">
                    <div class="lw-swiper-btn lw-prev">Prev</div>
                    <div class="lw-swiper-btn lw-next">Next</div>
                </div>
            </div>
        </div>
    </section>

    <section class="lw-section lw-cta" aria-label="CTA">
        <div class="container" data-aos="fade-up">
            <div class="lw-cta-inner">
                <div>
                    <div class="lw-cta-title">Need a consultation services?</div>
                    <div class="lw-cta-text">Call us on <?php echo esc_html($lexwell_phone); ?> or email <?php echo esc_html($lexwell_email); ?>.</div>
                </div>
                <div class="lw-cta-actions">
                    <a class="btn btn-light btn-lg" href="tel:<?php echo esc_attr(str_replace(' ', '', $lexwell_phone)); ?>">Call now</a>
                    <a class="btn btn-outline-light btn-lg" href="<?php echo esc_url(home_url('/contact/')); ?>">Contact page</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
