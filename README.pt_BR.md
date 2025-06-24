# Validação de CPF compatível com Laravel 9 ou superior

[🇺🇸 Read in English](README.md)

## Descrição

Este pacote adiciona uma regra de validação ao Laravel 9+ para verificar números de CPF (Cadastro de Pessoas Físicas), com ou sem máscara (`999.999.999-99`), de forma simples e eficiente.


## Requisitos 
- [Laravel 9](https://laravel.com/) ou superior

> Se você precisa validar CPFs em versões anteriores do Laravel, talvez o pacote [laravel-cpf](https://github.com/vsilva472/laravel-cpf) possa te ajudar.

## Instalação

Via Composer:

```bash
composer require vsilva472/brcpf
```

## Personalizando a mensagem de erro

Você pode publicar os arquivos de tradução para personalizar a mensagem de validação. Eles serão disponibilizados em `lang/vendor/brcpf`:

```bash
php artisan vendor:publish --tag=brcpf
```

## Como usar

### Validação direta

```php
use Vsilva472\BrCpf\Rules\Cpf;

$this->validate($request, [
    'cpf' => ['required', new Cpf],
]);
```

### Validação com Form Request

```php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Vsilva472\BrCpf\Rules\Cpf;

class SeuFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'cpf' => ['required', new Cpf],
        ];
    }
}
```

## Licença

Este projeto está licenciado sob a [Licença MIT](LICENSE).