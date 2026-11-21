<?php
/**
 * ویرایش جملات — ساختار سه‌سطحی (صفحه > سکشن > فیلد)
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

function pakpajoh_texts_page() {
    // ذخیره خودکار
    if ( isset( $_POST['pakpajoh_text_key'] ) && isset( $_POST['pakpajoh_text_value'] ) ) {
        if ( ! wp_verify_nonce( $_POST['pakpajoh_text_nonce'], 'pakpajoh_texts_nonce' ) ) { wp_die( 'خطای امنیتی' ); }
        $key = sanitize_text_field( $_POST['pakpajoh_text_key'] );
        $value = wp_kses_post( wp_unslash( $_POST['pakpajoh_text_value'] ) );
        update_option( 'pakpajoh_text_' . $key, $value );
        wp_die( 'ذخیره شد' );
    }

    // ===== داده‌های صفحات و سکشن‌ها =====
    $about_text_field = function( $label, $default ) {
        return array(
            'label' => $label,
            'default' => $default,
            'suggestions' => array( $default ),
        );
    };
    $about_dialog_fields = array(
        'about_identity_detail' => $about_text_field( 'متن مودال هویت پاک‌پژوه', '<p>پاک‌پژوه با این باور شکل گرفته است که پاکیزگی محیط‌های کاری، فراتر از یک فعالیت خدماتی روزمره است و باید بخشی از مدیریت و نگهداری محیط کار باشد.</p><p>ما می‌خواهیم نگاه به خدمات پاکیزگی را از فعالیت‌های پراکنده و صرفاً اجرایی، به رویکردی برنامه‌ریزی‌شده، هدفمند و قابل ارزیابی نزدیک کنیم.</p><p>هر سازمان برای حفظ شرایط مناسب محیط کاری خود به راهکاری متناسب با نیازها، ساختار و شرایط بهره‌برداری‌اش نیاز دارد. به همین دلیل، پاک‌پژوه پاکیزگی را یک فرایند مدیریتی می‌داند، نه صرفاً یک فعالیت اجرایی.</p>' ),
        'about_why_detail' => $about_text_field( 'متن مودال چرایی شکل‌گیری', '<p>در بسیاری از سازمان‌ها، پاکیزگی محیط کار به فعالیت‌هایی روزمره و تکرارشونده محدود می‌شود؛ درحالی‌که مدیریت درست آن می‌تواند به نظم محیط، نگهداری مناسب فضاها و تجهیزات و کیفیت شرایط کاری کمک کند.</p><p>مدیران همچنین به اطلاعات روشن‌تری درباره نحوه ارائه خدمات، محدوده مسئولیت‌ها، کیفیت عملکرد و میزان انطباق فعالیت‌ها با انتظارهایشان نیاز دارند.</p><p>پاک‌پژوه با توجه به این نیاز شکل گرفته است تا خدمات پاکیزگی، با شناخت نیاز سازمان، برنامه‌ریزی و ارزیابی، ساختاری منسجم‌تر و حرفه‌ای‌تر پیدا کنند.</p>' ),
        'about_philosophy_detail' => $about_text_field( 'متن مودال فلسفه فعالیت', '<p>خدمات پاکیزگی زمانی ارزشمندترند که متناسب با نیاز محیط طراحی شوند، به‌درستی سازماندهی شوند و نتایج آن‌ها قابل بررسی باشد.</p><p>با مدیریت مناسب، پاکیزگی می‌تواند به بخشی منسجم از فرایند نگهداری و بهره‌برداری محیط‌های کاری تبدیل شود؛ نه مجموعه‌ای از فعالیت‌های جدا از هم.</p><p>به‌دنبال رابطه‌ای حرفه‌ای و بلندمدت با سازمان‌ها هستیم؛ رابطه‌ای بر پایه شناخت متقابل، انتظارهای روشن، مسئولیت‌پذیری و توجه به کیفیت خدمات.</p>' ),
        'about_needs_detail' => $about_text_field( 'متن مودال شناخت نیاز مشتری', '<p>هر سازمان شرایط، ساختار و انتظارهای خاص خود را دارد. پیش از پیشنهاد راهکار، نیازهای مجموعه و ویژگی‌های محیط را می‌شناسیم تا نقطه شروع همکاری بر اطلاعات واقعی استوار باشد.</p>' ),
        'about_transparency_detail' => $about_text_field( 'متن مودال صداقت و شفافیت', '<p>محدوده خدمات، ظرفیت اجرایی، مسئولیت‌ها و شرایط همکاری باید روشن و قابل توافق باشند. از وعده‌های غیرواقعی یا تعهدهایی فراتر از ظرفیت پروژه پرهیز می‌کنیم.</p>' ),
        'about_quality_detail' => $about_text_field( 'متن مودال کیفیت‌گرایی', '<p>کیفیت باید در تعریف خدمات و انتظارهای طرفین جایگاه مشخصی داشته باشد و امکان بررسی آن فراهم شود. برای همین، معیارهای کیفیت را متناسب با دامنه خدمات و توافق‌های پروژه روشن می‌کنیم.</p>' ),
        'about_responsibility_detail' => $about_text_field( 'متن مودال مسئولیت‌پذیری', '<p>پایبندی به توافق‌ها، توجه به مسئولیت‌های تعریف‌شده و پیگیری مسائل مرتبط با خدمات، پایه همکاری حرفه‌ای است. مسئولیت‌ها را از ابتدا روشن می‌کنیم و در طول همکاری پیگیر آن‌ها می‌مانیم.</p>' ),
        'about_fit_detail' => $about_text_field( 'متن مودال تناسب راهکار', '<p>راهکار مناسب الزاماً پیچیده‌ترین یا پرهزینه‌ترین راهکار نیست؛ باید با نیاز، شرایط محیط و امکانات پروژه تناسب داشته باشد. انتخاب و سازماندهی خدمات را بر همین مبنا انجام می‌دهیم.</p>' ),
        'about_improvement_detail' => $about_text_field( 'متن مودال یادگیری و بهبود', '<p>شناخت بهتر نیازهای بازار، تجربه‌های اجرایی و بازخورد مشتریان، مبنای اصلاح و توسعه خدمات ماست. بهبود را بخشی پیوسته از همکاری می‌دانیم.</p>' ),
        'about_model_detail' => $about_text_field( 'متن مودال مدل اجرایی', '<p>پاک‌پژوه برای ارائه خدمات به ساختاری ثابت و یکسان برای همه پروژه‌ها متکی نیست. ماهیت فعالیت، وسعت پروژه، شرایط محیط، سطح خدمات و الزامات اجرایی هر مجموعه می‌تواند متفاوت باشد.</p><p>ساختار تأمین منابع و سازماندهی فعالیت‌ها بر پایه نیاز واقعی پروژه شکل می‌گیرد و می‌تواند ترکیبی از نیروهای داخلی و همکاران قراردادی باشد. انتخاب منابع با توجه به شرایط پروژه و توافق با کارفرما انجام می‌شود.</p><p>هدف این است که ساختار اجرایی، منابع و تعهدات با محدوده خدمات تعریف‌شده تناسب داشته باشند. انعطاف‌پذیری در کنار شفافیت مسئولیت‌ها و مدیریت مناسب، امکان پاسخ‌گویی به شرایط متنوع سازمان‌ها را فراهم می‌کند.</p>' ),
        'about_vision_detail' => $about_text_field( 'متن مودال چشم‌انداز', '<p>چشم‌انداز پاک‌پژوه، مشارکت در توسعه رویکردی حرفه‌ای‌تر به خدمات پاکیزگی محیط‌های کاری است؛ رویکردی که در آن برنامه‌ریزی، مدیریت، کیفیت و مستندسازی جایگاه مشخصی داشته باشند.</p><p>در مسیر توسعه فعالیت، به دنبال تقویت دانش و توان اجرایی، توسعه ابزارهای مناسب برای مدیریت و گزارش‌دهی و بهبود مستمر راهکارها هستیم.</p><p>فناوری را ابزاری برای ارتقای شفافیت، نظم اطلاعاتی و ارزیابی بهتر می‌دانیم؛ نه جایگزینی برای شناخت محیط و مدیریت صحیح عملیات. هدف بلندمدت، ایجاد مجموعه‌ای قابل اتکا برای سازمان‌هایی است که پاکیزگی را بخشی از مدیریت حرفه‌ای خود می‌دانند.</p>' ),
    );
    $about_cta_fields = array(
        'about_cta_title' => $about_text_field( 'تیتر دعوت به همکاری', 'آغاز یک همکاری حرفه‌ای، با شناخت نیازهای شما' ),
        'about_cta_desc' => $about_text_field( 'توضیحات دعوت به همکاری', 'بازدید اولیه رایگان، با هماهنگی قبلی و در محدوده جغرافیایی تحت پوشش انجام می‌شود.' ),
        'about_cta_btn1' => $about_text_field( 'متن دکمه بازدید', 'درخواست بازدید اولیه رایگان' ),
        'about_cta_btn2' => $about_text_field( 'متن دکمه تماس', 'تماس با پاک‌پژوه' ),
    );
    $pages = array(
        'home' => array(
            'label' => 'صفحه اصلی',
            'icon' => '🏠',
            'sections' => array(
                'hero' => array(
                    'label' => 'هیرو',
                    'fields' => array(
                        'home_hero_title' => array( 'label' => 'تیتر اصلی', 'default' => 'پاک پژوه', 'suggestions' => array( 'پاک پژوه', 'پاک‌سازی حرفه‌ای' ) ),
                        'home_hero_subtitle' => array( 'label' => 'زیرتیتر', 'default' => 'پاکسازی قابل‌اندازه‌گیری', 'suggestions' => array( 'پاکسازی قابل‌اندازه‌گیری', 'نظافت هوشمند و دقیق' ) ),
                        'home_hero_desc' => array( 'label' => 'توضیحات', 'default' => 'طراحی، مدیریت، اجرا و کنترل کیفیت خدمات پاکسازی در محیط‌های کاری', 'suggestions' => array( 'طراحی، مدیریت، اجرا و کنترل کیفیت خدمات پاکسازی', 'ارائه خدمات نظافت صنعتی با استانداردهای بالا' ) ),
                        'home_hero_btn1' => array( 'label' => 'متن دکمه اول', 'default' => 'درخواست بازدید اولیه رایگان', 'suggestions' => array( 'درخواست بازدید اولیه رایگان', 'مشاوره رایگان' ) ),
                        'home_hero_btn2' => array( 'label' => 'متن دکمه دوم', 'default' => 'آشنایی با خدمات', 'suggestions' => array( 'آشنایی با خدمات', 'مشاهده خدمات' ) ),
                    ),
                ),
                'pain' => array(
                    'label' => 'چالش‌ها',
                    'fields' => array(
                        'home_pain_title' => array( 'label' => 'تیتر اصلی', 'default' => 'آیا نظافت محیط شما انجام می‌شود یا واقعاً مدیریت می‌شود؟', 'suggestions' => array( 'آیا نظافت محیط شما انجام می‌شود یا واقعاً مدیریت می‌شود؟', 'چالش‌های مدیریت پاکیزگی در محیط کار' ) ),
                        'home_pain_note' => array( 'label' => 'متن راهنما', 'default' => 'پاکسازی محیط کار نباید به اقدامات پراکنده وابسته باشد؛ باید برنامه، معیار و مسئولیت مشخص داشته باشد.', 'suggestions' => array( 'پاکسازی محیط کار نباید به اقدامات پراکنده وابسته باشد.', 'برنامه، معیار و مسئولیت، سه اصل مدیریت پاکیزگی.' ) ),
                    ),
                ),
                'services' => array(
                    'label' => 'چهار محور خدمات',
                    'fields' => array(
                        'home_services_title' => array( 'label' => 'تیتر اصلی', 'default' => 'چهار محور اصلی خدمات ما', 'suggestions' => array( 'چهار محور اصلی خدمات ما', 'خدمات تخصصی پاک پژوه' ) ),
                        'home_services_subtitle' => array( 'label' => 'زیرتیتر', 'default' => 'طراحی، اجرا، کنترل و مستندسازی خدمات پاکسازی', 'suggestions' => array( 'طراحی، اجرا، کنترل و مستندسازی خدمات پاکسازی', 'از برنامه‌ریزی تا گزارش‌دهی' ) ),
                    ),
                ),
                'process' => array(
                    'label' => 'روش کار',
                    'fields' => array(
                        'home_process_title' => array( 'label' => 'تیتر اصلی', 'default' => 'از شناخت محیط تا بهبود مستمر', 'suggestions' => array( 'از شناخت محیط تا بهبود مستمر', 'فرایند شش‌مرحله‌ای پاک پژوه' ) ),
                    ),
                ),
            ),
        ),
        'services' => array(
            'label' => 'صفحه خدمات',
            'icon' => '🛠️',
            'sections' => array(
                'hero' => array(
                    'label' => 'هیرو',
                    'fields' => array(
                        'services_hero_title' => array( 'label' => 'تیتر اصلی', 'default' => 'خدمات طراحی، مدیریت و اجرای پاکیزگی', 'suggestions' => array( 'خدمات طراحی، مدیریت و اجرای پاکیزگی', 'خدمات تخصصی پاکسازی صنعتی' ) ),
                        'services_hero_desc' => array( 'label' => 'توضیحات', 'default' => 'پاک پژوه با شناخت شرایط هر محیط...', 'suggestions' => array( 'پاک پژوه با شناخت شرایط هر محیط، برنامه‌ای متناسب طراحی می‌کند.', 'ارائه خدمات با بالاترین استانداردهای کیفیت.' ) ),
                        'services_hero_btn1' => array( 'label' => 'متن دکمه اول', 'default' => 'درخواست بازدید اولیه رایگان', 'suggestions' => array( 'درخواست بازدید اولیه رایگان', 'مشاوره رایگان' ) ),
                        'services_hero_btn2' => array( 'label' => 'متن دکمه دوم', 'default' => 'مشاهده خدمات', 'suggestions' => array( 'مشاهده خدمات', 'آشنایی با خدمات' ) ),
                    ),
                ),
                'cards' => array(
                    'label' => 'چهار محور',
                    'fields' => array(
                        'services_cards_title' => array( 'label' => 'تیتر اصلی', 'default' => 'چهار محور یک نظام یکپارچه پاکیزگی', 'suggestions' => array( 'چهار محور یک نظام یکپارچه پاکیزگی', 'چهار ستون خدمات پاک پژوه' ) ),
                    ),
                ),
                'passport' => array(
                    'label' => 'شناسنامه فضا',
                    'fields' => array(
                        'services_passport_title' => array( 'label' => 'تیتر اصلی', 'default' => 'شناسنامه فضا؛ نقطه شروع برنامه‌ریزی دقیق', 'suggestions' => array( 'شناسنامه فضا؛ نقطه شروع برنامه‌ریزی دقیق', 'شناسنامه فضا، کلید برنامه‌ریزی هوشمند' ) ),
                        'services_passport_desc' => array( 'label' => 'توضیحات', 'default' => 'برای تدوین برنامه‌ای متناسب با هر محیط...', 'suggestions' => array( 'برای تدوین برنامه‌ای متناسب با هر محیط، ابتدا باید ویژگی‌های همان فضا شناخته شود.', 'شناسنامه فضا، مبنایی برای طراحی برنامه و ارزیابی خدمات فراهم می‌آورد.' ) ),
                    ),
                ),
                'process' => array(
                    'label' => 'فرایند',
                    'fields' => array(
                        'services_process_title' => array( 'label' => 'تیتر اصلی', 'default' => 'خدمات پاکیزگی چگونه ارائه می‌شوند؟', 'suggestions' => array( 'خدمات پاکیزگی چگونه ارائه می‌شوند؟', 'فرایند ارائه خدمات پاک پژوه' ) ),
                        'services_process_subtitle' => array( 'label' => 'زیرتیتر', 'default' => 'از شناخت محیط تا بهبود مستمر، هر مرحله یک گام به سوی پاکیزگی پایدار', 'suggestions' => array( 'از شناخت محیط تا بهبود مستمر', 'هر مرحله، یک گام به سوی پاکیزگی پایدار' ) ),
                    ),
                ),
                'scope' => array(
                    'label' => 'محدوده همکاری',
                    'fields' => array(
                        'services_scope_title' => array( 'label' => 'تیتر اصلی', 'default' => 'خدمات متناسب با نیاز هر سازمان تعریف می‌شوند', 'suggestions' => array( 'خدمات متناسب با نیاز هر سازمان تعریف می‌شوند', 'خدمات سفارشی برای هر سازمان' ) ),
                        'services_scope_desc' => array( 'label' => 'توضیحات', 'default' => 'دامنه خدمات پاک پژوه بر اساس نوع فعالیت سازمان...', 'suggestions' => array( 'دامنه خدمات بر اساس نوع فعالیت سازمان تعیین می‌شود.', 'هر سازمان، نیازها و برنامه اختصاصی خود را دارد.' ) ),
                    ),
                ),
                'docs' => array(
                    'label' => 'نمونه مستندات',
                    'fields' => array(
                        'services_docs_title' => array( 'label' => 'تیتر اصلی', 'default' => 'آنچه مدیریت می‌شود، باید ثبت و ارزیابی باشد', 'suggestions' => array( 'آنچه مدیریت می‌شود، باید ثبت و ارزیابی باشد', 'مستندسازی، ضامن کیفیت خدمات' ) ),
                        'services_docs_subtitle' => array( 'label' => 'زیرتیتر', 'default' => 'نمونه مستنداتی که در فرایند خدمات پاک پژوه تولید می‌شود.', 'suggestions' => array( 'نمونه مستنداتی که در فرایند خدمات تولید می‌شود.', 'گزارش‌های شفاف از عملکرد ما' ) ),
                    ),
                ),
            ),
        ),
                'about' => array(
            'label' => 'درباره ما',
            'icon' => 'ℹ️',
            'sections' => array(
                'hero' => array(
                    'label' => 'هیرو',
                    'fields' => array(
                        'about_hero_badge' => array( 'label' => 'بج', 'default' => 'درباره پاک‌پژوه', 'suggestions' => array( 'درباره پاک‌پژوه', 'آشنایی با ما' ) ),
                        'about_hero_title' => array( 'label' => 'تیتر اصلی', 'default' => 'پاک‌پژوه؛ نگاهی متفاوت به پاکیزگی محیط‌های کاری', 'suggestions' => array( 'پاک‌پژوه؛ نگاهی متفاوت به پاکیزگی محیط‌های کاری', 'پاکیزگی حرفه‌ای، متناسب با هر محیط' ) ),
                        'about_hero_slogan' => array( 'label' => 'شعار', 'default' => 'پاکیزگی، بخشی از مدیریت حرفه‌ای محیط کار است.', 'suggestions' => array( 'پاکیزگی، بخشی از مدیریت حرفه‌ای محیط کار است.', 'راهکارهایی متناسب با نیاز واقعی هر مجموعه' ) ),
                        'about_hero_desc' => array( 'label' => 'توضیحات', 'default' => 'برای هر محیط کاری، راهکاری متناسب با نوع فعالیت و نیازهای واقعی مجموعه طراحی می‌کنیم.', 'suggestions' => array( 'برای هر محیط کاری، راهکاری متناسب با نیازهای واقعی مجموعه طراحی می‌کنیم.', 'پاکیزگی هدفمند، تجربه‌ای بهتر در محیط کار می‌سازد.' ) ),
                    ),
                ),
                'history' => array(
                    'label' => 'تاریخچه',
                    'fields' => array(
                        'about_history_badge' => array( 'label' => 'بج', 'default' => 'تاریخچه ما', 'suggestions' => array( 'تاریخچه ما', 'داستان ما' ) ),
                        'about_history_title' => array( 'label' => 'تیتر', 'default' => 'از سال ۱۴۰۳ در خدمت صنعت', 'suggestions' => array( 'از سال ۱۴۰۳ در خدمت صنعت', 'سال‌ها تجربه در خدمت شما' ) ),
                        'about_history_desc' => array( 'label' => 'توضیحات', 'default' => 'شرکت آتیه مهرگان انعکاس (شماره ثبت ۶۳۸۲۱۷) با برند پاک‌پژوه، فعالیت خود را در حوزه مدیریت خدمات مهندسی نظافت صنعتی آغاز کرده است.', 'suggestions' => array( 'شرکت آتیه مهرگان انعکاس با برند پاک‌پژوه در حوزه مدیریت خدمات مهندسی نظافت صنعتی فعالیت می‌کند.' ) ),
                    ),
                ),
                'details' => array(
                    'label' => 'جزئیات و مودال‌ها',
                    'fields' => $about_dialog_fields,
                ),
                'cta' => array(
                    'label' => 'دعوت به همکاری',
                    'fields' => $about_cta_fields,
                ),
            ),
        ),
        'contact' => array(
            'label' => 'تماس با ما',
            'icon' => '📞',
            'sections' => array(
                'hero' => array(
                    'label' => 'هیرو',
                    'fields' => array(
                        'contact_hero_badge' => array( 'label' => 'بج', 'default' => 'تماس با ما', 'suggestions' => array( 'تماس با ما', 'ارتباط با ما' ) ),
                        'contact_hero_title' => array( 'label' => 'تیتر اصلی', 'default' => 'با پاک‌پژوه در تماس باشید', 'suggestions' => array( 'با پاک‌پژوه در تماس باشید', 'با ما در ارتباط باشید' ) ),
                        'contact_hero_slogan' => array( 'label' => 'شعار', 'default' => '«درخشش در عمل»', 'suggestions' => array( '«درخشش در عمل»', '«تعهد به کیفیت»' ) ),
                        'contact_hero_desc' => array( 'label' => 'توضیحات', 'default' => 'برای دریافت مشاوره رایگان، بازدید حضوری یا هرگونه سوال، با کارشناسان ما در تماس باشید.', 'suggestions' => array( 'برای دریافت مشاوره رایگان با ما در تماس باشید.', 'کارشناسان ما آماده پاسخگویی به شما هستند.' ) ),
                    ),
                ),
            ),
        ),
        'process' => array(
            'label' => 'مراحل همکاری',
            'icon' => '🔄',
            'sections' => array(
                'hero' => array(
                    'label' => 'هیرو',
                    'fields' => array(
                        'process_hero_badge' => array( 'label' => 'بج', 'default' => 'مراحل همکاری', 'suggestions' => array( 'مراحل همکاری', 'فرایند همکاری' ) ),
                        'process_hero_title' => array( 'label' => 'تیتر اصلی', 'default' => 'مسیر همکاری با پاک‌پژوه', 'suggestions' => array( 'مسیر همکاری با پاک‌پژوه', 'فرایند همکاری با ما' ) ),
                        'process_hero_slogan' => array( 'label' => 'شعار', 'default' => '«درخشش در عمل»', 'suggestions' => array( '«درخشش در عمل»', '«تعهد به کیفیت»' ) ),
                        'process_hero_desc' => array( 'label' => 'توضیحات', 'default' => 'از تماس اولیه تا تحویل نهایی، فرآیند شفاف و حرفه‌ای ما در ۵ مرحله انجام می‌شود.', 'suggestions' => array( 'فرآیند شفاف و حرفه‌ای ما در ۵ مرحله انجام می‌شود.', 'همکاری با ما در ۵ مرحله ساده.' ) ),
                    ),
                ),
            ),
        ),
                'about' => array(
            'label' => 'درباره ما',
            'icon' => 'ℹ️',
            'sections' => array(
                'hero' => array(
                    'label' => 'هیرو',
                    'fields' => array(
                        'about_hero_badge' => array( 'label' => 'بج', 'default' => 'درباره پاک‌پژوه', 'suggestions' => array( 'درباره پاک‌پژوه', 'آشنایی با ما' ) ),
                        'about_hero_title' => array( 'label' => 'تیتر اصلی', 'default' => 'پاک‌پژوه؛ نگاهی متفاوت به پاکیزگی محیط‌های کاری', 'suggestions' => array( 'پاک‌پژوه؛ نگاهی متفاوت به پاکیزگی محیط‌های کاری', 'پاکیزگی حرفه‌ای، متناسب با هر محیط' ) ),
                        'about_hero_slogan' => array( 'label' => 'شعار', 'default' => 'پاکیزگی، بخشی از مدیریت حرفه‌ای محیط کار است.', 'suggestions' => array( 'پاکیزگی، بخشی از مدیریت حرفه‌ای محیط کار است.', 'راهکارهایی متناسب با نیاز واقعی هر مجموعه' ) ),
                        'about_hero_desc' => array( 'label' => 'توضیحات', 'default' => 'برای هر محیط کاری، راهکاری متناسب با نوع فعالیت و نیازهای واقعی مجموعه طراحی می‌کنیم.', 'suggestions' => array( 'برای هر محیط کاری، راهکاری متناسب با نیازهای واقعی مجموعه طراحی می‌کنیم.', 'پاکیزگی هدفمند، تجربه‌ای بهتر در محیط کار می‌سازد.' ) ),
                    ),
                ),
                'history' => array(
                    'label' => 'تاریخچه',
                    'fields' => array(
                        'about_history_badge' => array( 'label' => 'بج', 'default' => 'تاریخچه ما', 'suggestions' => array( 'تاریخچه ما', 'داستان ما' ) ),
                        'about_history_title' => array( 'label' => 'تیتر', 'default' => 'از سال ۱۴۰۳ در خدمت صنعت', 'suggestions' => array( 'از سال ۱۴۰۳ در خدمت صنعت', 'سال‌ها تجربه در خدمت شما' ) ),
                        'about_history_desc' => array( 'label' => 'توضیحات', 'default' => 'شرکت آتیه مهرگان انعکاس (شماره ثبت ۶۳۸۲۱۷) با برند پاک‌پژوه، فعالیت خود را در حوزه مدیریت خدمات مهندسی نظافت صنعتی آغاز کرده است.', 'suggestions' => array( 'شرکت آتیه مهرگان انعکاس با برند پاک‌پژوه در حوزه مدیریت خدمات مهندسی نظافت صنعتی فعالیت می‌کند.' ) ),
                    ),
                ),
                'details' => array(
                    'label' => 'جزئیات و مودال‌ها',
                    'fields' => $about_dialog_fields,
                ),
                'cta' => array(
                    'label' => 'دعوت به همکاری',
                    'fields' => $about_cta_fields,
                ),
            ),
        ),
        'contact' => array(
            'label' => 'تماس با ما',
            'icon' => '📞',
            'sections' => array(
                'hero' => array(
                    'label' => 'هیرو',
                    'fields' => array(
                        'contact_hero_badge' => array( 'label' => 'بج', 'default' => 'تماس با ما', 'suggestions' => array( 'تماس با ما', 'ارتباط با ما' ) ),
                        'contact_hero_title' => array( 'label' => 'تیتر اصلی', 'default' => 'با پاک‌پژوه در تماس باشید', 'suggestions' => array( 'با پاک‌پژوه در تماس باشید', 'با ما در ارتباط باشید' ) ),
                        'contact_hero_slogan' => array( 'label' => 'شعار', 'default' => '«درخشش در عمل»', 'suggestions' => array( '«درخشش در عمل»', '«تعهد به کیفیت»' ) ),
                        'contact_hero_desc' => array( 'label' => 'توضیحات', 'default' => 'برای دریافت مشاوره رایگان، بازدید حضوری یا هرگونه سوال، با کارشناسان ما در تماس باشید.', 'suggestions' => array( 'برای دریافت مشاوره رایگان با ما در تماس باشید.', 'کارشناسان ما آماده پاسخگویی به شما هستند.' ) ),
                    ),
                ),
            ),
        ),
        'footer' => array(
            'label' => 'فوتر',
            'icon' => '📄',
            'sections' => array(
                'general' => array(
                    'label' => 'عمومی',
                    'fields' => array(
                        'footer_desc' => array( 'label' => 'متن معرفی', 'default' => 'پاک پژوه، ارائه‌دهنده خدمات تخصصی نظافت صنعتی با فناوری‌های نوین، شوینده‌های بایو و نظارت مستمر. درخشش در عمل، تعهد ما به کیفیت است.', 'suggestions' => array( 'پاک پژوه، ارائه‌دهنده خدمات تخصصی نظافت صنعتی با فناوری‌های نوین.', 'درخشش در عمل، تعهد ما به کیفیت است.' ) ),
                        'footer_copyright' => array( 'label' => 'متن کپی‌رایت', 'default' => '© ۱۴۰۴ - تمامی حقوق مادی و معنوی محفوظ است.', 'suggestions' => array( '© ۱۴۰۴ - تمامی حقوق مادی و معنوی محفوظ است.', 'تمامی حقوق برای پاک پژوه محفوظ است.' ) ),
                    ),
                ),
            ),
        ),
    );

    // ===== سطح ۱: انتخاب صفحه =====
    $current_page = isset( $_GET['page_slug'] ) ? sanitize_text_field( $_GET['page_slug'] ) : '';
    $current_section = isset( $_GET['section'] ) ? sanitize_text_field( $_GET['section'] ) : '';

    ?>
    <div class="wrap">
        <h1>ویرایش جملات</h1>
        <p style="color:#5A6B7D;margin-bottom:20px;font-size:0.9rem;">در این بخش، تمام متن‌های استاتیک سایت (تیترها، زیرتیترها، توضیحات، متن دکمه‌ها و...) را به تفکیک صفحه و سکشن ویرایش می‌کنید. تغییرات به‌صورت خودکار ذخیره می‌شوند. برای هر فیلد، دکمه «پیشنهاد» وجود دارد که چند گزینه جایگزین نمایش می‌دهد.</p>

        <?php if ( empty( $current_page ) ) : ?>
            <!-- سطح ۱: لیست صفحات -->
            <p>برای ویرایش، ابتدا یک صفحه را انتخاب کنید.</p>
            <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:20px;margin-top:20px;">
                <?php foreach ( $pages as $slug => $page ) : ?>
                    <a href="?page=pakpajoh-texts&page_slug=<?php echo esc_attr( $slug ); ?>" style="display:block;background:#fff;border:1px solid #ccd0d4;border-radius:8px;padding:24px;text-decoration:none;color:#333;transition:all 0.2s;box-shadow:0 1px 3px rgba(0,0,0,0.05);" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)';this.style.transform='translateY(-2px)'" onmouseout="this.style.boxShadow='0 1px 3px rgba(0,0,0,0.05)';this.style.transform='none'">
                        <div style="font-size:2rem;margin-bottom:12px;"><?php echo $page['icon']; ?></div>
                        <h3 style="margin:0 0 8px 0;font-size:1.1rem;"><?php echo esc_html( $page['label'] ); ?></h3>
                        <span style="color:#4CAF50;font-size:0.9rem;">مشاهده سکشن‌ها ←</span>
                    </a>
                <?php endforeach; ?>
            </div>

        <?php elseif ( empty( $current_section ) ) : ?>
            <!-- سطح ۲: لیست سکشن‌های صفحه -->
            <p><a href="?page=pakpajoh-texts">← بازگشت به لیست صفحات</a></p>
            <h2>صفحه: <?php echo esc_html( $pages[ $current_page ]['label'] ); ?></h2>
            <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:16px;margin-top:20px;">
                <?php foreach ( $pages[ $current_page ]['sections'] as $slug => $section ) : ?>
                    <a href="?page=pakpajoh-texts&page_slug=<?php echo esc_attr( $current_page ); ?>&section=<?php echo esc_attr( $slug ); ?>" style="display:block;background:#fff;border:1px solid #ccd0d4;border-radius:8px;padding:20px;text-decoration:none;color:#333;transition:all 0.2s;box-shadow:0 1px 3px rgba(0,0,0,0.05);" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)';this.style.transform='translateY(-2px)'" onmouseout="this.style.boxShadow='0 1px 3px rgba(0,0,0,0.05)';this.style.transform='none'">
                        <h3 style="margin:0 0 6px 0;font-size:1rem;"><?php echo esc_html( $section['label'] ); ?></h3>
                        <span style="color:#888;font-size:0.85rem;"><?php echo count( $section['fields'] ); ?> فیلد</span>
                    </a>
                <?php endforeach; ?>
            </div>

        <?php else : ?>
            <!-- سطح ۳: فیلدهای سکشن -->
            <p>
                <a href="?page=pakpajoh-texts">← بازگشت به لیست صفحات</a> / 
                <a href="?page=pakpajoh-texts&page_slug=<?php echo esc_attr( $current_page ); ?>">← بازگشت به سکشن‌های صفحه</a>
            </p>
            <h2>صفحه: <?php echo esc_html( $pages[ $current_page ]['label'] ); ?> — سکشن: <?php echo esc_html( $pages[ $current_page ]['sections'][ $current_section ]['label'] ); ?></h2>
            <div style="margin-top:20px;">
                <?php
                $fields = $pages[ $current_page ]['sections'][ $current_section ]['fields'];
                foreach ( $fields as $key => $data ) :
                    $current = get_option( 'pakpajoh_text_' . $key, $data['default'] );
                ?>
                    <div class="pakpajoh-text-field" style="background:#fff;border:1px solid #ccd0d4;border-radius:8px;padding:16px;margin-bottom:16px;">
                        <label style="display:block;font-weight:700;margin-bottom:8px;"><?php echo esc_html( $data['label'] ); ?></label>
                        <div style="display:flex;gap:8px;align-items:flex-start;">
                            <textarea class="pakpajoh-text-input" data-key="<?php echo esc_attr( $key ); ?>" rows="3" style="flex:1;padding:8px 12px;border:1px solid #ddd;border-radius:6px;width:100%;"><?php echo esc_attr( $current ); ?></textarea>
                            <button type="button" class="button pakpajoh-suggest-btn" data-suggestions="<?php echo esc_attr( implode( '|', $data['suggestions'] ) ); ?>">پیشنهاد</button>
                        </div>
                        <div class="pakpajoh-suggestions" style="display:none;margin-top:8px;padding:8px;background:#f0f0f1;border-radius:6px;"></div>
                        <span class="pakpajoh-save-status" style="font-size:0.8rem;color:#888;"></span>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
    <script>
    (function() {
        var nonce = '<?php echo wp_create_nonce( "pakpajoh_texts_nonce" ); ?>';
        document.querySelectorAll('.pakpajoh-text-input').forEach(function(input) {
            input.addEventListener('blur', function() {
                var key = this.dataset.key;
                var value = this.value;
                var status = this.closest('.pakpajoh-text-field').querySelector('.pakpajoh-save-status');
                status.textContent = 'در حال ذخیره...';
                var xhr = new XMLHttpRequest();
                xhr.open('POST', window.location.href, true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.onload = function() {
                    status.textContent = 'ذخیره شد ✅';
                    setTimeout(function() { status.textContent = ''; }, 2000);
                };
                xhr.send('pakpajoh_text_key=' + encodeURIComponent(key) + '&pakpajoh_text_value=' + encodeURIComponent(value) + '&pakpajoh_text_nonce=' + nonce);
            });
        });
        document.querySelectorAll('.pakpajoh-suggest-btn').forEach(function(btn) {
            btn.addEventListener('click', function() {
                var container = this.closest('.pakpajoh-text-field').querySelector('.pakpajoh-suggestions');
                var suggestions = this.dataset.suggestions.split('|');
                container.innerHTML = suggestions.map(function(s) {
                    return '<button type="button" class="button pakpajoh-use-suggestion" style="margin:4px;">' + s + '</button>';
                }).join('');
                container.style.display = container.style.display === 'none' ? 'block' : 'none';
                container.querySelectorAll('.pakpajoh-use-suggestion').forEach(function(sbtn) {
                    sbtn.addEventListener('click', function() {
                        var input = container.closest('.pakpajoh-text-field').querySelector('.pakpajoh-text-input');
                        input.value = this.textContent;
                        input.dispatchEvent(new Event('blur'));
                        container.style.display = 'none';
                    });
                });
            });
        });
    })();
    </script>
    <?php
}