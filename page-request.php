<?php
/**
 * Template Name: صفحه ثبت درخواست
 * Description: صفحه اختصاصی ثبت درخواست خدمات نظافت صنعتی
 */
get_header();

$request_status = isset( $_GET['request_status'] ) && is_string( $_GET['request_status'] )
	? sanitize_key( wp_unslash( $_GET['request_status'] ) )
	: '';
$request_statuses = array(
	'success' => array( 'درخواست شما ثبت شد؛ کارشناسان برای هماهنگی با شما تماس می‌گیرند.', 'success' ),
	'invalid' => array( 'اطلاعات اجباری یا شماره تماس، کد ملی و مساحت را بررسی کنید.', 'error' ),
	'error'   => array( 'ثبت درخواست با مشکل مواجه شد. لطفاً از شماره‌های تماس کنار فرم با ما در ارتباط باشید.', 'error' ),
);
?>

<div class="pp-request-page" dir="rtl">
	<section class="pp-request-hero" aria-labelledby="pp-request-title">
		<div class="pp-request-shell pp-request-hero__inner">
			<span class="pp-request-eyebrow">بازدید اولیه رایگان</span>
			<h1 id="pp-request-title">درخواست بازدید از محل کار</h1>
			<p>اطلاعات مجموعه و محل بازدید را ثبت کنید تا برای هماهنگی با شما تماس بگیریم.</p>
		</div>
	</section>

	<section class="pp-request-content" aria-label="فرم درخواست بازدید">
		<div class="pp-request-shell pp-request-layout">
			<section class="pp-request-form-card" id="request-form" aria-labelledby="pp-request-form-title">
				<header class="pp-request-form-heading">
					<span class="pp-request-kicker">شروع همکاری</span>
					<h2 id="pp-request-form-title">مشخصات درخواست</h2>
					<p>فیلدهای ستاره‌دار برای ثبت درخواست لازم هستند. کد ملی اختیاری است.</p>
				</header>

				<?php if ( isset( $request_statuses[ $request_status ] ) ) : ?>
					<div class="pp-request-alert pp-request-alert--<?php echo esc_attr( $request_statuses[ $request_status ][1] ); ?>" role="<?php echo 'success' === $request_statuses[ $request_status ][1] ? 'status' : 'alert'; ?>" tabindex="-1">
						<?php echo esc_html( $request_statuses[ $request_status ][0] ); ?>
					</div>
				<?php endif; ?>

				<form action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post" class="pp-request-form" id="pp-request-form" novalidate>
					<input type="hidden" name="action" value="pakpajoh_request_form">
					<input type="hidden" name="req_source" value="request">
					<?php wp_nonce_field( 'pakpajoh_request_nonce', 'pakpajoh_nonce' ); ?>

					<div class="pp-request-alert pp-request-alert--error" id="pp-request-validation-summary" role="alert" aria-live="assertive" tabindex="-1" hidden></div>

					<fieldset class="pp-request-fieldset">
						<legend>اطلاعات فرد پاسخ‌گو</legend>
						<div class="pp-request-fields">
							<div class="pp-request-field">
								<label for="req-name">نام و نام خانوادگی <span aria-hidden="true">*</span></label>
								<input type="text" name="req_name" id="req-name" autocomplete="name" maxlength="120" required aria-describedby="req-name-error" data-validation="required" placeholder="مثال: علی محمدی">
								<span class="pp-request-field-error" id="req-name-error"></span>
							</div>
							<div class="pp-request-field">
								<label for="req-position">سمت فرد <span aria-hidden="true">*</span></label>
								<input type="text" name="req_position" id="req-position" autocomplete="organization-title" maxlength="120" required aria-describedby="req-position-error" data-validation="required" placeholder="مثال: مدیر تدارکات">
								<span class="pp-request-field-error" id="req-position-error"></span>
							</div>
							<div class="pp-request-field">
								<label for="req-phone">شمارهٔ تماس <span aria-hidden="true">*</span></label>
								<input type="tel" name="req_phone" id="req-phone" autocomplete="tel" inputmode="tel" maxlength="30" required aria-describedby="req-phone-error" data-validation="phone" placeholder="۰۹۱۲۱۲۳۴۵۶۷">
								<span class="pp-request-field-error" id="req-phone-error"></span>
							</div>
							<div class="pp-request-field">
								<label for="req-organization">نام سازمان <span aria-hidden="true">*</span></label>
								<input type="text" name="req_organization" id="req-organization" autocomplete="organization" maxlength="255" required aria-describedby="req-organization-error" data-validation="required" placeholder="نام شرکت یا مجموعه">
								<span class="pp-request-field-error" id="req-organization-error"></span>
							</div>
							<div class="pp-request-field pp-request-field--wide">
								<label for="req-national-id">کد ملی <span class="pp-request-optional">اختیاری</span></label>
								<input type="text" name="req_national_id" id="req-national-id" inputmode="numeric" autocomplete="off" maxlength="10" dir="ltr" aria-describedby="req-national-id-hint req-national-id-error" data-validation="national-id" placeholder="۱۰ رقم">
								<span class="pp-request-field-hint" id="req-national-id-hint">در صورت تمایل وارد کنید؛ ثبت درخواست به کد ملی نیاز ندارد.</span>
								<span class="pp-request-field-error" id="req-national-id-error"></span>
							</div>
						</div>
					</fieldset>

					<fieldset class="pp-request-fieldset">
						<legend>مشخصات محل بازدید</legend>
						<div class="pp-request-fields">
							<div class="pp-request-field">
								<label for="req-service">نوع خدمت <span aria-hidden="true">*</span></label>
								<select name="req_service" id="req-service" required aria-describedby="req-service-error" data-validation="required">
									<option value="">انتخاب کنید</option>
									<option value="design">طراحی و برنامه‌ریزی خدمات پاک‌سازی</option>
									<option value="execution">مدیریت و اجرای عملیات</option>
									<option value="quality-control">کنترل کیفیت و ارزیابی</option>
									<option value="documentation">مستندسازی و گزارش‌دهی</option>
									<option value="residential">نظافت مجتمع‌های مسکونی و اداری</option>
									<option value="commercial">نظافت مراکز تجاری و فروشگاه‌ها</option>
									<option value="healthcare">نظافت هتل‌ها، بیمارستان‌ها و مراکز آموزشی</option>
									<option value="dryclean">خشک‌شویی تخصصی در محل</option>
									<option value="industrial">خدمات صنایع سنگین و پالایشگاهی</option>
									<option value="transport">لجستیک و ترابری (هوایی، ریلی، جاده‌ای)</option>
								</select>
								<span class="pp-request-field-error" id="req-service-error"></span>
							</div>
							<div class="pp-request-field">
								<label for="req-area">مساحت تقریبی <span class="pp-request-unit">(متر مربع، اختیاری)</span></label>
								<input type="text" name="req_area" id="req-area" inputmode="numeric" dir="ltr" aria-describedby="req-area-error" data-validation="area" placeholder="مثال: ۵۰۰">
								<span class="pp-request-field-error" id="req-area-error"></span>
							</div>
							<div class="pp-request-field pp-request-field--wide">
								<label for="req-address">نشانی دقیق محل بازدید <span aria-hidden="true">*</span></label>
								<textarea name="req_address" id="req-address" rows="2" maxlength="1500" autocomplete="street-address" required aria-describedby="req-address-error" data-validation="required" placeholder="شهر، خیابان، پلاک و نشانی محل"></textarea>
								<span class="pp-request-field-error" id="req-address-error"></span>
							</div>
							<div class="pp-request-field pp-request-field--wide">
								<label for="req-message">توضیحات تکمیلی <span class="pp-request-optional">اختیاری</span></label>
								<textarea name="req_message" id="req-message" rows="3" maxlength="3000" placeholder="نیازها یا زمان پیشنهادی برای بازدید"></textarea>
							</div>
						</div>
					</fieldset>

					<button type="submit" class="pp-request-submit">
						<span>ثبت درخواست بازدید</span>
						<svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" /></svg>
					</button>
					<p class="pp-request-form-note">اطلاعات واردشده برای پیگیری درخواست و هماهنگی بازدید در بخش سرنخ‌ها ثبت می‌شود.</p>
				</form>
			</section>

			<aside class="pp-request-aside" aria-label="اطلاعات بازدید اولیه">
				<section class="pp-request-process-card" aria-labelledby="pp-request-process-title">
					<span class="pp-request-kicker">بعد از ثبت درخواست</span>
					<h2 id="pp-request-process-title">مراحل هماهنگی</h2>
					<ol class="pp-request-steps">
						<li>
							<span class="pp-request-step-mark">۱</span>
							<div><strong>بررسی درخواست</strong><p>اطلاعات مجموعه و نیاز شما بررسی می‌شود.</p></div>
						</li>
						<li>
							<span class="pp-request-step-mark">۲</span>
							<div><strong>هماهنگی زمان بازدید</strong><p>برای تعیین زمان مناسب با شما تماس می‌گیریم.</p></div>
						</li>
						<li>
							<span class="pp-request-step-mark">۳</span>
							<div><strong>بازدید و ارائهٔ راهکار</strong><p>شرایط محل بررسی و پیشنهاد متناسب ارائه می‌شود.</p></div>
						</li>
					</ol>
				</section>

				<section class="pp-request-benefit-card" aria-labelledby="pp-request-benefit-title">
					<h2 id="pp-request-benefit-title">بازدید اولیه، رایگان و بدون تعهد</h2>
					<p>کارشناس پاک‌پژوه از محل فعالیت شما بازدید می‌کند تا راهکار بر اساس شرایط واقعی مجموعه پیشنهاد شود.</p>
				</section>

				<section class="pp-request-contact-card" aria-labelledby="pp-request-contact-title">
					<h2 id="pp-request-contact-title">ترجیح می‌دهید تماس بگیرید؟</h2>
					<a href="tel:+982191555678" class="pp-request-phone">
						<span>دفتر مرکزی</span><b dir="ltr">۰۲۱-۹۱۵۵۵۶۷۸</b>
					</a>
					<a href="tel:+989121156868" class="pp-request-phone">
						<span>تلفن همراه</span><b dir="ltr">۰۹۱۲۱۱۵۶۸۶۸</b>
					</a>
				</section>
			</aside>
		</div>
	</section>
</div>

<?php
get_footer();
