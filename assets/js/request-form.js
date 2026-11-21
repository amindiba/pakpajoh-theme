(function () {
    function initializeRequestForm() {
        var form = document.getElementById('pp-request-form');
        if (!form) {
            return;
        }

        var summary = document.getElementById('pp-request-validation-summary');
        var digitMap = {
            '۰': '0', '۱': '1', '۲': '2', '۳': '3', '۴': '4',
            '۵': '5', '۶': '6', '۷': '7', '۸': '8', '۹': '9',
            '٠': '0', '١': '1', '٢': '2', '٣': '3', '٤': '4',
            '٥': '5', '٦': '6', '٧': '7', '٨': '8', '٩': '9'
        };

        function normalizeDigits(value) {
            return value.replace(/[۰-۹٠-٩]/g, function (digit) {
                return digitMap[digit];
            });
        }

        function normalizePhone(value) {
            var phone = normalizeDigits(value).replace(/[\s().-]/g, '');

            if (phone.indexOf('+98') === 0) {
                phone = '0' + phone.substring(3);
            } else if (phone.indexOf('0098') === 0) {
                phone = '0' + phone.substring(4);
            } else if (phone.indexOf('98') === 0) {
                phone = '0' + phone.substring(2);
            }

            return phone;
        }

        function isValidNationalId(value) {
            var code = normalizeDigits(value).replace(/[\s-]/g, '');
            if (!/^\d{10}$/.test(code) || /^(\d)\1{9}$/.test(code)) {
                return false;
            }

            var sum = 0;
            for (var index = 0; index < 9; index += 1) {
                sum += Number(code.charAt(index)) * (10 - index);
            }

            var remainder = sum % 11;
            var checksum = remainder < 2 ? remainder : 11 - remainder;
            return checksum === Number(code.charAt(9));
        }

        function getErrorElement(field) {
            return field.parentElement.querySelector('.pp-request-field-error');
        }

        function validateField(field) {
            var value = field.value.trim();
            var rule = field.getAttribute('data-validation');
            var error = '';

            if (field.required && !value) {
                error = 'تکمیل این فیلد الزامی است.';
            } else if (value && rule === 'phone' && !/^0\d{10}$/.test(normalizePhone(value))) {
                error = 'شمارهٔ تماس را با ۱۱ رقم و با صفر وارد کنید.';
            } else if (value && rule === 'national-id' && !isValidNationalId(value)) {
                error = 'کد ملی ۱۰ رقمی را بررسی کنید.';
            } else if (value && rule === 'area') {
                var area = normalizeDigits(value).replace(/[٬,]/g, '');
                if (!/^\d+(?:\.\d+)?$/.test(area) || Number(area) < 1) {
                    error = 'مساحت را به‌صورت عددی بزرگ‌تر از صفر وارد کنید.';
                }
            }

            var errorElement = getErrorElement(field);
            if (error) {
                field.setAttribute('aria-invalid', 'true');
                if (errorElement) {
                    errorElement.textContent = error;
                }
                return false;
            }

            field.removeAttribute('aria-invalid');
            if (errorElement) {
                errorElement.textContent = '';
            }
            return true;
        }

        var fields = Array.prototype.slice.call(form.querySelectorAll('[data-validation]'));

        form.addEventListener('blur', function (event) {
            if (event.target.matches('[data-validation]')) {
                validateField(event.target);
            }
        }, true);

        form.addEventListener('input', function (event) {
            if (event.target.matches('[data-validation]') && event.target.hasAttribute('aria-invalid')) {
                validateField(event.target);
            }
        });

        form.addEventListener('change', function (event) {
            if (event.target.matches('[data-validation]')) {
                validateField(event.target);
            }
        });

        form.addEventListener('submit', function (event) {
            var invalidFields = fields.filter(function (field) {
                return !validateField(field);
            });

            if (invalidFields.length) {
                event.preventDefault();
                summary.textContent = 'چند مورد نیاز به اصلاح دارد؛ پیام زیر فیلدها را بررسی کنید.';
                summary.hidden = false;
                summary.focus();
                invalidFields[0].focus();
                return;
            }

            summary.hidden = true;
            var submitButton = form.querySelector('button[type="submit"]');
            if (submitButton) {
                submitButton.disabled = true;
                submitButton.setAttribute('aria-busy', 'true');
            }
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initializeRequestForm);
    } else {
        initializeRequestForm();
    }
}());
