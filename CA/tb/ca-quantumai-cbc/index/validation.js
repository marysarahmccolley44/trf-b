const forms = document.querySelectorAll('.leadform');
const errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];
const languagesByCountry = {
    'AL': 'sq', 'AD': 'ca', 'AM': 'hy', 'AT': 'de', 'AZ': 'az', 'BY': 'be', 'BE': 'nl', 'BA': 'bs', 'BG': 'bg',
    'HR': 'hr', 'CY': 'el', 'CZ': 'cs', 'DK': 'da', 'EE': 'et', 'FI': 'fi', 'FR': 'fr', 'GE': 'ka', 'DE': 'de',
    'GR': 'el', 'HU': 'hu', 'IS': 'is', 'IE': 'ga', 'IT': 'it', 'KZ': 'kk', 'LV': 'lv', 'LI': 'de', 'LT': 'lt',
    'LU': 'lb', 'MT': 'mt', 'MD': 'ro', 'MC': 'fr', 'ME': 'sr', 'NL': 'nl', 'MK': 'mk', 'NO': 'no', 'PL': 'pl',
    'PT': 'pt', 'RO': 'ro', 'SM': 'it', 'RS': 'sr', 'SK': 'sk', 'SI': 'sl', 'ES': 'es', 'SE': 'sv', 'CH': 'de',
    'TR': 'tr', 'GB': 'en', 'VA': 'it', 'CA': 'en', 'AU': 'en'
};

function getLanguageByGeo(geo) {
    return languagesByCountry[geo] || 'pl'; // default value
}

async function getCountryByIP() {
    try {
        const response = await fetch('https://ipapi.co/json/');
        const data = await response.json();
        return data.country;
    } catch (error) {
        console.error('Error while retrieving country data:', error);
        return 'pl'; // default value
    }
}

function isRegisteredEmail(form) {
    const email = form.querySelector('input[name="email"]').value.trim();
    const registeredEmails = JSON.parse(form.querySelector('input[name="is_dublicate_email"]').value || '[]');

    if (registeredEmails.includes(email)) {
        showError(form, "Email already registered");
        return true;
    }
    return false;
}

function isValidEmail(email) {
    const emailRegex = /^[^\s@]*[a-zA-Z0-9]@([a-zA-Z0-9-]+\.)+[a-zA-Z]{2,}$/;
    if (!emailRegex.test(email)) return false;
    if (email.includes('..')) return false;
    return true;
}

function isOnlyCountries(form, onlyCountries, itiCountry) {
    if (onlyCountries.length > 0 && !onlyCountries.includes(itiCountry)) {
        showError(form, "This country is not supported");
        return true;
    }
    return false;
}

function showError(form, msg) {
    const phone = form.querySelector('input[name="phone"]');
    const errorMsg = form.querySelector('.error-msg');
    phone.classList.add("error");
    errorMsg.innerHTML = msg;
    errorMsg.classList.remove("hide");
}

function reset(form) {
    const phone = form.querySelector('input[name="phone"]');
    const errorMsg = form.querySelector('.error-msg');
    phone.classList.remove("error");
    errorMsg.innerHTML = "";
    errorMsg.classList.add("hide");
}

function setupFormValidation(form) {
    const phone = form.querySelector('input[name="phone"]');
    const country = form.querySelector('input[name="country"]');
    const language = form.querySelector('input[name="language"]');
    const only_countries = form.querySelector('input[name="only_countries"]');
    const only_countries_value = JSON.parse(only_countries.value || '[]');
    const phone_country = form.querySelector('input[name="phone_country"]');
    const preloader = form.querySelector('.form-preloader');

    const iti = .intlTelInput(phone, {
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/js/utils.js",
        onlyCountries: only_countries_value,
        initialCountry: phone_country.value,
        strictMode: true,
        geoIpLookup: function (success, failure) {
            fetch("https://ipapi.co/json")
                .then(res => res.json())
                .then(data => success(data.country_code))
                .catch(() => failure());
        }
    });

    phone.addEventListener('blur', function () {
        reset(form);
        if (!phone.value.trim()) {
            showError(form, "Required");
        } else if (!iti.isValidNumber()) {
            const errorCode = iti.getValidationError();
            const msg = errorMap[errorCode] || "Invalid number";
            showError(form, msg);
        }
    });

    form.addEventListener('submit', async function (e) {
        e.preventDefault();

        reset(form);

        if (!iti.isValidNumber()) {
            return;
        }

        const emailInput = form.querySelector('input[name="email"]');
        if (!isValidEmail(emailInput.value.trim())) {
            showError(form, "Invalid email format");
            return;
        }

        if (isRegisteredEmail(form)) {
            return;
        }

        if (isOnlyCountries(form, only_countries_value, iti.getSelectedCountryData().iso2)) {
            return;
        }

        preloader.classList.remove('hidden');
        phone.value = iti.getNumber();

        switch (country.value) {
            case 'phone':
                country.value = iti.getSelectedCountryData().iso2.toUpperCase();
                break;
            case 'ip':
                try {
                    country.value = await getCountryByIP();
                } catch (error) {
                    console.error('Error fetching country by IP:', error);
                    country.value = 'CZ'; // default value
                }
                break;
            case '':
                country.value = 'CZ'; // default value
                break;
        }

        if (language.value === 'auto') {
            language.value = getLanguageByGeo(country.value);
        }

        form.submit();
    });
}

forms.forEach(form => setupFormValidation(form));
