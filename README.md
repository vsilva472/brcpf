# CPF validation rule for Laravel 9 and above

[🇧🇷 Leia em português](README.pt_BR.md)

## Description

A simple Laravel 9+ validation rule for validating Brazilian CPF numbers — whether formatted (`999.999.999-99`) or unformatted.

## Requirements

- [Laravel 9](https://laravel.com/) or above

> If you need to validate CPFs in earlier versions of Laravel, the [laravel-cpf](https://github.com/vsilva472/laravel-cpf) package might be helpful.

## Installation

```bash
composer require vsilva472/brcpf
````

## Customizing Error Messages

To customize the validation message, you can publish the language files to `lang/vendor/brcpf`:

```bash
php artisan vendor:publish --tag=brcpf
```

## Usage

### Inline Validation

```php
use Vsilva472\BrCpf\Rules\Cpf;

$this->validate($request, [
    'cpf' => ['required', new Cpf],
]);
```

### Using Form Request

```php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Vsilva472\BrCpf\Rules\Cpf;

class YourFormRequest extends FormRequest
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

## License

MIT