# 🚀 Easy Notify for Laravel

Send **Mail**, **Broadcast**, and **Database** notifications using **one simple, fluent builder**.
No more repetitive notification classes for every channel.

> **Write once. Send everywhere.**

---

## ✨ Features

* ✅ Single fluent API for all notification channels
* 📧 Mail notifications
* 📡 Broadcast notifications (Pusher / Ably / Laravel WebSockets)
* 🗄️ Database notifications
* ⚡ Queue support out of the box
* 🧼 Clean, readable syntax
* 🧩 Laravel 10,11 & 12 compatible

---

## 📦 Installation

Install the package via Composer:

```bash
composer require sheesh/easy-notify
```

---

## 🗄️ Database Notifications Setup

If you plan to use the **database** channel, run:

```bash
php artisan notifications:table
php artisan migrate
```

---

## 🚀 Basic Usage

```php
use EasyNotify\Facades\Notify;

Notify::to($user)
    ->title('Order Confirmed')
    ->message('Your order #123 has been placed')
    ->mail()
    ->broadcast()
    ->database()
    ->send();
```

✔️ One notification
✔️ Multiple channels
✔️ Zero boilerplate

---

## 📬 Supported Channels

| Channel   | Supported |
| --------- | --------- |
| Mail      | ✅ Yes     |
| Broadcast | ✅ Yes     |
| Database  | ✅ Yes     |

---

## ⚡ Queue Support

Easy Notify automatically queues notifications **if your queue is enabled**.

No extra configuration required.

---

## 📋 Requirements

* PHP **8.1+**
* Laravel **10.x / 11.x / 12.x**
* Queue driver (optional but recommended)

---

## 🧠 Why Easy Notify?

Laravel notifications are powerful, but creating multiple notification classes for simple use cases can feel heavy.

**Easy Notify** solves this by giving you:

* One fluent builder
* Faster development
* Cleaner codebase

Perfect for:

* SaaS apps
* Admin panels
* APIs
* Rapid MVP development

---

## 🛠️ Roadmap (Planned)

* SMS support
* WhatsApp channel
* Custom channel extensions
* Notification templates

---

## 🤝 Contributing

Contributions, issues, and feature requests are welcome!
Feel free to submit a pull request or open an issue.

---

## 📄 License

MIT License © Sheesh Khan
