<?php

namespace Vsilva472\BrCpf\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Vsilva472\phpCPF\CPF as CpfValidator;
    
class Cpf implements ValidationRule
{
    protected CpfValidator $validator;

    public function __construct(?CpfValidator $validator = null)
    {
        $this->validator = $validator ?? new CpfValidator();
    }

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (! $this->validator->validate($value)) {
            $fail('brcpf::validation.cpf')->translate();
        }
    }
}