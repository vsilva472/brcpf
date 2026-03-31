# 🇧🇷 Laravel CPF Validation Rule
Laravel CPF validation rule for validating Brazilian CPF numbers (formatted or unformatted).

[![Latest Version](https://img.shields.io/packagist/v/vsilva472/brcpf.svg)]()
[![Downloads](https://img.shields.io/packagist/dt/vsilva472/brcpf.svg)]()
[![License](https://img.shields.io/github/license/vsilva472/brcpf)]()

[🇧🇷 Leia em português](README.pt_BR.md)

---

## ✨ Features

* ✅ Supports formatted and unformatted CPF
* ✅ Laravel 9 → 13+ compatible
* ✅ Zero configuration (auto-discovery)
* ✅ Lightweight and dependency-free
* ✅ Translatable validation messages

---

## 📦 Installation

```bash
composer require vsilva472/brcpf
```

---

## 🚀 Usage

### Inline Validation

```php
use Vsilva472\BrCpf\Rules\Cpf;

$request->validate([
    'cpf' => ['required', new Cpf()],
]);
```

---

### Form Request

```php
use Vsilva472\BrCpf\Rules\Cpf;

public function rules()
{
    return [
        'cpf' => ['required', new Cpf()],
    ];
}
```

---

## 🌍 Custom Error Messages

Publish the language files:

```bash
php artisan vendor:publish --tag=brcpf
```

Then edit:

```
lang/vendor/brcpf/validation.php
```

---

## 🔧 Requirements

* PHP >= 8.0
* Laravel 9 or higher

> Need support for older Laravel versions?
> Check: https://github.com/vsilva472/laravel-cpf

---

## 📄 License

MIT
