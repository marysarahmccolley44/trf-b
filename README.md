# TRF-G Project

## Опис проєкту

Цей репозиторій містить колекцію веб-проєктів для канадського ринку, організованих у папці `CA/`.

## Структура проєкту

```
CA/
├── ca-carney-cbc-magnumator-goverment/     # Еталонний проєкт
└── tb/                                     # Група проєктів TB
    ├── ca-mark-carney-new-cbc-magnumator-video/
    ├── ca-mark-carney-new-cbc-magnumator/
    ├── ca-quantum-ai-cbc-2/
    └── ca-quantumai-cbc/
```

## Технічні деталі

- **Мова:** PHP, JavaScript, HTML, CSS
- **Призначення:** Landing pages з формами збору даних
- **Регіон:** Канада (CA)
- **Інтеграції:** CRM API, Telegram bots, Facebook Pixel, Google Ads

## Основні компоненти

Кожен проєкт містить:
- `index.php` - головна сторінка
- `api.php` - обробка форм та інтеграція з CRM
- `thanks.php` - сторінка подяки з трекінг пікселями
- Статичні ресурси (CSS, JS, зображення)

## Ключові функції

- **CRM інтеграція** - автоматична передача лідів до `slm.api.vibero.tech`
- **Telegram сповіщення** - миттєві уведомлення про нові заявки
- **Трекінг пікселі** - Facebook Pixel та Google Ads конверсії
- **Broker редиректи** - автоматичний розподіл трафіку
- **Логування** - детальні логи для відлагодження (3 файли логів)
- **Конверсійний трекінг** - інтеграція з `investhorizon.biz`

## Критичні оновлення (Січень 2025)

### 🔄 **МІГРАЦІЯ CRM API (ЗАВЕРШЕНО)**
**Дата:** Січень 2025

**Що змінено:**
- **Новий API endpoint:** `https://slm.api.vibero.tech/clients/lead`
- **Нова автентифікація:** API ключ `x-api-key: Og00Z1h-skZfY4IY-GMxzH73NjX6AwQZ`
- **Новий формат даних:** JSON замість form-data
- **Розширена структура даних:** firstName/lastName, UTM параметри, sub_id поля
- **Оптимізований код:** використання змінних замість констант у масиві даних
- **Покращене логування:** 3 файли логів (log_submit_data2.txt, log_submit_data.txt, log_submit_data_leads.txt)
- **Конверсійний трекінг:** Інтеграція з investhorizon.biz

**Оновлені проєкти:**
- ✅ `ca-carney-cbc-magnumator-goverment` (еталонний)
- ✅ `ca-mark-carney-new-cbc-magnumator`
- ✅ `ca-mark-carney-new-cbc-magnumator-video`
- ✅ `ca-quantum-ai-cbc-2`
- ✅ `ca-quantumai-cbc`

## Попередні оновлення (Грудень 2024)

### ✅ **ПРОБЛЕМА ПІКСЕЛІВ ВИРІШЕНА (100% спрацювання)**
- Всі користувачі спочатку бачать `thanks.php` (пікселі спрацьовують)
- Broker редирект тепер затриманий на 2 секунди
- Повна сумісність з існуючою логікою

### ⚡ **КРИТИЧНА ПРОБЛЕМА ПРОДУКТИВНОСТІ ВИРІШЕНА**
**Що було:** Затримки 10-70+ секунд після заповнення форм

**Основні причини затримки:**
- CRM API таймаути: до 15 секунд
- Telegram запити без таймаутів: до 60+ секунд
- JavaScript помилки: неправильний порядок завантаження jQuery

**Що виправлено у ВСІХ TRFG проєктах:**
- **Агресивні cURL таймаути:** CRM API 3с, Telegram 1с (було 10с+)
- **JavaScript виправлення:** Правильний порядок завантаження jQuery
- **Покращені Telegram повідомлення:** HTML форматування + емодзі
- **Детальне логування:** `performance_log.txt` для діагностики
- **Результат:** Редирект за 1-2 секунди (покращення в 10-20 разів)

**Оптимізовані проєкти:**
- ✅ `ca-carney-cbc-magnumator-goverment` (еталонний)
- ✅ `ca-mark-carney-new-cbc-magnumator`
- ✅ `ca-mark-carney-new-cbc-magnumator-video`
- ✅ `ca-quantum-ai-cbc-2`
- ✅ `ca-quantumai-cbc`

### 🛡️ **БЕЗПЕКА ПОКРАЩЕНА**
- Валідація redirect URLs з `filter_var(FILTER_VALIDATE_URL)`
- Захист від JavaScript injection та open redirect атак
- Покращене логування з thread-safe записом

## Примітки

Проєкти призначені для комерційного використання в рекламних кампаніях з оптимізованим трекінгом конверсій.