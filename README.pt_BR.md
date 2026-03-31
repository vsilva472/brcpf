# 🇧🇷 Validação de CPF para Laravel
Valide CPFs brasileiros no Laravel com ou sem máscara.

[![Versão](https://img.shields.io/packagist/v/vsilva472/brcpf.svg)]()
[![Downloads](https://img.shields.io/packagist/dt/vsilva472/brcpf.svg)]()
[![Licença](https://img.shields.io/github/license/vsilva472/brcpf)]()

[🇺🇸 Read in English](README.md)

---


## ✨ Funcionalidades

* ✅ Aceita CPF com ou sem máscara
* ✅ Compatível com Laravel 9 → 13+
* ✅ Zero configuração (auto-discovery)
* ✅ Leve e sem dependências desnecessárias
* ✅ Mensagens de validação traduzíveis

---

## 📦 Instalação

```bash
composer require vsilva472/brcpf
```

---

## 🚀 Uso

### Validação direta

```php
use Vsilva472\BrCpf\Rules\Cpf;

$request->validate([
    'cpf' => ['required', new Cpf()],
]);
```

---

### Usando Form Request

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

## 🌍 Personalizando mensagens

Publique os arquivos de tradução:

```bash
php artisan vendor:publish --tag=brcpf
```

Depois edite:

```
lang/vendor/brcpf/validation.php
```

---

## 🔧 Requisitos

* PHP >= 8.0
* Laravel 9 ou superior

> Precisa de suporte para versões mais antigas do Laravel?
> Veja: https://github.com/vsilva472/laravel-cpf

---

## 📄 Licença

MIT
