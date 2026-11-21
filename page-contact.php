<?php
/**
 * Template Name: صفحه تماس با ما
 */
get_header();

$contact_hero_badge = get_option( 'pakpajoh_text_contact_hero_badge', 'تماس با ما' );
$contact_hero_title = get_option( 'pakpajoh_text_contact_hero_title', 'با پاک‌پژوه در تماس باشید' );
$contact_hero_slogan = get_option( 'pakpajoh_text_contact_hero_slogan', '«درخشش در عمل»' );
$contact_hero_desc = get_option( 'pakpajoh_text_contact_hero_desc', 'برای دریافت مشاورهٔ رایگان، هماهنگی بازدید حضوری یا طرح هرگونه پرسش، با کارشناسان ما در تماس باشید.' );

$contact_status = isset( $_GET['contact_status'] ) && is_string( $_GET['contact_status'] )
	? sanitize_key( wp_unslash( $_GET['contact_status'] ) )
	: '';
$contact_statuses = array(
	'success' => array( 'درخواست شما ارسال شد. کارشناسان پاک‌پژوه برای پیگیری با شما تماس می‌گیرند.', 'success' ),
	'invalid' => array( 'نام، شماره تماس و متن پیام را بررسی کنید و دوباره بفرستید.', 'error' ),
	'error'   => array( 'ارسال درخواست انجام نشد. لطفاً از یکی از راه‌های تماس زیر با ما در ارتباط باشید.', 'error' ),
);
?>

<div class="pp-contact-page" dir="rtl">
	<section class="pp-contact-hero" aria-labelledby="pp-contact-title">
		<div class="pp-contact-shell pp-contact-hero__layout">
			<div class="pp-contact-hero__copy">
				<span class="pp-contact-eyebrow"><?php echo wp_kses_post( $contact_hero_badge ); ?></span>
				<h1 id="pp-contact-title"><?php echo wp_kses_post( $contact_hero_title ); ?></h1>
				<p class="pp-contact-hero__slogan"><?php echo wp_kses_post( $contact_hero_slogan ); ?></p>
				<p class="pp-contact-hero__description"><?php echo wp_kses_post( $contact_hero_desc ); ?></p>
				<div class="pp-contact-hero__actions">
					<a class="pp-contact-button pp-contact-button--primary" href="#pp-contact-phones">مشاهدهٔ شماره‌ها</a>
					<a class="pp-contact-button pp-contact-button--quiet" href="#pp-contact-form">ارسال پیام</a>
				</div>
			</div>
			<aside class="pp-contact-hero__note" aria-label="شروع همکاری">
				<span class="pp-contact-hero__note-label">پاک‌پژوه | تماس و مشاوره</span>
				<p>یک گفت‌وگوی روشن،<br>نقطهٔ شروع همکاری خوب است.</p>
				<span class="pp-contact-hero__note-rule" aria-hidden="true"></span>
				<span class="pp-contact-hero__note-caption">نیازتان را با ما در میان بگذارید.</span>
			</aside>
		</div>
	</section>

	<section class="pp-contact-main" aria-label="راه‌های ارتباط با پاک‌پژوه">
		<div class="pp-contact-shell">
			<div class="pp-contact-grid">
				<section class="pp-contact-directory" id="pp-contact-phones" aria-labelledby="pp-contact-directory-title">
					<header class="pp-contact-card-heading">
						<span class="pp-contact-kicker">ارتباط مستقیم</span>
						<h2 id="pp-contact-directory-title">شماره‌های تماس</h2>
						<p>برای تماس تلفنی، شمارهٔ مناسب را انتخاب کنید.</p>
					</header>

					<div class="pp-contact-phone-list">
						<div class="pp-contact-phone-row">
							<span class="pp-contact-phone-label">دفتر مرکزی</span>
							<a class="pp-contact-phone-number" href="tel:+982191555678" dir="ltr">۰۲۱-۹۱۵۵۵۶۷۸</a>
							<a class="pp-contact-phone-action" href="tel:+982191555678" aria-label="تماس با دفتر مرکزی">تماس</a>
						</div>
						<div class="pp-contact-phone-row">
							<span class="pp-contact-phone-label">تلفن همراه · ۱</span>
							<a class="pp-contact-phone-number" href="tel:+989121156868" dir="ltr">۰۹۱۲۱۱۵۶۸۶۸</a>
							<a class="pp-contact-phone-action" href="tel:+989121156868" aria-label="تماس با شماره همراه اول">تماس</a>
						</div>
						<div class="pp-contact-phone-row">
							<span class="pp-contact-phone-label">تلفن همراه · ۲</span>
							<a class="pp-contact-phone-number" href="tel:+989122088156" dir="ltr">۰۹۱۲۲۰۸۸۱۵۶</a>
							<a class="pp-contact-phone-action" href="tel:+989122088156" aria-label="تماس با شماره همراه دوم">تماس</a>
						</div>
						<div class="pp-contact-phone-row">
							<span class="pp-contact-phone-label">تلفن همراه · ۳</span>
							<a class="pp-contact-phone-number" href="tel:+989123353149" dir="ltr">۰۹۱۲۳۳۵۳۱۴۹</a>
							<a class="pp-contact-phone-action" href="tel:+989123353149" aria-label="تماس با شماره همراه سوم">تماس</a>
						</div>
					</div>

					<div class="pp-contact-whatsapp">
						<div>
							<span class="pp-contact-whatsapp-label">پیام در واتس‌اپ</span>
							<a href="https://wa.me/989121156868" target="_blank" rel="noopener noreferrer" dir="ltr">۰۹۱۲۱۱۵۶۸۶۸</a>
						</div>
						<a class="pp-contact-whatsapp-action" href="https://wa.me/989121156868" target="_blank" rel="noopener noreferrer">گفت‌وگو در واتس‌اپ</a>
					</div>
				</section>

				<section class="pp-contact-form-card" id="pp-contact-form" aria-labelledby="pp-contact-form-title">
					<header class="pp-contact-card-heading">
						<span class="pp-contact-kicker">پیام و مشاوره</span>
						<h2 id="pp-contact-form-title">درخواستتان را بنویسید</h2>
						<p>شمارهٔ تماس را وارد کنید تا برای پیگیری با شما در ارتباط باشیم.</p>
					</header>

					<?php if ( isset( $contact_statuses[ $contact_status ] ) ) : ?>
						<div class="pp-contact-notice pp-contact-notice--<?php echo esc_attr( $contact_statuses[ $contact_status ][1] ); ?>" role="<?php echo 'success' === $contact_statuses[ $contact_status ][1] ? 'status' : 'alert'; ?>">
							<?php echo esc_html( $contact_statuses[ $contact_status ][0] ); ?>
						</div>
					<?php endif; ?>

					<form action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post" class="pp-contact-form">
						<input type="hidden" name="action" value="pakpajoh_contact_form">
						<?php wp_nonce_field( 'pakpajoh_contact_nonce', 'pakpajoh_nonce' ); ?>
						<div class="pp-contact-form__fields">
							<div class="pp-contact-field">
								<label for="pp-contact-name">نام و نام خانوادگی</label>
								<input type="text" name="name" id="pp-contact-name" autocomplete="name" maxlength="120" required>
							</div>
							<div class="pp-contact-field">
								<label for="pp-contact-phone">شمارهٔ تماس</label>
								<input type="tel" name="phone" id="pp-contact-phone" autocomplete="tel" inputmode="tel" maxlength="30" required>
							</div>
							<div class="pp-contact-field pp-contact-field--wide">
								<label for="pp-contact-email">ایمیل <span>(اختیاری)</span></label>
								<input type="email" name="email" id="pp-contact-email" autocomplete="email" maxlength="254">
							</div>
							<div class="pp-contact-field pp-contact-field--wide">
								<label for="pp-contact-message">توضیحات</label>
								<textarea name="message" id="pp-contact-message" rows="4" maxlength="3000" required></textarea>
							</div>
						</div>
						<button class="pp-contact-submit" type="submit">ارسال درخواست</button>
						<p class="pp-contact-form-note">پس از ارسال، برای پیگیری درخواست با شما تماس می‌گیریم.</p>
					</form>
				</section>
			</div>

			<section class="pp-contact-details" aria-label="اطلاعات تکمیلی">
				<div class="pp-contact-detail">
					<span class="pp-contact-detail-label">ایمیل</span>
					<a class="pp-contact-detail-value" href="mailto:info@pakpajoh.com" dir="ltr">info@pakpajoh.com</a>
					<span class="pp-contact-detail-note">برای مکاتبه و ارسال اطلاعات</span>
				</div>
				<div class="pp-contact-detail">
					<span class="pp-contact-detail-label">نشانی دفتر</span>
					<p class="pp-contact-detail-value">تهران، خیابان کریم‌خان، کوچه آبگان، پلاک ۴، واحد ۱</p>
					<span class="pp-contact-detail-note">کد پستی: ۱۵۹۷۶۱۵۸۱۱</span>
				</div>
				<div class="pp-contact-detail">
					<span class="pp-contact-detail-label">ساعات کاری</span>
					<p class="pp-contact-detail-value">شنبه تا پنجشنبه، ۸ صبح تا ۶ عصر</p>
					<span class="pp-contact-detail-note">برای هماهنگی بازدید هم تماس بگیرید.</span>
				</div>
				<div class="pp-contact-detail pp-contact-detail--social">
					<span class="pp-contact-detail-label">شبکه‌های اجتماعی</span>
					<div class="pp-contact-socials">
						<a href="https://www.linkedin.com/company/pakpajoh/" target="_blank" rel="noopener noreferrer">لینکدین</a>
						<a href="https://t.me/pakpajoh" target="_blank" rel="noopener noreferrer">تلگرام</a>
						<a href="https://www.instagram.com/pakpajoh/" target="_blank" rel="noopener noreferrer">اینستاگرام</a>
					</div>
					<span class="pp-contact-detail-note">صفحه‌های رسمی پاک‌پژوه</span>
				</div>
			</section>
		</div>
	</section>
</div>

<?php
get_footer();
